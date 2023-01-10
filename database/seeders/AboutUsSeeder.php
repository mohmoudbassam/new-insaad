<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Policies;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'ar' => [
                'vision' => "أن نصبح شريكاً موثوقاً به في توسع أعمالك، عبر حلول لوجستية متطورة وتقنيات رقمية تستخدم الذكاء الاصطناعي لنساهم في تحقيق أثر إيجابي مستدام.",
                'mission' => "أن نكون شركاء موثوقين للمتاجر حول العالم لإتمام أعمالهم اللوجستية، وحل المشاكل التقنية المتعلقة بالتخزين، والتغليف، والشحن والتسليم",
                'description_one' => "إسناد هو شريكك اللوجستي وسندك الذي تثق به، نقدم سلسلة من الخدمات تعتمد على أحدث التقنيات، تبدأ بالربط التقني مع متجرك الإلكتروني لاستقبال طلبات عملائك مباشرة واستلام مخزونك ثم إدارة وتخزين وتغليف وتحضير الطلبات وتوصيلها إلى باب عميلك بسرعة واحترافية عالية وتنتهي بتزويدك بتقارير لأهم أرقام متجرك الإلكتروني ومبيعاته وتحليل للبيانات وتفاصيلك مخزونك بشكل دوري",
            ],
            'en' => [
                'vision' => "Our visionis is to become a trusted partner in the expansion of your business, through offering advanced logistics solutions and digital technologies that use artificial intelligence",
                'mission' => "Our ambition is to become a trustworthy partner for managing clients stores across the globe and solve technical problems related to warehousing, packaging, shipping and delivery. ",
                'description_one' => "Isnaad Logistics Services, we provide advanced technical solutions in inventory management, order receiving and delivery, and related consultancy to ensure the quality of operations and to save time and effort.",
            ]
        ];
        AboutUs::create($data);

    }
}
