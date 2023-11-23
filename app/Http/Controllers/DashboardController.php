<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Idea();

        return view("dashboard",["ideas"=>$idea::orderBy("created_at","desc")->get()]);
    }
}
