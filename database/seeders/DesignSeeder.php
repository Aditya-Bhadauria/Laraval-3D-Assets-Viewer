<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Design;

class DesignSeeder extends Seeder
{
    public function run()
    {
        $designs = [
            [
                'name' => 'Modern Sofa Set',
                'image' => 'designs/sofa.jpg',
                'style' => 'Modern',
                'price' => 15000,
                'length' => 2.0,
                'width' => 0.8,
                'height' => 0.9
            ],
            [
                'name' => 'Classic Dining Table',
                'image' => 'designs/dining_table.jpg',
                'style' => 'Classic',
                'price' => 22000,
                'length' => 1.8,
                'width' => 0.9,
                'height' => 0.75
            ],
            [
                'name' => 'Modern Coffee Table',
                'image' => 'designs/coffee_table.jpg',
                'style' => 'Modern',
                'price' => 6000,
                'length' => 1.2,
                'width' => 0.6,
                'height' => 0.4
            ],
            [
                'name' => 'Classic Wardrobe',
                'image' => 'designs/wardrobe.jpg',
                'style' => 'Classic',
                'price' => 18000,
                'length' => 1.5,
                'width' => 0.6,
                'height' => 2.0
            ],
            [
                'name' => 'Minimalist Bookshelf',
                'image' => 'designs/bookshelf.jpg',
                'style' => 'Minimalist',
                'price' => 9500,
                'length' => 1.2,
                'width' => 0.35,
                'height' => 1.8
            ],
            [
                'name' => 'Luxury Bed Frame',
                'image' => 'designs/bed_frame.jpg',
                'style' => 'Luxury',
                'price' => 32000,
                'length' => 2.2,
                'width' => 1.8,
                'height' => 1.1
            ],
            [
                'name' => 'Scandinavian Armchair',
                'image' => 'designs/armchair.jpg',
                'style' => 'Scandinavian',
                'price' => 8500,
                'length' => 0.8,
                'width' => 0.75,
                'height' => 0.9
            ],
            [
                'name' => 'Contemporary TV Unit',
                'image' => 'designs/tv_unit.jpg',
                'style' => 'Contemporary',
                'price' => 12000,
                'length' => 1.5,
                'width' => 0.45,
                'height' => 0.6
            ],
            [
                'name' => 'Rustic Dining Bench',
                'image' => 'designs/dining_bench.jpg',
                'style' => 'Rustic',
                'price' => 7000,
                'length' => 1.5,
                'width' => 0.4,
                'height' => 0.5
            ],
            [
                'name' => 'Modern Study Desk',
                'image' => 'designs/study_desk.jpg',
                'style' => 'Modern',
                'price' => 11000,
                'length' => 1.3,
                'width' => 0.6,
                'height' => 0.75
            ],
            [
                'name' => 'Industrial Shelf Unit',
                'image' => 'designs/shelf_unit.jpg',
                'style' => 'Industrial',
                'price' => 14500,
                'length' => 1.8,
                'width' => 0.35,
                'height' => 1.9
            ],
            [
                'name' => 'Vintage Mirror Frame',
                'image' => 'designs/mirror_frame.jpg',
                'style' => 'Vintage',
                'price' => 5500,
                'length' => 0.9,
                'width' => 0.05,
                'height' => 1.2
            ],
            [
                'name' => 'Luxury Nightstand',
                'image' => 'designs/nightstand.jpg',
                'style' => 'Luxury',
                'price' => 7500,
                'length' => 0.6,
                'width' => 0.45,
                'height' => 0.6
            ],
            [
                'name' => 'Modern Sideboard',
                'image' => 'designs/sideboard.jpg',
                'style' => 'Modern',
                'price' => 18500,
                'length' => 1.6,
                'width' => 0.5,
                'height' => 0.85
            ],
            [
                'name' => 'Bohemian Floor Lamp',
                'image' => 'designs/floor_lamp.jpg',
                'style' => 'Bohemian',
                'price' => 6200,
                'length' => 0.45,
                'width' => 0.45,
                'height' => 1.7
            ],
            [
                'name' => 'Classic Rocking Chair',
                'image' => 'designs/rocking_chair.jpg',
                'style' => 'Classic',
                'price' => 9800,
                'length' => 0.9,
                'width' => 0.75,
                'height' => 1.0
            ],
            [
                'name' => 'Rustic Coffee Table',
                'image' => 'designs/rustic_coffee_table.jpg',
                'style' => 'Rustic',
                'price' => 8000,
                'length' => 1.0,
                'width' => 0.6,
                'height' => 0.45
            ],
            [
                'name' => 'Modern Wall Shelf',
                'image' => 'designs/wall_shelf.jpg',
                'style' => 'Modern',
                'price' => 4800,
                'length' => 1.0,
                'width' => 0.25,
                'height' => 0.3
            ],
            [
                'name' => 'Scandinavian Dresser',
                'image' => 'designs/dresser.jpg',
                'style' => 'Scandinavian',
                'price' => 16000,
                'length' => 1.5,
                'width' => 0.5,
                'height' => 0.9
            ],
            [
                'name' => 'Minimalist Wall Art',
                'image' => 'designs/wall_art.jpg',
                'style' => 'Minimalist',
                'price' => 3500,
                'length' => 0.7,
                'width' => 0.03,
                'height' => 0.9
            ],
        ];

        foreach ($designs as $design) {
            Design::create($design);
        }
    }
}
