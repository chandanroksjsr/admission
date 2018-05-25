<?php

namespace App\Http\Controllers;

use App\applications;
use App\colleges;
use Illuminate\Http\Request;


class ApplicationController extends Controller
{
    public function apply(Request $request){

        $name = $request->name;
        $phone = $request->phone;
        $college = $request->college;
        $course = $request->course;
        $city = $request->city;
        $twe = $request->twe;

        $application = new applications();


        $apply = $application::insert(
            ['Name' => $name, 'Phone' => $phone, 'College_Name' => $college, 'Course_Name' => $course, 'City' => $city, 'Twelfth' => $twe, 'ip' => $twe]
        );

        if($apply){
            $response['error'] = false;
            $response['msg'] = "SUCCESSFULLY SUBMITTED YOUR APPLICATION WE WILL CONTACT YOU SHORTLY!";
        return json_encode($response);
        }
        else{
            $response['error'] = true;
            $response['msg'] = "Some Error Occurred Please Try Again Later or Contact +91-9514763244 !";
            return json_encode($response);
        }

    }

    public function index(){

        //$collegesO = new colleges();
        $colleges = colleges::all();

        return view('pages.index',compact('colleges',$colleges));

    }
    //
    public function applypage(){

        //$collegesO = new colleges();
        $colleges = colleges::all();

        return view('pages.apply',compact('colleges',$colleges));

    }
    //
}
