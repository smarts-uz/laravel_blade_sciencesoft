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
