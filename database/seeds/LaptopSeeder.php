<?php

use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $laptop = new \App\Laptop([
            'proid' => '001',
            'name' => 'DELL VOSTRO 3568',
            'brand' => 'DELL',
            'type' => 'used',
            'description' => 'here goes some dumb text about product'
            , 'image' => 'https://res.cloudinary.com/group-32/image/upload/v1503404580/Laptops/dell-vostro-3568prim-png.png',
            'price' => 25000.00]);
        $laptop->save();

        $laptop = new \App\Laptop([
            'proid' => '002',
            'name' => 'HP 15-au171TX',
            'brand' => 'HP',
            'type' => 'new',
            'description' => 'here goes some dumb text about product'
            , 'image' => 'https://res.cloudinary.com/group-32/image/upload/v1503403846/Laptops/HP_15-au171TX_i5-Prim.jpg',
            'price' => 85000.00]);
        $laptop->save();

        $laptop = new \App\Laptop([
            'proid' => '003',
            'name' => 'HP 15-ay104tx',
            'brand' => 'HP',
            'type' => 'used',
            'description' => 'here goes some dumb text about product'
            , 'image' => 'https://res.cloudinary.com/group-32/image/upload/v1503403809/Laptops/HP_Notebook_-_15-ay104tx-prim.jpg',
            'price' => 65000.00]);
        $laptop->save();

        $laptop = new \App\Laptop([
            'proid' => '004',
            'name' => 'DELL Inspiron 5550',
            'brand' => 'DELL',
            'type' => 'new',
            'description' => 'here goes some dumb text about product'
            , 'image' => 'https://res.cloudinary.com/group-32/image/upload/v1503403768/Laptops/Dell_5559_i5-4.jpg',
            'price' => 65000.00]);
        $laptop->save();

        $laptop = new \App\Laptop([
            'proid' => '005',
            'name' => 'Ideapad 110 - 151SK',
            'brand' => 'Lenovo',
            'type' => 'new',
            'description' => 'here goes some dumb text about product'
            , 'image' => 'https://res.cloudinary.com/group-32/image/upload/v1503404151/Laptops/enovo_Ideapad_110_-_151SK-Prim.jpg',
            'price' => 65000.00]);
        $laptop->save();

        $laptop = new \App\Laptop([
            'proid' => '006',
            'name' => ' IdeaPad Y700 - 15ISK',
            'brand' => 'Lenovo',
            'type' => 'new',
            'description' => 'here goes some dumb text about product'
            , 'image' => 'https://res.cloudinary.com/group-32/image/upload/v1503404191/Laptops/Lenovo_IdeaPad_Y700_-_15ISK-prim.jpg',
            'price' => 65000.00]);
        $laptop->save();
    }
}
