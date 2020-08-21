<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Clean pivot table
        User::truncate();
        DB::table('role_user')->truncate();
        $superAdminRole = Role::where('name', 'superadmin')->first();
        $administratorRole = Role::where('name', 'admin')->first();
        $egresadoRole = Role::where('name', 'egresado')->first();
       // $userRole = Role::where('name', 'user')->first();

        $superAdmin = User::create([
            'name' => 'Super Administrador', 
            'email' => 'superadmin@g.co',
            'password' => Hash::make('123')
        ])->roles()->attach($superAdminRole);

        $administrator = User::create([
            'name' => 'administrator', 
            'email' => 'admin@g.co',
            'password' => Hash::make('123')
        ])->roles()->attach($administratorRole);

        //invoke seeder faker package to seed the database with dummy data
        $faker = Faker::create();   

        for($i=0;$i<10;$i++){
            $admininistrator = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'dni' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->unique()->address,
                'phone' => $faker->unique()->phoneNumber,
                'egreso'=> $faker->company,
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'), 
                'remember_token' => Str::random(10)
                ])->roles()->attach($administratorRole);
        }
        
        $egresado = User::create([
            'name' => 'egresado ', 
            'email' => 'egresado@g.co',
            'password' => Hash::make('123')
            ])->roles()->attach($egresadoRole);
            
        for($i=0;$i<20;$i++){
            
            $egresado = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'dni' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->unique()->address,
                'phone' => $faker->unique()->phoneNumber,
                'mediapath' => 'https://cdn.pixabay.com/photo/2015/09/02/13/24/girl-919048_960_720.jpg',
                'email_verified_at' => now(),
                'password' => Hash::make('123'), 
                'remember_token' => Str::random(10)
            ])->roles()->attach($egresadoRole);            
            
        }

        
        
    }
}
