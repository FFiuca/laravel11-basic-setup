<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Master\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Status::truncate();

        $data = [
            [ 'name' => 'Not Published' ],
            [ 'name' => 'On Going' ],
            [ 'name' => 'End' ],
        ];

        Status::insert($data);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
