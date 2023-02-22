<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Required Remainder</title>
  </head>
  <body class="container">

    <h1> Required Remainder </h1>

    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>Modulo</th>
          <th>Remainder</th>
          <th>Max Value</th>
          <th>Result</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $entry)
          <tr>
            <td>{{ $entry['modulo'] }}</td>
            <td>{{ $entry['remainder'] }}</td>
            <td>{{ $entry['max_value'] }}</td>
            <td>{{ $entry['result'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>