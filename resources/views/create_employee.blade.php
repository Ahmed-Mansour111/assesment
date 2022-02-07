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
    
    <div class="container">
        <form method="POST" action="{{url('create_employee')}}" >
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Employee Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1"placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Employee Email</label>
              <input type="text" class="form-control" name="email" id="exampleInputEmail1"placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Hire Date</label>
              <input type="date" class="form-control" name="hire_date" id="exampleInputEmail1"placeholder="Enter date">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>