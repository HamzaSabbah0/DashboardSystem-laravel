<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\ElevenPartner;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ElevenPartnersController extends Controller
{

    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = ElevenPartner::where('section_title','home_partner')->paginate(10);
        return view('cms.pages.home.partners.index', compact("partners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.home.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        $partner = new ElevenPartner();

        if ($request->hasFile('photo')) {
            $partner->photo = $this->upload_file($request->photo, 'home_partners');
        }

        $partner->section_title = 'home_partner';

        $partner->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenPartner $elevenPartner)
    {
        return view('cms.pages.home.partners.edit', compact('elevenPartner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenPartner $elevenPartner)
    {
        $rules = [
            'photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        if ($request->hasFile('photo')) {
            $path = parse_url($elevenPartner->photo);
            unlink(public_path($path['path']));
            $elevenPartner->photo = $this->upload_file($request->photo, 'home_partners');
        }

        $elevenPartner->section_title = 'home_partner';

        $elevenPartner->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenPartner $elevenPartner)
    {
        $path = parse_url($elevenPartner->photo);
        unlink(public_path($path['path']));

        $elevenPartner->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
