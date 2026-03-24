<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JusaContactController extends Controller
{
    public function index(): View
    {
        $faqs = [
            [
                'question' => 'Are your smoothies allergen-free?',
                'answer' => 'We prepare everything in a shared kitchen environment. While we take all precautions, cross-contamination with tree nuts, coconut, and soy is possible. Please inform our team of any allergies when you visit and we\'ll do our best to accommodate you safely.',
            ],
            [
                'question' => 'Do you offer delivery?',
                'answer' => 'Yes! We partner with DoorDash, Uber Eats, and Grubhub for delivery within a 5-mile radius of each location. For large catering orders (10+ items), please contact us directly at least 48 hours in advance.',
            ],
            [
                'question' => 'Can I customize my drink?',
                'answer' => 'Absolutely — customization is our love language. You can swap base liquids (coconut water, almond milk, oat milk, water), add or remove ingredients, adjust sweetness levels, and add any of our premium boosters. Just ask!',
            ],
            [
                'question' => 'Are all items vegan?',
                'answer' => 'Most of our menu is plant-based by design. A few items contain bee pollen or marine collagen (clearly labeled). Our Collagen Boost add-on is available in both marine and bovine options. All smoothies and juices are 100% vegan unless otherwise noted.',
            ],
            [
                'question' => 'Do you cater for events?',
                'answer' => 'We love bringing the island to your event! We offer corporate wellness packages, wedding smoothie bars, and private event catering. Reach out via our contact form or email events@jusacafe.com for a custom quote.',
            ],
            [
                'question' => 'How does the loyalty program work?',
                'answer' => 'Earn 1 point per $1 spent in-cafe or online. Sign up free, track points via our app or website. Redeem points for free drinks, add-ons, and exclusive merchandise. Visit our Rewards page for full tier details.',
            ],
        ];

        return view('jusa.contact', compact('faqs'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        session()->flash('success', 'Thanks for reaching out! We\'ll get back to you within 24 hours.');

        return redirect()->route('contact');
    }
}
