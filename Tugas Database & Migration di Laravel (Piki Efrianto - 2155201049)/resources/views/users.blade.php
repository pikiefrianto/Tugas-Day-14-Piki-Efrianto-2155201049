<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Nama User</td>
                        <td>Email</td>
                        <td>Umur</td>
                        <td>Bio</td>
                        <td>Alamat</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataUsers as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->age }}</td>
                            <td>{{ $value->bio }}</td>
                            <td>{{ $value->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>