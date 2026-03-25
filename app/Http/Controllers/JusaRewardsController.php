<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JusaRewardsController extends Controller
{
    public function index(): View
    {
        $promos = [
            [
                'title' => 'Loyalty Card: 6 = 50% off, 12 = free',
                'description' => 'With your Jusa\'s Loyalty Card: every 6 qualifying purchases get 50% off your next; collect 12 stamps for a free reward.',
                'badge' => 'In store',
                'badge_color' => 'green',
                'expires' => null,
                'image' => 'https://images.unsplash.com/photo-1553530979-212c4b3b9a1f?w=600&q=80',
            ],
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
                'name' => 'Cardholder',
                'badge' => 'Start here',
                'subtitle' => 'Pick up a Loyalty Card in store — no fee, just stamps.',
                'color' => 'surface-high',
                'perks' => [
                    'One stamp per qualifying purchase',
                    'Track rewards right on your card',
                    'Same card works visit after visit',
                ],
                'icon' => '🪪',
            ],
            [
                'name' => 'Building',
                'badge' => '1–5 stamps',
                'subtitle' => 'Every visit brings you closer to your halfway reward.',
                'color' => 'green',
                'perks' => [
                    'Stamps add up on qualifying drinks & food',
                    'Ask staff which items qualify',
                    'Keep your card safe — it’s your record',
                ],
                'icon' => '🌿',
            ],
            [
                'name' => 'Halfway reward',
                'badge' => '6 stamps',
                'subtitle' => 'Hit six stamps on your Loyalty Card to unlock this tier.',
                'color' => 'orange',
                'perks' => [
                    '50% off your next qualifying purchase',
                    'Redeem before your next stamp reset (see in café)',
                    'Then keep stamping toward the big one',
                ],
                'icon' => '🌺',
            ],
            [
                'name' => 'Full card',
                'badge' => '12 stamps',
                'subtitle' => 'Complete the card — your loyalty pays off.',
                'color' => 'coral',
                'perks' => [
                    'One free qualifying item — on us',
                    'Pick up a fresh Loyalty Card and start again',
                    'Combine with other in-store offers where allowed',
                ],
                'icon' => '🏝️',
            ],
        ];

        return view('jusa.rewards', compact('promos', 'combos', 'tiers'));
    }
}
