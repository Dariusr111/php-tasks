<!-- 2. Užduotis -->
<!-- Pirmosios vasaros olimpinės žaidynės įvyko 1896 m. Atėnuose. Po to jos vyko arba turėjo vykti kas ketveri metai, t.y. 1900 m. – antrosios, 1904 m. – trečiosios ir t.t. Neįvykusioms žaidynėms skiriamas eilės numeris, o jų metai vis tiek laikomi olimpiniais. Tinklapyje turi būti įvedami metai, nustatykite olimpinių žaidimų numerį, jei metai yra olimpiniai arba praneškite, kad metai ne olimpiniai. Tinkalpyje turi būti išvedama ar tai buvo olimpiniai metai ar ne, jei tai buvo olimpiniai metai taip pat išvesti ir jų numerį. -->

<?php 
 $out=''; // jei neuždėtume, mestų error kad nepriskirtas
 // kintamasis išvedant duomenis

 $olimp=0;
 $count=0;
 if (isset($_POST['metai']) &&  $_POST['metai']!=''   ){
    $metai=$_POST['metai'];
    if (($metai >= 1896) && ($metai-1896)%4==0){
        $count=(($metai-1896)/4)+1;
        $out="$metai m. yra olimpiniai, jų numeris: $count"; 
    }else if ($metai < 1896){
        $out="$metai m. per anksti! Pirmosios vasaros olimpinės žaidynės įvyko 1896 m.";
    }else 
    {$out="$metai m. yra neolimpiniai.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olimpiniai metai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php 
      // include ("nav.php")  
      // naudojam puslapyja tam paciam, virsuj-apacioj
      // dar yra 
      /* 
      include_once - naudojam bibliotekom
      require
      require_once - naudojam bibliotekom
      */

    ?>
    <div class="d-flex justify-content-center">
        <div class="flex-column">
            <div class="mt-4 mb-4">
                <h1>Antroji užduotis</h1>
            </div>
            <div>
                <form action="" method="post">
                    <div class="ps-5 pb-2">
                        <input type="text" name="metai" placeholder="Įveskite metus"> 
                    </div>
                    <br>
                    <div class="ps-5 pb-2">
                        <button>Skaičiuoti</button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- <?=(isset($out))?$out:''?> -->
            <div>
                <?=$out?>
            </div>
            <div class="float-end pt-3">
                <a href="/php/pask-2-nd/nav.php"> Atgal </a>
            </div>
        </div>
    </div>
</body>

</html>