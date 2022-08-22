<!-- 1. Užduotis -->
<!-- Įvedami skaičiai -a, b, c –kraštinių ilgiai (į atskirus input laukus). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir rezultatą išvestų. -->

<?php 
 $out=''; // jei neuždėtume, mestų error kad nepriskirtas
 // kintamasis išvedant duomenis
 if (isset($_POST['k1']) &&  $_POST['k1']!=''   ){
    $k1=$_POST['k1'];
    $k2=$_POST['k2'];
    $k3=$_POST['k3'];
    if ( ($k1+$k2 > $k3) &&
         ($k2+$k3 > $k1) && 
         ($k3+$k1 > $k2) ){
        $out="Kraštinės: $k1 $k2 $k3 <br> Rezultatas: Stačiakampį sudaryti galime";
    }else{
        $out="Kraštinės: $k1 $k2 $k3 <br> Rezultatas: Neįmanoma sudaryti stačiakampio";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trikampio kraštinės</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    </style>


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
                <h1>Pirmoji užduotis</h1>
            </div>
            <div>
                <form action="" method="post">
                    <div class="ps-5 pb-3">
                        <input type="text" name="k1" placeholder="Kraštinės 1 ilgis">
                    </div>
                    <div class="ps-5 pb-3">
                        <input type="text" name="k2" placeholder="Kraštinės 2 ilgis">
                    </div>
                    <div class="ps-5 pb-3">
                        <input type="text" name="k3" placeholder="Kraštinės 3 ilgis">
                    </div>
                    <div class="ps-5 pb-3">
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