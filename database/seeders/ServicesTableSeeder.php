<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'image' => "/assets/website/images/operation.png",
                'icon' => "/assets/website/images/cogwheel.svg",
                'ar' => [
                    'title' => "إدارة عمليات التشغيل",
                    'slug' => "إدارة-عمليات-التشغيل",
                    'description' => "سلسلة من الخدمات المتكاملة، تبدأ بالربط التقني مع متجرك الإلكتروني لاستقبال طلبات عملائك مباشرة واستلام مخزونك ثم إدارة وتخزين وتغليف وتحضير الطلبات وتوصيلها إلى باب عميلك بسرعة واحترافية عالية وتنتهي بتزويدك بتقارير لأهم أرقام متجرك الإلكتروني ومبيعاته وتحليل للبيانات وتفاصيلك مخزونك بشكل دوري",
                ],
                'en' => [
                    'title' => "OPERATIONS MANAGEMENT",
                    'slug' => "OPERATIONS-MANAGEMENT",
                    'description' => "A series of integrated services, starting from bonding your online store to your customer requests directly. Then, receiving your inventory and managing your products through storing,  packaging and preparing orders and delivering them to your customer door. Eventually, providing you with reports for the most important numbers of your online store and sales, data analysis and your inventory details. ",
                ]
            ],
            [
                'image' => "/assets/website/images/clearance.png",
                'icon' => "/assets/website/images/cheked-list.svg",
                'ar' => [
                    'title' => 'التخليص الجمركي',
                    'slug' => 'التخليص-الجمركي',
                    'description' => "نعلم بأن التخليص الجمركي خدمة تعتبر خطوة مهمة في مجال النقل ، ونظراً للمشاكل والمعوقات التي تواجه الشركات لتخليص البضائع عبر الحدود, فاننا في إسناد نقوم بمهمة التخليص الجمركي وتوثيق البيانات التي تخص البضائع وفق إجراءات جمركية مسندة الى فريق مختص لتتمكن من نقل (ادخال) بضائعك بكل سهولة وسرعة",
                ],
                'en' => [
                    'title' => 'CUSTOM CLEARANCE',
                    'slug' => 'CUSTOM-CLEARANCE',
                    'description' => "We know that customs clearance is an important step for clearing your products for transportation purposes.  We in Isnaad carry out the tasks associated with customs clearance in accordance with customs procedures",
                ]
            ],

            [
                'image' => "/assets/website/images/operation2.png",
                'icon' => "/assets/website/images/home.svg",
                'en' => [
                    'title' => "WAREHOUSE MANAGEMENT",
                    'slug' => "WAREHOUSE-MANAGEMENT",
                    'description' => "A range of services provided by global expertise in the field of warehouses allowing you to manage and operate your warehouses with professional fashion",
                ],
                'ar' => [
                    'title' => "إدارة و تشغيل المستودعات",
                    'slug' => "إدارة-و-تشغيل-المستودعات",
                    'description' => "سلسلة من الخدمات المتكاملة، تبدأ بالربط التقني مع متجرك الإلكتروني لاستقبال طلبات عملائك مباشرة واستلام مخزونك ثم إدارة وتخزين وتغليف وتحضير الطلبات وتوصيلها إلى باب عميلك بسرعة واحترافية عالية وتنتهي بتزويدك بتقارير لأهم أرقام متجرك الإلكتروني ومبيعاته وتحليل للبيانات وتفاصيلك مخزونك بشكل دوري",
                ]
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
