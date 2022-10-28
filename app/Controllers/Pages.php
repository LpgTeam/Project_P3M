<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function About()
    {
        $data = [
            'title' => 'About',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/about', $data);
    }

    public function Contact()
    {
        $data = [
            'title' => 'Contact Us',
            'kategori' => 'Rumah Sakit Umum',
            'alamat' => 'Jl. Istana No. 26 Kota Pinang - Labuhan Batu 21464',
            'notelp' => '(+62 624) 496766',
            'email' => 'rsud_kotapinang@yahoo.co.id'

        ];

        return view('pages/contact', $data);
    }
}
