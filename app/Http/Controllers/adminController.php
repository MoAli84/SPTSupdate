<?php

namespace App\Http\Controllers;
use App\Models\Year;
use App\Models\EduLevel;
use App\Models\Sublevel;
use App\Models\Nationality;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{


    //----------------------------------------START Year -----------------------

    public function index_year()
    {
        $data=Year::get();
        return view('Admin.year.admin_indexYear',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_year()
    {
        return view('Admin.year.admin_addYear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_year(Request $request)
    {
        $request->validate([
            'year'=>'required|numeric'
        ]);

        $y=Year::create(['year'=>$request->year]);

        return redirect(url('admin/index/year'))->with('success','Year created successfully');
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_year($id)
    {
        $data = Year::find($id);
        return view('Admin.year.admin_editYear',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_year(Request $request)
    {
       $data= $request->validate(['year'=> 'required|numeric' ]);

        $ya=Year::where('id',$request->id)->update($data);
        return redirect(url('admin/index/year'))->with('success','Year updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_year($id)
    {
        $op = Year::where('id', $id)->delete();
        return redirect(url('admin/index/year'))->with('success','Year deleted successfully');
    }

    //--------------------------------------End Year-------------------------------------


    

//====================================Level========================================
 /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_level()
    {
        $data=EduLevel::get();
   
        return view('Admin.level.admin_indexlevel',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_level()
    {
        return view('Admin.level.admin_addlevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_level(Request $request)
    {
        $request->validate([
            'EduLevelName'=>'required|min:3'
        ]);

        $lev=EduLevel::create(['EduLevelName'=>$request->EduLevelName]);

        return redirect(url('admin/index/level'))->with('success','Academic Stage  created successfully');
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_level($id)
    {
        $data = EduLevel::find($id);
        return view('Admin.level.admin_editLevel',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_level(Request $request)
    {
       $data= $request->validate(['EduLevelName'=> 'required|min:3' ]);

        $lev=EduLevel::where('id',$request->id)->update($data);
        return redirect(url('admin/index/level'))->with('success','Academic Stage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_level($id)
    {
        $op = EduLevel::where('id', $id)->delete();
        return redirect(url('admin/index/level'))->with('success','Academic Stage deleted successfully');
    }
//------------------------------end level----------------------------------------------------




//--------------------------------Start Sublevel---------------------------------------------

public function index_sublevel()
{
    $data=Sublevel::join('educational_level','sublevel.LevelId','=','educational_level.id')
    ->select('sublevel.*','educational_level.EduLevelName')-> get();
    //dd($data);  
    return view('Admin.sublevel.admin_indexSublevel',['data'=>$data]);
}

public function create_sublevel()
{
    $lev =EduLevel::get();
    return view('Admin.sublevel.admin_addSublevel',['lev'=>$lev]);
}


public function store_sublevel(Request $request)
{
  $data=  $request->validate([
        'SubLevelName'=>'required|min:3',
        'LevelId'=>'required|numeric'
    ]);

    $sublev=Sublevel::create(['SubLevelName'=>$request->SubLevelName ,  'LevelId'=>$request->LevelId ]);
    return redirect(url('admin/index/sublevel'))->with('success','Sublevel created successfully');
    
}


public function edit_sublevel($id)
{
    $data = Sublevel::find($id);
    $le =EduLevel::get();
    return view('Admin.sublevel.admin_editSublevel',['data'=>$data , 'le'=>$le]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update_sublevel(Request $request)
{
   $data= $request->validate([ 
      'SubLevelName'=>'required|min:3',
       'LevelId'=>'required|numeric' ]);

    $sublev=Sublevel::where('id',$request->id)->update($data);
    return redirect(url('admin/index/sublevel'))->with('success','Academic Stage updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy_sublevel($id)
{
    $op = SubLevel::where('id', $id)->delete();
    return redirect(url('admin/index/sublevel'))->with('success','Sublevel deleted successfully');
}

//--------------------------------- End subLEVEL---------------------------------



//----------------------------------Start Nationality------------------------
 /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_nationality()
    {
        $data=Nationality::get();
        return view('Admin.nationality.admin_indexNationality',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_nationality()
    {
        return view('Admin.nationality.admin_addNationality');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_nationality(Request $request)
    {
        $request->validate([
            'Nation'=>'required|min:3'
        ]);

        $nat=Nationality::create(['Nation'=>$request->Nation]);

        return redirect(url('admin/index/nationality'))->with('success','nationality created successfully');
        
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
    public function edit_nationality($id)
    {
        $data = Nationality::find($id);
        return view('Admin.nationality.admin_editNationality',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_nationality(Request $request)
    {
       $data= $request->validate(['Nation'=> 'required|min:3' ]);

        $nati=Nationality::where('id',$request->id)->update($data);
        return redirect(url('admin/index/nationality'))->with('success','nationality updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_nationality($id)
    {
        $op = Nationality::where('id', $id)->delete();
        return redirect(url('admin/index/nationality'))->with('success','nationality deleted successfully');
    }
//----------------------------------End Nationality---------------------


//---------------------------------Start Course-----------------------


    /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_course()
    {

         $data=Course::get();

        return view('Admin.course.admin_indexCourse',['data'=>$data]);
    }

    public function create_course()
    {
         return view('Admin.course.admin_addCourse');
    }

    
    public function store_course(Request $request)
    {
        $m=$request->validate([
            'MaterialName'  =>'required|min:3',
            'code'  =>'required |min:5',
        ]);
        $ob = Course::create(['MaterialName'=>$request->MaterialName , 'code'=>$request->code]);
    
        return redirect(url('admin/index/course'))->with('success','Course  Added successfully');
        
    }


    public function edit_course($id)
    {
        $data = Course::find($id);
  
      
        return view('Admin.course.admin_editCourse', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_course(Request $request)
    {
       $data= $request->validate([ 
        'MaterialName'  =>'required|min:3',
        'code'  =>'required',
  
     ]);

        $cour=Course::where('id',$request->id)->update($data);
        return redirect(url('admin/index/course'))->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_course($id)
    {
        $op = Course::where('id', $id)->delete();
        return redirect(url('admin/index/course'))->with('success','Course deleted successfully');
    }
//--------------------------------End Course--------------------------

}
