<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
$myArray = array (
    array ('Sentinel Titan','Striker Titan','Sunbreaker Titan'),
    array ('Gunslinger Hunter','Arcstrider Hunter', 'Nightstalker Hunter'),
    array ('Dawnblade Warlock','Voidwalker Warlock', 'Stormcaller Warlock')
);


      // On the line below, output one of the values to the page:
     echo 'Everyone knows that ' . $myArray[0][2] . ' is the #MasterClass in Destiny! <br/>';
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
       $length = count($myArray);
    for ($i = 0; $i < $length; $i++){
        foreach ($myArray as $key => $GuardianClass){
            echo $GuardianClass[$i] . '<br/>';
        }
}  
  ?>
    </p>
  </body>
</html>