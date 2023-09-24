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
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Jane Johnson",
                "email" => "jane.johnson@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Robert Brown",
                "email" => "robert.brown@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Emily Davis",
                "email" => "emily.davis@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Michael Miller",
                "email" => "michael.miller@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Olivia Wilson",
                "email" => "olivia.wilson@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "David Moore",
                "email" => "david.moore@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Sophia Taylor",
                "email" => "sophia.taylor@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "William Anderson",
                "email" => "william.anderson@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Ava Thomas",
                "email" => "ava.thomas@gmail.com",
                "password" => '$2y$10$VDjBzQkCmE9ZAgQYk7Jp..a5I4yYv./YqHm5PvYCV6zZOnrNYT.9W',
            ],
            [
                "name" => "Liam Martinez",
                "email" => "liam.martinez@gmail.com",
                "password" => '$2y$10$3RRElY4Vg.4WvJ6kt4cH7etE14EMZyeWdmn4EV0IYDAjxQla1DqU.',
            ],
            [
                "name" => "Sophia Garcia",
                "email" => "sophia.garcia@gmail.com",
                "password" => '$2y$10$Qyi3P.mY/7XImKzwNEdoPONNKsU7dX7eJF2mlOoF77Xsl8zXkgEVm',
            ],
            [
                "name" => "Lucas Lopez",
                "email" => "lucas.lopez@gmail.com",
                "password" => '$2y$10$KZV4QxdIbJ.hynPcjYZGSe9kPmKy.0eRD2PnYxyb/sHkmFc/5EhMm',
            ],
            [
                "name" => "Olivia Wilson",
                "email" => "olivia.wilson@gmail.com",
                "password" => '$2y$10$yXLJthVXxy2KmC8E.Wv2KebC6iFNFCrpvhf5G67.uR84kCqWiF73u',
            ],
            [
                "name" => "Noah Turner",
                "email" => "noah.turner@gmail.com",
                "password" => '$2y$10$DYT0euCNyCz4NACnsZvuFuUt4qJwDvF.naAALxsRpmU9DVLL5Jdju',
            ],
            [
                "name" => "Isabella Harris",
                "email" => "isabella.harris@gmail.com",
                "password" => '$2y$10$gE/x7RBaTYwpv9jUbOtrwevz7qY1WfJ8EHIZ0UfxHwnY9uzKf/m0.',
            ],
            [
                "name" => "Mason Clark",
                "email" => "mason.clark@gmail.com",
                "password" => '$2y$10$6n4M7o1XfSLhQNW4JupZ2.7RMM9EGZ.NXViIFV6hvlFRphrmPXiE6',
            ],
            [
                "name" => "Charlotte Lewis",
                "email" => "charlotte.lewis@gmail.com",
                "password" => '$2y$10$Fkw06.Tvxh/j6dmdZ5O.Guw3t.Zl6Is5zyxUyOjYVZ6N4HY2aV33K',
            ],
            [
                "name" => "Liam Baker",
                "email" => "liam.baker@gmail.com",
                "password" => '$2y$10$NYV.A/dE2pEQ0oC4eC4L/e96FJkTSPyRh3uGmkDwbjMySH9NJ6DMC',
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

        $images = [
            'https://e1.pxfuel.com/desktop-wallpaper/511/145/desktop-wallpaper-instagram-cartoon-vintage-cartoon-cartoon-profile-funny-profile.jpg',
            'https://img.freepik.com/premium-vector/happy-girl-avatar-funny-child-profile-picture-isolated-white-background_176411-3188.jpg?w=2000',
            'https://i.pinimg.com/originals/e5/7b/ef/e57bef8aef072f7facbc7b18a59f14d9.png',
            'https://i.pinimg.com/564x/06/28/00/062800be04ccbf37243edfb562e477f1.jpg',
            'https://i.pinimg.com/736x/f8/3a/b3/f83ab360b56164444d4a529e05cace26.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSho38RJ7UiNvxtDg_8h9IjI5OHZbnKmDG713-Ku8iUVsW-2XhJxE3RvtTw7rUKAWgQS30&usqp=CAU',
            'https://i.pinimg.com/474x/53/63/53/53635375bf2beb1c1663366259b0b435.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKFH2N8-7ahQ8AahfauMyDj9CSel4AgJ5WTtD51zvHGMK9ZfilGJ9MUq-xUK5WohfxJcA&usqp=CAU',
            'https://e0.pxfuel.com/wallpapers/362/113/desktop-wallpaper-cute-cartoon-characters-funny-aesthetic-profile-depressing-aesthetic-of-cartoons.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCoR20NP68hOGXQ0BdcAr3Eih9vuenAFt2iBoRLqus_YwUksNXjSp5tM7jlJ2r7-Mk6iA&usqp=CAU',
            'https://i.pinimg.com/474x/06/20/94/062094c7152758596a591fc0e81f8e1b.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6v-B8_K3mfEyRFSaSi4s9XgaIknmxkcccsg&usqp=CAU',
            'https://i.pinimg.com/474x/d4/10/7e/d4107e789224ea8a9242e6104f8d534d.jpg',
            'https://i.pinimg.com/474x/ea/3a/a3/ea3aa34b679f858c74c2efa060d75ce5.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZDuBx_rpYNDrobgZJWfT_onDhCZ3-678ucw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAeZcn8gtHE3vQZbBa256orsc8upZa5QjNu3u-91v2XH6YRiycG9N2wBcfuySEOBaji1k&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVP1kbHj5H7wAidoPCMMuKwq82bT097VIshJ9qMdl_RZqopNa-i7qaIXi3_Z3uSRrtVAs&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsq1sjHAesd4a9IahUM1cbyTyKjJoURVVNyJCjlNliMntXjin0Uv_yQy5G02Zmb0l445k&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbFA734ne9i3I9F3oESVC3QzPapQBiyuSIdQJRGN--AxwKWrDJbX41cJeBbebRco3_WvM&usqp=CAU',
            'https://i.pinimg.com/1200x/2c/c4/cb/2cc4cb9b8ee4371bf894a891071481aa.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE2LKAfCeydS1lf_gqGsqiWb5WwVFODINWqW-zfcF9F4GeuDVRx-blfC1ed5K6JsFu98U&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM-3F3Jx8p7OoEjDz1JAJWWzklh8JkxOWRAjEqoc3LonPqB5QdxJkod6yx3B_Xcv_XsI0&usqp=CAU',
            'https://i.pinimg.com/736x/b8/f7/99/b8f799647e6e07f20a60a75d73eb8e9a.jpg',
            'https://i.pinimg.com/originals/fe/13/1d/fe131d9935b8e4ad3401bea9ea87e5b4.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXqEd6w9XZ580aB9TVU09kt11SFzCP4tK_WxBUH8dp22R38hoEGeJFbro5pTca1RhrzPI&usqp=CAU',
            'https://i.pinimg.com/474x/05/d5/59/05d559f339c5cd2eb486e4259491a739.jpg',
        ];

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
