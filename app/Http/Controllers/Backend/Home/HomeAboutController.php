<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeAboutController extends Controller
{
    use FileManager;

    public function about_eleven()
    {
        $about = About::first();
        return view('cms.pages.home.abouts.index', compact("about"));
    }

    public function update_about_eleven(Request $request)
    {
        $rules = [
            '*' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        About::updateOrCreate(['section_title' => 'home_about'], [
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'title_tu' => $request->title_tu,
            'title_fr' => $request->title_fr,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'photo' => $this->upload_file($request->photo, 'abouts'),
            'section_title' => 'home_about',
        ]);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    public function manager_words()
    {
        $word = About::where('section_title','manager_words')->first();
        return view('cms.pages.home.manager_words.index' , compact('word'));
    }

    public function update_manager_words(Request $request)
    {
        $rules = [
            '*' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        About::updateOrCreate(['section_title' => 'manager_words'], [
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'title_tu' => $request->title_tu,
            'title_fr' => $request->title_fr,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'photo' => $this->upload_file($request->photo, 'abouts'),
            'section_title' => 'manager_words',
        ]);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
