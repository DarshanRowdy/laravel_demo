<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => str_random(10),
            'user_id' => '1',
        ]);
        /*factory(App\Products::class, 50)->create()->each(function ($user) {
        });*/
    }
}
