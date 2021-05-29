<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Models\Year;
use DB;

class YearController extends Controller
{
    	public function view()
    	{
    	$data['allData']=Year::all();
    	return view('backend.setup.student.year.view',$data);
    	}

		public function add()
    	{
    	
          return view('backend.setup.student.year.add');
    	}


		public function store(Request $request)
    	{
       $this->validate($request,[
        'name'=>'required|unique:years,name'

       ]);
       $data = new Year();
       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.year.view')->with('success','Data insert successfully');
    	}



     public function edit($id)
    {
        $editData=Year::find($id);
         return view('backend.setup.student.year.edit',compact('editData'));

    	}

    	public function update(Request $request, $id)
   
   		{

         $data = Year::find($id);
        $this->validate($request,[
        'name'=>'required|unique:years,name'

       ]);

       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.year.view')->with('success','Data update successfully');
    }

    public function delete($id)
    {
    	$data=Year::find($id);
    	$data->delete();
    	return  redirect()->route('setup.student.year.view')->with('success','Delete successfully');
    }
}
