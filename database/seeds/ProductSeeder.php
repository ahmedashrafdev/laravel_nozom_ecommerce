<?php

use App\Product;
use App\ProductImage;
use App\ProductOption;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        // $items = [
        //     [   'ItemNameEn' => 'Slim Fit Gabardine Chino Trousers',
        //         'InStock' => 1 ,
        //         "hasOptions" => 1,            
        //         'latest' => 1 ,
        //         'featured' => 0 ,
        //         'ItemImage' => 'https://lcw.akinoncdn.com/products/2019/12/27/1145924/882cd5f3-63f6-48f0-aa96-b16e35d9cee0_size265x353_cropCenter.jpg',
        //         'ByWeight' => 0,
        //         'POSPP' => 265 ,
        //         'minorPerMajor' => 1,
        //         'POSTP' => 265,
        //         'GroupCode' => 1,
        //         'ItemName' => 'سروال شينو'
        //     ],
        //     [   'ItemNameEn' => 'Polo Neck Basic Short Sleeve Pique T-Shirt',
        //         'InStock' => 1 ,
        //         'latest' => 1 ,
        //         "hasOptions" =>1,
        //         'featured' => 0 ,
        //         'ItemImage' => 'https://lcw.akinoncdn.com/products/2020/09/23/1184008/e2b976b8-e15c-4305-bc1e-7d5022853d55_size265x353_cropCenter.jpg',
        //         'ByWeight' => 0,
        //         'POSPP' => 350 ,
        //         'minorPerMajor' => 1,
        //         'POSTP' => 350,
        //         'GroupCode' => 1,
        //         'ItemName' => 'قميص بولو'
        //     ],
        //     [   'ItemNameEn' => 'Trousers',
        //         'InStock' => 1 ,
        //         'latest' => 1 ,
        //         "hasOptions" => 1,
        //         'featured' => 0 ,
        //         'ItemImage' => 'https://lcw.akinoncdn.com/products/2020/09/23/1350579/8aabd569-178d-4e6f-a8ac-b83ec03319d4_size561x730.jpg',
        //         'ByWeight' => 0,
        //         'POSPP' => 300 ,
        //         'minorPerMajor' => 1,
        //         'POSTP' => 300,
        //         'GroupCode' => 2,
        //         'ItemName' => 'سروال'
        //     ],
        //     [   'ItemNameEn' => 'Applique Printed Straight Fit Maxi Dress',
        //         'InStock' => 1 ,
        //         'latest' => 1 ,
        //         "hasOptions" => 1,
        //         'featured' => 0 ,
        //         'ItemImage' => 'https://lcw.akinoncdn.com/products/2020/07/01/1402079/e260ce00-1026-4ab1-a3cb-97940bcfc251_size561x730.jpg',
        //         'ByWeight' => 0,
        //         'POSPP' => 350 ,
        //         'minorPerMajor' => 1,
        //         'POSTP' => 300,
        //         'GroupCode' => 2,
        //         'ItemName' => 'فستان'
        //     ],
        // ];

        // $options = [
        //     [
        //         'images' => [
        //                         ['product_id' => 1,'color' => '171614' ,'image' =>'https://lcw.akinoncdn.com/products/2020/09/23/1146799/61c62e89-be93-413d-a6f7-bb59ea0c29f6_quality90.jpg'],
        //                         ['product_id' => 1,'color' => '171614' ,'image' =>    'https://lcw.akinoncdn.com/products/2020/09/23/1152116/c7039f50-ab3f-4be7-ae63-1a7c11c02898_quality90.jpg'],
        //                         ['product_id' => 1,'color' => '6f684b' ,'image' =>    'https://lcw.akinoncdn.com/products/2019/12/27/1145924/882cd5f3-63f6-48f0-aa96-b16e35d9cee0_quality90.jpg'],
        //                         ['product_id' => 1,'color' => '6f684b' ,'image' => 'https://lcw.akinoncdn.com/products/2019/12/27/1145925/00118536-9637-4840-bb4e-f225034fdb4c_quality90.jpg']
        //                     ], 
        //         'options' => [
        //                         [
        //                             'color' => '171614',
        //                             'size' => '31',
        //                             'product_id' => 1,
        //                             'InStock' => 1,

        //                         ],
        //                         [
        //                             'color' => '171614',
        //                             'size' => '36',
        //                             'product_id' => 1,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '171614',
        //                             'size' => '32',
        //                             'product_id' => 1,
        //                             'InStock' => 1,

        //                         ],
        //                         [
        //                             'color' => '171614',
        //                             'size' => '33',
        //                             'product_id' => 1,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '171614',
        //                             'size' => '34',
        //                             'product_id' => 1,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '171614',
        //                             'size' => '35',
        //                             'product_id' => 1,
        //                             'InStock' => 1,

        //                         ],
        //                         [
        //                             'color' => '6f684b',
        //                             'size' => '31',
        //                             'product_id' => 1,
        //                             'InStock' => 1,
        //                         ],
        //                         [
        //                             'color' => '6f684b',
        //                             'size' => '36',
        //                             'product_id' => 1,
        //                             'InStock' => 1,
        //                         ],
        //                         [
        //                             'color' => '6f684b',
        //                             'size' => '37',
        //                             'product_id' => 1,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '6f684b',
        //                             'size' => '38',
        //                             'product_id' => 1,
        //                             'InStock' => 1,
        //                         ],
        //                     ]
                    
        //     ],
        //     [
        //         'images' => [
        //                         ['product_id' => 2,'color' => '374c47' ,'image' =>'https://lcw.akinoncdn.com/products/2020/09/23/1184008/e2b976b8-e15c-4305-bc1e-7d5022853d55_size561x730.jpg'],
        //                         ['product_id' => 2,'color' => '374c47' ,'image' => 'https://lcw.akinoncdn.com/products/2020/09/23/1190250/aca97ef0-2e84-4d9a-97b1-fa6866ee9fa1_quality90.jpg'],
        //                         ['product_id' => 2,'color' => '2a5ba7' ,'image' => 'https://lcw.akinoncdn.com/products/2020/09/23/1183515/a53825c6-24a4-41d8-b44d-6ff0686e832b_quality90.jpg'],
        //                         ['product_id' => 2,'color' => '2a5ba7' ,'image' => 'https://lcw.akinoncdn.com/products/2020/09/23/1183506/175c1f2a-6eb1-46f7-98a8-6c6e348dca13_quality90.jpg']
        //                     ],
        //         'options' => [
        //                         [
        //                             'color' => '374c47',
        //                             'size' => '32',
        //                             'product_id' => 2,
        //                             'InStock' => 1,

        //                         ],
        //                         [
        //                             'color' => '374c47',
        //                             'size' => '33',
        //                             'product_id' => 2,
                                    
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '374c47',
        //                             'size' => '34',
        //                             'product_id' => 2,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '374c47',
        //                             'size' => '35',
        //                             'product_id' => 2,
        //                             'InStock' => 1,

        //                         ],
        //                         [
        //                             'color' => '2a5ba7',
        //                             'size' => '31',
        //                             'product_id' => 2,
        //                             'InStock' => 1,
        //                         ],
        //                         [
        //                             'color' => '2a5ba7',
        //                             'size' => '36',
        //                             'InStock' => 1,

        //                             'product_id' => 2,
        //                         ],
        //                         [
        //                             'color' => '2a5ba7',
        //                             'size' => '37',
        //                             'product_id' => 2,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '2a5ba7',
        //                             'size' => '38',
        //                             'InStock' => 1,
        //                             'product_id' => 2,
                                    
        //                         ],
        //                         ]
        //                     ],
        //     [
        //         'product_id' => 3,
        //         'images' => [
        //                         ['product_id' => 3,'color' => 'e2bca2' ,'image' =>'https://lcw.akinoncdn.com/products/2020/09/23/1349468/64c84f16-c87c-4cd1-b83f-91f829d98e62_size561x730.jpg'],
        //                         ['product_id' => 3,'color' => 'e2bca2' ,'image' => 'https://lcw.akinoncdn.com/products/2020/09/23/1349483/ed8795f3-fc65-44cf-9cf5-babd5b930513_size561x730.jpg'],
        //                         ['product_id' => 3,'color' => '15150d' ,'image' => 'https://lcw.akinoncdn.com/products/2020/01/20/1350203/e4918c74-d832-43d5-8533-3c3192847305_size561x730.jpg'],
        //                         ['product_id' => 3,'color' => '15150d' ,'image' => 'https://lcw.akinoncdn.com/products/2020/01/20/1350203/a2ed4901-24bd-4804-b83f-05af74ae05d4_size561x730.jpg']
        //                     ],
        //         'options' => [
        //                         [
        //                             'color' => 'e2bca2',
        //                             'size' => '32',
        //                             'product_id' => 3,
        //                             'InStock' => 0

        //                         ],
        //                         [
        //                             'color' => 'e2bca2',
        //                             'size' => '33',
        //                             'product_id' => 3,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => 'e2bca2',
        //                             'size' => '34',
        //                             'product_id' => 3,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => 'e2bca2',
        //                             'size' => '35',
        //                             'product_id' => 3,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '15150d',
        //                             'size' => '31',
        //                             'product_id' => 3,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '15150d',
        //                             'size' => '36',
        //                             'product_id' => 3,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '15150d',
        //                             'size' => '37',
        //                             'product_id' => 3,
        //                             'InStock' => 0,

        //                         ],
        //                         [
        //                             'color' => '15150d',
        //                             'size' => '38',
        //                             'product_id' => 3,
        //                             'InStock' => 0
        //                         ],
        //                      ]
        //     ],
        //     [
        //         'product_id' => 4,
        //         'images' => [
        //                     ['product_id' => 4,'color' => '1f1c15' , 'image' =>'https://lcw.akinoncdn.com/products/2020/07/01/1402079/e260ce00-1026-4ab1-a3cb-97940bcfc251_size561x730.jpg'],
        //                     ['product_id' => 4,'color' => '1f1c15' , 'image' => 'https://lcw.akinoncdn.com/products/2020/07/01/1402079/e260ce00-1026-4ab1-a3cb-97940bcfc251_size561x730.jpg'],
        //                     ['product_id' => 4,'color' => '1f1c15' , 'image' => 'https://lcw.akinoncdn.com/products/2020/07/01/1432386/65f60ad1-6e81-4be0-8fe9-c329a652c12f_size561x730.jpg'],
        //                 ], 
        //         'options' => [
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '32',
        //                             'product_id' => 4,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '33',
        //                             'product_id' => 4,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '34',
        //                             'product_id' => 4,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '35',
        //                             'product_id' => 4,
        //                             'InStock' => 1
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '31',
        //                             'product_id' => 4,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '36',
        //                             'product_id' => 4,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '37',
        //                             'product_id' => 4,
        //                             'InStock' => 0
        //                         ],
        //                         [
        //                             'color' => '1f1c15',
        //                             'size' => '38',
        //                             'product_id' => 4,
        //                             'InStock' => 0
        //                         ],
        //                     ]
        //     ],
        // ];
        // Product::insert($items);
        

        // foreach($options as $option){            
        //     ProductImage::insert($option['images'] );
        //     ProductOption::insert($option['options']);
        // }
        
        // $items = [
        //     ['GroupCode' => 1 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '25M 79mm Thermal Paper roll for Cashier', 'ItemName' => 'بكر حراري 25 متر  7.9 سم لطابعات الكاشير', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '540', 'POSPP' => '540', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 1 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '55M 79mm Thermal Paper roll for Cashier', 'ItemName' => 'بكر حراري 55 متر  7.9 سم لطابعات الكاشير', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '528', 'POSPP' => '528', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 1 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '70M 79mm Thermal Paper roll for Cashier 48 roll box', 'ItemName' => 'بكر حراري 70 متر  7.9 سم لطابعات الكاشير كارتونة 48 بكرة', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '504', 'POSPP' => '504', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 1 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '70M 79mm Thermal Paper roll for Cashier 60 roll box', 'ItemName' => 'بكر حراري 70 متر  7.9 سم لطابعات الكاشير كارتونة 60 بكرة', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '630', 'POSPP' => '630', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 2 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '14M 57mm Thermal Paper roll for Small Printers (Fawry POS)', 'ItemName' => 'بكر حراري 14 متر 5.7 سم للطابعات الصغيرة (ماكينات فوري)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '283.71', 'POSPP' => '283.71', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 2 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '16M 57mm Thermal Paper roll for Small Printers (Fawry POS)', 'ItemName' => 'بكر حراري 16 متر 5.7 سم للطابعات الصغيرة (ماكينات فوري)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '282.48', 'POSPP' => '282.48', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 2 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '18M 57mm Thermal Paper roll for Small Printers (Fawry POS)', 'ItemName' => 'بكر حراري 18 متر 5.7 سم للطابعات الصغيرة (ماكينات فوري)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '317.52', 'POSPP' => '317.52', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 2 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '28M 57mm Thermal Paper roll for Small Printers (Fawry POS)', 'ItemName' => 'بكر حراري 28 متر 5.7 سم للطابعات الصغيرة (ماكينات فوري)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '352.8', 'POSPP' => '352.8', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 2 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '40M 57mm Thermal Paper roll for Small Printers (Fawry POS)', 'ItemName' => 'بكر حراري 40 متر 5.7 سم للطابعات الصغيرة (ماكينات فوري)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '336', 'POSPP' => '336', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 3 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '4*6 cm 450 Label thermal sticker roll (For Barcode Scales)', 'ItemName' => 'بكر لاصق 4*6 سم 450 ملصق (لموازين البار كود)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '1100', 'POSPP' => '1100', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 3 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => '4*5 cm 450 Label thermal sticker roll (For Barcode Scales)', 'ItemName' => 'بكر لاصق 4*5 سم 450 ملصق (لموازين البار كود)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '1000', 'POSPP' => '1000', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 3 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => 'Barcode thermal printer labels roll 4*2.5cm 1500 label (non-Splited)', 'ItemName' => 'بكر لاصق لطابعات الباركود 1500 ملصق 4*2.5سم (غير مقسوم)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '1344', 'POSPP' => '1344', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
        //     ['GroupCode' => 3 ,"ItemDesc" => "محتوي الكرتونة : 100 بكرة", "ItemDescEn" => "the box contains : 100 rolls", 'ItemNameEn' => 'Barcode thermal printer labels roll 4*2.5cm 1500 label (Splited)', 'ItemName' => 'بكر لاصق لطابعات الباركود 1500 ملصق 4*2.5سم ( مقسوم)', 'ItemImage' => 'products/pr01.jpg', 'ByWeight' => '0', 'latest' => '1', 'bestseller' => '1' , 'vat' => '0', 'POSTP' => '1344', 'POSPP' => '1344', 'MinorPerMajor' => '1', 'ActiveItem' => '1', 'InStock' => '1'],
            
        // ];
        // Product::insert($items);


        $items = [
            ['ItemNameEn' => 'BANANA', 'InStock' => 1 ,'latest' => 0 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/1.png', 'ByWeight' => '1', 'POSPP' => 50 , 'minorPerMajor' => 1000,'POSTP' => 50 * 1000, 'GroupCode' => '1', 'ItemName' => 'موز'],
            ['ItemNameEn' => 'orange', 'InStock' => 1 ,'latest' => 0 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/2.png', 'ByWeight' => '1', 'POSPP' => 10 , 'minorPerMajor' => 1000,'POSTP' => 10 * 1000, 'GroupCode' => '1', 'ItemName' => 'برتقال'],
            ['ItemNameEn' => 'potato', 'InStock' => 1 ,'latest' => 0 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/3.png', 'ByWeight' => '1', 'POSPP' => 10 , 'minorPerMajor' => 1000,'POSTP' => 10 * 1000, 'GroupCode' => '2', 'ItemName' => 'بطاطس'],
            ['ItemNameEn' => 'tomatoes', 'InStock' => 1 ,'latest' => 0 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/5.png', 'ByWeight' => '1', 'POSPP' => 5 , 'minorPerMajor' => 1000,'POSTP' => 5 * 1000, 'GroupCode' => '2', 'ItemName' => 'طماطم'],
            ['ItemNameEn' => 'grapes', 'InStock' => 1 ,'latest' => 1 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/6.png', 'ByWeight' => '1', 'POSPP' => 5 , 'minorPerMajor' => 1000,'POSTP' => 5 * 1000, 'GroupCode' => '1', 'ItemName' => 'عنب'],
            ['ItemNameEn' => 'kiwi', 'InStock' => 1 ,'latest' => 1 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/7.png', 'ByWeight' => '1', 'POSPP' => 5 , 'minorPerMajor' => 1000,'POSTP' => 5 * 1000, 'GroupCode' => '1', 'ItemName' => 'كيوي'],
            ['ItemNameEn' => 'pepper', 'InStock' => 1 ,'latest' => 1 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/8.png', 'ByWeight' => '1', 'POSPP' => 5 , 'minorPerMajor' => 1000,'POSTP' => 5 * 1000, 'GroupCode' => '2', 'ItemName' => 'فلفل'],
            ['ItemNameEn' => 'broccoli', 'InStock' => 1 ,'latest' => 1 , 'featured' => 1 , 'ItemImage' => 'https://www.ocsolutions.co.in/html/organic_food/images/header3/4.png', 'ByWeight' => '1', 'POSPP' => 5 , 'minorPerMajor' => 1000,'POSTP' => 5 * 1000, 'GroupCode' => '2', 'ItemName' => 'بروكلي'],
        ];
        Product::insert($items);
      }
}
