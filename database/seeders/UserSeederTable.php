<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name= "Abdoulaye";
        $user->email= "abdoulayeda93@gmail.com";
        $user->password = Hash::make('diaoaliou');
        $user->role="admin";
        $user->save();
    }
}
