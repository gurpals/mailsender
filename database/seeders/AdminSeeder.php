<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'password'=>Hash::make('gurpal11#@!'), 
            'email'=>'kindu@wisdominfosoft.com',
            'email_verified_at'=> Carbon::now(),
            'status'=>1,
        ]);
    }
}
