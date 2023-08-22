<?php

namespace Database\Seeders;

use App\Models\Certificate;
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
        $data = [
            [
                "name" => "Minerva Mccoy",
                "email" => "augue.id@yahoo.org",
                "password" => "1234",
                "student_id" => "6592600573",
                "faculty" => "Humanities,",
                "college_year" => "1",
                "image_url" => "user_images/user12.jpg",
                "phone" => "089-739-4602"
            ],
            [
                "name" => "Marah Mcbride",
                "email" => "aliquam.eros@hotmail.couk",
                "password" => "1234",
                "student_id" => "6590965461",
                "faculty" => "Medicine,",
                "college_year" => "2",
                "image_url" => "user_images/user02.jpg",
                "phone" => "084-876-8215"
            ],
            [
                "name" => "Erich Newton",
                "email" => "quis@icloud.com",
                "password" => "1234",
                "student_id" => "6483319554",
                "faculty" => "Business",
                "college_year" => "4",
                "image_url" => "user_images/user15.jpg",
                "phone" => "085-266-5361"
            ],
            [
                "name" => "Connor Hull",
                "email" => "tempus@yahoo.ca",
                "password" => "1234",
                "student_id" => "6503514390",
                "faculty" => "Agriculture,",
                "college_year" => "4",
                "image_url" => "user_images/user07.jpg",
                "phone" => "083-711-8343"
            ],
            [
                "name" => "Madaline Salinas",
                "email" => "tincidunt@google.couk",
                "password" => "1234",
                "student_id" => "6466870930",
                "faculty" => "Administration,",
                "college_year" => "3",
                "image_url" => "user_images/user18.jpg",
                "phone" => "082-242-5783"
            ],
            [
                "name" => "Nell Mcintyre",
                "email" => "eu.eleifend@yahoo.ca",
                "password" => "1234",
                "student_id" => "6553334634",
                "faculty" => "Environment,",
                "college_year" => "2",
                "image_url" => "user_images/user15.jpg",
                "phone" => "082-440-2410"
            ],
            [
                "name" => "Robert Weeks",
                "email" => "egestas@aol.net",
                "password" => "1234",
                "student_id" => "6356723012",
                "faculty" => "Technology,",
                "college_year" => "2",
                "image_url" => "user_images/user04.jpg",
                "phone" => "088-474-1694"
            ],
            [
                "name" => "Grace Fulton",
                "email" => "lacus.aliquam.rutrum@icloud.net",
                "password" => "1234",
                "student_id" => "6316274835",
                "faculty" => "Agriculture,",
                "college_year" => "1",
                "image_url" => "user_images/user05.jpg",
                "phone" => "085-933-5332"
            ],
            [
                "name" => "Mannix Barry",
                "email" => "euismod@hotmail.edu",
                "password" => "1234",
                "student_id" => "6375130041",
                "faculty" => "Technology,",
                "college_year" => "1",
                "image_url" => "user_images/user06.jpg",
                "phone" => "080-171-0121"
            ],
            [
                "name" => "Guy Fields",
                "email" => "lobortis.quam.a@icloud.ca",
                "password" => "1234",
                "student_id" => "6620505468",
                "faculty" => "Faculty",
                "college_year" => "2",
                "image_url" => "user_images/user08.jpg",
                "phone" => "089-327-9976"
            ],
            [
                "name" => "Brenden Tyson",
                "email" => "nunc.ac@aol.edu",
                "password" => "1234",
                "student_id" => "6486159419",
                "faculty" => "Social",
                "college_year" => "2",
                "image_url" => "user_images/user14.jpg",
                "phone" => "082-612-2358"
            ],
            [
                "name" => "Robert Rasmussen",
                "email" => "turpis@icloud.net",
                "password" => "1234",
                "student_id" => "6314576580",
                "faculty" => "Business",
                "college_year" => "4",
                "image_url" => "user_images/user15.jpg",
                "phone" => "084-941-5840"
            ],
            [
                "name" => "Merritt Witt",
                "email" => "at.risus.nunc@google.com",
                "password" => "1234",
                "student_id" => "6327707902",
                "faculty" => "Social",
                "college_year" => "2",
                "image_url" => "user_images/user8.jpg",
                "phone" => "083-607-2353"
            ],
            [
                "name" => "Clark Bright",
                "email" => "eu.placerat.eget@google.com",
                "password" => "1234",
                "student_id" => "6388512442",
                "faculty" => "Environment,",
                "college_year" => "1",
                "image_url" => "user_images/user10.jpg",
                "phone" => "087-729-7393"
            ],
            [
                "name" => "Benedict Griffin",
                "email" => "mauris.non@outlook.org",
                "password" => "1234",
                "student_id" => "6365545038",
                "faculty" => "Humanities,",
                "college_year" => "2",
                "image_url" => "user_images/user10.jpg",
                "phone" => "085-332-8442"
            ],
            [
                "name" => "Hyacinth Roberts",
                "email" => "magna@hotmail.ca",
                "password" => "1234",
                "student_id" => "6491140939",
                "faculty" => "Sciences,",
                "college_year" => "3",
                "image_url" => "user_images/user14.jpg",
                "phone" => "081-513-7768"
            ],
            [
                "name" => "Heather Harrison",
                "email" => "suspendisse.sagittis@google.edu",
                "password" => "1234",
                "student_id" => "6618058977",
                "faculty" => "Education,",
                "college_year" => "1",
                "image_url" => "user_images/user15.jpg",
                "phone" => "085-044-3934"
            ],
            [
                "name" => "Yeo Whitaker",
                "email" => "id@google.couk",
                "password" => "1234",
                "student_id" => "6564857025",
                "faculty" => "Education,",
                "college_year" => "2",
                "image_url" => "user_images/user14.jpg",
                "phone" => "086-255-4335"
            ],
            [
                "name" => "Myles Duffy",
                "email" => "gravida.nunc@yahoo.net",
                "password" => "1234",
                "student_id" => "6543663120",
                "faculty" => "Environment,",
                "college_year" => "3",
                "image_url" => "user_images/user20.jpg",
                "phone" => "085-746-0162"
            ],
            [
                "name" => "Camille Grant",
                "email" => "suspendisse.non@protonmail.org",
                "password" => "1234",
                "student_id" => "6674454637",
                "faculty" => "Business",
                "college_year" => "4",
                "image_url" => "user_images/user02.jpg",
                "phone" => "082-407-3350"
            ],
            [
                "name" => "Violet Donovan",
                "email" => "sed.pede.nec@google.com",
                "password" => "1234",
                "student_id" => "6309228756",
                "faculty" => "Veterinary",
                "college_year" => "3",
                "image_url" => "user_images/user06.jpg",
                "phone" => "087-337-7293"
            ],
            [
                "name" => "Drew Collins",
                "email" => "hymenaeos.mauris.ut@outlook.net",
                "password" => "1234",
                "student_id" => "6464802350",
                "faculty" => "of",
                "college_year" => "1",
                "image_url" => "user_images/user08.jpg",
                "phone" => "081-621-2026"
            ],
            [
                "name" => "Mara Harding",
                "email" => "odio.auctor@yahoo.ca",
                "password" => "1234",
                "student_id" => "6520561932",
                "faculty" => "Architecture,",
                "college_year" => "3",
                "image_url" => "user_images/user07.jpg",
                "phone" => "089-137-3344"
            ],
            [
                "name" => "Yael Hunter",
                "email" => "dictum.ultricies@hotmail.org",
                "password" => "1234",
                "student_id" => "6493199646",
                "faculty" => "Humanities,",
                "college_year" => "2",
                "image_url" => "user_images/user13.jpg",
                "phone" => "086-341-2176"
            ],
            [
                "name" => "Sarah Wells",
                "email" => "etiam.imperdiet@hotmail.net",
                "password" => "1234",
                "student_id" => "6558980064",
                "faculty" => "Forestry,",
                "college_year" => "4",
                "image_url" => "user_images/user02.jpg",
                "phone" => "084-272-3932"
            ]
        ];

        // officer
        $user = new User();
        $user->name = 'Rossarin';
        $user->email = 'officer01@gmail.com';
        $user->password = '1234';
        $user->student_id = '0';
        $user->faculty = '-';
        $user->college_year = '0';
        $user->image_url = 'user_images/user24.jpg';
        $user->role = Role::OFFICER;
        $user->save();

        $user = new User();
        $user->name = 'Chanitaphon Lohamongkol';
        $user->email = 'user01@gmail.com';
        $user->password = '1234';
        $user->student_id = '6410406533';
        $user->faculty = 'Science';
        $user->college_year = '3';
        $user->image_url = 'user_images/user24.jpg';
        $user->phone_number = '0123456789';
        $user->save();

        $user = new User();
        $user->name = 'Jane Doe02';
        $user->email = 'user02@gmail.com';
        $user->password = '1234';
        $user->student_id = '6410406534';
        $user->faculty = 'Engineering';
        $user->college_year = '2';
        $user->image_url = 'user_images/user02.jpg';
        $user->phone_number = '0123234122';
        $user->save();

        $user = new User();
        $user->name = 'user03';
        $user->email = 'user03@gmail.com';
        $user->password = '1234';
        $user->student_id = '6410406535';
        $user->faculty = 'Science';
        $user->college_year = '3';
        $user->image_url = 'user_images/user03.jpg';
        $user->phone_number = '0842341234';
        $user->save();

        foreach ($data as $userData) {
            $user = new User();
            $user->name = $userData['name'];
            $user->email = $userData['email'];
            $user->password = $userData['password'];
            $user->student_id = $userData['student_id'];
            $user->faculty = $userData['faculty'];
            $user->college_year = $userData['college_year'];
            $user->image_url = $userData['image_url'];
            $user->phone_number = $userData['phone'];
            $user->save();
        }

        User::factory(100)->create();
    }
}
