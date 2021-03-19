<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake = Faker\Factory::create('ja_JP');
        for($i=0; $i<10;$i++){
            App\Book::create([
            'item_name' => $fake->word(),
            'item_number' => $fake->numberBetween(1,999),
            'item_amount' => $fake->numberBetween(100,5000),
            'published' => $fake->dateTime('now'),
            'created_at' => $fake->dateTime('now'),
            'updated_at' => $fake->dateTime('now'),
            'user_id' => $fake->numberBeteen(1,3),
            ]);
        }
    }
}
