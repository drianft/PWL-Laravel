<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public $Posting;
    // Initialize Posting as an array
    public function __construct()
    {
        for ($i = 1; $i <= 10; $i++) {
            $this->Posting[] = [
                'Judul' => 'Judul Postingan ' . $i,
                'Isi' => 'Isi' . $i,
                'Kategori' => 'Kategori' . $i
            ];
        }
    }

    //
    public function index()
    {
        return $this->Posting;
    }

    public function show($id)
    {
        return $this->Posting[$id - 1];
    }

    public function store()
    {
        $this->Posting[]= [
            'Judul' => request('Judul'),
            'Isi' => request('Isi'),
            'Kategori' => request('Kategori')
        ];
        return $this->Posting;
    }

    public function update($id)
    {
        $this->Posting[$id - 1] = [
            'Judul' => request('Judul'),
            'Isi' => request('Isi'),
            'Kategori' => request('Kategori')
        ];
        return $this->Posting;
    }

    public function destroy($id)
    {
        unset($this->Posting[$id - 1]);
        return $this->Posting;
    }
};