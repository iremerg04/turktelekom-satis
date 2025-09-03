// Kayıt işlemi
document.getElementById("registerForm")?.addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("registerUsername").value;
  const password = document.getElementById("registerPassword").value;

  localStorage.setItem("username", username);
  localStorage.setItem("password", password);

  alert("Kayıt başarılı! Giriş yapabilirsiniz.");
  window.location.href = "login.html";
});

// Giriş işlemi
document.getElementById("loginForm")?.addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("loginUsername").value;
  const password = document.getElementById("loginPassword").value;

  const savedUsername = localStorage.getItem("username");
  const savedPassword = localStorage.getItem("password");

  if (username === savedUsername && password === savedPassword) {
    sessionStorage.setItem("loggedIn", "true");
    alert("Giriş başarılı!");
    window.location.href = "index.html"; // giriş sonrası yönlendirme
  } else {
    alert("Kullanıcı adı veya şifre hatalı.");
  }
});
function forgotPassword() {
  const savedUsername = localStorage.getItem("username");
  const savedPassword = localStorage.getItem("password");

  if (savedUsername && savedPassword) {
    alert("Kayıtlı Kullanıcı: " + savedUsername + "\nŞifreniz: " + savedPassword);
  } else {
    alert("Kayıtlı kullanıcı bulunamadı.");
  }
}

