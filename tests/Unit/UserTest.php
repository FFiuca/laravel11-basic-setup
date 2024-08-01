<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Master\Status;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use App\Models\Anime;
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

}
