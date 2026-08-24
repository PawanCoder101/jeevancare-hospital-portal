<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeHero;
class HomeHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
public function run()
{
    HomeHero::create([
        'heading' => 'Your Health, Our Promise',
        'subheading' => 'Experienced doctors and modern care',
        'button1_text' => 'Book Appointment',
        'button1_link' => '/appointments',
        'button2_text' => 'Contact Us',
        'button2_link' => '/contact',
        'image' => 'images/hospital.jpg',
    ]);
}
}
