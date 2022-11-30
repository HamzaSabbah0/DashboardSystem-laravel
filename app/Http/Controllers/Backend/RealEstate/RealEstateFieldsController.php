<?php

namespace App\Http\Controllers\Backend\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\ElevenField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RealEstateFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = ElevenField::where('section_title','real_estate')->paginate(10);
        return view('cms.pages.real_estate.fields.index' , compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.real_estate.fields.create');
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
        ];
        $messges = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request,$rules,$messges);

        $field = new ElevenField();

        $field->title_ar = $request->title_ar;
        $field->title_en = $request->title_en;
        $field->title_tu = $request->title_tu;
        $field->title_fr = $request->title_fr;
        $field->description_ar = $request->description_ar;
        $field->description_en = $request->description_en;
        $field->description_tu = $request->description_tu;
        $field->description_fr = $request->description_fr;
        $field->section_title = 'real_estate';

        $field->save();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ElevenField $field)
    {
        return view('cms.pages.real_estate.fields.show' , compact('field'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevenField $field)
    {
        return view('cms.pages.real_estate.fields.edit' , compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenField $field)
    {
        //
        $rules = [
            '*' => 'required',
        ];
        $messges = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request,$rules,$messges);

        $field->title_ar = $request->title_ar;
        $field->title_en = $request->title_en;
        $field->title_tu = $request->title_tu;
        $field->title_fr = $request->title_fr;
        $field->description_ar = $request->description_ar;
        $field->description_en = $request->description_en;
        $field->description_tu = $request->description_tu;
        $field->description_fr = $request->description_fr;
        $field->section_title = 'real_estate';

        $field->save();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenField $field)
    {
        //
        $field->delete();

        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();

    }
}
