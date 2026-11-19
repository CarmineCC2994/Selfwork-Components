<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    private $mangas = [
        [
            'id' => 1,
            'title' => 'Pluto',
            'author' => 'Naoki Urasawa',
            'genre' => 'Fantascienza, Thriller',
            'image' => 'https://www.ibs.it/images/9781421519197_0_0_424_0_75.jpg',
            'description' => 'Un thriller fantascientifico ambientato in un mondo dove esseri umani e robot convivono.',
            'content' => 'Il detective robot Gesicht indaga su una serie di misteriosi omicidi che coinvolgono i robot più potenti del mondo.'
        ],
        [
            'id' => 2,
            'title' => '20th Century Boys',
            'author' => 'Naoki Urasawa',
            'genre' => 'Thriller, Mistero',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2XTcJZVvl72oA_9GiAEone-BAlYrRyMXzJkLWEAqQZQ&s=10',
            'description' => 'Un gruppo di amici si ritrova coinvolto in una misteriosa cospirazione.',
            'content' => 'Un simbolo legato ai ricordi d infanzia sembra anticipare eventi catastrofici che minacciano il futuro dell umanità.'
        ],
        [
            'id' => 3,
            'title' => 'Devilman',
            'author' => 'Go Nagai',
            'genre' => 'Horror, Azione',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXKL16pfSUo027t1HnvRCo7Kv5t4waUUOt3MrOQu3zSg&s=10',
            'description' => 'Una storia oscura che racconta il conflitto tra uomini e demoni.',
            'content' => 'Akira Fudo acquisisce i poteri di un demone per combattere le creature che minacciano l umanità.'
        ],
        [
            'id' => 4,
            'title' => 'Slam Dunk',
            'author' => 'Takehiko Inoue',
            'genre' => 'Sport, Commedia',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzUMm4HPiXxVJ0X8-5fdE-An9lk50TZXAygs-_APH4iw&s=10',
            'description' => 'Una storia di amicizia, crescita personale e pallacanestro.',
            'content' => 'Hanamichi Sakuragi entra nella squadra di basket della scuola e scopre progressivamente la propria passione per questo sport.'
        ],
        [
            'id' => 5,
            'title' => 'GTO',
            'author' => 'Tohru Fujisawa',
            'genre' => 'Commedia, Scolastico',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqfQsBCMKXo1Csa1OIGhoKRRcLYSfQxF2tIURp7x_XTw&s=10',
            'description' => 'Le avventure di un insegnante decisamente fuori dagli schemi.',
            'content' => 'Eikichi Onizuka, ex teppista e aspirante insegnante, affronta una classe difficile con metodi poco convenzionali.'
        ],
    ];

    public function home()
    {
        return view('homepage', [
            'mangas' => $this->mangas
        ]);
    }

    public function index()
    {
        return view('mangas', [
            'mangas' => $this->mangas
        ]);
    }

    public function show($id)
    {
        $manga = collect($this->mangas)->firstWhere('id', $id);

        abort_if(!$manga, 404);

        return view('manga-detail', [
            'manga' => $manga
        ]);
    }
}