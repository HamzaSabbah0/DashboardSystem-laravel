<?php

namespace App\Http\Controllers\Backend\Sport;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutSportController extends Controller
{
    use FileManager;
    public function about_sport()
    {
        $about = About::where('section_title','about_sport')->first();
        return view('cms.pages.sport.abouts.index' , compact('about'));
    }

    public function update_about_sport(Request $request)
    {
        $rules = [
            '*' => 'required',
            'video' => 'mimetypes:video/mp4,video/mpeg,|max:102400',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'video.video' => 'يجب أن بكون الملف المرفق فيديو',
            'video.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'video.size' => 'لا يجب أن تتجاوز الصورة مساحة 100 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        About::updateOrCreate(['section_title' => 'about_sport'], [
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'video' => $this->upload_file($request->video, 'about_sport'),
            'section_title' => 'about_sport'
        ]);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
