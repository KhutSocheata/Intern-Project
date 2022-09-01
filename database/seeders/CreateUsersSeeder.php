<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'type'=>1,
                'phone'=>'012345678',
                'password'=> bcrypt('123456789'),
             ],
             [
                'name'=>'agent',
                'email'=>'agent@gmail.com',
                'type'=> 2,
                'phone'=>'012345678',
                'password'=> bcrypt('1234567890'),
             ],
             [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'type'=>0,
                'phone'=>'012345678',
                'password'=> bcrypt('12345678'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}