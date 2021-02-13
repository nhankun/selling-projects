<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current = Carbon::now();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Máy tính bảng',
                'icon' => 'upload/defaults/user1-128x128.jpg',
                'banner' => "upload/defaults/photo1.png",
                'properties' => null,
                'status' => 1,
                'created_at' => $current,
            ],
            [
                'id' => 2,
                'name' => 'Laptop',
                'icon' => 'upload/defaults/user1-128x128.jpg',
                'banner' => "upload/defaults/photo1.png",
                'properties' => null,
                'status' => 1,
                'created_at' => $current,
            ],
            [
                'id' => 3,
                'name' => 'Điện thoại',
                'icon' => 'upload/defaults/user1-128x128.jpg',
                'banner' => "upload/defaults/photo1.png",
                'properties' => null,
                'status' => 1,
                'created_at' => $current,
            ],
            [
                'id' => 4,
                'name' => 'Sách',
                'icon' => 'upload/defaults/user1-128x128.jpg',
                'banner' => "upload/defaults/photo1.png",
                'properties' => null,
                'status' => 1,
                'created_at' => $current,
            ]

        ]);
    }
}
