<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial- scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Ini contoh POST dari form</h1>
        <form method="post" action="http://localhost:8080">
            <p>
                <input type="text" id="id_usernama" name="username" />
                <label for="id_usernama">Nama</label>
            </p>
            <p>
                <input type="password" id="id_passwd" name="passwd" />
                <label for="id_passwd">Password</label>
            </p>
            <input type="submit" value="Kirim" />
        </form>
    </body>
</html>