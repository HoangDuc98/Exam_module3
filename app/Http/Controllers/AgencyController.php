<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    function index(){
        $agencies = Agency::all();
        return view('index',compact('agencies'));

    }
    function create(){
        return view('add');
    }
    function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    function show($id){

    }

    function edit($id){
        $agency = Agency::findOrFail($id);
        return view('edit',compact('agency'));

    }

    function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $agency = Agency::findOrFail($id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    function delete($id): \Illuminate\Http\RedirectResponse
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.index');

    }

    function search(Request $request){
        $agencies = Agency::where('name','LIKE','%'.$request->keyword.'%')->get();
        return view('index',compact('agencies'));
    }

}
