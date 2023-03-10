document.getElementById("login").addEventListener("submit", function(event) {
    event.preventDefault();
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/login");
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.onload = function() {
      if (xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        localStorage.setItem("session_token", response.session_token);
        window.location.href = "/login";
      }
    };
    xhr.send(JSON.stringify({username: document.getElementById("email").value, password: document.getElementById("password").value}));
  });