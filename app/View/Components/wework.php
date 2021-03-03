<?php

namespace App\View\Components;

use Illuminate\View\Component;

class wework extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $weworks = [
            [
                'title' => 'Healthcare',
                'sub_title1' => '15 years in healthcare IT consulting and software development.',
                'sub_title2' => 'Our customers are',
                'sub_title2_strong' => 'Baxter, MSxHealth, Chiron Health, Saratoga Bridges',
                'sub_title2_st' => 'and other healthcare service providers.',
                'sub_title3' => 'We offer mobile applications for doctors and patients, healthcare CRM, medical portals, healthcare data analytics and more.',
            ],
            [
                'title' => 'Banking',
                'sub_title1' => '15 years in mobile banking and intranets, document and knowledge management, banking data analytics, customer portals, loyalty program management and more.',
                'sub_title2' => 'Our customers are',
                'sub_title2_strong' => 'Baxter, MSxHealth, Chiron Health, Saratoga Bridges',
                'sub_title2_st' => 'and other healthcare service providers.',
                'sub_title3' => 'We offer mobile applications for doctors and patients, healthcare CRM, medical portals, healthcare data analytics and more.',
            ],
            [
                'title' => 'Retail and consumer goods',
                'sub_title1' => '15 years in healthcare IT consulting and software development.',
                'sub_title2' => 'Our customers are Baxter, MSxHealth, Chiron Health, Saratoga Bridges and other healthcare service providers.We offer ecommerce, loyalty solutions, customer data analytics, retail business intelligence, in-store automation.',
                'sub_title2_strong' => 'Baxter, MSxHealth, Chiron Health, Saratoga Bridges',
                'sub_title2_st' => 'We’ve been delivering IT Retail services since 2003 and created IT solutions for such corporations as Walmart, Nestle, Heinz and more.',
                'sub_title3' => '',
            ]
        ];
        return view('components.wework', ['weworks' => $weworks]);
    }
}
