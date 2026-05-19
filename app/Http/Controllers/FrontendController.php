<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Post;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $services = Service::take(4)->get();
        $clients = Client::all();
        $testimonials = Testimonial::all();
        $posts = Post::latest()->take(3)->get();

        return view('frontend.index', compact('settings', 'services', 'clients', 'testimonials', 'posts'));
    }

    public function about()
    {
        $settings = Setting::pluck('value', 'key');
        $testimonials = Testimonial::all();
        return view('frontend.about', compact('settings', 'testimonials'));
    }

    public function services()
    {
        $settings = Setting::pluck('value', 'key');
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view('frontend.services', compact('settings', 'services', 'testimonials'));
    }

    public function blog()
    {
        $settings = Setting::pluck('value', 'key');
        $posts = Post::latest()->paginate(10);
        return view('frontend.blog', compact('settings', 'posts'));
    }

    public function post($slug)
    {
        $settings = Setting::pluck('value', 'key');
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('frontend.single', compact('settings', 'post'));
    }

    public function contact()
    {
        $settings = Setting::pluck('value', 'key');
        $testimonials = Testimonial::all();
        return view('frontend.contact', compact('settings', 'testimonials'));
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
