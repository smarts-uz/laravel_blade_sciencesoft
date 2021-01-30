<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SoftController extends Controller
{
    /**
     * Show front home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.pages.index');
    }
      /**
     * Show front about-company-pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function contact()
    {
        return view('front.pages.contact-us');
    }
    public function aboutCompany()
    {
        return view('front.pages.About.Company.aboutCompany');
    }
    public function managementTeam()
    {
        return view('front.pages.management-team');
    }
    public function careers()
    {
        return view('front.pages.About.careers');
    }
    public function partnerships()
    {
        return view('front.pages.About.Company.partnerships');
    }
    public function ScienceSoftReferralProgram()
    {
        return view('front.pages.About.Company.ScienceSoftReferralProgram');
    }
    public function ourLocations()
    {
        return view('front.pages.About.Company.ourLocations');
    }
      /**
     * Show front about-approach-pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function developmentProcess()
    {
        return view('front.pages.About.Approach.ourLocations');
    }
    public function sustainabilityPolicy()
    {
        return view('front.pages.About.Approach.sustainabilityPolicy');
    }
    public function privacyPolicy()
    {
        return view('front.pages.About.Approach.privacyPolicy');
    }
    public function termsOfUse()
    {
        return view('front.pages.About.Approach.termsOfUse');
    }

    public function softwaredevelopment()
    {
        return view('front.pages.Services.software-development');
    }
       /**
     * Show front about-recognition-pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function testimonials()
    {
        return view('front.pages.About.Recognition.testimonials');
    }
    public function awardsAndAcknowledgements()
    {
        return view('front.pages.About.Recognition.awardsAndAcknowledgements');
    }
    public function pressRoom()
    {
        return view('front.pages.About.Recognition.pressRoom');
    }
    public function news()
    {
        return view('front.pages.About.Recognition.news');
    }
      /**
     * Show front services-technologies-pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function java()
    {
        return view('front.pages.Services.Technologies.java');
    }
    public function net()
    {
        return view('front.pages.Services.Technologies.NET');
    }
    public function PHP()
    {
        return view('front.pages.Services.Technologies.PHP');
    }
    public function python()
    {
        return view('front.pages.Services.Technologies.python');
    }
    public function golang()
    {
        return view('front.pages.Services.Technologies.golang');
    }
    public function cPlus()
    {
        return view('front.pages.Services.Technologies.cPlus');
    }
    public function configureYourTeam()
    {
        return view('front.pages.Services.Technologies.configureYourTeam');
    }
      /**
     * Show front industry-pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function healthcare()
    {
        return view('front.pages.Industries.healthcare');
    }
    public function bankingFinancialServices()
    {
        return view('front.pages.Industries.bankingFinancialServices');
    }
    public function retail()
    {
        return view('front.pages.Industries.retail');
    }
    public function ecommerce()
    {
        return view('front.pages.Industries.ecommerce');
    }
    public function manufacturing()
    {
        return view('front.pages.Industries.manufacturing');
    }
    public function marketAdvertising()
    {
        return view('front.pages.Industries.marketAdvertising');
    }
    public function telecommunications()
    {
        return view('front.pages.Industries.telecommunications');
    }
    public function elearning()
    {
        return view('front.pages.Industries.elearning');
    }
    public function transportationLogistics()
    {
        return view('front.pages.Industries.transportationLogistics');
    }
    public function oilGas()
    {
        return view('front.pages.Industries.oilGas');
    }
    public function professionalServices()
    {
        return view('front.pages.Industries.professionalServices');
    }
    public function insurance()
    {
        return view('front.pages.Industries.insurance');
    }
    
}