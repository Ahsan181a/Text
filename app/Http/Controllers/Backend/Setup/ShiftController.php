<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;
use App\Models\Shift;
use DB;
class ShiftController extends Controller
{
    public function view()
    	{
    		
    	$data['allData']=Shift::all();
    	return view('backend.setup.student.shift.view',$data);
    	}

		public function add()
    	{
    	
          return view('backend.setup.student.shift.add');
    	}


		public function store(Request $request)
    	{
       $this->validate($request,[
        'name'=>'required|unique:shifts,name'

       ]);
       $data = new Shift();
       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.shift.view')->with('success','Data insert successfully');
    	}

     	public function edit($id)
    	{
        $editData=Shift::find($id);
         return view('backend.setup.student.shift.edit',compact('editData'));

    	}

    	public function update(Request $request, $id)
   
   		{

         $data = Shift::find($id);
        $this->validate($request,[
        'name'=>'required|unique:shifts,name'

       ]);

       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.shift.view')->with('success','Data update successfully');
    }

    public function delete($id)
    {
    	$data=Shift::find($id);
    	$data->delete();
    	return  redirect()->route('setup.student.shift.view')->with('success','Delete successfully');
    }
}
