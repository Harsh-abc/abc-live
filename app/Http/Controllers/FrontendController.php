<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use File;
use Validator;
use Redirect;
use App\Models\Careers;
use App\Models\Subscribes;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;
use App\Mail\Subscribe;
use App\Models\admin\Blogs;
use App\Models\Categories;
use App\Models\Tags;
use Illuminate\Http\JsonResponse;

use Mail;

class FrontendController extends Controller
{
   public function index()
   {
      //exit;
      return view('frontend.home');
   }


   public function projects()
   {
      $projects = Projects::where('status', 1)->orderBy('id', 'desc')->get();
      return view('frontend.our_projects', compact('projects'));
   }


   public function workdetails()
   {
      $json = \File::get('data.json');

      $data = json_decode($json);

      print_r($data);
      exit;
   }

   public function save_enquires(Request $request)
   {
      //$enq = Contacts::Create($_POST);

      //	if($enq){
      //		return redirect()->back()->with('success','Enquiry submited successfully!!!');
      //	}

      //	}

      $request->validate([
         'name' => 'required|string',
         'email' => 'nullable|email',
         // 'contact' => 'required|digits:10|numeric',
         'contact' => 'required|numeric',
         'subject' => 'nullable|string',
         /// 'message' => 'required',
         // 'g-recaptcha-response' => ['required', new ReCaptcha]
      ]);

      $enq = Contacts::create([
         'name' => $request->name,
         'contact' => $request->contact,
         'email' => $request->email,
         'subject' => $request->subject,
         'message' => $request->message
      ]);

      //   Alert::success('Success', 'This is a success message!');
      // if($enq){

      $data = [
         'subject' => 'New Contact Us Enquiry from Website',
         'email' => $request->email,
         'name' => $request->name,
         'contact' => $request->contact,
         'message' => $request->message,
      ];

      if (Mail::send('emails.contact_us', ['data' => $data], function ($message1) use ($data) {
         $message1->from('info@abcdesigns.in', 'ABC DESIGNS');
         $message1->subject($data['subject']);
         // $message->to($data['email']);
         $message1->to('info@abcdesigns.in');
         //$message1->to('sofiya@abcdesigns.in');
         $message1->cc('operations@abcdesigns.in');
         $message1->cc('sakshi@abcdesigns.in');
         // $message1->cc('sofiya@abcdesigns.in');
         $message1->cc('mohammad.abcdesigns@gmail.com');
      })) {
         //    echo"email sent"; exit;
      } else {
         //    echo"Error! Email did not send."; exit;
      };



      //toast('Enquiry submited successfully!!!','success');
      // }else{
      //toast('Somthing went wrong!!!','error');
      // }


      return redirect('/thanks');
   }

   public function save_career(Request $request)
   {

      $request->validate([
         'name' => 'required|string',
         'email' => 'required|email',
         'contact' => 'required|numeric',
         'location' => 'required',
         'job_role' => 'required',
         'attachment' => 'required|mimes:pdf|max:5000',
         'message' => 'required',
         // 'g-recaptcha-response' => ['required', new ReCaptcha]
      ]);


      $name = $request->name;
      $email = $request->email;
      $contact = $request->contact;
      $location = $request->location;
      $job_role = $request->job_role;
      $message = $request->message;

      $file = $request->file('attachment');
      $filename = time() . '.' . $request->file('attachment')->extension();
      $filePath = public_path() . '/img/career/';
      $file->move($filePath, $filename);

      $result = Careers::create([
         'name' => $name,
         'email' =>  $email,
         'contact' =>  $contact,
         'location' =>  $location,
         'job_role' =>  $job_role,
         'attachment' =>  $filename,
         'message' => $message
      ]);

      if ($result) {
         $data = [
            'subject' => 'New Career Enquiry From Website',
            'email' => $request->email,
            'name' => $request->name,
            'contact' => $request->contact,
            'location' => $request->location,
            'job_role' => $request->job_role,
            'attachment' => $request->attachment,
            'message' => $request->message,
         ];

         /*  Mail::send('emails.career', ['data'=>$data], function($message) use($data){
          $message->from('zakir@abcdesigns.in','Team ABC');
          $message->subject($data['subject']);
         // $message->to($data['email']);
         $message->to("mohammad.abcdesigns@gmail.com");
        }); */
         toast('Careers submited successfully!!!', 'success');
      } else {
         toast('Somthing went wrong!!!', 'error');
      }
      // return redirect()->back();	
      return redirect('/thanks');
   }

   public function Subscribes(Request $request)
   {
      // Mail::to('Zakir@abcdesigns.in')->send(new Subscribe($request->email));
      $obj = new Subscribes;
      $obj->email = $request->email;
      $obj->save();
      return redirect()->back()->with('success', 'Thank you for subscribing!');
   }

   public function blogpage()
   {
      $Blogs = Blogs::select('id', 'blog_order', 'post_author', 'blog_title', 'blog_url', 'blog_content', 'thumb_image', 'is_banner', 'is_popular', 'status', 'category_id', 'created_at')
         ->where('status', 1)->where('blogs.is_deleted', 0)->orderBy('blog_order', 'desc')->get();

      $categories = Categories::where('status', 1)
         ->where('type', 3)
         ->orderBy('name')
         ->get();
      return view('frontend.blog.listing', compact('Blogs', 'categories'));
   }

   public function bloginnerpage($slug)
   {
      $blog = Blogs::where('blog_url', $slug)->where('is_deleted', 0)->firstOrFail();
      // Get all tag names from blog (comma-separated)
      $tagNames = !empty($blog->tags) ? explode(',', $blog->tags) : [];
      // Get only those tag names that exist in the tags table with status = 1
      $activeTags = Tags::whereIn('name', $tagNames)
         ->where('status', 1)
         ->pluck('name')
         ->toArray();

      $relatedBlogs = Blogs::where('is_deleted', 0)
         ->where('id', '!=', $blog->id)
         ->where('status', 1)
         ->orderBy('created_at', 'desc')
         ->take(3)
         ->get();
      return view('frontend.blog.blog-inner', compact('blog', 'activeTags', 'relatedBlogs'));
   }
}
