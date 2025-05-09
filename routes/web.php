<?php

use App\Http\Controllers\PostingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $salam = "<b>Selamat Datang</b>";
    $nama = "Andi";

    return view('beranda' , compact('salam' , 'nama'));
});

Route::get('/kontak', function () {
    return view('kontak');
});
// Route::get('/tentang', function () {
//     return view('tentang' , [
//         'roles' => [
//             [
//                 'posisi' => 'CEO',
//                 'tugas' => 'Memimpin Perusahaan'
//             ],
//             [
//                 'posisi' => 'CTO',
//                 'tugas' => 'Mengembangkan aplikasi'
//             ],
//             [
//                 'posisi' => 'Dirjen Pertamina',
//                 'tugas' => 'Blending(?) Pertalite'
//             ]
//         ]]);
// });

Route::get('/data',function(){
    $hasil = [
        [
            'nama' => 'Andi',
            'usia' => 25,
            'status' => 'Aktif'
        ],
        [
            'nama' => 'Budi',
            'usia' => 30,
            'status' => 'Tidak Aktif'
        ],
        [
            'nama' => 'Citra',
            'usia' => 22,
            'status' => 'Aktif'
        ],
        [
            'nama' => 'Dewi',
            'usia' => 48,
            'status' => 'Tidak Aktif'
        ],
        [
            'nama' => 'Eko',
            'usia' => 35,
            'status' => 'Aktif'
        ]
    ];
    
    return view('data', compact('hasil'));
});


Route::get('/tentang' , function () {
    $data = [
        [
            'nama' => 'Andi',
            'usia' => 25,
            'pekerjaan' => 'Programmer'
        ],
        [
            'nama' => 'Budi',
            'usia' => 30,
            'pekerjaan' => 'Desainer'
        ],
        [
            'nama' => 'Citra',
            'usia' => 22,
            'pekerjaan' => 'Dokter'
        ],
        [
            'nama' => 'Dewi',
            'usia' => 28,
            'pekerjaan' => 'Arsitek'
        ],
        [
            'nama' => 'Eko',
            'usia' => 35,
            'pekerjaan' => 'Pengusaha'
        ]
    ];
    
    return view('tentang', compact('data'));

});

Route::get('/produk', function () {
    return view('produk');
});



// Route::get('/produk/{id}',function ($id) {
//     $product = [
//         1 => ['id' => 1, "nama" => "Buku C++", 'harga' => 50000 ],
//         2 => ['id' => 2, "nama" => "Buku PPKN", 'harga' => 20000 ],
//     ];

//     return view('produk', ['produk' => $product[$id]]);
// });

Route::get('/post' , [PostingController::class , 'index']);

Route::get('/post/{id}' , [PostingController::class , 'show']);

Route::post('/post' , [PostingController::class , 'store']);

Route::put('/post/{id}' , [PostingController::class , 'update']);

Route::delete('/post/{id}' , [PostingController::class , 'destroy']);