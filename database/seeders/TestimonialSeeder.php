<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'user_id' => 2,
            'content' => 'membeli obat disini sangat memuaskan dan harga yang sangat
            terhangkau'
        ]);
    }
}
