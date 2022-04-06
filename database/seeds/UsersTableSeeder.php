<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Nuruzzaman Milon',
            'email'    => 'tiwarivishal1694@gmail.com',
            'password' => bcrypt('some_password'),
            'is_admin' => true,
        ]);
    }
}
