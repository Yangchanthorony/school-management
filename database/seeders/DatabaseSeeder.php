<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{


    /*
       Seeder detail
       1.Admin 
       2.Student Level (class level)
       3.Subject
       4.Teacher
       5.Study Class (Class room)
       6.Study Times
    */
    

    public function run(): void
    {
        //1.Admin
        $admins = [
            [
              "first_name" => 'tony',
              "last_name" => 'ja',
              "email" => 'tony@gmail.com',
              "phone" => '123456789',
              "password" => Hash::make("tony@168"),
              "created_at" => now(),
              "updated_at" => now(),
            ],
            [
              "first_name" => 'ny',
              "last_name" => 'ka',
              "email" => 'nika@gmail.com',
              "phone" => '045567890',
              "password" => Hash::make("nika"),
              "created_at" => now(),
              "updated_at" => now(),
            ],
            [
              "first_name" => 'dd',
              "last_name" => 'gg',
              "email" => 'ddgg@gmail.com',
              "phone" => '01234667',
              "password" => Hash::make("tonyy"),
              "created_at" => now(),
              "updated_at" => now(),
            ]
        ];

        
  
        DB::table('admins')->insert($admins);


        #--------------------------Create Student level(class level)----------------------------
        $faker = Faker::create();

        $levels = [
            [
                "name" => "7",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "8",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "9",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "10",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "11",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "12",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        DB::table('student_levels')->insert($levels);

        #--------------------------Create Student level(class level)----------------------------



        #---------------------------Create subject start------------------
        $subjects = [
            'គណិតវិទ្យា', 'ភាសាខ្មែរ', 'រូបវិទ្យា', 'គីមីវិទ្យា', 'ជីវវិទ្យា',
            'ផែនដីវិទ្យា', 'ភូមិវិទ្យា', 'ប្រវត្តិវិទ្យា', 'ភាសាបរទេស', 'សីលធម៌-ពលរដ្ជវិទ្យា', 'កីឡា'
        ];

        $hours = [
            "គណិតវិទ្យា"        => 6,
            "ភាសាខ្មែរ"        => 6,
            "រូបវិទ្យា"        => 4,
            "គីមីវិទ្យា"        => 4,
            "ជីវវិទ្យា"        => 3,
            "ផែនដីវិទ្យា"     => 2,
            "ភូមិវិទ្យា"       => 2,
            "ប្រវត្តិវិទ្យា"   => 2,
            "ភាសាបរទេស"     => 3,
            "សីលធម៌-ពលរដ្ជវិទ្យា" => 2,
            "កីឡា"            => 1,
        ];

        $grades = DB::table('student_levels')->pluck('id')->toArray();
        $subjectTypes = [1, 2, 3];

        $data = [];

        foreach ($grades as $grade) {
            foreach ($subjects as $subject) {
                $data[] = [
                    'subject_name'   => $subject,
                    'subject_type'   => $subjectTypes[array_rand($subjectTypes)],
                    'credit'         => rand(50, 150),
                    'hours_per_week' => $hours[$subject] ?? 2,
                    'grade'          => $grade,
                    'book_number'    => rand(100, 400),
                    'note'           => null,
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ];
            }
        }

        // Insert all data in one query for better performance
        DB::table('subjects')->insert($data);


        #-------------------Create subject start------------------



        
        #-------------------create teacher start -----------------
        $faker = Faker::create();

        // Fetch all necessary IDs
        $adminIds = DB::table('admins')->pluck('id')->toArray();
        $subjectIds = DB::table('subjects')->pluck('id')->toArray();
        $studentLevels = DB::table('student_levels')->pluck('id')->toArray();

        $teachers = [];
        $teacherSubjects = [];

        for ($i = 0; $i < 50; $i++) {
            // Prepare teacher data
            $teachers[] = [
                'full_name' => $faker->name,
                'latin_name' => $faker->firstName,
                'gender' => $faker->randomElement([1, 2]),
                'marital_status' => $faker->randomElement([1, 2]),
                'dob' => $faker->date(),
                'national_id' => $faker->unique()->numerify('###########'),
                'specialization' => $faker->word,
                'degree' => $faker->randomElement(['បរិញ្ញាប័ត្រ', 'បរិញ្ញាប័ត្រ', 'បរិញ្ញាប័ត្រ']),
                'university' => $faker->company,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'password' => Hash::make('password'),
                'created_by' => $faker->randomElement($adminIds),
                'hire_date' => $faker->date(),
                'note' => $faker->sentence,
                'email_verified_at' => now(),
                'remember_token' => $faker->md5,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Bulk insert teachers
        DB::table('teachers')->insert($teachers);

        // Fetch newly inserted teacher IDs
        $teacherIds = DB::table('teachers')->pluck('id')->toArray();

        // Prepare teacher_subjects data
        foreach ($teacherIds as $teacherId) {
            $subjectsToAttach = $faker->randomElements($subjectIds, rand(1, 3));

            foreach ($subjectsToAttach as $subjectId) {
                $teacherSubjects[] = [
                    'teacher_id' => $teacherId,
                    'subject_id' => $subjectId,
                    'student_level_id' => $faker->randomElement($studentLevels),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Bulk insert teacher_subjects
        DB::table('teacher_subjects')->insert($teacherSubjects);


        //------------create teacher end-------------------------


        #--------------------------Create Study Class (class room)----------------------------
        $faker = Faker::create();

        $levels = DB::table('student_levels')->get();
        $teachers = DB::table('teachers')->pluck('id')->toArray();
        $sections = ['A', 'B', 'C', 'D'];

        $classes = [];

        foreach ($levels as $level) {
            foreach ($sections as $section) {
                $classes[] = [
                    'name' => $level->name . $section,
                    'class_level_id' => $level->id,
                    'homeroom_teacher' => $faker->randomElement($teachers),
                    'desk' => 10,
                    'fan' => $faker->randomElement([1, 2, 3]),
                    'whiteboard' => 1,
                    'status' => 1,
                    'note' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('study_classes')->insert($classes);

        #--------------------------Create Study Class (class room)----------------------------


       
    

        //6.Times
        $times = [
            [
                'start_time' => '7:15AM',
                'end_time'   => '8:55AM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => '9:05AM',
                'end_time'   => '9:45AM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => '10:05AM',
                'end_time'   => '11:00AM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => '1:00PM',
                'end_time'   => '1:45PM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => '2:05PM',
                'end_time'   => '2:45PM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => '3:05PM',
                'end_time'   => '4:00PM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => '4:15PM',
                'end_time'   => '5:00PM',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];

        DB::table('study_times')->insert($times);

    }
}