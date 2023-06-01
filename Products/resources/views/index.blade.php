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
    <a href={{route('product.create')}}>Add Product</a>
    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Price
            </th>
            <th>
                quantity
            </th>
        </tr>
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
      </tr>
      <tr>
        <td>{{$product->name}}</td>
      </tr>
      <tr>
        <td>{{$product->price}}</td>
      </tr>
      <tr>
        <td>{{$product->quantity}}</td>
      </tr>
      <td>
        <a href="{{route('product.edit',$product->id)}}">
            <button class="btn btn-warning">edit</button>
        </a>
      </td>
      @endforeach
    </table>
</body>
</html>


