<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;
use App\Models\Contacts;
use App\Models\Subscribes;

class HomeadminController extends Controller
{
    //career view admin

    public function career_view(){
        $Careers = Careers::orderBy('id','desc')->paginate(30);
        return
         view('admin.career',compact('Careers'));
    }

    public function careerDelete($id)
    {
      $id=base64_decode($id);
      Careers::where('id',$id)->delete(['id' => $id]);
      toast('Careers Successfully Deleted!!!','success');
      return redirect()->back();
    }

    public function inquiry()
    {
      $data = Contacts::orderBy('id','desc')->paginate(30);
      return view('admin.inquiry',compact('data'));
    }

    public function newsletter()
    {
      $data = Subscribes::orderBy('id','desc')->paginate(30);
      return view('admin.newsletter_subscription',compact('data'));
    }

    public function newsletter_Delete($id)
    {
      $id=base64_decode($id);
      Subscribes::where('id',$id)->delete(['id' => $id]);
      toast('Successfully Deleted!!!','success');
      return redirect()->back();
    }
}
