<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lp_roles')->insert([
            'name' => 'Admin',
            'description' => 'Admin User Role',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
