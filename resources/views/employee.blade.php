<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Employee</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">hire-date</th>
            
           
          </tr>
        </thead>
        <tbody>
            @foreach($data as $emp)
          <tr>
            <th scope="row">{{$emp->name}}</th>
            <th scope="row">{{$emp->email}}</th>
            <th scope="row">{{$emp->hire_date}}</th>
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
   
</body>
</html>