<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function Emergency()
    {
        return view('ServiceLines/Emergency');
    }

    public function Critical()
    {
        return view('ServiceLines/Critical');
    }

    public function Virtual()
    {
        return view('ServiceLines/Virtual');
    }

    public function Hospital()
    {
        return view('ServiceLines/Hospital');
    }

    public function Clinical()
    {
        return view('ServiceLines/Clinical');
    }

    public function Connected()
    {
        return view('ServiceLines/Connected');
    }

    public function Health()
    {
        return view('Company/Health');
    }

    public function Partner()
    {
        return view('Company/Partner');
    }

    public function Leaders()
    {
        return view('Company/Leaders');
    }

    public function Technology()
    {
        return view('Company/Technology');
    }

    public function Sustainability()
    {
        return view('Company/Sustainability');
    }

    public function Corporate()
    {
        return view('Company/Corporate');
    }

    public function ClinicalEducation()
    {
        return view('ClinicalCareers/ClinicalEducation');
    }

    public function Working()
    {
        return view('ClinicalCareers/Working');
    }

    public function Resources()
    {
        return view('ClinicalCareers/Working');
    }

    public function Blog()
    {
        return view('ClinicalCareers/Working');
    }

    public function News()
    {
        return view('ClinicalCareers/Working');
    }

    public function Events()
    {
        return view('NewResource/Events');
    }
    public function ContactUs()
    {
        return view('ContactUs');
    }
}
