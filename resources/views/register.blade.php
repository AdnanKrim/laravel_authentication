<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <section>
        <div class="container flex justify-center ">
            <div class="formbar">
                <div class="bar">
                    <h1>User Register</h1>
                </div>

                <div class="formz ">
                    <form action="create" method="POST">
                        @csrf
                        <div style="background-color: green;",>
                            @if(Session::get('success'))
                            <div style="color:black; margin:1rem;">
                                {{Session::get('success')}}
                            </div>
                            @endif

                            @if(Session::get('fail'))
                            <div style="color:red">
                                {{Session::get('fail')}}
                            </div>
                            @endif
                        </div>
                        <div class="heading">
                            <h3>Name:</h3>
                            <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
                            <span style="color:red;">@error('name'){{ $message }}@enderror</span>
                        </div>
                        <div>
                            <h3>Email:</h3>
                            <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
                            <span style="color:red;">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div>
                            <h3>Password:</h3>
                            <input type="text" name="password" placeholder="Enter your password">
                            <span style="color:red;">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <button type="submit">Reg</button>

                    </form>
                    <div class="linkz">
                        <a href="login">I Have an account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>