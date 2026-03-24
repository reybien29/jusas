<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JusaRewardsController extends Controller
{
    public function index(): View
    {
        $promos = [
            [
                'title' => 'Buy 2, Get 1 Free',
                'description' => 'Mix and match any smoothies. Valid all day, every day.',
                'badge' => 'Ongoing',
                'badge_color' => 'green',
                'expires' => null,
                'image' => 'https://images.unsplash.com/photo-1553530979-212c4b3b9a1f?w=600&q=80',
            ],
            [
                'title' => 'Happy Hour: 20% Off',
                'description' => 'Every weekday 2–5 PM. All smoothies and juices.',
                'badge' => 'Daily',
                'badge_color' => 'orange',
                'expires' => null,
                'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?w=600&q=80',
            ],
            [
                'title' => 'Dragonfruit Pitaya Bowl — Summer Special',
                'description' => 'Our most vibrant bowl is back for summer. Limited quantities daily.',
                'badge' => 'Seasonal',
                'badge_color' => 'coral',
                'expires' => 'Aug 31, 2026',
                'image' => 'https://images.unsplash.com/photo-1506806732259-39c2d0268443?w=600&q=80',
            ],
            [
                'title' => 'Loyalty Double Points Weekend',
                'description' => 'Earn 2× points every Saturday and Sunday throughout the summer.',
                'badge' => 'Weekend',
                'badge_color' => 'green',
                'expires' => 'Sep 1, 2026',
                'image' => 'https://images.unsplash.com/photo-1640612764459-7f82a4fa0d30?w=600&q=80',
            ],
        ];

        $combos = [
            [
                'name' => 'Island Starter',
                'items' => ['Any Smoothie (M)', 'Granola Bar'],
                'original_price' => 13.50,
                'combo_price' => 10.99,
                'image' => 'https://images.unsplash.com/photo-1612516547822-1a51eac13534?w=400&q=80',
            ],
            [
                'name' => 'Power Warrior Pack',
                'items' => ['Berry Zen (L)', 'Acai Island Bowl', 'Plant Protein +'],
                'original_price' => 27.50,
                'combo_price' => 21.99,
                'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=400&q=80',
            ],
            [
                'name' => 'Detox Day Bundle',
                'items' => ['Jungle Glow (M)', 'Golden Hour Juice', 'Adaptogen Mix'],
                'original_price' => 22.25,
                'combo_price' => 17.99,
                'image' => 'https://images.unsplash.com/photo-1559181567-c3190b7feb5d?w=400&q=80',
            ],
        ];

        $tiers = [
            [
                'name' => 'Seedling',
                'points_required' => 0,
                'color' => 'surface-high',
                'perks' => ['Birthday smoothie', 'Early menu access'],
                'icon' => '🌱',
            ],
            [
                'name' => 'Sprout',
                'points_required' => 200,
                'color' => 'green',
                'perks' => ['5% off in-store purchases', 'Free add-on monthly', 'Seedling perks'],
                'icon' => '🌿',
            ],
            [
                'name' => 'Bloom',
                'points_required' => 500,
                'color' => 'orange',
                'perks' => ['10% off in-store purchases', '2 free add-ons monthly', 'Priority queue in café', 'Sprout perks'],
                'icon' => '🌺',
            ],
            [
                'name' => 'Oasis',
                'points_required' => 1000,
                'color' => 'coral',
                'perks' => ['15% off in-store purchases', 'Unlimited free add-ons', 'Exclusive tastings', 'Bloom perks'],
                'icon' => '🏝️',
            ],
        ];

        return view('jusa.rewards', compact('promos', 'combos', 'tiers'));
    }
}
