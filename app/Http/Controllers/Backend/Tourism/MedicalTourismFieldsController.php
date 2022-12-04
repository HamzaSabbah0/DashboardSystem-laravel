<?php

namespace App\Http\Controllers\Backend\Tourism;

use App\Http\Controllers\Controller;
use App\Models\ElevenField;
use App\Models\ElevenFieldsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MedicalTourismFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = ElevenField::where('section_title','medical_field')->paginate(10);
        return view('cms.pages.medical_tourism.fields.index',compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.medical_tourism.fields.create');
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
            'files'=> 'nullable',
        ];
        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request,$rules,$messages);

        $field = new ElevenField();
        $field->title_ar = $request->title_ar;
        $field->title_en = $request->title_en;
        $field->title_tu = $request->title_tu;
        $field->title_fr = $request->title_fr;
        $field->description_ar = $request->description_ar;
        $field->description_en = $request->description_en;
        $field->description_tu = $request->description_tu;
        $field->description_fr = $request->description_fr;
        $field->section_title = 'medical_field';

        $field->save();
        Session::flash('success','تمت الملية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elevenField = ElevenField::with('images')->find($id);
        return view('cms.pages.medical_tourism.fields.show')->with('elevenField', $elevenField);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenField $elevenField)
    {
        return view('cms.pages.medical_tourism.fields.edit',compact('elevenField'));
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
        $rules = [
            '*' => 'required',
            'files'=> 'nullable',
        ];
        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request,$rules,$messages);

        $elevenField->title_ar = $request->title_ar;
        $elevenField->title_en = $request->title_en;
        $elevenField->title_tu = $request->title_tu;
        $elevenField->title_fr = $request->title_fr;
        $elevenField->description_ar = $request->description_ar;
        $elevenField->description_en = $request->description_en;
        $elevenField->description_tu = $request->description_tu;
        $elevenField->description_fr = $request->description_fr;
        $elevenField->section_title = 'medical_field';

        $elevenField->save();
        Session::flash('success','تمت الملية بنجاح');
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
        $elevenField->delete();

        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();

    }
}
