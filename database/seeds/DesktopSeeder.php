<?php

use Illuminate\Database\Seeder;

class DesktopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $desktop = new \App\Desktop([
            'proid'=>'001',
            'name'=>'HP Inspiron 3647',
            'brand'=>'HP',
            'type'=>'used',
            'description'=>'here goes some dumb text about product'
            ,'image'=>'https://res.cloudinary.com/group-32/image/upload/v1503408961/Desktop Computers/HP_inspiron_3647_small_desktop_2.jpg',
            'price'=>25000.00]);
        $desktop->save();

        $desktop = new \App\Desktop([
            'proid'=>'002',
            'name'=>'DELL Vostro 3650',
            'brand'=>'DELL',
            'type'=>'new',
            'description'=>'here goes some dumb text about product'
            ,'image'=>'https://res.cloudinary.com/group-32/image/upload/v1503404860/Desktop Computers/Dell-Vostro-3650_-1.jpg',
            'price'=>85000.00]);
        $desktop->save();
*/
        $desktop = new \App\Desktop([
            'proid'=>'003',
            'name'=>'Lenovo F0BV004FIN',
            'brand'=>'Lenovo',
            'type'=>'new',
            'description'=>'here goes some dumb text about product'
            ,'image'=>'https://res.cloudinary.com/group-32/image/upload/v1503407490/Desktop%20Computers/Lenovo-F0BV004FIN-1.jpg',
            'price'=>65000.00]);
        $desktop->save();

        $desktop = new \App\Desktop([
            'proid'=>'004',
            'name'=>'Lenovo F0BV004FIN',
            'brand'=>'Lenovo',
            'type'=>'new',
            'description'=>'here goes some dumb text about product'
            ,'image'=>'https://res.cloudinary.com/group-32/image/upload/v1503407490/Desktop%20Computers/Lenovo-F0BV004FIN-1.jpg',
            'price'=>65000.00]);
        $desktop->save();

        $desktop = new \App\Desktop([
            'proid'=>'005',
            'name'=>'Samsung MSI PRO 22E 4BW',
            'brand'=>'Samsung',
            'type'=>'new',
            'description'=>'here goes some dumb text about product'
            ,'image'=>'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop%20Computers/MSI-PRO-22E-4BW-21.5-1.jpg',
            'price'=>65000.00]);
        $desktop->save();

        $desktop = new \App\Desktop([
            'proid'=>'006',
            'name'=>'Samsung IE-3741',
            'brand'=>'Samsung',
            'type'=>'new',
            'description'=>'here goes some dumb text about product'
            ,'image'=>'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-1.jpg',
            'price'=>65000.00]);
        $desktop->save();
    }
}
