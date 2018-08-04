<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'Chung cư 01',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 02',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 03',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 04',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 05',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 06',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 07',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 08',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 09',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 10',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 11',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 12',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 13',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 14',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 15',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 16',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 17',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 18',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 19',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
            [
                'name' => 'Chung cư 20',
                'address' => 'Hà Nội',
                'price' => '3000',
                'description' => 'Chung cư mới hoàn thành',
                'content' => 'Gần trung tâm thương mại Vincom, siêu thị Metro',
                'images' => 'http://chungcugreenstars.info/wp-content/uploads/sites/82/2014/05/chung-cu-green-stars.jpg'
            ],
        ]);
    }
}
