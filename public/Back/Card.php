<?php

class Card{
    public int $ID;
    public string $Image;
    public string $Name;
    public string $Owner;
    public string $Date;
    public string $City;
    public int $Zip;
    public string $Adresse;
    public int $Price;
    public int $TypeA;
    public string $TypeB;

    public function __construct(int $ID, string $Image, string $Name, string $Owner, string $Date, string $City, int $Zip, string $Adresse, int $Price, int $TypeA, string $TypeB){
        $this-> ID= $ID;
        $this-> Image= $Image;
        $this-> Name= $Name;
        $this-> Owner= $Owner;
        $this-> Date= $Date;
        $this-> City= $City;
        $this-> Zip= $Zip;
        $this-> Adresse= $Adresse;
        $this-> Price= $Price;
        $this-> TypeA= $TypeA;
        $this-> TypeB= $TypeB;
    }
    public function loadCard(): void
    {
        if($this->TypeB = 1){
            $TypeB = 'Maison';
        }else{
            $TypeB = 'Appartement';
        }
        echo
        "<div class='card flex'>
        <a href=''></a>
        <img class='card-img' src=".$this->Image.">
        <div>
            <p>$this->City, $this->Zip, $this->Adresse</p>
            <p>$TypeB T$this->TypeA</p>
        </div>
        <div class='card-infoB'>
            <p>$this->Name by $this->Owner</p>
            <div class='card-price'>
                <p>$this->Price €</p>
            </div>
        </div>
        <div class='flex' >
            <a><img src='SVG/chat-left.svg' alt='Message'></a>
            <a onclick='AddFav(511)'><img src='SVG/heart.svg' alt='Favoris'></a>
        </div>
        </div>";

    }
 }