<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('email', '=', 'admin@techvoot.com')->count() < 1)
        {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@techvoot.com',
                'password' => Hash::make('12345678'),
                'role_id' => Role::ADMIN_ROLE,
                'is_approved' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            $this->command->info('Here is your admin details to login:');
            $this->command->warn('Email : admin@techvoot.com');
            $this->command->warn('Password is 12345678');
        }
    }
}
