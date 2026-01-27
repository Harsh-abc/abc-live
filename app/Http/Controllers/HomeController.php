<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Careers;
use App\Models\Contacts;
use App\Models\Subscribes;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('home.home');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        $Careers = careers::select('id','name','job_role','attachment','created_at','location','contact','email')->orderby('id','desc')->take(10)->get();
        $Contacts = Contacts::select('id','name','contact','email','message','created_at')->orderby('id','desc')->take(5)->get();
        $careersCount = careers::count();
        $EnquiriesCount = Contacts::count();
       // $ProjectsCount = Projects::count();
        $SubscribesCount = Subscribes::count();
        $today = Carbon::now()->format('Y-m-d');
        $TodayEnquiries = Contacts::whereDate("created_at", $today)->count();
        $Todaycareers = careers::whereDate("created_at", $today)->count();
        return view('admin.dashboard',compact('Careers','Contacts','EnquiriesCount','careersCount','SubscribesCount','TodayEnquiries','Todaycareers'));
       
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('home.managerHome');
    }
}
