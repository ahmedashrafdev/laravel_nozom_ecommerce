<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'logo',
                'value_ar' => 'settings/logo.png',
                'type' => 'image',
                'value' => 'settings/logo.png'
            ],
            [
                'key' => 'address',
                'value' => 'elrady market Ahmed okasha, El tagamo3 1, First New Cairo',
                'value_ar' => 'سوق الراضي أحمد عكاشة ، التجمع الأول القاهرة الجديدة',
                'type' => 'text',
            ],
            [
                'key' => 'phone',
                'value_ar' => '+201116522242',
                'type' => 'text',
                'value' => ' +201116522242 '
            ],
            [
                'key' => 'email',
                'value_ar' => 'alradygomlamarket@gmail.com',
                'type' => 'email',
                'value' => ' alradygomlamarket@gmail.com'
            ],
            [
                'key' => 'about',
                'value' => 'A distinguished company and entity established in 1994 and has a leading role in the Egyptian market with distinguished solutions and programs that are easy to use in all retail and wholesale sectors.',
                'value_ar' =>"شركة و كيان مميز أنشئت عام 1994 ولها دور رائد في السوق المصري بحلول وبرامج متميزة سهلة الاستخدام فى جميع قطاعات التجزئة و الجملة.",
                'type' => 'textarea',
            ],
            [
                'key' => 'facebook',
                'value_ar' => 'https://www.facebook.com/ElradyMarket/',
                'type' => 'text',
                'value' => 'https://www.facebook.com/ElradyMarket/'
            ],

        ];
        Setting::insert($settings);
    }
}
