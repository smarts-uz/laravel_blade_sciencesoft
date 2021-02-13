<?php

namespace Database\Seeders;

use App\Models\Category;
use CategorySeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::Create(
            [
                'name' => 'begzod',
                'email' => 'erkinovbegzod.45@gmail.com',
                'password' => bcrypt('begzod12345'),
            ]
        );


        //3
        $categories=[
            // 17 id = 3 - 20
            ['id'=>1, 'name' => 'About','description' => 'ScienceSoft is a US-based IT consulting and software development company founded in 1989. We are a team of 700 employees, including technical experts and BAs.'],
            ['id'=>4, 'name' => 'Company', 'category_id'=>1],
            ['id'=>5, 'name' => 'About Company', 'category_id'=>4, 'path_blade'=>'about.company.about_company'],
            ['id'=>6, 'name' => 'Management Team', 'category_id'=>4, 'path_blade'=>'about.company.management_team'],
            ['id'=>7, 'name' => 'Careers', 'category_id'=>4, 'path_blade'=>'about.company.careers'],
            ['id'=>8, 'name' => 'Partnerships', 'category_id'=>4, 'path_blade'=>'about.company.partnerships'],
            ['id'=>9, 'name' => 'Sciencesoft Referral Program', 'category_id'=>4, 'path_blade'=>'about.company.sciencesoft_referral_program'],
            ['id'=>10, 'name' => 'Our Locations', 'category_id'=>4, 'path_blade'=>'about.company.our_locations'],
            ['id'=>11, 'name' => 'Approach', 'category_id'=>1],
            ['id'=>12, 'name'=>'Development Process', 'category_id'=>11, 'path_blade'=>'about.approach.development_process'],
            ['id'=>13, 'name'=>'Sustainability Policy', 'category_id'=>11, 'path_blade'=>'about.approach.sustainability_policy'],
            ['id'=>14, 'name'=>'Privacy Policy', 'category_id'=>11, 'path_blade'=>'about.approach.privacy_policy'],
            ['id'=>15, 'name'=>'Terms of Use', 'category_id'=>11, 'path_blade'=>'about.approach.terms_of_use'],
            ['id'=>16, 'name' => 'Recognition', 'category_id'=>1],
            ['id'=>17, 'name'=>'Testimonials', 'category_id'=>16, 'path_blade'=>'about.recognition.testimonials'],
            ['id'=>18, 'name'=>'Awards and Acknowledgements', 'category_id'=>16, 'path_blade'=>'about.recognition.awards_and_acknowledgements'],
            ['id'=>19, 'name'=>'Press Room', 'category_id'=>16, 'path_blade'=>'about.recognition.press_room'],
            ['id'=>20, 'name'=>'News', 'category_id'=>16, 'path_blade'=>'about.recognition.news'],
            //35 id = 21 - 56
            ['id'=>2, 'name' => 'Services','description' => 'We handle complex business challenges building all types of custom and platform-based solutions and providing a comprehensive set of end-to-end IT services.'],
            ['id'=>21, 'name' => 'Service Types', 'category_id' => 2],
            ['id'=>22, 'name' => 'Testing and QA', 'category_id' => 21, 'path_blade' => 'services.service_types.testing_and_qa'],
            ['id'=>23, 'name' => 'Application Services', 'category_id' => 21, 'path_blade' => 'services.service_types.application_services'],
            ['id'=>24, 'name' => 'UI/UX Design', 'category_id' => 21, 'path_blade' => 'services.service_types.ui_ux_design'],
            ['id'=>25, 'name' => 'Infrastructure Services', 'category_id' => 21, 'path_blade' => 'services.service_types.infrastructure_services'],
            ['id'=>26, 'name' => 'Managed IT Services', 'category_id' => 21, 'path_blade' => 'services.service_types.managed_it_services'],
            ['id'=>27, 'name' => 'IT Outsourcing', 'category_id' => 21, 'path_blade' => 'services.service_types.it_outsourcing'],
            ['id'=>28, 'name' => 'IT Consulting', 'category_id' => 21, 'path_blade' => 'services.service_types.it_consulting'],
            ['id'=>29, 'name' => 'IT Support', 'category_id' => 21, 'path_blade' => 'services.service_types.it_support'],

            ['id'=>30, 'name' => 'Solutions', 'category_id' => 2],
            ['id'=>31, 'name' => 'Data Analytics', 'category_id' => 30, 'path_blade' => 'services.solutions.data_analytics'],
            ['id'=>32, 'name' => 'CRM', 'category_id' => 30, 'path_blade' => 'services.solutions.CRM'],
            ['id'=>33, 'name' => 'Cybersecurity', 'category_id' => 30, 'path_blade' => 'services.solutions.cyber_security'],
            ['id'=>34, 'name' => 'Internet of Things', 'category_id' => 30, 'path_blade' => 'services.solutions.internet_of_things'],
            ['id'=>35, 'name' => 'Virtual Reality', 'category_id' => 30, 'path_blade' => 'services.solutions.virtual_reality', 'active' => false],
            ['id'=>36, 'name' => 'Image Analysis', 'category_id' => 30, 'path_blade' => 'services.solutions.image_analysis', 'active' => false],
            ['id'=>37, 'name' => 'Web Portals', 'category_id' => 30, 'path_blade' => 'services.solutions.web_portals'],
            ['id'=>38, 'name' => 'Ecommerce', 'category_id' => 30, 'path_blade' => 'services.solutions.ecommerce'],
            ['id'=>39, 'name' => 'Fleet Management', 'category_id' => 30, 'path_blade' => 'services.solutions.fleet_management'],

            ['id' => 40, 'name' => 'Platforms', 'category_id' => 2],
            ['id' => 41, 'name' => 'SharePoint and Office 365', 'category_id' => 40, 'path_blade' => 'services.platforms.share_point_office_365'],
            ['id' => 42, 'name' => 'Microsoft Dynamics 365', 'category_id' => 40, 'path_blade' => 'services.platforms.microsoft_dynamics_365'],
            ['id' => 43, 'name' => 'Microsoft Power BI', 'category_id' => 40, 'path_blade' => 'services.platforms.microsoft_power_bi'],
            ['id' => 44, 'name' => 'Salesforce', 'category_id' => 40, 'path_blade' => 'services.platforms.salesforce'],
            ['id' => 45, 'name' => 'Magento', 'category_id' => 40, 'path_blade' => 'services.platforms.magento'],
            ['id' => 46, 'name' => 'Service Now', 'category_id' => 40, 'path_blade' => 'services.platforms.service_now'],

            ['id' => 47, 'name' => 'Technologies', 'category_id' => 2],
            ['id' => 48, 'name' => 'Java', 'category_id' => 47, 'path_blade' => "services.technologies.java"],
            ['id' => 49, 'name' => '.NET', 'category_id' => 47, 'path_blade' => "services.technologies.net"],
            ['id' => 50, 'name' => 'PHP', 'category_id' => 47, 'path_blade' => "services.technologies.PHP"],
            ['id' => 51, 'name' => 'Python', 'category_id' => 47, 'path_blade' => "services.technologies.python"],
            ['id' => 52, 'name' => 'Golang', 'category_id' => 47, 'path_blade' => "services.technologies.golang"],
            ['id' => 53, 'name' => 'C++', 'category_id' => 47, 'path_blade' => "services.technologies.cPlus"],
            ['id' => 54, 'name' => 'Configure Your Team', 'category_id' => 47, 'path_blade' => "services.technologies.configure_your_team"],
            //12  id = 56 - 68
            ['id'=>3, 'name' => 'Industries','description' => 'To power businesses with a meaningful digital change, ScienceSoft’s team maintains a solid knowledge of trends, needs and challenges in more than 20 industries.'],
            ['id'=>55, 'name' => '', 'category_id'=>3],
            ['id'=>56, 'name' => 'Healthcare', 'category_id'=>55, 'path_blade'=>'industries.healthcare'],
            ['id'=>57, 'name' => 'Banking and Financial Services', 'category_id'=>55, 'path_blade'=>'industries.banking_financial_services'],
            ['id'=>58, 'name' => 'Retail', 'category_id'=>55, 'path_blade'=>'industries.retail'],
            ['id'=>59, 'name' => 'Ecommerce', 'category_id'=>55, 'path_blade'=>'industries.ecommerce'],
            ['id'=>60, 'name' => 'Manufacturing', 'category_id'=>55, 'path_blade'=>'industries.manufacturing'],
            ['id'=>61, 'name' => 'Marketing & Advertising', 'category_id'=>55, 'path_blade'=>'industries.market_advertising'],
            ['id'=>62, 'name' => 'Telecommunications', 'category_id'=>55, 'path_blade'=>'industries.telecommunications'],
            ['id'=>63, 'name' => 'eLearning', 'category_id'=>55, 'path_blade'=>'industries.elearning'],
            ['id'=>64, 'name' => 'Transportation and Logistics', 'category_id'=>55, 'path_blade'=>'industries.transportation_logistics'],
            ['id'=>65, 'name' => 'Oil & Gas', 'category_id'=>55, 'path_blade'=>'industries.oil_gas'],
            ['id'=>66, 'name' => 'Professional Services', 'category_id'=>55, 'path_blade'=>'industries.professional_services'],
            ['id'=>67, 'name' => 'Insurance', 'category_id'=>55, 'path_blade'=>'industries.insurance'],
            //
            ['id'=>68, 'name' => 'Blog', 'path_blade'=>'blog'],

        ];
        foreach($categories as $category){
            Category::updateOrCreate($category);
        }
        // Category::insert($categories);
        // DB::table('categories')->insert($categories);

        DB::table('languages')->delete();

        DB::table('languages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'rtl' => 0,
                'created_at' => '2019-01-20 17:13:20',
                'updated_at' => '2019-01-20 17:13:20',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => "O'zbekcha",
                'code' => 'uz',
                'rtl' => 0,
                'created_at' => '2019-02-17 11:35:37',
                'updated_at' => '2019-02-18 11:49:51',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Русский',
                'code' => 'ru',
                'rtl' => 1,
                'created_at' => '2019-04-28 23:34:12',
                'updated_at' => '2019-04-28 23:34:12',
            ),
        ));

        DB::table('translations')->delete();

        DB::table('translations')->insert(array (
            0 =>
            array (
                'id' => 3,
                'lang' => 'en',
                'lang_key' => 'All Category',
                'lang_value' => 'All Category',
                'created_at' => '2020-11-02 12:40:38',
                'updated_at' => '2020-11-02 12:40:38',
            ),
            1 =>
            array (
                'id' => 4,
                'lang' => 'en',
                'lang_key' => 'All',
                'lang_value' => 'All',
                'created_at' => '2020-11-02 12:40:38',
                'updated_at' => '2020-11-02 12:40:38',
            ),
        ));
    }
}
