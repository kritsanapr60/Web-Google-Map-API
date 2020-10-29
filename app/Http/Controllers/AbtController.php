<?php

namespace App\Http\Controllers;

use App\Abt;
use Illuminate\Http\Request;

class AbtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function Showdetail(Request $request,$name)
    {
        $data = Abt::where('Name','=',$name)->get()[0];
        return view('detail',compact('data'));
            //Queryข้อมูลให้หน้าdetail
    }

    public function home()
    {
        $lat = 14.9985081;
        $lng = 103.9792647;
        $zoom = 9;

        $abts = Abt::all();
        $contentString =
        '<div id="content" class="form-group col-md-12 row">'.
            '<a href="/~plant/plantmaker/public/detail/[place_name]"><h1 id="firstHeading" class="firstHeading">[place_name]</h1></a>'.
            '<br>'.
            '<div id="bodyContent" class="col-md-6">'.
                '<p><h6>[place_name]</h6><br> ที่อยู่: [address] จังหวัด[province]<br>'.
                'ระดับ: [status]</p>'.
            '</div>'.
            '<div id="bodyContent" class="col-md-4">'.
                '<center><img src="/~plant/plantmaker/public/image_school/[nimg] " alt="ไม่พบรูปภาพในระบบ" height="230" width="300"></center>'.
            '</div>'.
        '</div>';

        $contentStrings = [];
        foreach($abts as $abt){
            $resultString = str_replace('[place_name]', $abt->Name, $contentString);
            $resultString = str_replace('[contributor]', "$abt->Name", $resultString);
            $resultString = str_replace('[address]', "$abt->Address", $resultString);
            $resultString = str_replace('[province]', "$abt->Province", $resultString);
            $resultString = str_replace('[status]', "$abt->Status", $resultString);
            $resultString = str_replace('[nimg]', "$abt->Picture_1", $resultString);

            $contentStrings[$abt->Name] = $resultString;
        }
        return view('welcome', compact('abts', 'contentString', 'contentStrings','lat','lng','zoom'));
    }
    public function index()
    {
        return view('index');

    }

    public function Querydata(Request $request,$action)
    //Queryข้อมูลให้หน้าdetail
    {
        $lat = 14.9985081;
        $lng = 103.9792647;
        $zoom = 9;


        if ($action=="โรงเรียน" || $action=="องค์การบริหารส่วนตําบล") {
            $abts = abt::where('Category','=',$action)->get();
        }else{
            if($action=="อุบลราชธานี"){
                $lat = 15.1158527; $lng = 104.9915246; $zoom = 9;
            }elseif ($action=="ศรีสะเกษ") {
                $lat = 14.8402435; $lng = 104.4014233; $zoom = 9;
            }elseif ($action=="สุรินทร์") {
                $lat = 14.918935; $lng = 103.6714135; $zoom = 9.5;
            }elseif ($action=="บุรีรัมย์") {
                $lat = 14.899997; $lng = 103.0981794; $zoom = 9;
            }elseif ($action=="อำนาจเจริญ") {
                $lat = 15.7762673; $lng = 104.6671771; $zoom = 10.5;
            }elseif ($action=="ยโสธร") {
                $lat = 15.6988446; $lng = 104.2702966; $zoom = 10;
            }
            $abts = abt::where('Province','=',$action)->get();
        }
        $contentString =
        '<div id="content" class="form-group col-md-12 row">'.
            '<a href="/~plant/plantmaker/public/detail/[place_name]"><h1 id="firstHeading" class="firstHeading">[place_name]</h1></a>'.
            '<br>'.
            '<div id="bodyContent" class="col-md-6">'.
                '<p><h6>[place_name]</h6><br> ที่อยู่: [address] จังหวัด[province]<br>'.
                'ระดับ: [status]</p>'.
            '</div>'.
            '<div id="bodyContent" class="col-md-4">'.
                '<center><img src="/~plant/plantmaker/public/image_school/[nimg] " alt="Smiley face" height="230" width="300"></center>'.
            '</div>'.
        '</div>';

        $contentStrings = [];
        foreach($abts as $abt){
            $resultString = str_replace('[place_name]', $abt->Name, $contentString);
            $resultString = str_replace('[contributor]', "$abt->Name", $resultString);
            $resultString = str_replace('[address]', "$abt->Address", $resultString);
            $resultString = str_replace('[province]', "$abt->Province", $resultString);
            $resultString = str_replace('[status]', "$abt->Status", $resultString);
            $resultString = str_replace('[nimg]', "$abt->Picture_1", $resultString);

            $contentStrings[$abt->Name] = $resultString;
        }


        return view('welcome', compact('abts', 'contentString', 'contentStrings','lat','lng','zoom'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adddata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'Address' => 'required',
            'Province' => 'required',
            'Status' => 'required',
            'Register_date' => 'required',
            'Category' => 'required',
            'Latitude' => 'required',
            'longitude' => 'required'
            ]);

        $abts = new Abt([
            'Name' => $request->get('Name'),
            'Address' => $request->get('Address'),
            'Province' => $request->get('Province'),
            'Status' => $request->get('Status'),
            'Register_date' => $request->get('Register_date'),
            'Category' => $request->get('Category'),
            'Latitude' => $request->get('Latitude'),
            'longitude' => $request->get('longitude')
            ]);
        $abts->save();
        return redirect()->route('create')->with('success', 'บันทึกข้อมูลเรียบร้อย');
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
    public function delete(Request $request)
    {
        $Name_School = $request->get('name');
        $img=$request->get('status');

        \DB::table('abt')
                ->where('name',$Name_School)
                ->update([ $img => "NoImageFound.png" ]);

        return redirect()->back()->with('alert', 'Deleted!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    //แก้ไขข้อมูล
    {
        function img($request,$name_img,$Name_School)
        {
            if($file = $request->file($name_img)){
                $name = $Name_School.'-'.$name_img.".".$file->getClientOriginalExtension();
                $file->move(public_path('/image_school/'),$name);
                \DB::table('abt')
                ->where('name',$Name_School)
                ->update([ "$name_img" => $name ]);
            }else {
            }
        }
        if ($request->isMethod('post')) {
            $Name_School = $request->get('name');
            img($request,'Picture_1',$Name_School);
            img($request,'Picture_2',$Name_School);
            img($request,'Picture_3',$Name_School);
            img($request,'Picture_4',$Name_School);
            img($request,'Picture_5',$Name_School);
            img($request,'Picture_6',$Name_School);
            img($request,'Picture_7',$Name_School);
            img($request,'Picture_8',$Name_School);
            img($request,'Picture_9',$Name_School);
            img($request,'Picture_10',$Name_School);

            \DB::table('abt')
                ->where('name',$Name_School)
                ->update([
                    'Address' => $request->get('address'),
                    'Province' => $request->get('province'),
                    'Status' => $request->get('status'),
                    'Register_date'=> date('d-m-Y',strtotime($request->get('register_date'))),
                    'Certificate_date1' => date('d-m-Y',strtotime($request->get('Certificate_date1'))),
                    'Certificate_date2' => date('d-m-Y',strtotime($request->get('Certificate_date2'))),
                    'Vdo' => $request->get('vdo'),
                    'Latitude' => $request->get('lat'),
                    'longitude' => $request->get('lng'),
                ]);
        }else{
            echo"NOMETHOD";
        }
        $url = '/detail/'.$Name_School;
        return redirect($url);
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
