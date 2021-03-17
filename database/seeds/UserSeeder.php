<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 500)->create()->each(function($user){
            $user->save();
        });
        /*
        User::create([
            'name' => 'Manjo',
            'email' => 'manoj@gmail.com',
            'password' => bcrypt('123456'),
        ]);*/
    }
}
