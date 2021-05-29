<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;
use App\Models\FeeCategory;
use DB;

class FeeController extends Controller
{
    public function view()
    	{
    		
    	$data['allData']=FeeCategory::all();
    	return view('backend.setup.student.feecategory.view',$data);
    	}

		public function add()
    	{
    	
          return view('backend.setup.student.feecategory.add');
    	}


		public function store(Request $request)
    	{
       $this->validate($request,[
        'name'=>'required|unique:fee_categories,name'

       ]);
       $data = new FeeCategory();
       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.fee.view')->with('success','Data insert successfully');
    	}

     	public function edit($id)
    	{
        $editData=FeeCategory::find($id);
         return view('backend.setup.student.feecategory.edit',compact('editData'));

    	}

    	public function update(Request $request, $id)
   
   		{

         $data = FeeCategory::find($id);
        $this->validate($request,[
        'name'=>'required|unique:fee_categories,name'

       ]);

       $data->name = $request->name;
       $data->save();
       return  redirect()->route('setup.student.fee.view')->with('success','Data update successfully');
    }

    public function delete($id)
    {
    	$data=FeeCategory::find($id);
    	$data->delete();
    	return  redirect()->route('setup.student.fee.view')->with('success','Delete successfully');
    }
}
