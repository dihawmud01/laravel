<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>detail kader</title>
</head>
<body>
    <h1>detail kader</h1>
    @foreach ($kader as $kdr)
        <form action="" method="post">
            <input type="text" readonly value="{{ $kdr['nama'] }}" >
        </form>
    @endforeach
</body>
</html>