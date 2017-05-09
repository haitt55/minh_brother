<?php

use Illuminate\Database\Seeder;
use App\Models\AppSetting;

class AppSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppSetting::truncate();
        $appSettings = [
            [
                'key' => 'company',
                'value' => 'Tên cty',
            ],
            [
                'key' => 'email',
                'value' => 'abc@com.vn',
            ], [
                'key' => 'phone',
                'value' => '0999.999.999',
            ],[
                'key' => 'phone2',
                'value' => '0988.888.888',
            ], [
                'key' => 'address',
                'value' => 'Số 999 Phạm Hùng, Hà nội',
            ], [
                'key' => 'open_time2',
                'value' => '9:00 am - 6.00 pm',
            ], [
                'key' => 'open_time3',
                'value' => '9:00 am - 6.00 pm',
            ], [
                'key' => 'open_time4',
                'value' => '9:00 am - 6.00 pm',
            ], [
                'key' => 'open_time5',
                'value' => '9:00 am - 6.00 pm',
            ], [
                'key' => 'open_time6',
                'value' => '9:00 am - 6.00 pm',
            ], [
                'key' => 'open_time7',
                'value' => '9:00 am - 6.00 pm',
            ], [
                'key' => 'open_time8',
                'value' => 'Không làm việc',
            ],[
                'key' => 'latitude',
                'value' => '21.02163',
            ], [
                'key' => 'longitude',
                'value' => '105.79544',
            ], [
                'key' => 'page_title',
                'value' => 'xây dựng',
            ], [
                'key' => 'meta_keyword',
                'value' => 'xây dựng',
            ], [
                'key' => 'meta_description',
                'value' => 'xây dựng',
            ]
        ];
        foreach ($appSettings as $appSetting) {
            AppSetting::create($appSetting);
        }
    }
}
