<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JusaAboutController extends Controller
{
    public function index(): View
    {
        $values = [
            [
                'icon' => 'leaf',
                'title' => '100% Organic',
                'description' => 'Every ingredient is certified organic and sourced from small-batch tropical farms that respect the earth and its people.',
            ],
            [
                'icon' => 'heart',
                'title' => 'Made with Love',
                'description' => 'Each blend is crafted by hand, cold-pressed to preserve the living enzymes and vitamins your body craves.',
            ],
            [
                'icon' => 'globe',
                'title' => 'Community First',
                'description' => 'We invest 5% of every purchase back into local wellness programs and sustainable farming initiatives.',
            ],
            [
                'icon' => 'sun',
                'title' => 'Seasonal Freshness',
                'description' => 'Our menu rotates with the seasons, celebrating the peak of every fruit\'s natural flavor cycle.',
            ],
            [
                'icon' => 'recycle',
                'title' => 'Zero Waste Pledge',
                'description' => 'All packaging is compostable. Our cafe runs on 100% renewable energy. The planet is our priority.',
            ],
            [
                'icon' => 'sparkles',
                'title' => 'Science Meets Nature',
                'description' => 'Every recipe is developed with nutritionists to maximize bioavailability without sacrificing taste.',
            ],
        ];

        $team = [
            [
                'name' => 'Charito Higanto Opeña Gray & Jerry Gray',
                'role' => 'Founders',
                'bio' => 'Charito and Jerry built Jusa\'s — and for years they\'ve opened doors for students in the community, mentoring and supporting them alongside growing the café.',
                'image' => asset('images/team-charito-jerry-gray.png'),
            ],
        ];

        $gallery = [
            'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=800&q=80',
            'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800&q=80',
            'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
            'https://images.unsplash.com/photo-1511690743698-d9d85f2fbf38?w=800&q=80',
            'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&q=80',
            'https://images.unsplash.com/photo-1585032226651-759b368d7246?w=800&q=80',
        ];

        return view('jusa.about', compact('values', 'team', 'gallery'));
    }
}
