<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopworks Technical Test</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">
    <tr class="content">
        <h1>Shopworks Technical Test</h1>
        <p>By Monique Adamson</p>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
                <th scope="col">Sunday</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($shifts as $shift)
                <tr>
                @foreach($shift as $innerShift)
                    <td>
                        {{ $innerShift->starttime }} - {{ $innerShift->endtime }}
                    </td>
                @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
