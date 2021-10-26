<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('password_reset') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $data['token'] }}" />
        <input type="hidden" name="email" value="{{ $data['email'] }}" />
        <input type="password" name="password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}"/>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Password Again" value="{{ old('password_confirmation') }}"/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>