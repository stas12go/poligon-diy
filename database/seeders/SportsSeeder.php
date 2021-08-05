<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\DB;

class SportsSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            "3x3 Basketball",
            "Acrobatic Gymnastics",
            "Alpine Skiing",
            "Archery",
            "Artistic Gymnastics",
            "Artistic Swimming",
            "Athletics",
            "Badminton",
            "Baseball Softball",
            "Basketball",
            "Beach Handball",
            "Beach Volleyball",
            "Biathlon",
            "BMX Freestyle",
            "BMX Racing",
            "Bobsleigh",
            "Boxing",
            "Breaking",
            "Canoe / Kayak Flatwater",
            "Canoe / Kayak Slalom",
            "Cross-Country",
            "Curling",
            "Diving",
            "Equestrian",
            "Fencing",
            "Figure Skating",
            "Football",
            "Freestyle Skiing",
            "Futsal",
            "Golf",
            "Handball",
            "Hockey",
            "Ice Hockey",
            "Judo",
            "Karate",
            "Luge",
            "Marathon Swimming",
            "Modern Pentathlon",
            "Mountain Bike",
            "Nordic Combined",
            "Rhythmic Gymnastics",
            "Road Cycling",
            "Roller Speed Skating",
            "Rowing",
            "Rugby",
            "Sailing",
            "Shooting",
            "Short Track Speed Skating",
            "Skateboarding",
            "Skeleton",
            "Ski Jumping",
            "Ski Mountaineering",
            "Snowboard",
            "Speed Skating",
            "Sport Climbing",
            "Surfing",
            "Swimming",
            "Table Tennis",
            "Taekwondo",
            "Tennis",
            "Track Cycling",
            "Trampoline",
            "Triathlon",
            "Volleyball",
            "Water Polo",
            "Weightlifting",
            "Wrestling"
        ];
        $values = [];

        foreach ($sports as $sportName) {
            $values[] = [
                'name' => $sportName,
                'slug' => Str::slug($sportName),
                'description' => $this->faker->realText(rand(200, 800)),
                'debut' => round(rand(1896, (int)date("Y")) / 4) * 4,
                'image_url' => $this->faker->imageUrl(200, 100, $sportName, false),
                'icon_url' => $this->faker->imageUrl(40, 20, $sportName, false),
            ];
        }

        DB::table('sports')->insert($values);
    }
}
/*[
  "3x3 Basketball",
  "Acrobatic Gymnastics",
  "Alpine Skiing",
  "Archery",
  "Artistic Gymnastics",
  "Artistic Swimming",
  "Athletics",
  "Badminton",
  "Baseball Softball",
  "Basketball",
  "Beach Handball",
  "Beach Volleyball",
  "Biathlon",
  "BMX Freestyle",
  "BMX Racing",
  "Bobsleigh",
  "Boxing",
  "Breaking",
  "Canoe / Kayak Flatwater",
  "Canoe / Kayak Slalom",
  "Cross-Country",
  "Curling",
  "Diving",
  "Equestrian",
  "Fencing",
  "Figure Skating",
  "Football",
  "Freestyle Skiing",
  "Futsal",
  "Golf",
  "Handball",
  "Hockey",
  "Ice Hockey",
  "Judo",
  "Karate",
  "Luge",
  "Marathon Swimming",
  "Modern Pentathlon",
  "Mountain Bike",
  "Nordic Combined",
  "Rhythmic Gymnastics",
  "Road Cycling",
  "Roller Speed Skating",
  "Rowing",
  "Rugby",
  "Sailing",
  "Shooting",
  "Short Track Speed Skating",
  "Skateboarding",
  "Skeleton",
  "Ski Jumping",
  "Ski Mountaineering",
  "Snowboard",
  "Speed Skating",
  "Sport Climbing",
  "Surfing",
  "Swimming",
  "Table Tennis",
  "Taekwondo",
  "Tennis",
  "Track Cycling",
  "Trampoline",
  "Triathlon",
  "Volleyball",
  "Water Polo",
  "Weightlifting",
  "Wrestling"
]*/