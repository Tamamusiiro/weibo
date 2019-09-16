<?php

use App\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();
        $user->followToggle($follower_ids);
        foreach ($followers as $follower) {
            $follower->followToggle($user->id);
        }
    }
}
