<?php

namespace App\Http\Controllers\Backend\Tourism;

use App\Http\Controllers\Controller;
use App\Models\ElevenActivity;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeneralTourismActivitiesController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = ElevenActivity::where('section_title','general_tourism')->paginate(10);
        return view('cms.pages.general_tourism.activities.index' , compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.general_tourism.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            '*' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messges = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messges);

        $activity = new ElevenActivity();

        $activity->title_ar = $request->title_ar;
        $activity->title_en = $request->title_en;
        $activity->title_tu = $request->title_tu;
        $activity->title_fr = $request->title_fr;
        $activity->description_ar = $request->description_ar;
        $activity->description_en = $request->description_en;
        $activity->description_tu = $request->description_tu;
        $activity->description_fr = $request->description_fr;
        $activity->section_title = 'general_tourism';

        if ($request->hasFile('photo')) {
            $activity->photo = $this->upload_file($request->photo, 'generalTourism-activities');
        }

        $activity->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ElevenActivity $activity)
    {
        return view('cms.pages.general_tourism.activities.show' , compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenActivity $activity)
    {
        return view('cms.pages.general_tourism.activities.edit' , compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenActivity $activity)
    {
        $rules = [
            '*' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messges = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messges);

        $activity->title_ar = $request->title_ar;
        $activity->title_en = $request->title_en;
        $activity->title_tu = $request->title_tu;
        $activity->title_fr = $request->title_fr;
        $activity->description_ar = $request->description_ar;
        $activity->description_en = $request->description_en;
        $activity->description_tu = $request->description_tu;
        $activity->description_fr = $request->description_fr;
        $activity->section_title = 'general_tourism';

        if ($request->hasFile('photo')) {
            $path = parse_url($activity->photo);
            unlink(public_path($path['path']));
            $activity->photo = $this->upload_file($request->photo, 'generalTourism-activities');
        }

        $activity->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenActivity $activity)
    {
        $path = parse_url($activity->photo);
        unlink(public_path($path['path']));

        $activity->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
