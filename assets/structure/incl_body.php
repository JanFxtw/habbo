<div class="select_menu">

  <button class="button3">Sprache (Deutsch)</button>
  <button class="button3">Habbo?</button>
  <?php
    $_SESSION['points'] = 500;
    $_SESSION['rank'] = 0;
    $_SESSION['username'] = "SFU-Loc";
    $_SESSION['logged_in'] = 0;
  ?>

  <button class="button3" onclick="location.href='points.php'">Meine Punkte<?php if(isset($_SESSION['points']) && $_SESSION['logged_in'] == true) echo " ({$_SESSION['points']})"?></button>

  <?php

    // Login/Register + Mein Bereich Button
    if($_SESSION['logged_in'] == true) {
      $username = $_SESSION['username'];
      echo '<button class="button3">Mein Bereich ('.$username.')</button>';
    } else {
      $link = "location.href='ucp.php'";
      echo '<button class="button3" onclick="'.$link.'">Registrieren/Login</button>';
    }

    // Administrations Button
    if($_SESSION['rank'] >= 1 && $_SESSION['logged_in'] == true) {
      echo '
      <button class="button3">Administration</button>';
    }

    // Logout Button
    if($_SESSION['logged_in'] == true) {
      echo '
      <button class="button3">Logout</button>';
    }
  ?>

</div>

<div class="header_pic">

  <h2>Play Ground</h2>

</div>

<div class="main_menu">

  <div class="selection_bar">

    <ul>

      <li><a class="button" href="#forum">Forum</a></li>
      <li><a class="button" onclick="location.href='index.php'">Start</a></li>
      <li><a class="button" href="#news">News</a></li>
      <li><a class="button" href="#contact">Events</a></li>
      <li><a class="button" href="#contact">Pixeln</a></li>

    </ul>

  </div>

  <div class="last_items">

    <ul>

      <li><a class="button2" href="#item1">last item 1</a></li>
      <li><a class="button2" href="#item2">last item 2</a></li>
      <li><a class="button2" href="#item3">last item 3</a></li>
      <li><a class="button2" href="#item4">last item 4</a></li>
      <li><a class="button2" href="#item5">last item 5</a></li>
      <li><a class="button2" href="#item6">last item 6</a></li>

    </ul>

  </div>

  <div class="searchbar">

      <input class="inp_main" type="text" autocomplete="off" placeholder="Gib deine Suchanfrage hier ein...">

  </div>

</div>
