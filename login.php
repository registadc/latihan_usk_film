<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=l">
    <title>Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            display: flex;
            background-color: black;
        }

        .login-box{
            background-color: rgba(255, 255, 255, 0.1); /* Putih 10% transparan */
            padding: 2.5rem 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 380px;
        }

        .login-box h1{
            color: white;
            font-size: 1.8rem;
            margin-bottom: 1.2rem;
            text-align: center;
        }

        label{
            font-weight: 600;
            color: white;
            display: block;
            margin-bottom: 0.7rem;
        }

        .login-box p{
            color: white;
            margin-top: 1.2rem;
            text-align: center;
        }

        .login-box a{
            font-weight: bold;
            color: #fbbf24;
            text-decoration: none;
        }

        input[type="text"]{
            width: 100%;
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 1.2rem;
        }

       input[type="submit"]{
            width: 100%;
            padding: 0.75rem;
            border-radius: 8px;
            border: none;
            background-color: #9b0312;
            color: white;
            font-weight: bold;
            cursor:pointer;
        }

        input[type="submit"]:hover{
            background-color: #6e1d1dff;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="">
            <label for="">Username</label>
            <input type="text" name="username" id="">

            <label for="">Password</label>
            <input type="text" name="password" id="">

            <input type="submit" value="Simpan">

            <p>Belum punya akun ? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>