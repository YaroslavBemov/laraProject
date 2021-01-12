<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => Str::random(10),
                'description' => Str::random(25) . '@gmail.com',
                'category_id' => random_int(1, 3),
                'time_to_read' => random_int(1, 10),
                'content' => Str::random(100)
            ];
        }

        return $data;
    }
}
