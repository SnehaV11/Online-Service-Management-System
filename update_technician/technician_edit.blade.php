<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPKFOJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit Technician</title>
</head>
<body>

<div class="container">
<div class="jumbotron">
<h2> Update Technician Data </h2>
<form action="/update/{{ $technician[0]->empid }}" method="post">

    {{ csrf_field() }}

        div class="form-group">
            <lable>Technician Name</label>
        <input type="text" class="form-control" name="empName" id="name" value="{{ $technician[0]->empName }}" aria-describedby="emailHelp" placeholder="Enter Technician Name">
        </div>

        div class="form-group">
            <lable> Technician City </label>
        <input type="text" class="form-control" name="empCity" id="city" value="{{ $technician[0]->empCity }}" placeholder="Enter Technician City">
        </div>

        div class="form-group">
            <lable> Technician Mobile </label>
        <input type="text" class="form-control" name="empMobile" id="mobile" value="{{ $technician[0]->empMobile }}" placeholder="Enter Technician Mobile">
        </div>

        div class="form-group">
            <lable> Technician Email </label>
        <input type="text" class="form-control" name="empEmail" id="email" value="{{ $technician[0]->empEmail }}" placeholder="Enter Technican Email">
        </div>

        <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">Update Data</button> 
</form>

</div>
</div>

</body>
</html>