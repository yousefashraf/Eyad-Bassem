<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Coach;
use App\Models\Testimonial;
use App\Models\FAQ;

class PageController extends Controller
{
    public function landing()
    {
        $page = Page::where('slug', 'landing')->published()->first();
        $coach = Coach::first();
        $testimonials = Testimonial::featured()->limit(3)->get();
        $faqs = FAQ::active()->limit(6)->get();

        return view('pages.landing', compact('page', 'coach', 'testimonials', 'faqs'));
    }

    public function evolved()
    {
        $page = Page::where('slug', 'evolved-balanced')->published()->first();
        $coach = Coach::first();
        $testimonials = Testimonial::featured()->limit(3)->get();
        $faqs = FAQ::active()->limit(8)->get();

        return view('pages.evolved', compact('page', 'coach', 'testimonials', 'faqs'));
    }
}
