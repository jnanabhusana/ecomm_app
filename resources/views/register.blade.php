<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">

     <h2 class="text-center">Register here</h2>
      <form action="" method="post">
          @csrf
          <div class="form-group">
            <label class="text" >Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="form-group">
          <label class="text" class="lavel">Email</label>
          <input type="password" class="form-control" name="Email" placeholder="Email">
         </div>
         <div class="form-group">
          <label class="text" class="lavel">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="Password">
         </div>
         <div class="form-group">
          <label class="text" class="lavel">Re_enterPassword</label>
          <input type="password" class="form-control" name="repass" placeholder="ReEnter_Password">
         </div>
        <button type="submit" class="btn btn-success form-control">Submit</button>
     </form>
</div>

</body>
<style>
    form{
        width:40%;
        margin:2% auto;

    }
  </style>
</html>