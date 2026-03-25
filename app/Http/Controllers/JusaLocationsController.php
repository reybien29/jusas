<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JusaLocationsController extends Controller
{
    public function index(): View
    {
        $locations = [
            [
                'name' => 'Jusa\'s Tropical Smoothie Café — Naval',
                'address' => config('jusa.address'),
                'phone' => config('jusa.phone_display'),
                'phone_tel' => config('jusa.phone_e164'),
                'email' => 'hello@jusacafe.com',
                'hours' => [
                    'Monday – Friday' => '8:00 AM – 11:00 PM',
                    'Saturday' => '8:00 AM – 11:00 PM',
                    'Sunday' => '9:00 AM – 8:00 PM',
                ],
                'maps_url' => config('jusa.maps_url'),
                'is_flagship' => true,
                'image' => asset('images/gallery/gallery-06.png'),
            ],
        ];

        return view('jusa.locations', compact('locations'));
    }
}
