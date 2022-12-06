<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use App\Models\Setting;
use App\Models\Tearm;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    use FileManager;

    public function index()
    {
        $settings = Setting::first();
        return view('cms.pages.setting.index', compact("settings"));
    }

    public function update(Request $request)
    {
        $rules = [
            '*' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:3000',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        $data = [
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'whatsapp_number' => $request->whatsapp_number,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        if ($request->hasFile('logo_photo')) {
            $data['logo_photo'] = $this->upload_file($request->logo_photo, 'settings');
        }

        Setting::updateOrCreate(['id' => 1], $data);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    public function privacy_page()
    {
        $privacy = Privacy::first();
        return view('cms.pages.privacy.index', compact('privacy'));
    }

    public function add_privacy(Request $request)
    {
        $rules = [
            'description_ar' => 'required',
            'description_en' => 'required',
            'description_tu' => 'required',
            'description_fr' => 'required',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request, $rules, $messages);

        $data = [
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
        ];

        Privacy::updateOrCreate(['id' => 1], $data);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    public function tearms_page()
    {
        $tearms = Tearm::first();
        return view('cms.pages.tearms.index', compact('tearms'));
    }

    public function add_tearms(Request $request)
    {
        $rules = [
            'description_ar' => 'required',
            'description_en' => 'required',
            'description_tu' => 'required',
            'description_fr' => 'required',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request, $rules, $messages);

        $data = [
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
        ];

        Tearm::updateOrCreate(['id' => 1], $data);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
