<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // session(['username' => $request->username]);

        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $products = [
            [
                'id' => 1,
                'name' => 'Laptop Asus ROG',
                'category' => 'Electronics',
                'price' => 15000000,
                'stock' => 10,
                'image' => 'asus-rog.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Smartphone Samsung Galaxy S21',
                'category' => 'Electronics',
                'price' => 12000000,
                'stock' => 15,
                'image' => 'samsungs21.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Headphone Sony WH-1000XM4',
                'category' => 'Accessories',
                'price' => 4500000,
                'stock' => 20,
                'image' => 'headphonesony.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Mechanical Keyboard Logitech G Pro',
                'category' => 'Accessories',
                'price' => 2000000,
                'stock' => 25,
                'image' => 'keypad.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Monitor LG UltraGear',
                'category' => 'Electronics',
                'price' => 5000000,
                'stock' => 8,
                'image' => 'monitorlg.png',
            ],
            [
                'id' => 6,
                'name' => 'Iphone 16 Pro 512 GB',
                'category' => 'Electronics',
                'price' => 26000000,
                'stock' => 2,
                'image' => 'ip16.avif'
            ],
        ];

        return view('pengelolaan', compact('products', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query ('username', 'Guest');
        return view('profile', compact('username'));
    }
}