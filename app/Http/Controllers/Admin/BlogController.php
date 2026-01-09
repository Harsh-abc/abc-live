<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blogs;
use App\Models\admin\Tags;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\admin\Categories_lookups;
use App\Models\admin\BlogImages;
use App\Models\admin\BannerImages;
use App\Models\admin\MediaImages;
use File;
use Image;


class BlogController extends Controller
{
    //
    public function Index(){
      $Blogs = Blogs::select('id','blog_order','blog_title','blog_url','blog_content','thumb_image','is_banner','is_popular','status','category_id','created_at')
      ->where('blogs.is_deleted',0)->orderBy('blog_order','desc')->get();
/*->where('status',1)
      foreach($Blogs as $blog){
        $obj = new MediaImages();
        $obj->status = 1;
        $obj->urls = $blog->thumb_image;
        $obj->thumbnails = $blog->thumb_image;
        $obj->save();
      }
      exit; */
       return view('admin.blog.listing',compact('Blogs'));
   }
 
     public function blogStatus($status,$id)
     {
       $id=base64_decode($id);
       $status = base64_decode($status);
       if($status == 0){
         Blogs::where('id',$id)->update(['status' => 1]);
       }else{
         Blogs::where('id',$id)->update(['status' => 0]);
       }
       toast('Status Updated Successfully!!!','success');
 
       return redirect()->back();
 
     }

     public function BlogBannerStatus($status,$id)
     {
       $id=base64_decode($id);
       $status = base64_decode($status);
       if($status == 0){
         Blogs::where('id',$id)->update(['is_banner' => 1]);
       }else{
         Blogs::where('id',$id)->update(['is_banner' => 0]);
       }
       toast('Banner Updated Successfully!!!','success');
 
       return redirect()->back();
 
     }

     public function BlogPopularStatus($status,$id)
     {
       $id=base64_decode($id);
       $status = base64_decode($status);
       if($status == 0){
         Blogs::where('id',$id)->update(['is_popular' => 1]);
       }else{
         Blogs::where('id',$id)->update(['is_popular' => 0]);
       }
       toast('Popular Updated Successfully!!!','success');
 
       return redirect()->back();
 
     }

     
 
     public function add(){
         $Categories = Categories::select('id','name')->where('type',3)->get();
        // $BannerImages = BannerImages::select('id','title','urls')->where('status',1)->where('type',3)->get();
         return view('admin.blog.add',compact('Categories'));
     }
 
     public function blogStore(Request $request){
      // dd($request);
      ini_set('memory_limit', '3072M');
      ini_set('max_execution_time', 10080);
      ini_set('upload_max_filesize', '20M');

      if($request->tags != null){
        // if tag not exist imsert
        foreach($request->tags as $k=>$item){
          $check = Tags::select('id')->where('name',$item)->first();
          if(empty($check)){
            $data = new Tags();
            $data->name = $item;
            $data->status = 1;
            $data->save();
          }
        }

        $tags = implode(',',$request->tags);
       
      }else{
        $tags = null;
      }

      $rand = rand(11111,99999);
      if ($request->hasFile('banner_image')) {
        $image = $request->file('banner_image');
        $extension = $image->getClientOriginalExtension();
        $fileName = 'Blog_banner_' . $rand . '.' . $extension;

        $image->move(public_path('img/blog'), $fileName);

        $banner_path = '/img/blog/' . $fileName;
MediaImages::create([ 'status' => 1, 'urls' => $banner_path, 'thumbnails' => $banner_path ]);
      
    } else {
        $banner_path = null;
    }
	 if ($request->hasFile('banner_image_1')) {
        $file = $request->file('banner_image_1');
		$extension = $image->getClientOriginalExtension();
        $filename = 'Blog_banner_1_' . $rand . '.' . $extension;
        $file->move(public_path('img/blog/left_banner'), $filename);
	$banner_path_1 = '/img/blog/left_banner/' . $fileName;    
MediaImages::create([ 'status' => 1, 'urls' => $banner_path_1, 'thumbnails' => $banner_path_1 ]);
	
    }
	else {
        $banner_path_1 = null;
    }
	
    if ($request->hasFile('thumb_image')) {
        $image = $request->file('thumb_image');
        $extension = $image->getClientOriginalExtension();
        $fileName = 'Blog_thumb_' . $rand . '.' . $extension;

        $image->move(public_path('img/blog/thumbnail'), $fileName);

        $thumb_path = '/img/blog/thumbnail/' . $fileName;
MediaImages::create([ 'status' => 1, 'urls' => $thumb_path, 'thumbnails' => $thumb_path ]);
    } else {
        $thumb_path = null;
    }


      $publish_date =  date("Y-m-d", strtotime($request->publish_date));  

       $obj = new Blogs();
         $obj->category_id = $request->category_id;
         $obj->banner_image = $banner_path;
		 $obj->banner_image_1 = $banner_path_1;
         $obj->thumb_image = $thumb_path;
		 $obj->Alt_Text_Thumbnail = $request->Alt_Text_Thumbnail;
		$obj->Alt_Text_Banner = $request->Alt_Text_Banner;
		    $obj->alt_text_banner_1 = $request->alt_text_banner_1;
		$obj->time_to_read = $request->time_to_read;
		$obj->highlight_color = $request->highlight_color;
         $obj->blog_title = $request->blog_name;
		 $obj->post_author = $request->post_author;
         $obj->blog_url = strtolower($request->blog_url);
         $obj->blog_content = $request->blog_content;
         $obj->tags = $tags;
         $obj->page_title = $request->page_title;
         $obj->meta_keywords = $request->meta_keywords;
         $obj->meta_description = $request->meta_description;
         $obj->publish_date = $publish_date;
         $obj->is_published = $request->is_published;
         $obj->status = $request->is_published;
         $obj->save();

         $Update = Blogs::find($obj->id);
         $Update->blog_order = $obj->id;
         $Update->update();

       return redirect('/admin/blog/all-post');
     }
 
     public function blog_details(){
         return view('admin.blog.add_details');
     }
 
     public function blog_view(){
         return view('admin.blog.view');
     }
 
     public function blog_edit($id){
      $id=base64_decode($id);
      $blog = Blogs::where('id',$id)->first();
      $Categories = Categories::select('id','name')->where('type',3)->get();

      return view('admin.blog.edit',compact('blog','Categories'));
     }

     public function blogUpdate(Request $request){
      ini_set('memory_limit', '3072M');
      ini_set('max_execution_time', 10080);
      ini_set('upload_max_filesize', '100M');

      if($request->tags != null){
        // if tag not exist imsert
        foreach($request->tags as $k=>$item){
          $check = Tags::select('id')->where('name',$item)->first();
          if(empty($check)){
            $data = new Tags();
            $data->name = $item;
            $data->status = 1;
            $data->save();
          }
        }

        $tags = implode(',',$request->tags);
        
      }else{
        $tags = null;
      }

      $banner_path = $request->edit_banner_image ?? null;
    $thumb_path  = $request->edit_thumb_image ?? null;
	      $banner_path_1 = $request->edit_banner_image1 ?? null;

    if ($request->hasFile('banner_image')) {
        $rand = rand(11111,99999);
        $image = $request->file('banner_image');
        $extension = $image->getClientOriginalExtension();
        $fileName = 'Blog_banner_'.$rand.'.'.$extension;
        $image->move(public_path('img/blog'), $fileName);
        $banner_path = '/img/blog/' . $fileName;
        $obj = new MediaImages(); $obj->status = 1; $obj->urls = $banner_path; $obj->thumbnails = $banner_path; $obj->save();
    }
	
	 if ($request->hasFile('banner_image_1')) {
        $rand = rand(11111,99999);
        $image = $request->file('banner_image_1');
        $extension = $image->getClientOriginalExtension();
        $fileName = 'Blog_banner_1_'.$rand.'.'.$extension;
        $image->move(public_path('img/blog/left_banner'), $fileName);
        $banner_path_1 = '/img/blog/left_banner/' . $fileName;
        $obj = new MediaImages(); $obj->status = 1; $obj->urls = $banner_path_1; $obj->thumbnails = $banner_path_1; $obj->save();
    }

    if ($request->hasFile('thumb_image')) {
        $rand = rand(11111,99999);
        $image = $request->file('thumb_image');
        $extension = $image->getClientOriginalExtension();
        $fileName = 'Blog_thumb_'.$rand.'.'.$extension;
        $image->move(public_path('img/blog/thumbnail'), $fileName);
        $thumb_path = '/img/blog/thumbnail/' . $fileName;
        $obj = new MediaImages(); $obj->status = 1; $obj->urls = $thumb_path; $obj->thumbnails = $thumb_path; $obj->save();
    }

        if($request->publish_date != null){
          $publish_date =  date("Y-m-d", strtotime($request->publish_date));  
        }else{
          $publish_date =  $request->prv_publish_date;
        }
          
        
        $obj = Blogs::find($request->edit_id);
        $obj->category_id = $request->category_id;
        $obj->banner_image = $banner_path;
		$obj->banner_image_1 = $banner_path_1;
        $obj->thumb_image = $thumb_path;
        $obj->blog_title = $request->blog_name;
		 $obj->Alt_Text_Thumbnail = $request->Alt_Text_Thumbnail;
		$obj->Alt_Text_Banner = $request->Alt_Text_Banner;
		    $obj->alt_text_banner_1 = $request->alt_text_banner_1;
		$obj->time_to_read = $request->time_to_read;
		$obj->highlight_color = $request->highlight_color;
        $obj->blog_url = strtolower($request->blog_url);
        $obj->blog_content = $request->blog_content;
 
        $obj->tags = $tags;

        $obj->page_title = $request->page_title;

        $obj->meta_keywords = $request->meta_keywords;
  
        $obj->meta_description = $request->meta_description;
      
        $obj->publish_date = $publish_date;
        $obj->is_published = $request->is_published;
        $obj->status = $request->is_published;
        $obj->update();
      return redirect('/admin/blog/all-post');
    }

    public function blog_delete($id){
      $id=base64_decode($id);
      Blogs::where('id',$id)->update(['is_deleted' => 1]);
      toast('Blogs Successfully Deleted!!!','success');
      return redirect()->back();
    }
 
     public function blog_categories(){
         $Categories = Categories::where('type',3)->latest()->paginate(10);
        $totalcount = Categories::where('type',3)->count();
        $activecount = Categories::where('status',1)->where('type',3)->count();
        $incativecount = Categories::where('status',0)->where('type',3)->count();
        $Category_list = Categories::select('id','name')->where('type',3)->latest()->get();


        return view('admin.blog.categories',compact('Categories','totalcount','activecount','incativecount','Category_list'));
     }

    public function CategoriesAddEdit(Request $request){
      $categories = explode(',',$request->category_name);
      if($request->edit_id == 0){
        foreach($categories as $k=>$value){
          $is_exists = Categories::where('name',$value)->where('type',$request->type)->count();
          if($is_exists == 0){
            $Insert = new Categories;
            $Insert->name = $value;
            $Insert->type = $request->type;
            $Insert->status = $request->is_active;
            $Insert->save();

            $looup = new Categories_lookups;
            $looup->categry_lookup = $Insert->id;
            $looup->category_id = $Insert->id;
            $looup->save();
          }
        }
      }else{
        if($request->category_id !== null){
          Categories_lookups::where('categry_lookup',$request->edit_id)->delete();

          foreach($request->category_id as $j=>$item){
            $looup = new Categories_lookups;
            $looup->categry_lookup = $request->edit_id;
            $looup->category_id = $item;
            $looup->save();
          }
        }

        $obj = Categories::find($request->edit_id);
        $obj->name = $request->edit_category_name;
        $obj->type = $request->type;
        $obj->status = $request->is_active_edit;
        $obj->update();
        toast('Categories Successfully Edited!!!','success');
      }
      return redirect()->back();
   }

     public function statusCategories($status,$id)
     {
       $id=base64_decode($id);
       $status = base64_decode($status);
       if($status == 0){
         Categories::where('id',$id)->update(['status' => 1]);
       }else{      
         Categories::where('id',$id)->update(['status' => 0]);
       }
       toast('Status Updated Successfully!!!','success');
 
       return redirect()->back();
     }
 
     public function deleteCategories($id)
     {
       $id=base64_decode($id);
       Categories::where('id',$id)->delete();
       toast('Category Successfully Deleted!!!','success');
       return redirect()->back();
     }

     public function TagsIndex(Request $request){
       $Tags = Tags::select('id','name','status','created_at')->paginate(10);
       return view('admin.blog.tags',compact('Tags'));
     }

     public function tagsAddEdit(Request $request){
      // First Check Tag Exist or Not.
      if($request->tag_id == 0){
        $tags = explode(',',$request->tags);
        foreach($tags as $k=>$tag){
          $check = Tags::select('id')->where('name',$tag)->first();
          if(empty($check)){
              $obj = new Tags();
              $obj->name = $tag;
              $obj->status = $request->is_active;
              $obj->save();
              toast('Tag Successfully Added!!!','success');
            }
          }
      }else{        
        $obj = Tags::find($request->tag_edit_id);
        $obj->name = $tag;
        $obj->status = $request->is_active;
        $obj->update();
        toast('Tag Successfully Edited!!!','success');
      }
        return redirect('/admin/blog/blog-tags');
     }

     public function deleteTags($id){
          $id=base64_decode($id);
          Tags::where('id',$id)->delete();
          toast('Tag Successfully Deleted!!!','success');
          return redirect()->back();
     }

     
     public function statusTags($status,$id)
     {
       $id=base64_decode($id);
       $status = base64_decode($status);
       if($status == 0){
        Tags::where('id',$id)->update(['status' => 1]);
       }else{
        Tags::where('id',$id)->update(['status' => 0]);
       }
       toast('Status Updated Successfully!!!','success');
 
       return redirect()->back();
     }

    // Banner Images Upload

    public function bannerFileStore(Request $request)
    {
      ini_set('memory_limit', '3072M');
      ini_set('max_execution_time', 10080);
      ini_set('upload_max_filesize', '20M');

      $rnd = rand();
      $extension = $request->file->getClientOriginalExtension();
      $file = $request->file('file');
        if($extension == "mp4" || $extension == "ogg" || $extension == "avi" || $extension == "mov" || $extension == "mkv"){
          $title_img = 'blog'.'_'.$rnd.'.'.$extension;
          $path_img = '/img/blog/blog'.'_'.$rnd.'.'.$extension;
          $path = public_path().'/img/blog/';
          $file->move($path, $title_img);
        }else{
          $title_img = 'blog'.'_'.$rnd.'.jpg';
          $path_img = '/img/blog/blog'.'_'.$rnd.'.jpg';
          $path = public_path().'/img/blog/';
          $file->move($path, $title_img);
        }

        $obj = new BannerImages();
        $obj->type = 3;
        $obj->status = 1;
        $obj->urls = $path_img;
        $obj->save();
       toast('Images Upload Successfully!!!','success');
        return response()->json(['success'=>$title_img]);
    }


    
    public function deleteBannerPhoto(Request $request){
      $moduleid = (int) $request->moduleid;
      $Image_path = public_path().$request->inputUrl;
      $res=BannerImages::where('id',$moduleid)->delete();
      if(File::exists($Image_path)) {
         File::delete($Image_path);
            return true;
        }else{
            return false;
        }
    }

    public function editBannerImgStore(Request $request){
        $moduleid = $request->moduleid;
        $inputTitle = $request->inputTitle;
        $inputAlt = $request->inputAlt;
        $inputUrl = $request->inputUrl;
        $inputDescription = $request->inputDescription;
      
        BannerImages::where('id',$moduleid)->update(['title' => $inputTitle,'alt' => $inputAlt,'urls' => $inputUrl,
        'description' =>$inputDescription]);
        return redirect()->back();
    }


     public function uploadcropimages($imgdata, $randn)
     {
            $title_img = 'Blog_thumb_'.$randn.'.jpg';
             $path = ('/img/blog/thumbnail/'.$title_img);
             $info = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgdata));
             $img1=Image::make($info);
            // $img1->resize(400, 446);
             $img1->save(public_path($path));
             $url = url('img/blog/thumbnail/'.$title_img);
             return $path;
             //$seourl = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',$request->title));
     }


      // Sub categories Start
    public function blog_subcategories(){
      $Categories = Categories::select('id','name')->where('type',3)->get();
      $Subcategories = Subcategories::join('categories','categories.id','subcategories.category_id')
      ->select('subcategories.id','subcategories.name','subcategories.category_id','subcategories.status','subcategories.created_at')
      ->where('type',3)->get();
      return view('admin.blog.subcategories',compact('Subcategories','Categories'));
    }

    public function SubCategoriesAddEdit(Request $request){
      $categories = explode(',',$request->subcategory_name);
        foreach($categories as $k=>$value){
          $is_exists = Categories::where('name',$value)->where('type',$request->type)->count();
          if($is_exists == 0){
            $Insert = new Categories;
            $Insert->name = $value;
            $Insert->type = $request->type;
            $Insert->status = $request->is_active;
            $Insert->save();

            foreach($request->category_id as $j=>$item){
              $looup = new Categories_lookups;
              $looup->categry_lookup = $Insert->id;
              $looup->category_id = $item;
              $looup->save();
            }
          }
        }
        toast('Sub-Category Successfully Added!!!','success');
   
      return redirect()->back();
    }

  public function sorting(Request $request)
  {
    $blogIdsArray = $_POST['order'];
    $count = 1;
    foreach ($blogIdsArray as $id) {
      $blogOrder = $count;
      $photo = Blogs::find($id);
      $photo->blog_order= $blogOrder;
      $photo->save();
      $count ++;      
    }
      return response(['message' => 'Blogs order is updated Successfully!!!', 'status' => 'success'], 200);
    
  }
  public function BlogCategorySorting(Request $request)
  {
    $productIdsArray = $_POST['order'];
    $count = 1;
    foreach ($productIdsArray as $id) {
      $categoryOrder = $count;
      $obj = Categories::where('id',$id)->where('type',3)->update(['category_order'=>$categoryOrder]);
      $count ++;
    }
      return response(['message' => 'Products order is updated Successfully!!!', 'status' => 'success'], 200);
    
  }
  
}
