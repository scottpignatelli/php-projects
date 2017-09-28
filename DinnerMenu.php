

 <?php
$menu = array(
"Monday"    => "Mac and Cheese",
"Tuesday"   => "BBQ Chicken",
"Wednesday" => 'Spicy Ramen Stir Fry',
"Thursday"  => 'Tacos',
"Friday"    => 'PIZZA!',
"Saturday"  => 'Burgers',
"Sunday"    => 'Chicken Parmesan'
);


if (isset($_POST['day']))
 {
   $query=$_POST['day'];
   foreach ($menu as $key => $meal)
   {
    if ($query == $key)  
    {
        echo $meal;
    }
    }
    }


 ?>

<form action="DinnerMenu.php" method="post">

<label>What's for dinner? Enter a night of the week and find out!</label>&nbsp;&nbsp;<input type="text"    name="day"><br>
<input type="submit" value="Submit">

</form>

