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
            $service->photo = $this->upload_file('photo','programming-service');
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
    public function show(ElevenField $service)
    {
        return view('cms.pages.programming.services.show' , compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenField $service)
    {
        return view('cms.pages.programming.services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenField $service)
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

        $service->description_ar = $request->description_ar;
        $service->description_en = $request->description_en;
        $service->description_tu = $request->description_tu;
        $service->description_fr = $request->description_fr;
        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->title_tu = $request->title_tu;
        $service->title_fr = $request->title_fr;

        if($request->has('photo')){
            $path = parse_url($service->photo);
            unlink(public_path($path['path']));
            $service->photo = $this->upload_file('photo','programming-service');
        }

        $service->section_title = 'programming_service';

        $service->save();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenField $service)
    {
        //
        $path = parse_url($service->photo);
        unlink(public_path($path['path']));

        $service->delete();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }
}
