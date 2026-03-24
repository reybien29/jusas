<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JusaMenuController extends Controller
{
    public function index(): View
    {
        $menuBoards = [
            [
                'id' => 'menu-breakfast',
                'title' => 'All-day breakfast',
                'short' => 'Breakfast',
                'src' => asset('images/menu/menu-01.png'),
                'alt' => 'Jusa\'s all-day breakfast menu board with egg and rice meals and free coffee offer',
            ],
            [
                'id' => 'menu-sulit-bundle',
                'title' => 'Sulit bundle meal',
                'short' => 'Sulit bundle',
                'src' => asset('images/menu/menu-02.png'),
                'alt' => 'Jusa\'s Sulit Bundle meal with smoothies, lumpia, burgers, spaghetti, and fries',
            ],
            [
                'id' => 'menu-sizzling',
                'title' => 'Sizzling plates',
                'short' => 'Sizzling',
                'src' => asset('images/menu/menu-03.png'),
                'alt' => 'Jusa\'s Sizzling menu with pork sisig, pork chop, liempo, and garlic pepper beef',
            ],
            [
                'id' => 'menu-solo-snacks',
                'title' => 'Solo snacks',
                'short' => 'Solo snacks',
                'src' => asset('images/menu/menu-04.png'),
                'alt' => 'Jusa\'s Solo Snacks menu with burger, carbonara, spaghetti, siomai, siopao, and fries',
            ],
            [
                'id' => 'menu-combo-meals',
                'title' => 'Sulit combo meals',
                'short' => 'Combo meals',
                'src' => asset('images/menu/menu-05.png'),
                'alt' => 'Jusa\'s Sulit Combo meals J-1 through J-5 with photos and prices',
            ],
            [
                'id' => 'menu-sulit-combo-light',
                'title' => 'Sulit combo (light)',
                'short' => 'Combo light',
                'src' => asset('images/menu/menu-15.png'),
                'alt' => 'Jusa\'s Sulit Combo meals J-1 through J-4 on light wood background with prices',
            ],
            [
                'id' => 'menu-super-sulit-combo',
                'title' => 'Super sulit combo',
                'short' => 'Super combo',
                'src' => asset('images/menu/menu-16.png'),
                'alt' => 'Jusa\'s Super Sulit Combo meal with bangus, rice, egg, and smoothie for 195 pesos',
            ],
            [
                'id' => 'menu-salads-sides',
                'title' => 'Salads & sides',
                'short' => 'Salads',
                'src' => asset('images/menu/menu-06.png'),
                'alt' => 'Fresh mixed green salad, fruit salad, empanada, and lumpia menu board',
            ],
            [
                'id' => 'menu-smoothies',
                'title' => 'Smoothies & frappe',
                'short' => 'Smoothies',
                'src' => asset('images/menu/menu-07.png'),
                'alt' => 'Jusa\'s tropical fresh fruit smoothies and frappe menu with add-ons',
            ],
            [
                'id' => 'menu-green-salad',
                'title' => 'Green salad promo',
                'short' => 'Green salad',
                'src' => asset('images/menu/menu-08.png'),
                'alt' => 'Jusa\'s Fresh Mixed Green Salad with and without chicken pricing',
            ],
            [
                'id' => 'menu-solo-snacks-tropical',
                'title' => 'Solo snacks (tropical)',
                'short' => 'Snacks+',
                'src' => asset('images/menu/menu-10.png'),
                'alt' => 'Jusa\'s Solo Snacks tropical-style menu with burger, carbonara, spaghetti, siomai, siopao, and fries',
            ],
            [
                'id' => 'menu-new-sides',
                'title' => 'Empanada & lumpia',
                'short' => 'Sides',
                'src' => asset('images/menu/menu-14.png'),
                'alt' => 'Jusa\'s new menu with empanada, vegetable lumpia, and Shanghai lumpia',
            ],
        ];

        return view('jusa.menu', compact('menuBoards'));
    }
}
