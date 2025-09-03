<?php include("includes/header.php"); ?>

<style>
body {
    background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1350&q=80');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
    margin: 0;
    color: white;
    font-family: Arial, sans-serif;
}

.login-container {
    background-color: rgba(0, 0, 0, 0.6);
    width: 320px;
    margin: 100px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.7);
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px 0;
    border: none;
    border-radius: 6px;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #1e90ff;
    border: none;
    border-radius: 6px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0d6efd;
}
</style>

<div class="login-container">
    <h2>Giriş Yap</h2>
    <form method="post" action="">
        <label>Kullanıcı Adı:</label><br>
        <input type="text" name="username" required><br>
        <label>Şifre:</label><br>
        <input type="password" name="password" required><br>
        <button type="submit">Giriş</button>
    </form>
</div>

<?php include("includes/footer.php"); ?>
