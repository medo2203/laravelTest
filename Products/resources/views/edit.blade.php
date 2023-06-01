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
        <form action="{{route("product.update",$product->id)}}" method="post">
            @csrf
            @method("put")
            <div>
                <input type="text" value="{{$product->name}}" name="name" placeholder="name"><br>
                <input type="number" value="{{$product->price}}" name="price" placeholder="price"><br>
                <input type="number"value="{{$product->quantity}}"  name="quantity" placeholder="quantity">
                <input type="file" name="photo" id="">
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
        </div>
    </form>
</body>
</html>