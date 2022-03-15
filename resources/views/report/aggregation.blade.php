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
  <p>No. 1 Number of category that have data on medicines {{ $getTotalData }}</p>
  <p>No. 2 Show the name of the category that does not have any medicines data</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data2 as $l2)
      <tr>
        <td>{{ $l2->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <p>No. 3 Show the average price of each druh category. If there is no medicine then give 0</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Category Name</th>
        <th>Average Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data3 as $l3)
      <tr>
        <td>{{ $l3->name }}</td>
        @if ($l3->average)
        <td>{{ $l3->average }}</td>
        @else 
        <td>0</td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>

  <p>No. 4 Show drug categories that have only 1 medicine product: {{ $data4[0]['name'] }}</p>

  <p>No. 5 Show drugs that have one form</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Medicine Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data5 as $l5)
      <tr>
        <td>{{ $l5->generic_name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <p>No. 6 Display the category and name of the drug that has the highest price</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Category</th>
        <th>Medicine Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $data6['name']}}</td>
        <td>{{ $data6['generic_name']}}</td>
        <td>{{ $data6['price']}}</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <div class="row">
    
  </div>
</div>

</body>
</html>