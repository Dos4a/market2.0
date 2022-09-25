<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <table>
        <thead>
            <tr>ID</tr>
            <tr>Category ID</tr>
            <tr>Name</tr>
            <tr>Description</tr>
            <tr>Price</tr>
            <tr>Image ID</tr>
        </thead>

        @foreach ($products as $product)
            <tbody>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['category_id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['image_id'] }}</td>
                <td><a href="{{ route('product.edit', $product['id']) }}">Update</a></td>
                <td><a href="{{ route('product.destroy', $product['id']) }}">Delete</a></td>
            </tbody>
        @endforeach

    </table><br>

    <a href="{{ route('product.create') }}">Add New Product</a>
</body>
</html>
