<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$Title}}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row" >
            <div class="col-md-4 mx-auto">
           
            @if(isset($error))     
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            


                <h1 class="text-center">{{$LogsTitle}}</h1><br>
            
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/Login">
                <!-- <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/Dashboards"> -->
         <div class="mb-3">
            <label for="id">Username</label>
                <input type="text" class="form-control" name="id" id="id" value="<?= $_POST["id"] ?? ''?>">
            </div>
            <div class="mb-3">
                <label for="Password">Password</label>
            <input type="password" class="form-control" name="Password" id="Password">
    </div>
            <button type="submit" class="w-100 btn btn-primary">Login</button><br><br>
            <a href="/Users/UpdatePassword" class="w-100 btn btn-warning">Forgot Password</a>
    </form>

           </div>
        </div>
    </div>
    <script src="/js/boostrap.js"></script>
</body>
</html>