$("#contactMe").submit(function(e) {
    e.preventDefault();
});

function validateForm() {
  nValid = validateName();
  eValid = validateEmail();
  if (nValid && eValid) {
    document.getElementById('hideForm').innerHTML = "<h3>Thank You for Your Message</h3>";
  }
}

function validateName() {
  var x = document.forms["contactMe"]["name"].value;
    if (x == null || x == "") {
        document.getElementById('nameLabel').innerHTML = "<div class=\"bad-input\">Name*:</div>";
        return false;
    }
    else {
      document.getElementById('nameLabel').innerHTML = "First Name:";
      return true;
    }
}

function validateEmail() {
  var x = document.forms["contactMe"]["email"].value;
    if (x == null || x == "") {
        document.getElementById('emailLabel').innerHTML = "<div class=\"bad-input\">Email*:</div>";
        return false;
    }
    else {
      document.getElementById('emailLabel').innerHTML = "Last Name:";
      return true;
    }
}
