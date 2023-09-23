<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Mayank javiya',
                'email' => 'mayank@gmail.com',
                'password' => bcrypt('password'),
                'image' => 'https://img.freepik.com/premium-photo/cartoon-boy-with-smile-his-face-generative-ai_974539-1434.jpg'
            ],
            [
                'name' => 'Haresh patel',
                'email' => 'haresh@gmail.com',
                'password' => bcrypt('password'),
                'image' => 'https://e0.pxfuel.com/wallpapers/427/41/desktop-wallpaper-ghost-boy-danny-phantom-goth-g-on-danny-phantom-fenton-and-sam-manson-danny-phantom-cartoon-profile-cartoon-profile-pics-danny-phantom-cool.jpg',
            ],
            [
                'name' => 'Tushar Rathor',
                'email' => 'tushar@gmail.com',
                'password' => bcrypt('password'),
                'image' => 'https://e0.pxfuel.com/wallpapers/860/511/desktop-wallpaper-instagram-profile-aesthetic-profile-pic.jpg',
            ],
            [
                'name' => 'Amit patel',
                'email' => 'amit@gmail.com',
                'password' => bcrypt('password'),
                'image' => 'https://e1.pxfuel.com/desktop-wallpaper/511/145/desktop-wallpaper-instagram-cartoon-vintage-cartoon-cartoon-profile-funny-profile.jpg'
            ]
        ];

        foreach ($users as $user) {
            $inputArray = Arr::only($user,['name','email','password']);
            $createdUser = User::create($inputArray);
            $createdUser->addMediaFromUrl($user['image'])->toMediaCollection(User::USER_PROFILE_IMAGE);
        }
    }
}
