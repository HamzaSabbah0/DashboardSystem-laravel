<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all()->count();
        $today_visits = Visitor::whereDate('updated_at', Carbon::today())->count();
        return view('cms.pages.home', compact('visitors', 'today_visits'));
    }
}
