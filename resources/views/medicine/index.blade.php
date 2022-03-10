<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <h2>List Products</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $li)
      <tr>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->description }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="container">
  <div class="row">
    
  </div>
</div>

</body>
</html>

<!-- <!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

  <div class="w3-row">
  @foreach($listdata as $li)
    <div class="w3-col s4" style="border-style: groove;">
      <img src="{{ asset('images/'.$li->image) }}" style="width:100%;height:350px">
      <p style="text-align:center;">{{ $li->generic_name }} ( {{ $li->form }} )</p>
    </div>
  @endforeach
  </div>

</body>
</html> -->

    