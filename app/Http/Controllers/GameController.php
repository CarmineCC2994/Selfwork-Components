<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public  $games = [
        ['id' => '1', 'title' => 'The Legend of Zelda Ocarina of Time', 'director' => 'Eiji Aonuma', 'img' => '/media/Zelda.jpg', 'genres' => 'action-adventure'],
        ['id' => '2', 'title' => 'Grand Theft Auto VI', 'director' => 'Sam Houser', 'img' => '/media/GTA.jpg', 'genres' => 'action-adventure'],
        ['id' => '3', 'title' => 'Resident Evil Requiem', 'director' => 'Koshi Nakanishi', 'img' => '/media/RER.jpg', 'genres' => 'survival horror'],
        ['id' => '4', 'title' => 'Phantom Blade Zero', 'director' => 'Qiwei Soulframe Liang', 'img' => '/media/Phantom.jpg', 'genres' => ' GDR'],
        ['id' => '5', 'title' => 'Control Resonant', 'director' => 'Mikael Kasurinen ', 'img' => '/media/control.jpg', 'genres' => "action RPG open world"],
        ['id' => '6', 'title' => '007 First Light', 'director' => ' Hakan Abrak', 'img' => '/media/seven.jpg', 'genres' => "action-adventure"]
    ];
    public function gamelist(){
   
    return view('game.games', ['games'=>$this->games]);

    }

 public function gamedetail($id){
   
     foreach($this->games as $game){
if($id == $game['id']){
    return view('game.detail', ['game'=>$game]);
    }
     }
}
}
