<?php

namespace Database\Seeders;

use CategorySeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            //3

            // 17 id = 3 - 20
            ['id'=>1, 'name' => 'About','description' => 'ScienceSoft is a US-based IT consulting and software development company founded in 1989. We are a team of 700 employees, including technical experts and BAs.'],
            
            //35 id = 21 - 56 
            ['id'=>2, 'name' => 'Services','description' => 'We handle complex business challenges building all types of custom and platform-based solutions and providing a comprehensive set of end-to-end IT services.'],
            ['id'=>21, 'name' => 'Service Types', 'category_id' => 2],
            ['id'=>22, 'name' => 'Testing and QA', 'category_id' => 21, 'path_blade' => 'services.services_types.testing_and_qa'],
            ['id'=>23, 'name' => 'Application Services', 'category_id' => 21, 'path_blade' => 'services.services_types.application_services'],
            ['id'=>24, 'name' => 'UI/UX Design', 'category_id' => 21, 'path_blade' => 'services.services_types.ui_ux_design'],
            ['id'=>25, 'name' => 'Infrastructure Services', 'category_id' => 21, 'path_blade' => 'services.services_types.infrastructure_services'],
            ['id'=>26, 'name' => 'Managed IT Services', 'category_id' => 21, 'path_blade' => 'services.services_types.managed_it_services'],
            ['id'=>27, 'name' => 'IT Outsourcing', 'category_id' => 21, 'path_blade' => 'services.services_types.it_outsourcing'],
            ['id'=>28, 'name' => 'IT Consulting', 'category_id' => 21, 'path_blade' => 'services.services_types.it_consulting'],
            ['id'=>29, 'name' => 'IT Support', 'category_id' => 21, 'path_blade' => 'services.services_types.it_support'],
            
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
            
            //
            
            ['id'=>4, 'name' => 'Healthcare', 'category_id'=>3, 'path_blade'=>'industries.healthcare'],
            ['id'=>5, 'name' => 'Banking and Financial Services', 'category_id'=>3, 'path_blade'=>'industries.banking_financial_services'],

            ['id'=>6, 'name' => 'Company', 'category_id'=>1],
            ['name' => 'About Company', 'category_id'=>6, 'path_blade'=>'about.company.about_company'],

        );
    }
}
