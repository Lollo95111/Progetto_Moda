<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class newControll extends Controller
{
    public $prodotti = [

        [
            "id"=> 1,
            "nome" => "Occhiali Prada Symbole",
            "prezzo" => "380$",
            "materiali" => "",
            "categoria"=> "accessori",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/S/SPR/SPR09Z/E1ABF05S0/SPR09Z_E1AB_F05S0_C_054_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "uomo"
        ],

        [
            "id"=> 2,
            "nome" => "Bomber oversize",
            "prezzo" => "700$",
            "materiali" => "",
            "categoria"=> "giacche",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/S/SC5/SC540/1U1IF0065/SC540_1U1I_F0065_S_211_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "uomo"
        ],

        [
            "id"=> 3,
            "nome" => "Camicia in cotone",
            "prezzo" => "300$",
            "materiali" => "",
            "categoria"=> "camice",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/U/UCS/UCS438/1VISF03LS/UCS438_1VIS_F03LS_S_231_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "donna"
        ],

        [
            "id"=> 4,
            "nome" => "Cintura Prada",
            "prezzo" => "400$",
            "materiali" => "",
            "categoria"=> "accessori",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/2/2CC/2CC546/R2ZF0002/2CC546_R2Z_F0002_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "donna"
        ],

        [
            "id"=> 5,
            "nome" => "Sneakers in pelle spazzolata",
            "prezzo" => "1100$",
            "materiali" => "",
            "categoria"=> "scarpe",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/2/2EG/2EG424/3C37F0009/2EG424_3C37_F0009_SLS.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "uomo"
        ],

        [
            "id"=> 6,
            "nome" => "pantaloni in Re-Nylon",
            "prezzo" => "600$",
            "materiali" => "",
            "categoria"=> "pantaloni",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/S/SPH/SPH225/11FCF0002/SPH225_11FC_F0002_S_222_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "donna"
        ],

        [
            "id"=> 7,
            "nome" => "Pantaloni in seta",
            "prezzo" => "700$",
            "materiali" => "",
            "categoria"=> "pantaloni",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/S/SPH/SPH299/10HXF0018/SPH299_10HX_F0018_S_231_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "uomo"
        ],

        [
            "id"=> 8,
            "nome" => "Stivaletti a punta in pelle",
            "prezzo" => "1200$",
            "materiali" => "",
            "categoria"=> "scarpe",
            "foto"=> "https://www.prada.com/content/dam/pradabkg_products/2/2TG/2TG210/3LMMF0002/2TG210_3LMM_F0002_F_C000_SLS.jpg/_jcr_content/renditions/cq5dam.web.hebebed.800.800.jpg",
            "genere"=> "uomo"
        ],

        


    
    ];


    public $genere =[
   'uomo',
   'donna'
    ];

    public $categorie = [
        'giacche',
        'accessori',
        'scarpe',
        'camice',
        'pantaloni'
   ];

   //!CATEGORIE  GENERI/WELCOME

    public function welcome(){
        return view('welcome',['mostraC'=> $this->categorie,
        'mostraG'=> $this->genere
    
    ]);
    }

//! PAGINA SHOP

public function shopping(){
    
return view('shop', ['cardmostrare'=> $this->prodotti,

'mostraC'=> $this->categorie,
'mostraG'=> $this->genere
]
);
}

//! PAGINA SCHEDA

public function schedaArt($id){

    foreach($this->prodotti as $prodotto){

if($prodotto['id'] == $id){

    return view('scheda',['mostraC'=> $this->categorie, 'prodotto'=>$prodotto,'mostraG'=> $this->genere]);
}
    }

}


//!CATEGORIE


public function categPerNomi($category){
    $artCategory = [];

    foreach($this->prodotti as $product){
        if($category == $product['categoria']){
            array_push($artCategory,$product);
        }
    }

    return view('categorie',['artCat'=> $artCategory,'mostraC'=> $this->categorie,'mostraG'=> $this->genere]);
}










//! GENERI


public function categPerGenere($gender){
    $genCategory = [];

    foreach($this->prodotti as $product){
        if($gender == $product['genere']){
            array_push($genCategory,$product);
        }
    }

    

    return view('generi',['genCat'=> $genCategory,'mostraG'=> $this->genere,'mostraC'=> $this->categorie]);
    
}




//! FILTRO CATEGORIE PER GENERE



public function categoryXgen($gender, $category) {
    $filteredCategories = [];

    foreach ($this->categorie as $category) {
        $filteredProducts = [];

        foreach ($this->prodotti as $product) {
            if ($product['genere'] == $gender && $product['categoria'] == $category) {
                array_push($filteredProducts, $product);
            }
        }

        if (!empty($filteredProducts)) {
            $filteredCategories[$category] = $filteredProducts;
        }
    }

    return view('catPergen', ['genCategories' => $filteredCategories, 'mostraC' => $this->categorie, 'mostraG' => $this->genere]);
}








}



