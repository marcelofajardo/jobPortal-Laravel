<?php

use Illuminate\Database\Seeder;

class ApplicantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicant')->insert([
            'firstname' => 'Wasim',
            'lastname' => 'Wazi',
            'age' => 23,
            'gender' => 'M',
            'email' => 'wazi'.'@qburst.com',
            'password' => Hash::make('wasim123'),
            'phone' => 9847059251,
            'edu_qualifications' => 'B.Tech',
            'hash' => mt_rand(100000, 999999),
        ]);
    }
}
