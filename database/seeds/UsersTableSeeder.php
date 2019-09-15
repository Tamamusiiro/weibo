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
        factory(User::class, 100)->create();
        $user = User::find(1);
        $user->name = 'Kir';
        $user->email = '975333454@qq.com';
        $user->password = bcrypt(11111111);
        $user->is_admin = true;
        $user->activated = true;
        $user->activation_token = null;
        $user->save();
    }
}
