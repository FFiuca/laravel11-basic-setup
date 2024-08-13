<?php
namespace App\Functions\Anime;

use App\Events\NewAnimeAiringEvent;
use App\Functions\CRUDAbs;
use Illuminate\Support\Str;
use App\Models\Anime;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Mentioned;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redis;

class AnimeBase extends CRUDAbs{

    static $table;
    function __construct(){
        static::$table = (new Anime)->getTable();
    }

    public function add(array $data): array|int|string
    {
        $data = collect($data)->only([
            'status_id',
            'name',
            'description'
        ])->toArray();

        $data['slug'] = Str::slug($data['name']);

        DB::beginTransaction();

        $insert = Anime::create($data);

        DB::commit();
        return ['status'=> $insert? true: false, 'data'=> $insert];
    }

    public function update(int $id, array $data): array|int|string
    {
        $anime = Anime::find($id);
        $data = collect($data)->only([
            'status_id',
            'name',
            'description'
        ])->toArray();

        $data['slug'] = Str::slug($data['name']);

        DB::beginTransaction();

        // $update = Anime::where('id', $id)->update($data);
        $anime->status_id = $data['status_id'];
        $anime->name = $data['name'];
        $anime->description = $data['description'];
        $anime->slug = $data['slug'];

        $anime->save();

        DB::commit();
        return ['status'=> true, 'data'=> $anime];
    }

    public function delete(int $id): array|int|string
    {
        $anime = Anime::find($id);

        DB::beginTransaction();

        // $delete = Anime::where('id', $id)->delete();
        $anime->delete();

        DB::commit();

        return ['status'=> true];
    }

    public function detail(int $id): array|int|string
    {
        $data = Anime::where('id', $id)->with([
            'episode' => fn($q)=> $q->with('language'),
            'status',
            'author',
            'tag',
            'language',
            'category'
        ])->first();

        return ['status'=> true, 'data'=> $data];
    }

    public function get(array $param): array|int|string
    {
        return [];
    }

    public function updateCountStar($id, $userId, $data=null, $action='increment'){
        DB::beginTransaction();

        $operator = $action=='increment'? '+':'-';

        // to prevent race condition
        $data = [
            'time_starred' => date('Y-m-d H:i:s'),
            'star' => $data['star']?? 0
        ];
        if($action=='decrement'){
            $data['time_starred'] = null;
            $data['star'] = null;
        }

        Mentioned::upsert( [
            'anime_id' => $id,
            'user_id'=> $userId,
            ...$data
        ], ['anime_id', 'user_id']);


        $data = Mentioned::select(DB::raw('SUM(star) as sum, COUNT(*) as count'))->where('anime_id', $id)->whereNotNull('time_starred')->first();
        Anime::where('id', $id)->update([
            'count_star' => $data->count,
            'avg_star' => $data->count==0? 0: $data->sum/$data->count
        ]);


        DB::commit();

        return ['status'=> true,'data'=> null];
    }

    public function updateCountBookmark($id, $userId, $action='increment'){
        DB::beginTransaction();

        $operator = $action=='increment'? '+':'-';
        DB::select(
            sprintf('UPDATE %s SET count_bookmark=(IF(count_bookmark is null, 0, count_bookmark) %s 1) WHERE id=?', static::$table, $operator),
            [$id]
        );

        $data = [
            'time_bookmarked' => date('Y-m-d H:i:s')
        ];
        if($action=='decrement')
            $data['time_bookmarked'] = null;

        Mentioned::upsert( [
            'anime_id' => $id,
            'user_id'=> $userId,
            ...$data
        ], ['anime_id', 'user_id']);

        DB::commit();

        return ['status'=> true,'data'=> null];
    }

    public function updateCountComment($id){
        $anime = Anime::find($id);

        DB::beginTransaction();

        $count = Comment::whereHas('episode', fn($q) => $q->where('anime_id', $id))->count();
        // $update = Anime::where('id', $id)->update(['count_comment'=> $count]); // not trigger observer due typical of mass update

        $anime->count_comment = $count;
        $anime->save(); // trigger observer

        DB::commit();
        return ['status'=> true,'data'=> $anime];
    }

    public function updateCountWatched($id, $userId, $action='increment'){
        DB::beginTransaction();

        $operator = $action=='increment'? '+':'-';
        DB::select(
            sprintf('UPDATE %s SET count_watched=(IF(count_watched is null, 0, count_watched) %s 1) WHERE id=?', static::$table, $operator),
            [$id]
        );

        $data = [
            'time_watched' => date('Y-m-d H:i:s')
        ];
        if($action=='decrement')
            $data['time_watched'] = null;

        Mentioned::upsert( [
            'anime_id' => $id,
            'user_id'=> $userId,
            ...$data
        ], ['anime_id', 'user_id']);

        // dump(Mentioned::first());

        DB::commit();

        return ['status'=> true,'data'=> null];
    }

    public function animeAiring($id){
        $anime = Anime::find($id);

        DB::beginTransaction();

        $anime->status_id = 2;
        $anime->save();

        DB::commit();
        Redis::set('take', 'test');
        event(new NewAnimeAiringEvent($anime));
        return ['status'=> true];
    }

    public function mockTest($val){
        return [];
    }


}




