<!DOCTYPE html>
<html>
<head>
    <title>Bon</title>
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
            margin-top: 20%;
            margin-bottom: 20%;
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
    <div class="Gegevens">
        <div>
            <h1>Hotel Ter Duin</h1>
        </div>
        <div>
            <h3>Adres: Fraijlemaborg 141/ 1102CV</h3>
            <h3>Telefoon: 020-12315155</h3>
            <h3>Email: TerDuin@hotel.nl</h3>
        </div>
    </div>
    
    
    <table class="reservering">
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
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->van }}</td>
                    <td>{{ $reservation->tot }}</td>
                    <td>{{ $reservation->kamer_id }}</td>
                    <td>{{ $reservation->naam }}</td>
                    <td>{{ $reservation->adres }}</td>
                    <td>{{ $reservation->plaats }}</td>
                    <td>{{ $reservation->postcode }}</td>
                    <td>{{ $reservation->telefoon }}</td>
                </tr>
        </tbody>
    </table>
    <h4>Bedankt voor uw reservering bij Hotel Ter Duin!</h4>
    <p><b>Totaal bedrag van uw reservering: €{{ $reservation->kamer->prijs * $reservation->getNumberOfDays() }}.00</b></p>
</body>
</html>