<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function platformLogin()
    {
        return view("login");
    }

    public function aboutUs()
    {
        return view("about");
    }

    public function contactUs()
    {
        return view('contact');
    }
    
    public function influencersMarketing()
    {
        return view('influencers-marketing');
    }

    public function socialMediaManagement()
    {
        return view('social-media-management');
    }

    public function contentProduction()
    {
        return view('content-production');
    }

    public function influencersMarketingCaseStudies()
    {
        return view('influencers-marketing-case-studies');
    }

    public function socialMediaManagementCaseStudies()
    {
        return view('social-media-management-case-studies');
    }

    public function contentProductionCaseStudies()
    {
        return view('content-production-case-studies');
    }
    
    public function sendEmail(Request $request)
    {
        // send email to management
        Mail::send("email-templates.contact-us", ['request' => $request], function ($m) use ($request) {

            $m->from(config('emails.from_email'), config('emails.app_name'));
            $m->subject("Query submitted - {$request->get('name')}.");

            if (env('APP_ENV') === 'production') {

                # notify management for brief creation
                foreach (config('emails.managers') as $email) {
                    $m->to($email);
                }
            }else{
                # notify developers for brief creation
                foreach (config('emails.developer') as $email){
                    $m->to($email);
                }
            }
        });

        return ['success' => true];
    }
}
