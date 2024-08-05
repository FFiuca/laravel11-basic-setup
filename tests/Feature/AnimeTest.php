<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\Anime;

class AnimeTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;

    static $anime;
    function setUp(): void{
        parent::setUp();

        static::$anime = Anime::factory()->create();
        // dump(static::$anime);
        // dump(DB::connection()->getName(), env('APP_ENV'));
    }

    /**
     * A basic feature test example.
     */
    public function test_show(): void
    {
        $url = route('anime.show', [static::$anime->id]);

        $response = $this->get($url);

        $response->assertStatus(200);
        $response->assertJsonPath('data.id', static::$anime->id);
        // dump($response->json());
    }

    public function test_store(): void{
        $data = [
            'data' => [
                'status_id' => 1,
                'name' => fake()->name(),
                'description' => fake()->sentences(rand(4,8), true)
            ]
        ];

        $url = route('anime.store');
        $response = $this->post($url, $data);

        $response->assertStatus(200);
        $this->assertTrue($response->json('data.id')!=null);
        // dump($response->json());
    }


    public function test_update(): void{
        $data = [
            'data' => [
                'status_id' => 1,
                'name' => fake()->name(),
                'description' => fake()->sentences(rand(4,8), true)
            ]
        ];

        $url = route('anime.update', [static::$anime->id]);
        $response = $this->put($url, $data);
        // dd($response->json());
        // dump($response->json());
        $response->assertStatus(200);
    }

    public function test_destroy(): void
    {
        $url = route('anime.destroy', [static::$anime->id]);

        $response = $this->delete($url);

        $response->assertStatus(200);
        // dump($response->json());
    }
}
