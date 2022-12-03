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
            'photo' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        $data = [
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'title_tu' => $request->title_tu,
            'title_fr' => $request->title_fr,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'section_title' => 'home_about',
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload_file($request->photo, 'abouts');
        }

        About::updateOrCreate(['section_title' => 'home_about'], $data);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    public function manager_words()
    {
        $about = About::where('section_title', 'manager_words')->first();
        return view('cms.pages.home.manager_words.index', compact('about'));
    }

    public function update_manager_words(Request $request)
    {
        $rules = [
            '*' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        $data = [
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'title_tu' => $request->title_tu,
            'title_fr' => $request->title_fr,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'section_title' => 'manager_words',
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload_file($request->photo, 'abouts');
        }

        About::updateOrCreate(['section_title' => 'manager_words'], $data);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
