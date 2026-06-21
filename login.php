<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Healthcare</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#0073e6,#00a65a);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    width:400px;
    background:white;
    padding:35px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,.2);
}

.logo{
    text-align:center;
    margin-bottom:25px;
}

.logo h1{
    color:#0073e6;
    font-size:30px;
}

.logo p{
    color:#666;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
    margin-top:5px;
    margin-bottom:15px;
}

button{
    width:100%;
    padding:12px;
    background:#0073e6;
    border:none;
    color:white;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#0056b3;
}

.footer{
    text-align:center;
    margin-top:20px;
    color:#888;
    font-size:12px;
}

</style>

</head>
<body>

<div class="login-box">

    <div class="logo">
        <h1>🏥 HEALTHCARE</h1>
        <p>Sistem Informasi Klinik</p>
    </div>

    <form action="proses_login.php" method="POST">

        <label>Username</label>
        <input
            type="text"
            name="username"
            required
        >

        <label>Password</label>
        <input
            type="password"
            name="password"
            required
        >

        <button type="submit">
            LOGIN
        </button>

    </form>

    <div class="footer">
        © 2026 Healthcare Management System
    </div>

</div>

</body>
</html>