<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <div>
        <h1>
            Hello, {{$LoggedUserInfo->name}}
        </h1>
    </div>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>operation</td>
        </tr>
        <tr>
            <td>{{$LoggedUserInfo->name}}</td>
            <td>{{$LoggedUserInfo->email}}</td>
            <td><a href="logout">Logout</a></td>
        </tr>

    </table>
    
</body>
</html>