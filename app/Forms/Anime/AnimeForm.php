<?php
namespace App\Forms\Anime;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AnimeForm{

    protected static $rule = [
        'status_id' => ['required'],
        'name' => ['required', ],
        'description' => ['nullable', 'numeric'],
        // 'count_episode' => ['nullable','int'],
        // 'count_bookmark' => ['nullable','int'],
        // 'count_star' => ['nullable', 'int']
    ];

    function add($data){
        return Validator::make($data, static::$rule);
    }

    function update($data){
        return Validator::make($data, ['id'=> ['required'], ...static::$rule]);
    }

    function detail($data){
        return Validator::make($data, [
            'id' => 'required'
        ]);
    }

    function delete($data){
        return Validator::make($data, [
            'id' => 'required'
        ]);
    }

    function get($data){
        return Validator::make($data, [
            'param' => ['nullable', 'array']
        ]);
    }
}

?>
