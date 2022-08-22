<!-- 3. Užduotis -->
<!-- Senovės japonų kalendorių sudarė 60 metų ciklas. Visi metai cikle buvo sunumeruoti nuo 1 iki 60 ir suskirstyti poromis, kurių kiekviena turėjo savo spalvą (žalią, raudoną, geltoną, baltą ar juodą). Ciklo metų spalvos buvo paskirstytos taip:
 1, 2, 11, 12, 21, 22, …, 51, 52 metai – žalia spalva;
 3, 4, 13, 14, 23, 24, …, 53, 54 metai – raudona spalva;
 5, 6, 15, 16, 25, 26, …, 55, 56 metai – geltona spalva;
 7, 8, 17, 18, 27, 28, …, 57, 58 metai – balta spalva;
 9, 10, 19, 20, 29, 30, …, 59, 60 metai – juoda spalva.

Žinoma, kad naujasis 60 metų ciklas prasidėjo 1984-aisiais ir baigsis 2043-iaisiais metais; 1984-ieji ir 1985-ieji buvo žalios spalvos metai, 1986-ieji ir 1987-ieji buvo raudonos spalvos metai, 2043-ieji bus juodos spalvos metai. Sukurkite puslapį kuriame būtų įvedami metai ir būtų išvedama kokia yra įvestų metų spalva pagal japonų kalendorių.

Sprendžiant užduotį panaudokite switch sąkinį.

Pavyzdžiai:                                             
1984 - ŽALIA
2001 - BALTA
1804 - ŽALIA
2103 - JUODA
1945 - ŽALIA
2137  - RAUDONA
1859 - GELTONA -->

<?php 
 $out=''; // jei neuždėtume, mestų error kad nepriskirtas
 // kintamasis išvedant duomenis
$count=0;
$spalva='';

 if (isset($_POST['metai']) &&  $_POST['metai']!=''){
    $metai=$_POST['metai'];
    if ($metai > 0){
       $count=$metai-1984;
       switch ($count%10) {
        case 0:
          $spalva="Žalia";
          break;
        case 1:
          $spalva="Žalia";
          break; 
        case 2:
          $spalva="Raudona";
          break;
        case 3:
          $spalva="Raudona";
          break;
        case 4:
          $spalva="Geltona";
          break;
        case 5:
          $spalva="Geltona";
          break;
        case 6:
          $spalva="Balta";
          break;
        case 7:
          $spalva="Balta";
          break;
        case 8:
          $spalva="Juoda";
          break;
        case 9:
          $spalva="Juoda";
          break; 
      }
    $out="$metai m. - spalva: $spalva";   
  }

    else {
        $out="$metai m. - pasitikrinkite metus!"; 
      } 
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Japonų metai</title>
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
        <h1>Trečioji užduotis</h1>
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