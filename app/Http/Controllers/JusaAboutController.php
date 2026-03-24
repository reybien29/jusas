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
                'name' => 'Amara Osei',
                'role' => 'Founder & Head Nutritionist',
                'bio' => 'Born in Accra and raised on fresh tropical fruit, Amara founded JUSA to bring the healing power of whole foods to every community.',
                'image' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&q=80',
            ],
            [
                'name' => 'Kai Nakamura',
                'role' => 'Head of Culinary Innovation',
                'bio' => 'Former fine-dining chef turned wellness advocate. Kai engineers every flavor profile to be as beautiful as it is nourishing.',
                'image' => 'https://images.unsplash.com/photo-1556157382-97eda2d62296?w=400&q=80',
            ],
            [
                'name' => 'Priya Menon',
                'role' => 'Community & Partnerships',
                'bio' => 'Priya builds the bridges between JUSA and the farmers, athletes, and communities that make our mission possible.',
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80',
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
