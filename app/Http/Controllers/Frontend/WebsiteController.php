<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ElevenActivity;
use App\Models\ElevenField;
use App\Models\ElevenPartner;
use App\Models\Privacy;
use App\Models\Slider;
use App\Models\TeamWork;
use App\Models\Tearm;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function home()
    {
        $sliders = Slider::where('section_title', 'home_page')->get();
        $about = About::where('section_title', 'home_about')->first();
        $manager_word = About::where('section_title', 'manager_words')->first();
        $services = ElevenField::where('section_title', 'home_service')->get();
        $partners = ElevenPartner::where('section_title', 'home_partner')->get();
        $testimonials = Testimonial::all();
        return view('website.pages.home.index', compact("sliders", "about", "manager_word", "services", "partners", "testimonials"));
    }

    public function about_eleven()
    {
        $about = About::where('section_title', 'home_about')->first();
        return view('website.pages.home.about_eleven', compact("about"));
    }

    public function sport()
    {
        $sliders = Slider::where('section_title', 'sport_page')->get();
        $about = About::where('section_title','about_sport')->first();
        $activities = ElevenActivity::where('section_title','sport')->get();
        return view('website.pages.sport.index', compact("sliders", "about", "activities"));
    }

    public function sub_sport()
    {
        $sliders = Slider::where('section_title', 'sport_page')->get();
        $about = About::where('section_title','about_sport')->first();
        $activities = ElevenActivity::where('section_title','sport')->get();
        return view('website.sub_pages.sport.index', compact("sliders", "about", "activities"));
    }

    public function about_sport()
    {
        $about = About::where('section_title', 'about_sport')->first();
        return view('website.pages.sport.about_sport', compact("about"));
    }

    public function sport_activity($id)
    {
        $activity = ElevenActivity::findOrFail($id);
        return view('website.pages.sport.activity', compact("activity"));
    }

    public function general_tourism()
    {
        $sliders = Slider::where('section_title', 'general_tourism')->get();
        $activities = ElevenActivity::where('section_title','general_tourism')->get();
        $partners = ElevenPartner::where('section_title', 'general_tourism')->get();
        return view('website.pages.general_tourism.index', compact("sliders", "activities", "partners"));
    }

    public function general_tourism_activity($id)
    {
        $activity = ElevenActivity::findOrFail($id);
        return view('website.pages.general_tourism.activity', compact("activity"));
    }

    public function sub_general_tourism()
    {
        $sliders = Slider::where('section_title', 'general_tourism')->get();
        $activities = ElevenActivity::where('section_title','general_tourism')->get();
        $partners = ElevenPartner::where('section_title', 'general_tourism')->get();
        return view('website.sub_pages.general_tourism.index', compact("sliders", "activities", "partners"));
    }

    public function medical_tourism()
    {
        $sliders = Slider::where('section_title', 'medical_tourism')->get();
        $fields = ElevenField::where('section_title', 'medical_field')->get();
        $partners = ElevenPartner::where('section_title', 'medical_tourism')->get();
        return view('website.pages.medical_tourism.index', compact("sliders", "fields", "partners"));
    }

    public function sub_medical_tourism()
    {
        $sliders = Slider::where('section_title', 'medical_tourism')->get();
        $fields = ElevenField::where('section_title', 'medical_field')->get();
        $partners = ElevenPartner::where('section_title', 'medical_tourism')->get();
        return view('website.sub_pages.medical_tourism.index', compact("sliders", "fields", "partners"));
    }

    public function trading()
    {
        $sliders = Slider::where('section_title', 'trade')->get();
        $about = About::where('section_title', 'about_trade')->first();
        $fields = ElevenField::where('section_title', 'trade')->get();
        return view('website.pages.trading.index', compact("sliders", "about", "fields"));
    }

    public function sub_trading()
    {
        $sliders = Slider::where('section_title', 'trade')->get();
        $about = About::where('section_title', 'about_trade')->first();
        $fields = ElevenField::where('section_title', 'trade')->get();
        return view('website.sub_pages.trading.index', compact("sliders", "about", "fields"));
    }

    public function real_estate()
    {
        $sliders = Slider::where('section_title', 'real_estate')->get();
        $about = About::where('section_title','about_realEstate')->first();
        $fields = ElevenField::where('section_title','real_estate')->get();
        $partners = ElevenPartner::where('section_title','real_estate')->get();
        return view('website.pages.real_estate.index', compact("sliders", "about", "fields", "partners"));
    }

    public function sub_real_estate()
    {
        $sliders = Slider::where('section_title', 'real_estate')->get();
        $about = About::where('section_title','about_realEstate')->first();
        $fields = ElevenField::where('section_title','real_estate')->get();
        $partners = ElevenPartner::where('section_title','real_estate')->get();
        return view('website.sub_pages.real_estate.index', compact("sliders", "about", "fields", "partners"));
    }

    public function programming()
    {
        $sliders = Slider::where('section_title', 'programming_page')->get();
        $services = ElevenField::where('section_title','programming_service')->get();
        return view('website.pages.programming.index', compact("sliders", "services"));
    }

    public function sub_programming()
    {
        $sliders = Slider::where('section_title', 'programming_page')->get();
        $services = ElevenField::where('section_title','programming_service')->get();
        return view('website.sub_pages.programming.index', compact("sliders", "services"));
    }

    public function teamwork()
    {
        $teamWorks = TeamWork::all();
        return view('website.pages.teamwork.index', compact('teamWorks'));
    }

    public function privacy()
    {
        $privacy = Privacy::first();
        return view('website.pages.privacy.index', compact('privacy'));
    }

    public function tearms()
    {
        $tearms = Tearm::first();
        return view('website.pages.tearms.index', compact('tearms'));
    }
}
