var attempt = 3; //number of attempts
function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "user" && password == "root") {
    window.location.href = "index.php";
    return false;
  } else {
    attempt--;
    alert("Incorrect credentials, " + attempt + " attempts remaining.");
    if (attempt == 0) {
      document.getElementById("username").disabled = true;
      document.getElementById("password").disabled = true;
      document.getElementById("submit").disabled = true;
      return false;
    }
  }
};