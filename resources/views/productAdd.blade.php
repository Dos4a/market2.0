<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <input type="text" name="category_id" placeholder="Category ID"><br>
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="description" placeholder="Description"><br>
        <input type="number" name="price" placeholder="Price"><br>
        <input type="number" name="image_id" placeholder="Image Id"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
