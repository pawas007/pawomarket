<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::truncate();
        AttributeValue::truncate();
        $atributes = [
            ['name' => 'Type', 'value' => ['Man', 'Woman', 'Kids']],
            ['name' => 'Categories', 'value' => ['Dress', 'Shoes', 'Bags', 'Jackets', 'Jeans', 'T-Shorts']],
            ['name' => 'Size', 'value' => ['L', 'M', 'S', 'XL', 'XS', 'XXL']],
            ['name' => 'Brand', 'value' => ['Zara', 'Bershka', 'Pull&Bear', 'Armani', 'Rive Island', 'Calvin Klein']],
        ];

        $colors = [
                'name'=>'Colors',
                'values' => [
                    ['name' => 'Red', 'code' => '#ff0000'],
                    ['name' => 'Tomato', 'code' => '#ff6347'],
                    ['name' => 'Light green', 'code' => '#90ee90'],
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Light blue', 'code' => '#add8e6']
                ]
            ];

        foreach ($atributes as $atribute) {
            $newAtribyte = new Attribute();
            $newAtribyte->name = $atribute['name'];
            $newAtribyte->save();
            foreach ($atribute['value'] as $value) {
                $newAtribyte->values()->create([
                    'attribute_id' => $newAtribyte->id,
                    'value' => $value

                ]);
            }


        }

//        $COLORS SEED
        $newAtribyte = new Attribute();
        $newAtribyte->name = $colors['name'];
        $newAtribyte->save();
        foreach ($colors['values'] as $color){
            $newAtribyte->values()->create([
                'attribute_id'=>$newAtribyte->id,
                'value'=>$color['name'],
                'color_code'=>$color['code']
            ]);
        }

    }
}
