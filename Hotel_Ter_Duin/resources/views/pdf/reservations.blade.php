<!DOCTYPE html>
<html>
<head>
    <title>Reservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h1 {
            color: #333;
            font-size: 18px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <h1>Reserveringen</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Van</th>
                <th>Tot</th>
                <th>Kamer nummer</th>
                <th>Naam</th>
                <th>Adres</th>
                <th>Plaats</th>
                <th>Postcode</th>
                <th>Telefoon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservering)
                <tr>
                    <td>{{ $reservering->id }}</td>
                    <td>{{ $reservering->van }}</td>
                    <td>{{ $reservering->tot }}</td>
                    <td>{{ $reservering->kamer_id }}</td>
                    <td>{{ $reservering->naam }}</td>
                    <td>{{ $reservering->adres }}</td>
                    <td>{{ $reservering->plaats }}</td>
                    <td>{{ $reservering->postcode }}</td>
                    <td>{{ $reservering->telefoon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>