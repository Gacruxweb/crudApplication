<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\information;
use Auth;

class infoController extends Controller
{
    public function create_info()
    {
      return view('information.create_info');
    }
    public function store_info(Request $request){
        $data_insert = information::create([
            'employee_id' =>$request->employee_id,
            'name' =>$request->name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'address' =>$request->address,
            'salary' =>$request->salary,
            'created_by' =>Auth::user()->id,
        ]);

        return redirect()->route('info.list')->with('success',"Inserted Successfully");
    }
    public function info_list(){
        $informations = information::all();
        return view('information.info_list',compact('informations'));
    }
    public function info_edit($id){
        $information = information::find($id);
        return view('information.info_edit', compact('information','id'));
    }
    public function info_update(Request $request, $id){
        $data = information::find($id);
        $data->employee_id = $request->employee_id;
        $data->name = $request->name;
        $data->phone= $request->phone;
        $data->email = $request->email;
        $data->address= $request->address;
        $data->salary= $request->salary;
        $data->updated_by= Auth::user()->id;
        $data->save();
        return redirect()->route('info.list',$id)->with('success',"Updated Successfully");
    }
    public function info_delete($id){
        $data = information::find($id);
        $data->delete();
        return redirect()->route('info.list')->with('success',"Deleted Successfully");
    }






}
