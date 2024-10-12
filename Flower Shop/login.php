<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <h4 align="center">Login</h4>
    <form action="validasi.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    <label for="user">Username</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" id="user" placeholder="Username" name="USER">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pwd">Password</label>
                </td>
                <td>:</td>
                <td>
                    <input type="password" id="pwd" placeholder="Password" name="PASS">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
</body>
</html>