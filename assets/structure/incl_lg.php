<div class="text1">Registrieren/Login</div>
<div class="register">

  E-Mail:
  <br/>
  <input class="inp_sec" type="text" placeholder="E-Mail">
  <br/>
  Passwort:
  <br/>
  <input class="inp_sec" type="password" placeholder="Passwort">
  <br/>
  <button class="button3" onclick="location.href='ucp.php'">Anmelden</button>
  <button class="button3" id="register_Button">Registrieren?</button>

  <!-- Modal Anfang -->
  <div id="register_Modal" class="modal_center">

    <!-- Modal content -->
    <div class="modal-content_center">
      <span class="close_center">&times;</span>
      <div class="reg_box">
        <div class="text1">Registration</div>
        <form method="post" action="do_register.php" onsubmit="return do_register();">
          <br/>
          Habbo-Name:
          <br/>
          <input class="inp_sec" type="text" name="habbo_name" id="habbo_name" placeholder="Habbo-Name" onfocusout="<?php
            $info = habbo_getInfo( "SFU-Loc", "de" );
            if($info) {
              ?> <script>document.getElementById("habbo_email").style.backgroundColor = "lightgreen";</script> <?
            } else {
              ?> <script>document.getElementById("habbo_email").style.backgroundColor = "lightcoral";</script> <?
            }
          ?>">
          <br/>
          E-Mail:
          <br/>
          <input class="inp_sec" type="text" name="habbo_email" id="habbo_email" placeholder="E-Mail" onfocusout="checkMail()">
          <br/>
          Passwort:
          <br/>
          <input class="inp_sec" type="password" name="habbo_password1" id="habbo_password1" placeholder="Passwort" onfocusout="CheckPassword1()">
          <br/>
          Passwort wiederholen:
          <br/>
          <input class="inp_sec" type="password" name="habbo_password2" id="habbo_password2" placeholder="Passwort wiederholen" onfocusout="CheckPassword2()">
          <br/>
          <button class="button3" name="habbo_loginbutton" id="habbo_loginbutton">Registrieren</button>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/js/modals.js"></script>
  <!-- Modal Ende -->

  <div class="mini_link">

    <a href="forgot_password.php">Passwort vergessen?</a>

  </div>

</div>

<div class="last_visited">

  <div class="text1">
      Bereits registrierte Mitglieder
  </div>

  <br/>
  <center>
  <?php
    $name[1] = "SFU-Loc";
    $name[2] = "Bodyguard@Nr.1";
    $name[3] = "Kurly";
    $name[4] = "SlashRocks";
    $name[5] = "Syrup";

    $detect = new Mobile_Detect;
    if($detect->isTablet() || $detect->isMobile())
      $amount = 3;
    else
      $amount = 5;

    for($i = 1; $i <= $amount; $i++) {
      $avatarString[$i] = "https://www.habbo.de/habbo-imaging/avatarimage?hb=image&user=$name[$i]&headonly=0&direction=2&head_direction=2&action=&gesture=&size=l";
      $habbolink = "location.href='https://www.habbo.de/profile/$name[$i]'";
      echo '
        <div class="popup'.$i.'" onmouseover="show_randAvatar('.$i.')" onmouseout="show_randAvatar('.$i.')">
          <img onmouseover="changeAvatar(this)" onmouseout="originalAvatar(this)" onclick="'.$habbolink.'" src="'.$avatarString[$i].'" width="150" height="250">
          <span class="popuptext'.$i.'" id="myPopup'.$i.'">'.$name[$i].'</span>
        </div>
        ';
    }
  ?>

</center>
</div>
