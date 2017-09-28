<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        //Handling Multi-dimensonal arrays
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                      array ('ACE OF SPADES!', 11));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[3][0] . '!';
      ?>
    </p>
  </body>
</html>