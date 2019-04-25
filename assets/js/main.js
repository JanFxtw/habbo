// Laden des Hintergrundbildes nach Uhrzeit
window.onload = function() {
  var body = document.getElementsByTagName('body')[0];
    var d = new Date();
    if(d.getHours() >= 7 && d.getHours() <= 19)
      body.style.cssText = "--header_pic: var(--day);";
    else
      body.style.cssText = "--header_pic: var(--night);";
}

// Popup-Erstellung der Avatarvorschau
function show_randAvatar(number) {
  var id = "myPopup" + number;
  var popup = document.getElementById(id);
  popup.classList.toggle("show");
}

// Avatar-Kopfausrichtung (Preview)
function changeAvatar(element) {
  var avatar = element.getAttribute('src');
  var out = avatar.replace("head_direction=2", "head_direction=3");
  element.setAttribute('src', out);
}

// Avatar-Kopfausrichtung (Original)
function originalAvatar(element) {
  var avatar = element.getAttribute('src');
  var out = avatar.replace("head_direction=3", "head_direction=2");
  element.setAttribute('src', out);
}

// Überprüft Mailvalidität
function checkMail() {
    var emailText = document.getElementById('habbo_email').value;
    var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
    if (pattern.test(emailText)) {
        return document.getElementById("habbo_email").style.backgroundColor = "lightgreen";
    } else {
        return document.getElementById("habbo_email").style.backgroundColor = "lightcoral";
    }
}
