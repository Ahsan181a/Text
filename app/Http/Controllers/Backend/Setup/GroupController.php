<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;
use App\Models\Year;
use DB;

class GroupController extends Controller
{
    public function view()
    	{
    		
    	$data['allData']=StudentGroup::all();
    	return view('backend.setup.student.group.view',$data);
    	}

		public function add()
    	{
    	
          return view('backend.setup.student.group.add');
    	}


		public function store(Request $request)
    	{
       $this->validate($request,[
        'name'=>'required|unique:student_groups,name'

       ]);
       $data = new StudentGroup();
       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.group.view')->with('success','Data insert successfully');
    	}

     	public function edit($id)
    	{
        $editData=StudentGroup::find($id);
         return view('backend.setup.student.group.edit',compact('editData'));

    	}

    	public function update(Request $request, $id)
   
   		{

         $data = StudentGroup::find($id);
        $this->validate($request,[
        'name'=>'required|unique:student_groups,name'

       ]);

       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.group.view')->with('success','Data update successfully');
    }

    public function delete($id)
    {
    	$data=StudentGroup::find($id);
    	$data->delete();
    	return  redirect()->route('setup.student.group.view')->with('success','Delete successfully');
    }
}
