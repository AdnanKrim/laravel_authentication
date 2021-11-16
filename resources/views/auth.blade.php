<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section>
        <div class="container flex justify-center ">
            <div class="formbar">
                <div class="bar">
                    <h1>Loginpage</h1>
                </div>
                <div class="formz ">
                    <form action="check" method="POST">
                        @csrf
                        <div style="color:greenyellow;">
                            @if(Session::get('fail'))
                            <div style="color:red;">
                                {{Session::get('fail')}}
                            </div>
                            @endif
                        </div>
                        <div>
                            <h3>Email:</h3>
                            <input type="text" name="email" placeholder="Enter your email">
                            <span style="color:red">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <h3>Password:</h3>
                            <input type="text" name="password" placeholder="Enter your password">
                            <span style="color:red;">@error('password'){{$message}}@enderror</span>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                    <a href="register">create new account</a>
                </div>
            </div>
        </div>
    </section>


</body>

</html>