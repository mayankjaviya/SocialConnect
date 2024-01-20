<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserFollow;
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
            ],
            [
                "name" => "John Smith",
                "email" => "john.smith@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Jane Johnson",
                "email" => "jane.johnson@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Robert Brown",
                "email" => "robert.brown@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Emily Davis",
                "email" => "emily.davis@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Michael Miller",
                "email" => "michael.miller@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Olivia Wilson",
                "email" => "olivia.wilson@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "David Moore",
                "email" => "david.moore@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Sophia Taylor",
                "email" => "sophia.taylor@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "William Anderson",
                "email" => "william.anderson@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Ava Thomas",
                "email" => "ava.thomas@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Liam Martinez",
                "email" => "liam.martinez@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Sophia Garcia",
                "email" => "sophia.garcia@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Lucas Lopez",
                "email" => "lucas.lopez@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Olivia Wilson",
                "email" => "olivia.wilson@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Noah Turner",
                "email" => "noah.turner@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Isabella Harris",
                "email" => "isabella.harris@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Mason Clark",
                "email" => "mason.clark@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Charlotte Lewis",
                "email" => "charlotte.lewis@gmail.com",
                "password" => bcrypt('123456'),
            ],
            [
                "name" => "Liam Baker",
                "email" => "liam.baker@gmail.com",
                "password" => bcrypt('123456'),
            ],
                [
                    "name" => "Aarav Patel",
                    "email" => "aarav.patel@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Aditi Sharma",
                    "email" => "aditi.sharma@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Akshay Kumar",
                    "email" => "akshay.kumar@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Anika Singh",
                    "email" => "anika.singh@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Arjun Reddy",
                    "email" => "arjun.reddy@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Bhavna Desai",
                    "email" => "bhavna.desai@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Deepak Verma",
                    "email" => "deepak.verma@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Ishika Gupta",
                    "email" => "ishika.gupta@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Kunal Mehta",
                    "email" => "kunal.mehta@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Mira Kapoor",
                    "email" => "mira.kapoor@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Naveen Rao",
                    "email" => "naveen.rao@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Neha Jain",
                    "email" => "neha.jain@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Rajiv Malhotra",
                    "email" => "rajiv.malhotra@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Riya Choudhury",
                    "email" => "riya.choudhury@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Rohan Shah",
                    "email" => "rohan.shah@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Simran Khanna",
                    "email" => "simran.khanna@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Tarun Sharma",
                    "email" => "tarun.sharma@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Twinkle Bhatia",
                    "email" => "twinkle.bhatia@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Viren Joshi",
                    "email" => "viren.joshi@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Zara Khan",
                    "email" => "zara.khan@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Vikram Singh",
                    "email" => "vikram.singh@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Neha Sharma",
                    "email" => "neha.sharma@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Rahul Kapoor",
                    "email" => "rahul.kapoor@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Pooja Patel",
                    "email" => "pooja.patel@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Amit Shah",
                    "email" => "amit.shah@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Shalini Verma",
                    "email" => "shalini.verma@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Rajesh Gupta",
                    "email" => "rajesh.gupta@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Priya Reddy",
                    "email" => "priya.reddy@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Sachin Kumar",
                    "email" => "sachin.kumar@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Meera Desai",
                    "email" => "meera.desai@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Raj Singhania",
                    "email" => "raj.singhania@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Sneha Joshi",
                    "email" => "sneha.joshi@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Sanjay Mehta",
                    "email" => "sanjay.mehta@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Preeti Choudhury",
                    "email" => "preeti.choudhury@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Vishal Malhotra",
                    "email" => "vishal.malhotra@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Ananya Shah",
                    "email" => "ananya.shah@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Alok Sharma",
                    "email" => "alok.sharma@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Shivani Patel",
                    "email" => "shivani.patel@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Suresh Kumar",
                    "email" => "suresh.kumar@gmail.com",
                    "password"  => bcrypt('123456'),
                ],
                [
                    "name" => "Divya Verma",
                    "email" => "divya.verma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rohit Malhotra",
                    "email" => "rohit.malhotra@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Anjali Choudhury",
                    "email" => "anjali.choudhury@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Aryan Khanna",
                    "email" => "aryan.khanna@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Ritu Sharma",
                    "email" => "ritu.sharma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Vijay Verma",
                    "email" => "vijay.verma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Aisha Patel",
                    "email" => "aisha.patel@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rajat Kapoor",
                    "email" => "rajat.kapoor@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Sakshi Desai",
                    "email" => "sakshi.desai@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Surya Mehta",
                    "email" => "surya.mehta@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Nisha Joshi",
                    "email" => "nisha.joshi@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rohini Singh",
                    "email" => "rohini.singh@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Karthik Kumar",
                    "email" => "karthik.kumar@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Ayesha Shah",
                    "email" => "ayesha.shah@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rajeev Gupta",
                    "email" => "rajeev.gupta@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Shreya Reddy",
                    "email" => "shreya.reddy@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Alok Sharma",
                    "email" => "alok.sharma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Shivani Patel",
                    "email" => "shivani.patel@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Suresh Kumar",
                    "email" => "suresh.kumar@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Divya Verma",
                    "email" => "divya.verma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Sarita Yadav",
                    "email" => "sarita.yadav@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Aditya Singh",
                    "email" => "aditya.singh@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rachana Bhatia",
                    "email" => "rachana.bhatia@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Vivek Joshi",
                    "email" => "vivek.joshi@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Preeti Malhotra",
                    "email" => "preeti.malhotra@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Nitin Kapoor",
                    "email" => "nitin.kapoor@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Anita Sharma",
                    "email" => "anita.sharma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Vishal Khanna",
                    "email" => "vishal.khanna@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Suman Patel",
                    "email" => "suman.patel@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rajeev Verma",
                    "email" => "rajeev.verma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Poonam Gupta",
                    "email" => "poonam.gupta@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Nikhil Yadav",
                    "email" => "nikhil.yadav@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Sadhana Joshi",
                    "email" => "sadhana.joshi@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Ashwin Shah",
                    "email" => "ashwin.shah@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Manisha Verma",
                    "email" => "manisha.verma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Karan Mehta",
                    "email" => "karan.mehta@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Savita Reddy",
                    "email" => "savita.reddy@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rajat Kumar",
                    "email" => "rajat.kumar@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Mala Sharma",
                    "email" => "mala.sharma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Vijay Kapoor",
                    "email" => "vijay.kapoor@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Ananya Khanna",
                    "email" => "ananya.khanna@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Akash Patel",
                    "email" => "akash.patel@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Riya Shah",
                    "email" => "riya.shah@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Kamal Verma",
                    "email" => "kamal.verma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Poonam Sharma",
                    "email" => "poonam.sharma@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Aman Kumar",
                    "email" => "aman.kumar@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Ritu Khanna",
                    "email" => "ritu.khanna@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Rajesh Patel",
                    "email" => "rajesh.patel@gmail.com",
                    "password" => bcrypt('123456')
                ],
                [
                    "name" => "Meenakshi Verma",
                    "email" => "meenakshi.verma@gmail.com",
                    "password" => bcrypt('123456')
                ]

        ];

        $images = getRandomProfileImage();

        foreach ($users as $key => $user) {
            $inputArray = Arr::only($user,['name','email','password']);
            $createdUser = User::firstOrCreate(['name' => $user['name']],$inputArray);
            if(!$createdUser->hasMedia(User::USER_PROFILE_IMAGE)){
                if(isset($user['image'])){
                    $createdUser->addMediaFromUrl($user['image'])->toMediaCollection(User::USER_PROFILE_IMAGE);
                } else{
                    $createdUser->addMediaFromUrl($images[$key % 10])->toMediaCollection(User::USER_PROFILE_IMAGE);
                }
            }
            if($createdUser->id != 1){
                UserFollow::firstOrCreate(['followed_by' => $createdUser->id,'follow_to'=>1],['followed_by' => $createdUser->id,'follow_to'=>1]);
            }
        }
    }
}
