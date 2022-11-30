<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialsController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('cms.pages.home.testimonials.index' , compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.home.testimonials.create');
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
        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        $testimonial = new Testimonial();

        if ($request->hasFile('photo')) {
            $testimonial->photo = $this->upload_file($request->photo, 'testimonials');
        }

        $testimonial->title_ar = $request->title_ar;
        $testimonial->title_en = $request->title_en;
        $testimonial->title_tu = $request->title_tu;
        $testimonial->title_fr = $request->title_fr;
        $testimonial->description_ar = $request->description_ar;
        $testimonial->description_en = $request->description_en;
        $testimonial->description_tu = $request->description_tu;
        $testimonial->description_fr = $request->description_fr;
        $testimonial->name_ar = $request->name_ar;
        $testimonial->name_en = $request->name_en;
        $testimonial->name_tu = $request->name_tu;
        $testimonial->name_fr = $request->name_fr;
        $testimonial->career_title_ar = $request->career_title_ar;
        $testimonial->career_title_en = $request->career_title_en;
        $testimonial->career_title_tu = $request->career_title_tu;
        $testimonial->career_title_fr = $request->career_title_fr;

        $testimonial->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('cms.pages.home.testimonials.show',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('cms.pages.home.testimonials.edit' , compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
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

        if ($request->hasFile('photo')) {
            $path = parse_url($testimonial->photo);
            unlink(public_path($path['path']));
            $testimonial->photo = $this->upload_file($request->photo, 'testimonials');
        }

        $testimonial->title_ar = $request->title_ar;
        $testimonial->title_en = $request->title_en;
        $testimonial->title_tu = $request->title_tu;
        $testimonial->title_fr = $request->title_fr;
        $testimonial->description_ar = $request->description_ar;
        $testimonial->description_en = $request->description_en;
        $testimonial->description_tu = $request->description_tu;
        $testimonial->description_fr = $request->description_fr;
        $testimonial->name_ar = $request->name_ar;
        $testimonial->name_en = $request->name_en;
        $testimonial->name_tu = $request->name_tu;
        $testimonial->name_fr = $request->name_fr;
        $testimonial->career_title_ar = $request->career_title_ar;
        $testimonial->career_title_en = $request->career_title_en;
        $testimonial->career_title_tu = $request->career_title_tu;
        $testimonial->career_title_fr = $request->career_title_fr;

        $testimonial->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $path = parse_url($testimonial->photo);
        unlink(public_path($path['path']));

        $testimonial->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
