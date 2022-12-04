<?php

namespace App\Http\Controllers\Backend\Sport;

use App\Http\Controllers\Controller;
use App\Models\ElevenActivity;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SportActivitiesController extends Controller
{
    use FileManager;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = ElevenActivity::where('section_title','sport')->paginate(10);
        return view('cms.pages.sport.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.sport.activities.create');
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

        if ($request->hasFile('photo')) {
            $activity->photo = $this->upload_file($request->photo, 'activities');
        }

        $activity->section_title = 'sport';

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
    public function show(ElevenActivity $elevenActivity)
    {
        return view('cms.pages.sport.activities.show', compact('elevenActivity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenActivity $elevenActivity)
    {
        return view('cms.pages.sport.activities.edit', compact('elevenActivity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenActivity $elevenActivity)
    {

        $rules = [
            '*' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messges = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messges);

        $elevenActivity->title_ar = $request->title_ar;
        $elevenActivity->title_en = $request->title_en;
        $elevenActivity->title_tu = $request->title_tu;
        $elevenActivity->title_fr = $request->title_fr;
        $elevenActivity->description_ar = $request->description_ar;
        $elevenActivity->description_en = $request->description_en;
        $elevenActivity->description_tu = $request->description_tu;
        $elevenActivity->description_fr = $request->description_fr;

        if ($request->hasFile('photo')) {
            $path = parse_url($elevenActivity->photo);
            unlink(public_path($path['path']));
            $elevenActivity->photo = $this->upload_file($request->photo, 'activities');
        }

        $elevenActivity->section_title = 'sport';

        $elevenActivity->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenActivity $elevenActivity)
    {
        $path = parse_url($elevenActivity->photo);
        unlink(public_path($path['path']));

        $elevenActivity->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
