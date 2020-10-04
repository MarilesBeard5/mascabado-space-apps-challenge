<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\yieldChangesModel;
use DB;
use eHarvest\Http\Requests\ChangeFormRequest;

class ycMexicoCornController extends Controller
{
    public function index(Request $request) {
    	if($request){
    		/*$query=trim($request->get('searchText'));
    		$changes=DB::table('yieldChanges')->where('country','LIKE','%'.$query.'%')
            ->orwhere('yearr','LIKE','%'.$query.'%')
            ->orwhere('esc','LIKE','%'.$query.'%')
            ->orwhere('harvest','LIKE','%'.$query.'%')
            ->orwhere('changes','LIKE','%'.$query.'%')
            ->orderBy('yearr','asc')
    		->paginate(10);
    		return view('yieldChanges.index', compact('changes'));*/
            $year = $request->get('buscarporyear');
            $tipo = $request->get('buscarportipo');
            $changes = yieldChangesModel::year($year)->tipo($tipo)
            ->where('country','LIKE','2')
            ->where('harvest','LIKE','3')
            ->orderBy('country','asc')
            ->paginate(12);
            return view('ycMexicoCorn.index', compact('changes'));
    	}
    }
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}

}