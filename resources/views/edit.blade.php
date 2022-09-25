<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <form action="{{ route('product.update', $data['id']) }}" method="POST">
        @csrf
        <input type="number" name="category_id" value="{{ $data['category_id'] }}"><br>
        <input type="text" name="name" value="{{ $data['name'] }}"><br>
        <input type="text" name="description" value="'{{ $data['description'] }}"><br>
        <input type="number" name="price" value="{{ $data['price'] }}"><br>
        <input type="number" name="image_id" value="{{ $data['image_id'] }}"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
