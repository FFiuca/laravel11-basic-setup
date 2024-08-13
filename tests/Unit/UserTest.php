<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Master\Status;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use App\Models\Anime;
use App\Functions\Anime\AnimeBase;
use Mockery;
use Mockery\MockInterface;
use Illuminate\Support\Facades\App;
// use Illuminate\Foundation\Testing\DatabaseTruncation;

class UserTest extends TestCase
{
    use RefreshDatabase; // https://laravel.com/docs/11.x/database-testing#resetting-the-database-after-each-test. behavoir refreshdatabase only rollback transactions in each test
    // use DatabaseTransactions;

    protected $seed = true; // indicate run seed beforen test run

    /**
     * A basic unit test example.
    */

    public function setUp(): void{
        parent::setUp();

        $anime = Anime::factory()->count(3)->create();
    }


    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_db(): void{
        $count = Post::all()->count();

        $this->assertEquals(0, $count);
    }

    public function test_status_has_data(): void{
        $db = Status::all();
        // dump(DB::getName());

        $this->assertEquals(count($db), 3);

        $anime = Anime::first()->status->exists();
        $this->assertTrue($anime);
    }

    public function test_mock():void{
        $cls = AnimeBase::class;
        $mock = Mockery::mock($cls, function(MockInterface $mc){
            // dump('test');
            $mc->shouldReceive('detail')->with(100)->andReturn(['test_mock'=>'success']);
            $mc->shouldReceive('mockTest')->with(99)->andReturn(['test_mock'=>'success99']);
        });
        App::instance($cls, $mock); // binding mock into $cls
        $this->instance($cls, $mock);

        $d = $this->app->make($cls)->detail(100); // call must use $this->app or instance that already binded
        $dd = App::make($cls)->mockTest(99);

        $this->assertTrue(isset($d['test_mock']) and $d['test_mock']=='success');
    }

}
