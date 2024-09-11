<center><div class="page">
    <style>
        body {
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            div.page {
                margin: 10% 0 10% 0;
            }
            .login-container {
                width: 30%;
                height: 100%;
                background-color: white;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .login-container h2 {
                font-weight: 900;
                font-size: 30px;
                margin-top: 0;
            }
            .fotoakun {
                font-size: 75px;
                text-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
                color: rgb(0, 53, 160);
            }
            .login-container h2 {
                color: rgb(0, 53, 160);
            }
            .login-container input {
                width: 90%;
                padding: 10px;
                margin-bottom: 20px;
                border: none;
                background-color: #f7f4f4;
                border-bottom: 2px solid #ccc;
                border-radius: 5px;
            }
            .login-container button {
                width: 50%;
                padding: 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .login-container button:hover {
                background-color: #024996;
            }
            .input icons {
                width: 100%;
                margin-bottom: 10px;
            }
            .input icons i {
                position: absolute;
            }
            .icon {
                padding: 10px;
                color: rgb(51, 119, 255);
                min-width: 50px;
                text-align: center;
            }
    </style>
<div class="login-container">
            <center style="cursor: default;">
                <h2>Login</h2>
                <i class="material-icons fotoakun">account_circle</i>
            </center>
            <form id="loginForm">
                <center>
                    <input type="username" id="username" placeholder="Username" required>
                    <input type="password" id="password" placeholder="Password" required>
                    </center>
                <center>
                    <button type="submit">Login</button>
                </center>
            </form>
            <p id="message"></p>
        </div>
        <script>
            
            document.getElementById('loginForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;
                const correctUsername = "farell123"
                const correctPassword = "pw123"
                if (username === correctUsername && password === correctPassword) {
                    document.getElementById('message').textContent = "Login Berhasil!";
                    document.getElementById('message').style.color = "green";
                    document.getElementById('message').textSize = "12";
                    window.location.href ="index.php";
                } else {
                    document.getElementById('message').textContent = "Username atau Password salah!";
                    document.getElementById('message').style.color = "red";
                    document.getElementById('message').textSize =  "12";
                }
            })
        </script>
</div>
</center>