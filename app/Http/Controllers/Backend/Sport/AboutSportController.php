<?php

namespace App\Http\Controllers\Backend\Sport;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutSportController extends Controller
{
    public function about_sport()
    {
        $about = About::where('section_title','about_sport')->first();
        return view('cms.pages.sport.abouts.index' , compact('about'));
    }

    public function update_about_sport(Request $request)
    {
        $rules = [
            '*' => 'required',
            'video' => 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:102400',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'video.video' => 'يجب أن بكون الملف المرفق فيديو',
            'video.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 100 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        About::updateOrCreate(['section_title' => 'about_sport'], [
            // dd($request->all())
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'video' => $this->upload_file($request->video, 'about-sports'),
            'section_title' => 'about_sport'
        ]);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
