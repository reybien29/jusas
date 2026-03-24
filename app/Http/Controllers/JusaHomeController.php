<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JusaHomeController extends Controller
{
    public function index(): View
    {
        $about = [
            'eyebrow' => 'About Us',
            'title_line1' => 'Born from the island.',
            'title_accent' => 'Rooted in Naval.',
            'lead' => 'Jusa\'s Tropical Smoothie Café blends bold fruit, comfort food, and island energy — a local favorite where every cup and plate is made with heart.',
            'paragraphs' => [
                'We started with a simple idea: real ingredients, real flavor, and a space where neighbors feel at home. From sunrise smoothies to hearty plates, we craft everything to fuel your day the tropical way.',
                'Whether you are grabbing a quick blend or settling in with friends, our team is here to make every visit bright, fresh, and unmistakably Jusa\'s.',
            ],
            'pillars' => [
                [
                    'icon' => 'leaf',
                    'title' => 'Fresh & honest',
                    'text' => 'Quality produce and vibrant recipes you can taste in every sip and bite.',
                ],
                [
                    'icon' => 'users',
                    'title' => 'Community first',
                    'text' => 'Proudly serving Naval with hospitality that keeps guests coming back.',
                ],
                [
                    'icon' => 'sparkles',
                    'title' => 'Crafted in-house',
                    'text' => 'Blends and dishes prepared daily — never rushed, never ordinary.',
                ],
            ],
            'stats' => [
                ['value' => '50+', 'label' => 'Menu items & blends', 'accent' => 'green'],
                ['value' => '100%', 'label' => 'Made-to-order focus', 'accent' => 'red'],
                ['value' => '5K+', 'label' => 'Guests welcomed', 'accent' => 'orange'],
            ],
            'image_main' => [
                'url' => asset('images/about-cafe-interior.png'),
                'alt' => 'Jusa\'s Café interior with wood-slatted counter, red menu boards, vertical fruit display, and JUSA letter signage',
            ],
        ];

        $amenities = [
            'eyebrow' => 'Amenities',
            'title' => 'Everything for a',
            'title_accent' => 'comfortable visit.',
            'lead' => 'Relax, recharge, and enjoy — our café is set up so you can linger over a blend, grab something quick, or bring the whole crew.',
            'items' => [
                [
                    'icon' => 'wifi',
                    'title' => 'Free Wi‑Fi',
                    'text' => 'Stay connected while you sip — reliable guest Wi‑Fi throughout the dining area.',
                ],
                [
                    'icon' => 'bolt',
                    'title' => 'Charging-friendly seating',
                    'text' => 'Power up phones and laptops at tables made for work, study, or catching up with friends.',
                ],
                [
                    'icon' => 'snowflake',
                    'title' => 'Cool, comfortable dining',
                    'text' => 'Air-conditioned space so every visit feels fresh, even on the warmest Biliran afternoons.',
                ],
                [
                    'icon' => 'users',
                    'title' => 'Family & group friendly',
                    'text' => 'Room for shared plates, smoothies, and conversation — welcoming for all ages.',
                ],
                [
                    'icon' => 'map-pin',
                    'title' => 'Easy to find',
                    'text' => 'Centrally located in Naval with clear signage — stop in on your way through town.',
                ],
                [
                    'icon' => 'utensils',
                    'title' => 'Dine in or take out',
                    'text' => 'Enjoy your favorites in-house with full table service vibes, or order to go when you are on the move.',
                ],
            ],
            'image' => [
                'url' => asset('images/amenities-fresh-fruit-display.png'),
                'alt' => 'Fresh tropical fruit display beside vertical JUSA letter boxes at Jusa\'s Café',
            ],
            'badge' => [
                'title' => 'Come as you are',
                'text' => 'Casual dress, friendly staff, and a laid-back island atmosphere — every time you walk in.',
            ],
        ];

        $gallery = [
            'eyebrow' => 'Gallery',
            'title' => 'Moments & spaces',
            'lead' => 'Team photos, branches across Biliran, fresh produce, and the community we are proud to serve.',
            'items' => [
                ['src' => asset('images/gallery/gallery-01.png'), 'alt' => 'Jusa\'s Caibiran branch team posing indoors in front of the café banner'],
                ['src' => asset('images/gallery/gallery-02.png'), 'alt' => 'Jusa\'s Caibiran branch team outside the storefront on opening day'],
                ['src' => asset('images/gallery/gallery-03.png'), 'alt' => 'Large community group outdoors in front of a colorful entrance arch'],
                ['src' => asset('images/gallery/gallery-04.png'), 'alt' => 'Community gathering at the BASIG Regional entrance with palm trees'],
                ['src' => asset('images/gallery/gallery-05.png'), 'alt' => 'Mr & Ms Jusas pageant winners on stage in formal wear with sashes'],
                ['src' => asset('images/gallery/gallery-06.png'), 'alt' => 'Downtown Naval branch storefront with tropical smoothie signage'],
                ['src' => asset('images/gallery/gallery-07.png'), 'alt' => 'Fresh tropical fruit display beside vertical JUSA letter boxes'],
                ['src' => asset('images/gallery/gallery-08.png'), 'alt' => 'Jusa\'s Café team celebration indoors with festive pennant decorations'],
                ['src' => asset('images/gallery/gallery-09.png'), 'alt' => 'Staff gathering around a festive table with roasted lechon'],
                ['src' => asset('images/gallery/gallery-10.png'), 'alt' => 'Uniformed team in front of the Naval Jusa\'s Tropical Smoothie Café sign'],
                ['src' => asset('images/gallery/gallery-11.png'), 'alt' => 'Team group photo indoors with colorful ceiling pennants'],
                ['src' => asset('images/gallery/gallery-12.png'), 'alt' => 'Staff behind the counter with fresh mangoes and a branded smoothie cup'],
                ['src' => asset('images/gallery/gallery-13.png'), 'alt' => 'Team members with prepared smoothies and dragon fruit at the counter'],
                ['src' => asset('images/gallery/gallery-14.png'), 'alt' => 'Staff with rows of packaged smoothies ready for guests'],
                ['src' => asset('images/gallery/gallery-15.png'), 'alt' => 'Colorful tropical smoothies in clear Jusa\'s Café branded cups'],
                ['src' => asset('images/gallery/gallery-16.png'), 'alt' => 'Jusa\'s Café administrative team in red uniforms at the office'],
            ],
        ];

        $heroSlides = [
            [
                'src' => asset('images/hero-slider-1-smoothie.png'),
                'alt' => 'JUSA’s Café banana smoothie with fresh fruit, mint, water splash, and JUSA’S CAFE logo on the cup',
            ],
            [
                'src' => asset('images/hero-slider-2-sisig.png'),
                'alt' => 'Jusa\'s Sizzling Pork Sisig',
            ],
            [
                'src' => asset('images/hero-slider-3-combo.png'),
                'alt' => 'Spaghetti and burger combo meals',
            ],
            [
                'src' => asset('images/hero-slider-4-salad.png'),
                'alt' => 'Fresh garden salad with grilled chicken',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Sarah C.',
                'role' => 'Wellness Coach',
                'initials' => 'SC',
                'text' => 'Finally a place that doesn\'t use artificial syrups. The Sunset Pulse is pure liquid sunshine!',
                'rating' => 5,
            ],
            [
                'name' => 'Marcus J.',
                'role' => 'Athlete',
                'initials' => 'MJ',
                'text' => 'Perfect pre-workout fuel. Clean, filling, and actually tastes like real fruit.',
                'rating' => 5,
            ],
            [
                'name' => 'Elena L.',
                'role' => 'Designer',
                'initials' => 'EL',
                'text' => 'The atmosphere in the shop is just as refreshing as the drinks. A luxury experience.',
                'rating' => 5,
            ],
            [
                'name' => 'David B.',
                'role' => 'Entrepreneur',
                'initials' => 'DB',
                'text' => 'My daily morning ritual. I haven\'t felt this energetic in years. JUSA is life-changing.',
                'rating' => 5,
            ],
        ];

        return view('jusa.home', compact('about', 'amenities', 'gallery', 'heroSlides', 'testimonials'));
    }
}
