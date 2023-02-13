
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3" rel="stylesheet">
</head>
<style>

    img{
        text-align: center;
        padding: 0px;
    }

    a{
        align-self: center;
        padding: 0px;
        margin: 0px;
    }

    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
        color: #023047
    }
    
    .page {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to bottom, #90c4ff, white);
    }
    
    .formLogin {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 7px;
        padding: 40px;
        box-shadow: 10px 10px 40px rgba(83, 83, 83, 0.4);
        gap: 5px
    }
    
    .areaLogin img {
        width: 420px;
    }
    
    .formLogin h1 {
        padding: 0;
        margin: 0;
        font-weight: 500;
        font-size: 2.3em;
    }
    
    .formLogin p {
        display: inline-block;
        font-size: 14px;
        color: #666;
        margin-bottom: 25px;
    }
    
    .formLogin input {
        padding: 15px;
        font-size: 14px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        margin-top: 5px;
        border-radius: 4px;
        transition: all linear 160ms;
        outline: none;
    }
    
    
    .formLogin input:focus {
        border: 1px solid #1464f6;
    }
    
    .formLogin label {
        font-size: 14px;
        font-weight: 600;
    }
    
    .formLogin a {
        display: inline-block;
        margin-bottom: 20px;
        font-size: 13px;
        color: #555;
        transition: all linear 160ms;
    }
    
    .formLogin a:hover {
        color: #1464f6;
    }
    
    .btn {
        background-color: #1464f6;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        border: none !important;
        transition: all linear 160ms;
        cursor: pointer;
        margin: 0 !important;
    
    }
    
    .btn:hover {
        transform: scale(1.05);
        background-color: #1464f6;
    
    }
    
    h1{
        align-self: center;
        font-family: 'Source Sans 3';
    }

    </style>
<body>
    <div class="page">
        <form method="POST" class="formLogin">
            <a href="/"><img src="../images/pleiofc.png" width="70" height="70"></a>
            <h1>LOGIN</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>
