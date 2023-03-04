<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                @If(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @If(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif

                <h4>LOG IN </h4>
                <hr> 
                <form action="{{Route('login-user')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}}@enderror </span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your password" name="password" value="{{old('pasword')}}">
                        <span class="text-danger">@error('password') {{$message}}@enderror </span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>   

                    <a href="registration">If You aren't registered yet then please Register first! </a>

                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</html>