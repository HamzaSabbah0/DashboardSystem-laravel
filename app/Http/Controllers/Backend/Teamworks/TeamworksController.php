<?php

namespace App\Http\Controllers\Backend\Teamworks;

use App\Http\Controllers\Controller;
use App\Models\TeamWork;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamworksController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamWorks = TeamWork::paginate(10);
        return view('cms.pages.teamworks.index' , compact('teamWorks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.teamworks.create');
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
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];
        $this->validate($request, $rules, $messages);

        $teamWork = new TeamWork();

        if ($request->hasFile('photo')) {
            $teamWork->photo = $this->upload_file($request->photo, 'team-works');
        }
        $teamWork->title_ar = $request->title_ar;
        $teamWork->title_en = $request->title_en;
        $teamWork->title_tu = $request->title_tu;
        $teamWork->title_fr = $request->title_fr;
        $teamWork->career_title_ar = $request->career_title_ar;
        $teamWork->career_title_en = $request->career_title_en;
        $teamWork->career_title_tu = $request->career_title_tu;
        $teamWork->career_title_fr = $request->career_title_fr;

        $teamWork->save();

        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamWork $teamWork)
    {
        return view('cms.pages.teamworks.edit' , compact('teamWork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamWork $teamWork)
    {
        //
        $rules = [
            '*' => 'required',
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
            $path = parse_url($teamWork->photo);
            unlink(public_path($path['path']));
            $teamWork->photo = $this->upload_file($request->photo, 'team-works');
        }

        $teamWork->title_ar = $request->title_ar;
        $teamWork->title_en = $request->title_en;
        $teamWork->title_tu = $request->title_tu;
        $teamWork->title_fr = $request->title_fr;
        $teamWork->career_title_ar = $request->career_title_ar;
        $teamWork->career_title_en = $request->career_title_en;
        $teamWork->career_title_tu = $request->career_title_tu;
        $teamWork->career_title_fr = $request->career_title_fr;

        $teamWork->save();

        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamWork $teamWork)
    {
        //
        $path = parse_url($teamWork->photo);
        unlink(public_path($path['path']));

        $teamWork->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
