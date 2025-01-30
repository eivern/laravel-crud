<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Category::factory()->createMany([
            ['name' => 'Web Design', 'slug' => 'web-design'],
            ['name' => 'Graphic Design', 'slug' => 'graphic-design'],
            ['name' => 'SEO', 'slug' => 'seo'],
            ['name' => 'Digital Marketing', 'slug' => 'digital-marketing'],
            ['name' => 'E-commerce', 'slug' => 'e-commerce'],
            ['name' => 'UI/UX', 'slug' => 'ui-ux'],
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Mobile Apps', 'slug' => 'mobile-apps'],
            ['name' => 'Content Writing', 'slug' => 'content-writing'],
            ['name' => 'Social Media', 'slug' => 'social-media']
        ]);

    }
}
