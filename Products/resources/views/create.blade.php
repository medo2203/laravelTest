<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <form action="{{route("product.store")}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" placeholder="name"><br>
                <input type="number" name="price" placeholder="price"><br>
                <input type="number" name="quantity" placeholder="quantity">
            </div>
            <button type="submit" class="btn btn-primary">add</button>
        </div>
    </form>
</body>
</html>