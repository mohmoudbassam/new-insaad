<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    private $settings = [
        [
            'key'   => 'site_ar_title',
            'value' => 'isnaad ',
        ],
        [
            'key'   => 'site_email',
            'value' => 'info@isnaad.sa',
        ],
        [
            'key'   => 'site_ar_description',
            'value' => 'إسناد هو شريكك اللوجستي وسندك الذي تثق به، نقدم سلسلة من الخدمات تعتمد على أحدث التقنيات، تبدأ بالربط التقني مع متجرك الإلكتروني لاستقبال طلبات عملائك مباشرة واستلام مخزونك ثم إدارة وتخزين وتغليف وتحضير الطلبات وتوصيلها إلى باب عميلك بسرعة واحترافية عالية وتنتهي بتزويدك بتقارير لأهم أرقام متجرك الإلكتروني ومبيعاته وتحليل للبيانات وتفاصيلك مخزونك بشكل دوري',
        ],
        [
            'key'   => 'opening_hours',
            'value' => 'Mon - Sat: 9:00 - 18:00',
        ],
        [
            'key'   => 'site_phone_number',
            'value' => '8001111905',
        ],
        [
            'key'   => 'site_logo',
            'value' => 'assets/website/images/logo.png',
        ],
        [
            'key'   => 'site_logo_dark',
            'value' => 'assets/website/images/logo-dark.png',
        ],
        [
            'key'   => 'site_footer_logo',
            'value' => 'assets/website/images/footerLogo.png',
        ],
        [
            'key'   => 'site_favicon',
            'value' => 'assets/website/images/logo.png',
        ],
        [
            'key'   => 'company_location',
            'value' => 'السعودية - الرياض',
        ],
        [
            'key'   => 'company_latitude',
            'value' => '41.0082',
        ],
        [
            'key'   => 'company_longitude',
            'value' => '28.9784',
        ],
        [
            'key'   => 'social_facebook',
            'value' => 'https://www.facebook.com/',
        ],
        [
            'key'   => 'social_twitter',
            'value' => 'https://www.twitter.com/',
        ],
        [
            'key'   => 'social_instagram',
            'value' => 'https://www.instagram.com/',
        ],
        [
            'key'   => 'social_youtube',
            'value' => 'https://www.youtube.com/',
        ],
        [
            'key'   => 'social_linkedIn',
            'value' => 'https://www.linkedin.com/',
        ],
        [
            'key'   => 'social_whatsapp',
            'value' => '905343869441',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert($this->settings);
    }
}
