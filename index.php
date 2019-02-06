<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 6-2-2019
 * Time: 10:43
 */
class auto
{
 public $interieur;
 public $kenteken;
 public $merk;
 public $brandstof;
 public $kilometerstand;
 public $grootteVelgen;
 public $breedteAuto;
 public $hoogteAuto;
 public $kleur;
 public $type;



 public function __construct($interieur, $kenteken, $merk, $brandstof, $kilometerstand, $grootteVelgen, $breedteAuto, $hoogteAuto, $kleur, $type)
 {
     $this->interieur = $interieur;
     $this->kenteken = $kenteken;
     $this->merk = $merk;
     $this->brandstof = $brandstof;
     $this->kilometerstand = $kilometerstand;
     $this->grootteVelgen = $grootteVelgen;
     $this->breedteAuto = $breedteAuto;
     $this->hoogteAuto = $hoogteAuto;
     $this->kleur = $kleur;
     $this->type = $type;


 }
}

class klant
{
    public $voornaam;
    public $achternaam;
    public $aankoop;
    public $woonplaats;
    public $postcode;
    public $email;

    public function __construct($voornaam, $achternaam, $aankoop, $woonplaats, $postcode, $email)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->aankoop = $aankoop;
        $this->woonplaats = $woonplaats;
        $this->postcode = $postcode;
        $this->email = $email;


    }


}

$klant1 = new klant('Jordy', 'Klouwens', 'VW POLO 2011', 'Rotterdam', '1234AB', 'email@email.nl');
$auto1 = new auto('leren stoelen', '45-23-sh', 'Volkswagen', 'Benzine', 165.500, '16 inch', '2.5m', '1.5m', 'rood', 'cabrio')
?>
<head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</head>
<body>

<h2>Autogarage</h2>

<table>
    <tr>
        <th>Klant</th>
        <th>Auto</th>
    </tr>
    <tr>
        <td><?php echo $klant1->voornaam?></td>
        <td><?php echo $auto1->interieur?></td>
    </tr>
    <tr>
        <td><?php echo $klant1->achternaam?></td>
        <td><?php echo $auto1->kenteken?></td>
    </tr>
    <tr>
        <td><?php echo $klant1->aankoop?></td>
        <td><?php echo $auto1->merk?></td>
    </tr>
    <tr>
        <td><?php echo $klant1->postcode?></td>
        <td><?php echo $auto1->brandstof?></td>
    </tr>
    <tr>
        <td><?php echo $klant1->woonplaats?></td>
        <td><?php echo $auto1->kilometerstand?></td>
    </tr>
    <tr>
        <td><?php echo $klant1->email?></td>
        <td><?php echo $auto1->kleur?></td>
    </tr>
</table>

</body>


