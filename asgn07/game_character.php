<!DOCTYPE html>

<html>

<head>
  <title>Game Character Results</title>
  <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>
  <h1>Game Winner</h1>

  <?php
  
    include ("inc-game-character-object.php");
  
    $playerOne = $_POST['nameone'];
    $scoreOne = $_POST['scoreone'];
    $playerTwo = $_POST['nametwo'];
    $scoreTwo = $_POST['scoretwo'];
  
    $charOne = new GameCharacter();
    $charTwo = new GameCharacter();
  
    $charOne->setPlayer($playerOne);
    $charOne->setScore($scoreOne);
  
    $charTwo->setPlayer($playerTwo);
    $charTwo->setScore($scoreTwo);
  
    if ($scoreOne > $scoreTwo)
      
      print ("<p>The winner is ".$charOne->getPlayer()." with a score of ".$charOne->getScore()."</p>");
      
     else
      
      print ("<p>The winner is ".$charTwo->getPlayer()." with a score of ".$charTwo->getScore()."</p>");
  
    ?>

</body>

</html>
