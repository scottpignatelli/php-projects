<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        //Iterating over associative arrays


$myfood = array('pizza','salad','greasy burger', 'greasy fries');
$myIngredients = array(
    'lettuce' => 'with',
    'tomato' => 'with',
    'onions' => 'with');
    $length = count($myfood);
    for ($i = 0; $i < $length; $i++){
    echo $myfood[$i] . '<br/>';
}  
    foreach($myfood as $myIngredient => $include){
echo $include . ' ' . $myIngredient . '</br>';
}

    echo 'I LIKE FOOD! FOOD TASTES GOOD!:' . $myfood . '. I LIKE FOOD! FOOD TASTES GOOD!';
    

      ?>
    </p>
  </body>
</html>