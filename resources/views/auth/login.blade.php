<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}" />
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{ old('password') }}"/>
            @error('password')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <a href="{{ route('forgot_password_index') }}">forgot password</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>