<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'category_id' => 2,
            'title' => 'paracetamol',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-1.jpeg'
        ]);
        Product::create([
            'category_id' => 1,
            'title' => 'ibuprofen',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-2.jpeg'
        ]);
        Product::create([
            'category_id' => 2,
            'title' => 'miconazole',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-3.jpeg'
        ]);
        Product::create([
            'category_id' => 2,
            'title' => 'scabimite',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-4.jpeg'
        ]);
        Product::create([
            'category_id' => 4,
            'title' => 'ketoconazole',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-5.jpeg'
        ]);
        Product::create([
            'category_id' => 3,
            'title' => 'paracetamol',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-6.jpeg'
        ]);
        Product::create([
            'category_id' => 4,
            'title' => 'paracetamol',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
            'image_url' => '/storage/images/image-7.jpeg'
        ]);

        for($i=0; $i<50; $i++) {
            Product::create([
                'category_id' => 1,
                'title' => 'paracetamol',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eos quod vero laudantium facilis illo corporis rem minima, quibusdam nihil in aliquam labore, dignissimos neque? Est, laborum. Quaerat incidunt molestiae omnis eligendi accusantium nesciunt, itaque eaque, magnam veniam dicta quae suscipit voluptate? Quod, iure atque aut laborum a facere blanditiis.',
                'image_url' => '/storage/images/image-7.jpeg'
            ]);
        }
    }
}
