<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Card{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public int $ID;

    /**
     * @ORM\Column(type="string")
     */
    public string $Image;

    /**
     * @ORM\Column(type="string")
     */
    public string $Name;

    /**
     * @ORM\Column(type="string")
     */
    public string $Owner;

    /**
     * @ORM\Column(type="string")
     */
    public string $Date;

    /**
     * @ORM\Column(type="string")
     */
    public string $City;

    /**
     * @ORM\Column(type="int")
     */
    public int $Zip;

    /**
     * @ORM\Column(type="string")
     */
    public string $Adresse;

    /**
     * @ORM\Column(type="int")
     */
    public int $Price;

    /**
     * @ORM\Column(type="int")
     */
    public int $TypeA;

    /**
     * @ORM\Column(type="string")
     */
    public string $TypeB;

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return Card
     */
    public function setID(int $ID): Card
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->Image;
    }

    /**
     * @param string $Image
     * @return Card
     */
    public function setImage(string $Image): Card
    {
        $this->Image = $Image;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Card
     */
    public function setName(string $Name): Card
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->Owner;
    }

    /**
     * @param string $Owner
     * @return Card
     */
    public function setOwner(string $Owner): Card
    {
        $this->Owner = $Owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return Card
     */
    public function setDate(string $Date): Card
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return Card
     */
    public function setCity(string $City): Card
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return int
     */
    public function getZip(): int
    {
        return $this->Zip;
    }

    /**
     * @param int $Zip
     * @return Card
     */
    public function setZip(int $Zip): Card
    {
        $this->Zip = $Zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->Adresse;
    }

    /**
     * @param string $Adresse
     * @return Card
     */
    public function setAdresse(string $Adresse): Card
    {
        $this->Adresse = $Adresse;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * @param int $Price
     * @return Card
     */
    public function setPrice(int $Price): Card
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeA(): int
    {
        return $this->TypeA;
    }

    /**
     * @param int $TypeA
     * @return Card
     */
    public function setTypeA(int $TypeA): Card
    {
        $this->TypeA = $TypeA;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeB(): string
    {
        return $this->TypeB;
    }

    /**
     * @param string $TypeB
     * @return Card
     */
    public function setTypeB(string $TypeB): Card
    {
        $this->TypeB = $TypeB;
        return $this;
    }




    public function loadCard(): void
    {
        echo
        "<div class='card flex'>
        <a href=''></a>
        <img class='card-img' src=".$this->Image.">
        <div>
            <p>$this->City, $this->Zip, $this->Adresse</p>
            <p>$this->TypeB T$this->TypeA</p>
        </div>
        <div class='card-infoB'>
            <p>$this->Name by $this->Owner</p>
            <div class='card-price'>
                <p>$this->Price €</p>
            </div>
        </div>
        </div>";
    }
 }