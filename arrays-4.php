<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo "php-arrays-4 "  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="m-5 ">

    <h2 class="text-center mb-5">კენტი და ლუწი რიცხვები</h2>

    <?php

        $emptyArray1 = array();
        $emptyArray2 = array();

        for($i=1; $i <= 500; $i++){
            if($i % 2 !== 0){
                array_push($emptyArray1, $i);  
            }else{
                array_push($emptyArray2, $i);  ; 
            }
        }
    ?>
    <div class=" text-danger">
        კენტი  რიცხვები --
        <?php
            foreach($emptyArray1 as $array1){
                    echo  $array1. ",  ";
                }
                echo "<br/>";
                echo "<br/>";
        ?>
    </div>
    
       <div class=" text-success">
        ლუწი რიცხვები -- 
        <?php
             foreach($emptyArray2 as $array2){
                echo $array2. ",  ";
            }
        ?>
    </div>

</div>
</body>
</html>