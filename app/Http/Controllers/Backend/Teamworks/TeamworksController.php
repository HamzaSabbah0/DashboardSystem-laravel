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
            'photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];
        $this->validate($request, $rules, $messages);

        $teamWork = new TeamWork();

        $teamWork->title_ar = $request->title_ar;
        $teamWork->title_en = $request->title_en;
        $teamWork->title_tu = $request->title_tu;
        $teamWork->title_fr = $request->title_fr;
        $teamWork->career_title_ar = $request->career_title_ar;
        $teamWork->career_title_en = $request->career_title_en;
        $teamWork->career_title_tu = $request->career_title_tu;
        $teamWork->career_title_fr = $request->career_title_fr;

        if ($request->hasFile('photo')) {
            $teamWork->photo = $this->upload_file($request->photo, 'team_works');
        }

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
    public function edit(TeamWork $teamwork)
    {
        // dd($teamWork);
        return view('cms.pages.teamworks.edit' , compact('teamwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamWork $teamwork)
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

        $this->validate($request, $rules, $messages);

        $teamwork->title_ar = $request->title_ar;
        $teamwork->title_en = $request->title_en;
        $teamwork->title_tu = $request->title_tu;
        $teamwork->title_fr = $request->title_fr;
        $teamwork->career_title_ar = $request->career_title_ar;
        $teamwork->career_title_en = $request->career_title_en;
        $teamwork->career_title_tu = $request->career_title_tu;
        $teamwork->career_title_fr = $request->career_title_fr;

        if ($request->hasFile('photo')) {
            $path = parse_url($teamwork->photo);
            unlink(public_path($path['path']));
            $teamwork->photo = $this->upload_file($request->photo, 'team_works');
        }

        $teamwork->save();
        Session::flash('success','تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamWork $teamwork)
    {
        //
        $path = parse_url($teamwork->photo);
        unlink(public_path($path['path']));

        $teamwork->delete();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
