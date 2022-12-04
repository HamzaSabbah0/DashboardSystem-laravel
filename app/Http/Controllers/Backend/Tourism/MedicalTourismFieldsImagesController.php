<?php

namespace App\Http\Controllers\Backend\Tourism;

use App\Http\Controllers\Controller;
use App\Models\ElevenField;
use App\Models\ElevenFieldsImage;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MedicalTourismFieldsImagesController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ElevenFieldsImage::where('section_title','medical_field')->paginate(10);
        return view('cms.pages.medical_tourism.fields_images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elevenFields = ElevenField::where('section_title', 'medical_field')->get();
        return view('cms.pages.medical_tourism.fields_images.create' , compact('elevenFields'));
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
            'eleven_field_id' => 'required|integer|exists:eleven_fields,id',
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messges = [
            'eleven_field_id.required' => 'هذا الحقل مطلوب',
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messges);

        $image = new ElevenFieldsImage();

        if ($request->hasFile('photo')) {
            $image->photo = $this->upload_file($request->photo, 'medicalField_images');
        }

        $image->eleven_field_id = $request->eleven_field_id;
        $image->section_title = 'medical_tourism';

        $image->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elevenFields = ElevenField::where('section_title', 'medical_field')->get();
        return view('cms.pages.medical_tourism.fields_images.edit' , compact('elevenFieldsImage','elevenFields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevenFieldsImage $image)
    {
        $rules = [
            'eleven_field_id' => 'required|integer|exists:eleven_fields,id',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messges = [
            'eleven_field_id.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messges);

        if ($request->hasFile('photo')) {
            $path = parse_url($image->photo);
            unlink(public_path($path['path']));
            $image->photo = $this->upload_file($request->photo, 'medicalField_images');
        }

        $image->eleven_field_id = $request->eleven_field_id;
        $image->section_title = 'medical_tourism';

        $image->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevenFieldsImage $image)
    {
        $path = parse_url($image->photo);
        unlink(public_path($path['path']));

        $image->delete();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
