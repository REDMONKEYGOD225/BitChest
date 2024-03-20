<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #FFFFFF;
            color: #38618C;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #38618C;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #01FF19;
            color: #FFFFFF;
        }

        tr:nth-child(even) {
            background-color: #FF5964;
            color: #FFFFFF;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cryptoPrices as $crypto => $price)
        <tr>
            <td>{{ $crypto }}</td>
            <td>{{ $price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
