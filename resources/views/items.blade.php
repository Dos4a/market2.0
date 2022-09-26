<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        <tr>
            @foreach ($items as $item)
                <th>{{ $item['name'] }}</th>
                <th>{{ $item['description'] }}</th>
                <th>{{ $item['price'] }}</th>
                <th><img src="{{ url($images->link) }}" alt=""></th>
            @endforeach
        </tr>
    </table>
</body>
</html>
