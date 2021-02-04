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
            ['id'=>22, 'name' => 'Software Development', 'category_id' => 21, 'description_link' => 'The development of reliable and scalable software solutions for any OS, browser and device. We bring together deep industry expertise and the latest IT advancements to deliver custom solutions and products that perfectly fit the needs and behavior of their users.', 'path_blade' => 'services.service_types.testing_and_qa'],
            ['id'=>23, 'name' => 'Infrastructure Services', 'category_id' => 21, 'description_link' => 'We apply our 10-year experience to offer a full set of infrastructure services. We can help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.', 'path_blade' => 'services.service_types.infrastructure_services'],
            ['id'=>24, 'name' => 'Application Services', 'category_id' => 21, 'description_link' => 'The full set of services around development and maintenance of complex business-critical applications. Our experts build, test, deploy, protect, manage, migrate and optimize enterprise-scale digital solutions ensuring they’re always up and running and achieve the optimal TCO.',  'path_blade' => 'services.service_types.application_services'],
            ['id'=>25, 'name' => 'UI/UX Design', 'category_id' => 21, 'description_link' => 'User experience and user interface design for all types of websites, SaaS, and web/mobile apps. We combine the latest UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful designs that power up businesses.', 'path_blade' => 'services.service_types.ui_ux_design'],
            ['id'=>26, 'name' => 'Testing and QA', 'category_id' => 21, 'description_link' => 'We offer full-range QA and testing outsourcing services, can help to develop your QA or enhance the existing one, assist you in TCoE setup and evolution. We perform end-to-end testing of mobile, web and desktop application at each stage of the development lifecycle.', 'path_blade' => 'services.service_types.testing_and_qa'],
            ['id'=>27, 'name' => 'IT Consulting', 'category_id' => 21, 'description_link' => 'Our experts can help to develop and implement an effective IT strategy, assist in smooth digital transformation and system integration as well as advise on improvements to your digital customer experience.', 'path_blade' => 'services.service_types.it_consulting'],
            ['id'=>28, 'name' => 'Data Analytics', 'category_id' => 21, 'description_link' => 'Our experts can help to develop and implement an effective IT strategy, assist in smooth digital transformation and system integration as well as advise on improvements to your digital customer experience.', 'path_blade' => 'services.service_types.managed_it_services'],
            ['id'=>29, 'name' => 'Help Desk Services', 'category_id' => 21, 'description_link' => 'Help desk services for your IT environment or software products. We take on solving diverse issues from answering application functionality questions to performing fixes and enhancements on the code level for improved adoption of software, its smooth functioning and increased end user satisfaction.', 'path_blade' => 'services.service_types.it_support'],
            ['id'=>30, 'name' => 'Cybersecurity Services', 'category_id' => 21, 'description_link' => 'Cybersecurity services to achieve the robust protection of the companies’ applications and networks. Equipped with 16-year experience in information security, our security experts are ready to deliver a variety of cyber protection services.', 'path_blade' => 'services.service_types.it_outsourcing'],

            ['id'=>31, 'name' => 'Solutions', 'category_id' => 2],
            ['id'=>32, 'name' => 'Data Analytics', 'category_id' => 31, 'path_blade' => 'services.solutions.data_analytics'],
            ['id'=>33, 'name' => 'CRM', 'category_id' => 31, 'path_blade' => 'services.solutions.CRM'],
            ['id'=>34, 'name' => 'Cybersecurity', 'category_id' => 31, 'path_blade' => 'services.solutions.cyber_security'],
            ['id'=>35, 'name' => 'Internet of Things', 'category_id' => 31, 'path_blade' => 'services.solutions.internet_of_things'],
            ['id'=>36, 'name' => 'Virtual Reality', 'category_id' => 31, 'path_blade' => 'services.solutions.virtual_reality', 'active' => false],
            ['id'=>37, 'name' => 'Image Analysis', 'category_id' => 31, 'path_blade' => 'services.solutions.image_analysis', 'active' => false],
            ['id'=>38, 'name' => 'Web Portals', 'category_id' => 31, 'path_blade' => 'services.solutions.web_portals'],
            ['id'=>39, 'name' => 'Ecommerce', 'category_id' => 31, 'path_blade' => 'services.solutions.ecommerce'],
            ['id'=>40, 'name' => 'Fleet Management', 'category_id' => 31, 'path_blade' => 'services.solutions.fleet_management'],
            ['id' => 41, 'name' => 'Platforms', 'category_id' => 2],
            ['id' => 42, 'name' => 'SharePoint and Office 365', 'category_id' => 41, 'path_blade' => 'services.platforms.share_point_office_365'],
            ['id' => 43, 'name' => 'Microsoft Dynamics 365', 'category_id' => 41, 'path_blade' => 'services.platforms.microsoft_dynamics_365'],
            ['id' => 44, 'name' => 'Microsoft Power BI', 'category_id' => 41, 'path_blade' => 'services.platforms.microsoft_power_bi'],
            ['id' => 45, 'name' => 'Salesforce', 'category_id' => 41, 'path_blade' => 'services.platforms.salesforce'],
            ['id' => 46, 'name' => 'Magento', 'category_id' => 41, 'path_blade' => 'services.platforms.magento'],
            ['id' => 47, 'name' => 'Service Now', 'category_id' => 41, 'path_blade' => 'services.platforms.service_now'],

            ['id' => 48, 'name' => 'Technologies', 'category_id' => 2],
            ['id' => 49, 'name' => 'Java', 'category_id' => 48, 'path_blade' => "services.technologies.java"],
            ['id' => 50, 'name' => '.NET', 'category_id' => 48, 'path_blade' => "services.technologies.net"],
            ['id' => 51, 'name' => 'PHP', 'category_id' => 48, 'path_blade' => "services.technologies.PHP"],
            ['id' => 52, 'name' => 'Python', 'category_id' => 48, 'path_blade' => "services.technologies.python"],
            ['id' => 53, 'name' => 'Golang', 'category_id' => 48, 'path_blade' => "services.technologies.golang"],
            ['id' => 54, 'name' => 'C++', 'category_id' => 48, 'path_blade' => "services.technologies.cPlus"],
            ['id' => 55, 'name' => 'Configure Your Team', 'category_id' => 48, 'path_blade' => "services.technologies.configure_your_team"],
            //12  id = 56 - 68
            ['id'=>3, 'name' => 'Industries','description' => 'To power businesses with a meaningful digital change, ScienceSoft’s team maintains a solid knowledge of trends, needs and challenges in more than 20 industries.'],
            ['id'=>56, 'name' => '', 'category_id'=>3],
            ['id'=>57, 'name' => 'Healthcare', 'category_id'=>56, 'path_blade'=>'industries.healthcare'],
            ['id'=>58, 'name' => 'Banking and Financial Services', 'category_id'=>56, 'path_blade'=>'industries.banking_financial_services'],
            ['id'=>59, 'name' => 'Retail', 'category_id'=>56, 'path_blade'=>'industries.retail'],
            ['id'=>60, 'name' => 'Ecommerce', 'category_id'=>56, 'path_blade'=>'industries.ecommerce'],
            ['id'=>61, 'name' => 'Manufacturing', 'category_id'=>56, 'path_blade'=>'industries.manufacturing'],
            ['id'=>62, 'name' => 'Marketing & Advertising', 'category_id'=>56, 'path_blade'=>'industries.market_advertising'],
            ['id'=>63, 'name' => 'Telecommunications', 'category_id'=>56, 'path_blade'=>'industries.telecommunications'],
            ['id'=>64, 'name' => 'eLearning', 'category_id'=>56, 'path_blade'=>'industries.elearning'],
            ['id'=>65, 'name' => 'Transportation and Logistics', 'category_id'=>56, 'path_blade'=>'industries.transportation_logistics'],
            ['id'=>66, 'name' => 'Oil & Gas', 'category_id'=>56, 'path_blade'=>'industries.oil_gas'],
            ['id'=>67, 'name' => 'Professional Services', 'category_id'=>56, 'path_blade'=>'industries.professional_services'],
            ['id'=>68, 'name' => 'Insurance', 'category_id'=>56, 'path_blade'=>'industries.insurance'],

        ];
        foreach($categories as $category){
            Category::updateOrCreate($category);
        }

        DB::table('category_lists')->insert([
        [
            'category_id' => 22,
            'link' => 'Software product development'
        ],
        [
            'category_id' => 22,
            'link' => 'Software consulting'
        ],
        [
            'category_id' => 22,
            'link' => 'Software product development'
        ],
        [
            'category_id' => 22,
            'link' => 'Software development outsourcing'
        ],
        [
            'category_id' => 22,
            'link' => 'Custom software development'
        ],
        [
            'category_id' => 22,
            'link' => 'Team augmentation'
        ],
        // =========================================
        [
            'category_id' => 23,
            'link' => 'Managed IT Support'
        ],
        [
            'category_id' => 23,
            'link' => 'Cloud consulting and management'
        ],
        [
            'category_id' => 23,
            'link' => 'Virtual desktop consulting, implementation and support'
        ],
        [
            'category_id' => 23,
            'link' => 'Data center support and management'
        ],
        [
            'category_id' => 23,
            'link' => 'DevOps consulting and implementation'
        ],
        [
            'category_id' => 23,
            'link' => 'Networking management services'
        ],
        // =========================================
        [
            'category_id' => 24,
            'link' => 'Application management'
        ],
        [
            'category_id' => 24,
            'link' => 'Application integration'
        ],
        [
            'category_id' => 24,
            'link' => 'Application development'
        ],
        [
            'category_id' => 24,
            'link' => 'Application maintenance and support'
        ],
        [
            'category_id' => 24,
            'link' => 'Application modernization'
        ],
        [
            'category_id' => 24,
            'link' => 'Application security services'
        ],
        [
            'category_id' => 24,
            'link' => 'Application testing'
        ],
        // =========================================
        [
            'category_id' => 25,
            'link' => 'User Interface (UI) Design'
        ],
        [
            'category_id' => 25,
            'link' => 'Software-as-as-Service (SaaS) UI Design'
        ],
        [
            'category_id' => 25,
            'link' => 'Responsive Web App Design'
        ],
        [
            'category_id' => 25,
            'link' => 'User Experience (UX) Design'
        ],
        [
            'category_id' => 25,
            'link' => 'Responsive Web Design'
        ],
        [
            'category_id' => 25,
            'link' => 'Ecommerce Website Design'
        ],
        [
            'category_id' => 25,
            'link' => 'Website Redesign'
        ],
        // =========================================
        [
            'category_id' => 26,
            'link' => 'QA outsourcing'
        ],
        [
            'category_id' => 26,
            'link' => 'Security testing'
        ],
        [
            'category_id' => 26,
            'link' => 'Usability testing'
        ],
        [
            'category_id' => 26,
            'link' => 'Test automation'
        ],
        [
            'category_id' => 26,
            'link' => 'QA consulting'
        ],
        [
            'category_id' => 26,
            'link' => 'Functional testing'
        ],
        [
            'category_id' => 26,
            'link' => 'Performance testing'
        ],
        // ========================================
        [
            'category_id' => 27,
            'link' => 'Digital Transformation Consulting'
        ],
        [
            'category_id' => 27,
            'link' => 'Digital Crisis Management Consulting'
        ],
        [
            'category_id' => 27,
            'link' => 'Solution consulting'
        ],
        [
            'category_id' => 27,
            'link' => 'Enterprise IT consulting'
        ],
        [
            'category_id' => 27,
            'link' => 'Project Management Consulting'
        ],
        [
            'category_id' => 27,
            'link' => 'IT Service Management Consulting'
        ],
        [
            'category_id' => 27,
            'link' => 'Platform consulting'
        ],
        // ========================================
        [
            'category_id' => 28,
            'link' => 'Business Intelligence'
        ],
        [
            'category_id' => 28,
            'link' => 'Data Warehousing'
        ],
        [
            'category_id' => 28,
            'link' => 'Data Management'
        ],
        [
            'category_id' => 28,
            'link' => 'Data Analytics as a Service'
        ],
        [
            'category_id' => 28,
            'link' => 'Big Data'
        ],
        [
            'category_id' => 28,
            'link' => 'Data Science'
        ],
        [
            'category_id' => 28,
            'link' => 'Machine and Deep Learning'
        ],
        // ========================================
        [
            'category_id' => 29,
            'link' => 'Help desk outsourcing'
        ],
        [
            'category_id' => 29,
            'link' => 'Outsourced help desk for MSP'
        ],
        [
            'category_id' => 29,
            'link' => 'IT help desk services'
        ],
        [
            'category_id' => 29,
            'link' => 'NOC outsourcing'
        ],
        // ========================================
        [
            'category_id' => 30,
            'link' => 'Managed security services'
        ],
        [
            'category_id' => 30,
            'link' => 'Information security consulting'
        ],
        [
            'category_id' => 30,
            'link' => 'Application security implementation'
        ],
        [
            'category_id' => 30,
            'link' => 'Compliance testing'
        ],
        [
            'category_id' => 30,
            'link' => 'Security code review'
        ],
        [
            'category_id' => 30,
            'link' => 'Vulnerability assessment and penetration testing'
        ],
        // ========================================
        ]);
        // Category::insert($categories);
        // DB::table('categories')->insert($categories);
    }
}
