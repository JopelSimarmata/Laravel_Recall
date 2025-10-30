<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>
    @else
    <div>
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="email" placeholder="email">
            <input name="password"type="password" placeholder="password">
            <button type="submit">Register</button>
    </div>
    <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpw"type="password" placeholder="password">
            <button type="submit">Log in</button>
    </div>
    @endauth
</body>
</html>