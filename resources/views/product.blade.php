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
        <input type="text" name="category_id">
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="number" name="price" placeholder="price"><br>
        <input type="number" name="image_id" placeholder="image id"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
