<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StdHealth;
use App\Models\EduLevel;
use App\Models\Sublevel;
use App\Models\EduData1;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data  = StdHealth::join('students','students.StudentSsn','=','student_disease.StudentSsn')
        ->select('student_disease.*','students.Name','students.FatherName','students.Surname')->get();
        return view('Doctor.doctor_index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $year       = Year::get();
        $level      = EduLevel::get();
        $sub        = Sublevel::join('educational_level','educational_level.id','=','sublevel.levelId')
        ->select('sublevel.*','educational_level.EduLevelName')->get();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($StudentSsn)
    {
        $disease     = StdHealth::where('StudentSsn','=',$StudentSsn)->get();
        $edudata     = EduData1::where('StudentSsn','=',$StudentSsn)->get();
        $year        = Year::get();
        $level       = EduLevel::get();
        $sub         = Sublevel::join('educational_level','educational_level.id','=','sublevel.levelId')
                             ->select('sublevel.*','educational_level.EduLevelName')->get();

        return view('StudentAffairs.affair_edit',[
        'edudata'     =>$edudata,
        'disease'     =>$disease,
        'year'        =>$year,
        'level'       =>$level,
        'sub'         =>$sub,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $info= $request->validate([
            'AcdYearId'    ,// =>'required|numeric',
            'LevelId'      ,//=>'required',
          ]);

        $edudata = EduData1::where('StudentSsn','=',$request->StudentSsn)->update([
        'AcdYearId'      =>$request->AcdYearId,
        'LevelId'        =>$request->LevelId,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($StudentSsn)
    {
        $data = StdHealth::where('StudentSsn', $StudentSsn)->delete();
        return redirect(url('affair/index'))->with('success','student deleted successfully');
    }
}
