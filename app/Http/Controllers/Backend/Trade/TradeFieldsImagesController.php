<?php

namespace App\Http\Controllers\Backend\Trade;

use App\Http\Controllers\Controller;
use App\Models\ElevenFieldsImage;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TradeFieldsImagesController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ElevenFieldsImage::where('section_title','trade')->get();
        return view('cms.pages.trade.fields_images.index' , compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.trade.fields_images.create');
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
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        $image = new ElevenFieldsImage();

        if ($request->hasFile('photo')) {
            $image->photo = $this->upload_file($request->photo, 'tradeField-images');
        }

        $image->section_title = 'trade';
        $image->eleven_field_id = '1';

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
    public function edit(ElevenFieldsImage $image)
    {
        return view('cms.pages.trade.fields_images.edit' , compact('image'));
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
        //
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

        if ($request->hasFile('photo')) {
            $path = parse_url($image->photo);
            unlink(public_path($path['path']));
            $image->photo = $this->upload_file($request->photo, 'tradeField-images');
        }

        $image->section_title = 'trade';
        $image->eleven_field_id = '1';

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
        //
        $path = parse_url($image->photo);
        unlink(public_path($path['path']));

        $image->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
