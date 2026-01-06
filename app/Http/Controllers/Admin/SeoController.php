<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Categories;
use App\Models\HeaderSeo;
use App\Models\Urls;
use Illuminate\Support\Facades\Session;

class SeoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function Index(){
        $seo_data = Seo::get();
        return view('admin.seo.listing',compact('seo_data'));
    }
    public function add(){
       $Categories = Categories::select('id','name')->where('status',1)->get();
        return view('admin.seo.add',compact('Categories'));
    }
    public function edit($id){
        $id = base64_decode($id);
        $edit_data = Seo::where('id',$id)->first();
        return view('admin.seo.edit',compact('edit_data'));
    }

    public function Store(Request $request){
        $user_id = auth()->user()->id;
        $page_id = $request->page_id;
        $page_title = $request->page_title;
        $page_url = $request->page_url;
        $meta_keywords = $request->meta_keywords;
        $meta_description = $request->meta_description;
        $is_active = $request->is_active;

        $obj = new Seo();
        $obj->page_id = $page_id;
        $obj->title = $page_title;
        $obj->urls = $page_url;
        $obj->meta_keywords = $meta_keywords;
        $obj->meta_description = $meta_description;
        $obj->script_header = $request->meta_tag_script_header;
        $obj->script_footer = $request->meta_tag_script_footer;
        $obj->meta_tag_script = $request->meta_tag_script;
        $obj->user_id = $user_id;

        $obj->status = $is_active;
        $obj->save();
        toast('Seo Added Successfully!!!','success');
        Session::flash('success','Seo Added Successfully!!');

        return redirect('admin/seo');
    }

    public function changeStatus($status,$id)
    {
        $id=base64_decode($id);
        $status=(int) base64_decode($status);
        if($status == 0){
            Seo::where('id',$id)->update(['status' => 1]);
        }else{
            Seo::where('id',$id)->update(['status' => 0]);
        }
        Session::flash('success','Status Updated Successfully.');
        return redirect('admin/seo');
    }


    public function editStore(Request $request){
        $edit_id = $request->edit_id;
        $category_id = $request->category_id;
        $page_title = $request->page_title;
        $page_url = $request->page_url;
        $meta_keywords = $request->meta_keywords;
        $meta_description = $request->meta_description;
         $script_header = $request->meta_tag_script_header;
        $script_footer = $request->meta_tag_script_footer;
        $meta_tag_script = $request->meta_tag_script;

        $is_active = $request->is_active;

        Seo::where('id',$edit_id)->update(['title' => $page_title,'urls' => $page_url,
        'meta_keywords' =>$meta_keywords,'meta_description'=>$meta_description,'script_header'=>$script_header,'script_footer'=>$script_footer,'meta_tag_script'=>$meta_tag_script,'status'=>$is_active,'updated_at'=>now()]);
       
        Session::flash('success','Seo Updated Successfully.');
        return redirect('admin/seo');
    }

    public function deleteSeo($id){
        $delete_id=base64_decode($id);
        Seo::where('id',$delete_id)->delete();

        Session::flash('success','Seo Deleted Successfully.');
        return redirect('admin/seo');
    }

    // --------------------START-----------------------
    public function headerIndex(){
        $HeaderSeo = HeaderSeo::paginate(10);
        return view('admin.seo.header_listing',compact('HeaderSeo'))->render();
    }

    public function header_add(){
        return view('admin.seo.header_add');
    }

    public function headerSeoStatus($status,$id)
    {
        $id=base64_decode($id);
        $status=(int) base64_decode($status);
        if($status == 0){
            HeaderSeo::where('id',$id)->update(['status' => 1]);
        }else{
            HeaderSeo::where('id',$id)->update(['status' => 0]);
        }
        Session::flash('success','Status Updated Successfully.');
        return redirect('admin/seo/header-tags');
    }

    public function headerSeoEdit($id){
        $editId = base64_decode($id);
        $editdata = HeaderSeo::where('id',$editId)->first();
        return view('admin.seo.header_edit',compact('editdata'));
    }

    public function headerSeoStore(Request $request){
            $obj = new HeaderSeo();
            $obj->page_id = 1;
            $obj->tag_title = $request->tag_title;
            $obj->tag_description = $request->tags_description;
            $obj->status = $request->is_active;
            $obj->save();
    
        return redirect('admin/seo/header-tags');
    }

    public function headerSeoUpdate(Request $request){
        $edit_id = $request->edit_id;
    
        $obj = HeaderSeo::find($edit_id);
        $obj->page_id = 1;
        $obj->tag_title = $request->tag_title;
        $obj->tag_description = $request->tag_description;
        $obj->status = $request->is_active;
        $obj->save();

        Session::flash('success','Header Seo Updated Successfully.');
        return redirect('admin/seo/header-tags');
    }

    public function deleteHeaderSeo($id){
        $delete_id=base64_decode($id);
        HeaderSeo::where('id',$delete_id)->delete();

        Session::flash('success','Header Seo Deleted Successfully.');
        return redirect('admin/seo/header-tags');
    }


    // SEO URL 

    public function UrlIndex(){
        $data = Urls::get();
       return view('admin.seo.url_listing',compact('data'));
    }

    public function Urledit($id){
        $id = base64_decode($id);
        $edit_data = Urls::where('id',$id)->first();
        return view('admin.seo.edit_url',compact('edit_data'));
    }


    public function UrlStore(Request $request){
        $user_id = auth()->user()->id;
       
        $obj = new Urls();
        $obj->page_name = $request->page_name;
        $obj->urls = $request->page_url;
        $obj->utype = 2;
        $obj->user_id = $user_id;
        $obj->status = $request->is_active;
        $obj->save();
        toast('URL Added Successfully!!!','success');
        Session::flash('success','URL Added Successfully!!');

        return redirect('admin/seo/url/listing');
    }

    public function UrlchangeStatus($status,$id)
    {
        $id=base64_decode($id);
        $status=(int) base64_decode($status);
        if($status == 0){
            Urls::where('id',$id)->update(['status' => 1]);
        }else{
            Urls::where('id',$id)->update(['status' => 0]);
        }
        Session::flash('success','Status Updated Successfully.');
        return redirect()->back();
    }


    public function UrleditStore(Request $request){
        $user_id = auth()->user()->id;
      

        Urls::where('id',$request->edit_id)->update(['page_name' => $request->page_name,'urls' => $request->page_url,'user_id' => $user_id,
        'status'=>$request->is_active,'updated_at'=>now()]);
       
        Session::flash('success','URL Updated Successfully.');
        return redirect('admin/seo/url/listing');
    }


    public function UrldeleteSeo($id){
        $delete_id=base64_decode($id);
        Urls::where('id',$delete_id)->delete();

        Session::flash('success','URL Deleted Successfully.');
        return redirect()->back();
    }

    
}
