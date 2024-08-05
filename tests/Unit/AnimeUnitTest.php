<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Functions\Anime\AnimeBase;
use App\Models\Anime;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AnimeUnitTest extends TestCase
{
    // use RefreshDatabase;
    // use DatabaseMigrations;

    protected $seed = true;

    protected static $anime;
    protected static $user;

    public function setUp(): void{
        parent::setUp();

        self::$anime = Anime::factory()->create();
        self::$user = User::first();
    }

    public function test_update_watched(){
        // dump(static::$anime, static::$user, Anime::first());
        $do = (new AnimeBase)->updateCountWatched(self::$anime->id, static::$user->id, 'increment');
        $do2 = (new AnimeBase)->updateCountWatched(self::$anime->id, static::$user->id, 'decrement');

        $this->assertTrue($do['status']);
        $this->assertTrue($do2['status']);
        dump(self::$anime->id);
    }

    public function test_update_bookmark(){
        $do = (new AnimeBase)->updateCountBookmark(self::$anime->id, static::$user->id, 'increment');
        $do2 = (new AnimeBase)->updateCountBookmark(self::$anime->id, static::$user->id, 'decrement');

        $this->assertTrue($do['status']);
        $this->assertTrue($do2['status']);
        dump(self::$anime->id);
    }

    public function test_update_star(){
        $do = (new AnimeBase)->updateCountStar(self::$anime->id, static::$user->id,['star'=> 4], 'increment');
        $do2 = (new AnimeBase)->updateCountStar(self::$anime->id, static::$user->id, null, 'decrement');

        $this->assertTrue($do['status']);
        $this->assertTrue($do2['status']);
        dump(self::$anime->id);
    }

    public function test_update_count_comment(){
        $do = (new AnimeBase)->updateCountComment(static::$anime->id);

        $this->assertTrue($do['status']);
        dump(self::$anime->id);
    }
}
