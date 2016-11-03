<?php 
  require "ChildClass.php";
  $foxing = new ChildClass("Foxing","The Albatross");
  $bandit = new ChildClass("Bandit","Of Life");
  $twiabp = new ChildClass("The World is a Beautiful Place and I Am No Longer Afraid to Die","Harmlessness");
  $fil = new ChildClass("From Indian Lakes","Absent Sounds");
  $smidley = clone $foxing;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>

    <link rel="stylesheet" href="assignment3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <p class="titles">Here are some of my favorite bands:</p>

    <?= $foxing; ?>
    <?= $bandit; ?>
    <?= $twiabp; ?>
    <?= $fil; ?>

    <hr>

    <p class="titles">Oops, you probably want to know their genres:</p>

    <?= $foxing->setGenre("Post Rock"); ?>
    <h3>Foxing:</h3>
    <?= $foxing->printGenre(); ?>

    <?= $bandit->setGenre("Alternative Rock"); ?>
    <h3>Bandit:</h3>
    <?= $bandit->printGenre(); ?>

    <?= $twiabp->setGenre("Emo Post Rock"); ?>
    <h3>The World is a Beautiful Place and I Am No Longer Afraid to Die</h3>
    <?= $twiabp->printGenre(); ?>

    <?= $fil->setGenre("Emo Alternative Rock"); ?>
    <h3>From Indian Lakes:</h3>
    <?= $fil->printGenre(); ?>

    <hr>

    <p class="titles">What if I told you Foxing's lead singer started a solo project?</p>

    <?= $smidley->__unset("album"); ?>
    <?= $smidley->setName("Smidley"); ?>

    <center>
      <h1 id="smidley">
        <?= $smidley->getName(); ?>!
      </h1>
    </center>

  </body>
</html>
