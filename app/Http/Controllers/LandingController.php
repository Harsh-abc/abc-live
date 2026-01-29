<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPageEnquiry;

class LandingController extends Controller
{
    public function indiaLandingPage()
    {
        return view('frontend.landing_pages.india');
    }

    public function uaeLandingPage()
    {
        return view('frontend.landing_pages.uae');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'contact' => 'required|string|max:20',
            'service' => 'nullable|string',
            'message' => 'nullable|string',
            'source'  => 'required|string',
        ]);

        LandingPageEnquiry::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'contact' => $request->contact,
            'service' => $request->service,
            'message' => $request->message,
            'source'  => $request->source,
            'status'  => '1',
            'utm_source'   => $request->utm_source ?? null,
            'utm_medium'   => $request->utm_medium ?? null,
            'utm_campaign' => $request->utm_campaign ?? null,
            'utm_term'     => $request->utm_term ?? null,
            'utm_content'  => $request->utm_content ?? null,
            'gclid'        => $request->gclid ?? null,
            'landing_page' => $request->landing_page ?? null,
            'referrer'     => $request->referrer ?? null,
            'user_ip'      => $request->user_ip ?? null,
            'user_agent'   => $request->user_agent ?? null,
        ]);

        return back()->with('success', 'Thank you! We will contact you shortly.');
    }

    public function delete($id)
    {
        LandingPageEnquiry::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Enquiry deleted successfully.');
    }

    public function landing_enquiries_list()
    {
        $enquiries = LandingPageEnquiry::where('status', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.landing_enquiries_list', compact('enquiries'));
    }
}
