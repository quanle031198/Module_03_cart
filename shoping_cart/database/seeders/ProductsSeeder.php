<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Products();
        $product->name = 'Sản phẩm 001';
        $product->description = 'Sản phẩm có mã số 001.';

        $product->photo = 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1';
        $product->price = 1.5;
        $product->save();

        $product = new Products();
        $product->name = 'Sản phẩm 002';
        $product->description = 'Sản phẩm có mã số 002.';

        $product->photo = 'https://i.ebayimg.com/images/g/zHoAAOSwJpNgbPSh/s-l1600.jpg';
        $product->price = 2.5;
        $product->save();

        $product = new Products();
        $product->name = 'Sản phẩm 003';
        $product->description = 'Sản phẩm có mã số 003.';

        $product->photo = 'https://i.ebayimg.com/images/g/QsIAAOSwBztgmRcn/s-l1600.jpg';
        $product->price = 1.5;
        $product->save();
    }
}
