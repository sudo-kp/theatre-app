<?php

namespace App\Http\Controllers;

use App\Models\Perfomance;
use App\Models\Play;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class PerfomanceController extends Controller
{

    public function add(Request $request): Factory|View|Application
    {
        $play = new Play();
        $play->title = $request->input('title');
        $play->long_info = $request->input('long-text');
        $play->short_info = $request->input('short-text');
        $play->mobile_info = $request->input('mobile-text');
        $play->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $play->photo_path = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());
        }
        $play->save();
        return view('welcome');
    }

    public function get_container(Request $request) {
        if (!$request->input('month')) {
            $month = date('Y-m');
        }
        else {
            $month = $request->input('month');
        }
        if ($request->input('day')) {
            $perfomances = Perfomance::where('date', '=', $month.'-'.$request->input('day'))
                ->get();
        }
        else {
            $perfomances = Perfomance::whereYear('date', '=', explode('-', $month)[0])
            ->whereMonth('date', '=', explode('-', $month)[1])->
                whereDay('date', '>=', date('d'))->get();
        }
        return view('container', ['perfomances'=>$perfomances, 'current_month'=>date('Y-m'),
            'requested_month'=>$month, 'current_day'=>date('d'), 'requested_day'=>$request->input('day')]);
    }

    public function get_perfomance_info($id): Factory|View|Application
    {
        $perfomance = Perfomance::find($id);
        $info = explode("\n\n", $perfomance->play->description);
        return view('informational', ['photo_path'=>$perfomance->play->photo_path,
            'title'=>$perfomance->play->title, 'info'=>$info,
            'date'=>$perfomance->date, 'time'=>$perfomance->time,
            'place'=>$perfomance->place, 'actors'=>$perfomance->play->actors, 'id'=>$perfomance->id,
            'price'=>$perfomance->price]);
    }

    public function get_today_perfomances() {
        $perfomances = Perfomance::where('date', '=', date('Y-m-d'))->get();
        return view('index', ['perfomances'=>$perfomances]);
    }
}
