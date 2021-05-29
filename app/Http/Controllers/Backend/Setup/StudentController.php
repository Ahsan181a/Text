<?php

namespace App\Http\Controllers\Backend\Setup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
     $data['allData'] = StudentClass::all();

        return view('backend.setup.student_class.view-class',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.setup.student_class.add-class');
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
        'name'=>'required|unique:student_classes,name'

       ]);
       $data = new StudentClass();
       $data->name = $request->name;
       $data->save();
       return  redirect()->route('view.index')->with('success','Data insert successfully');
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
        $editData=StudentClass::find($id);
         return view('backend.setup.student_class.edit-class',compact('editData'));

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
                'name'=> 'required|unique:users,name,'.$id
            ]);
            $student_class = StudentClass::findOrFail($id);
            $student_class->name = $request->name;
            $student_class->save();
            return  redirect()->route('view.index')->with('success','Data update successfully');
        } catch (Exception $e) {
            return  redirect()->route('view.index')->with('error',$e->getMessage());
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

        $data=StudentClass::find($id);
        $data->delete();
        return  redirect()->route('view.index')->with('success','Delete successfully');
    }
}
