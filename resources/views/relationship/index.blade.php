<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Laravel Eloquent Relationship</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                 <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone->name }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Link to Bootstrap JS (optional for table functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
