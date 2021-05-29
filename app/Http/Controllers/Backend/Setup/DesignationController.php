<?php

namespace App\Http\Controllers\Backend\Setup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamType;
use App\Models\Designation;
use DB;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Designation::all();
        return view('backend.setup.student.designation.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.setup.student.designation.add');
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required|unique:designations,name'

       ]);
       $data = new Designation();
       $data->name = $request->name;
       $data->save();
       return  redirect()->route('designation.index')->with('success','Data insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData=Designation::find($id);
         return view('backend.setup.student.designation.edit',compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request,[
                'name'=> 'required|unique:designations,name,'.$id
            ]);
            $student_class = Designation::findOrFail($id);
            $student_class->name = $request->name;
            $student_class->save();
            return  redirect()->route('designation.index')->with('success','Data update successfully');
        } catch (Exception $e) {
            return  redirect()->route('designation.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
