<?php

namespace App\Http\Controllers\Backend\Programming;

use App\Http\Controllers\Controller;
use App\Models\ElevenField;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProgrammingServicesController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = ElevenField::where('section_title','programming_service')->paginate(10);
        return view('cms.pages.programming.services.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.programming.services.create');
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
        $this->validate($request,$rules,$messages);

        $service = new ElevenField();

        $service->description_ar = $request->description_ar;
        $service->description_en = $request->description_en;
        $service->description_tu = $request->description_tu;
        $service->description_fr = $request->description_fr;
        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->title_tu = $request->title_tu;
        $service->title_fr = $request->title_fr;

        if($request->has('photo')){
            $service->photo = $this->upload_file($request->photo,'programming_service');
        }

        $service->section_title = 'programming_service';

        $service->save();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ElevenField $elevenField)
    {
        return view('cms.pages.programming.services.show' , compact('elevenField'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenField $elevenField)
    {
        return view('cms.pages.programming.services.edit' , compact('elevenField'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenField $elevenField)
    {
        //
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

        $this->validate($request,$rules,$messages);

        $elevenField->description_ar = $request->description_ar;
        $elevenField->description_en = $request->description_en;
        $elevenField->description_tu = $request->description_tu;
        $elevenField->description_fr = $request->description_fr;
        $elevenField->title_ar = $request->title_ar;
        $elevenField->title_en = $request->title_en;
        $elevenField->title_tu = $request->title_tu;
        $elevenField->title_fr = $request->title_fr;

        if($request->has('photo')){
            $path = parse_url($elevenField->photo);
            unlink(public_path($path['path']));
            $elevenField->photo = $this->upload_file($request->photo,'programming_service');
        }

        $elevenField->section_title = 'programming_service';

        $elevenField->save();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenField $elevenField)
    {
        //
        $path = parse_url($elevenField->photo);
        unlink(public_path($path['path']));

        $elevenField->delete();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }
}
