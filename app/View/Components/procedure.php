<?php

namespace App\View\Components;

use Illuminate\View\Component;

class procedure extends Component
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
        $procedures = [
            [
                'image' => '/images/about/big_data.svg',
                'title' => 'Data analytics including big data analytics',
                'sub_title' => 'Cleansing and integrating data, providing analysis and visualization to get valuable business insights.'
            ],
            [
                'image' => '/images/about/crm.svg',
                'title' => 'CRM',
                'sub_title' => 'Helping companies enhance customer management, win new clients and improve productivity.'
            ],
            [
                'image' => '/images/about/ecommerce.svg',
                'title' => 'Ecommerce',
                'sub_title' => 'Seizing the potential of Magento to ensure efficient inventory management, analytics and reporting, cross-business order management, account, purchase and payment history review and more.'
            ],
            [
                'image' => '/images/about/enterprise_portals.svg',
                'title' => 'Portals',
                'sub_title' => 'Helping companies build efficient e-cooperation with their customers and partners.'
            ],
            [
                'image' => '/images/about/mobile.svg',
                'title' => 'Mobile Apps',
                'sub_title' => 'Developing native and cross-platform apps for customers and employees in healthcare, banking, retail, manufacturing and professional services and more at employee, department and company level.'
            ]
            ];
        return view('components.procedure', ['procedures'=>$procedures]);
    }

}
