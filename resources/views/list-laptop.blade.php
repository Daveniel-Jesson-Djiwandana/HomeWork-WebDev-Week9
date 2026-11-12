<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Laptop</title>
</head>

<body>
    <h1>List Laptop</h1>
    <a href="/create-laptop"
        style="display: inline-block; border: solid 1px black; color: black; text-decoration: none; padding: 5px 10px; margin-bottom: 10px;">+
        Create Laptop</a>
    <table border="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }}</td>
                    <td>
                        <form method="POST" action="{{ route('delete-laptop', $laptop->id) }}">
                            @csrf
                            <input type="submit" value="Delete" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        </form>
                        <a href="{{ route('edit-laptop', $laptop->id) }}" style="display: inline-block; background-color: blue; color: white; text-decoration: none; padding: 5px 10px;">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>

</html>