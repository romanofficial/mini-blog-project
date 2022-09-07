<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Update Post</h1>
      {{-- <form method="POST" action="{{route('change.pass')}}"> --}}
        {{-- @csrf --}}
        {{-- @method('PUT') --}}
      
            <div class="form-row mt-5">
              <div class="col">
                <input type="password" class="form-control" placeholder="old Password" name="oldpassword">
              </div>
              <div class="col mt-5">
                <input type="password" class="form-control" placeholder="New Password" name="password">
              </div>
              <div class="col mt-5">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
              </div>
             <button type="submit" name="submit">Submit</button>
            </div>
    </form>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>