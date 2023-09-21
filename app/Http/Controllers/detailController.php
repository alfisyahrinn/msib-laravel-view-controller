<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function biodata()
    {
        $data = [
            'nama' => 'Alfi Syahrin',
            'hobby' => ['futsal', 'sepak bola'],
            'favorite' => [
                'team' => 'Chelsea',
                'goat' => 'hazard'
            ],
        ];
        return view('biodata', [
            'data' => $data
        ]);
    }
    public function universitas()
    {
        $data = [
            'study' => [
                'universitas' => 'politeknik negeri lhokseumawe',
                'jurusan' => 'teknik informatika',
                'semester' => 4,
            ],
        ];
        return view('universitas', [
            'data' => $data
        ]);
    }
}
