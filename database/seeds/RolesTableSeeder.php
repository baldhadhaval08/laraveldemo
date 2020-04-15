<?php

use Illuminate\Database\Seeder;
use App\Role;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [];
        if(Role::where('name', '=', 'Admin')->count() < 1)
            $roles[] = ['name' => 'Admin', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')];
        
        if(Role::where('name', '=', 'User')->count() < 1)
            $roles[] = ['name' => 'User', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')];
        
        if(!empty($roles))
            DB::table('roles')->insert($roles);
    }
}
