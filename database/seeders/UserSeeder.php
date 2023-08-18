<?php

namespace Database\Seeders;

use App\Models\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'JohnDoe01';
        $user->email = 'user01@gmail.com';
        $user->password = '1234';
        $user->student_id = 'B6012345';
        $user->faculty = 'Science';
        $user->college_year = '3';
        $user->image_url = 'user_images/image1.jpg';
        $user->save();

        $user = new User();
        $user->name = 'JohnDoe02';
        $user->email = 'user02@gmail.com';
        $user->password = '1234';
        $user->student_id = 'B6012346';
        $user->faculty = 'Engineering';
        $user->college_year = '2';
        $user->image_url = 'user_images/image2.jpg';
        $user->save();

        $user = new User();
        $user->name = 'orga01';
        $user->email = 'orga@gmail.com';
        $user->password = '1234';
        $user->student_id = 'B6012347';
        $user->faculty = 'Science';
        $user->college_year = '3';
        $user->image_url = 'user_images/image3.jpg';
        $user->save();

        $user = new User();
        $user->name = 'officer01';
        $user->email = 'officer01@gmail.com';
        $user->password = '1234';
        $user->student_id = '0';
        $user->faculty = '-';
        $user->college_year = '0';
        $user->role = Role::OFFICER;
        $user->save();

        User::factory(15)->create();
    }
}
