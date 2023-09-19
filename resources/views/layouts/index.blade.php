<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Symple CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="mt-5">Data</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                @yield('content')
            </tbody>

            <thead>
                <tr>
                    <th>Comments</th>
                    <th>Created_at</th>
                    <th>Creator</th>
                    <th>Posts-Title</th>
                </tr>
            </thead>
            <tbody>
                @yield('info')
            </tbody>
        </table>
    </div>
</body>

</html>
