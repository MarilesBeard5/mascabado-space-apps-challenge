<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\yieldChangesModel;
use DB;

class yieldChangesController extends Controller
{
    public function index(Request $request) {
    	if($request){
    		$query=trim($request->get('searchText'));
    		$changes=DB::table('yieldChanges')->where('country','LIKE','%'.$query.'%')
            ->orwhere('yearr','LIKE','%'.$query.'%')
            ->orwhere('esc','LIKE','%'.$query.'%')
            ->orwhere('harvest','LIKE','%'.$query.'%')
            ->orwhere('changes','LIKE','%'.$query.'%')
    		->orderBy('country','asc')
    		->paginate(10);
    		return view('yieldChanges.index', compact('changes'));
    	}
    }
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
