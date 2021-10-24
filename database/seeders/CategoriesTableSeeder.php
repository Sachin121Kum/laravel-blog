<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        [
            'user_id' =>'1',
            'name' => 'Laravel',
            'slug' => 'laravel',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'user_id' =>'2',
            'name' => 'Wordpress',
            'slug' => 'wordpress',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'user_id' =>'3',
            'name' => 'Python',
            'slug' => 'python',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'user_id' =>'4',
            'name' => 'Php',
            'slug' => 'php',
            'is_published' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],




        ]);
    }
}
