<!DOCTYPE html>
<html>
<head>
    <title>Blog List</title>
</head>
<body>
    <table border="1">
   
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
        </tr>
        @foreach ($data as $dat)
        <tr>
            <td>{{ $dat->id }}</td>
            <td>{{ $dat->head }}</td>
            <td>{{ $dat->para }}</td>
            <td>{{ $dat->date }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
