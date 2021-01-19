<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class addgenres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Giả tưởng','slug' => Str::slug('Giả tưởng', '-')],
            ['name' => 'Chiến tranh','slug' => Str::slug('Chiến tranh', '-')],
            ['name' => 'Lịch sử','slug' => Str::slug('Lịch sử', '-')],
            ['name' => 'Tâm lý','slug' => Str::slug('Tâm lý', '-')],
            ['name' => 'Hành động','slug' => Str::slug('Hành động', '-')],
            ['name' => 'Viễn tưởng','slug' => Str::slug('Viễn tưởng', '-')],
            ['name' => 'Giật gân','slug' => Str::slug('Giật gân', '-')],
            ['name' => 'Phiêu lưu','slug' => Str::slug('Phiêu lưu', '-')],
            ['name' => 'Huyền bí','slug' => Str::slug('Huyền bí', '-')],
            ['name' => 'Khoa học','slug' => Str::slug('Khoa học', '-')],
            ['name' => 'Hoạt hình','slug' => Str::slug('Hoạt hình', '-')],
            ['name' => 'Kinh dị','slug' => Str::slug('Kinh dị', '-')],
         ]); 
    }
}
