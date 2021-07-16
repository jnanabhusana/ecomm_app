@extends('font')
@section("content")
<div class="container login">
 <div class="row">
   <div class="col-sm-4">
      <form action="login" method="post">
           <div class="form-group">
             @csrf
            <label class="text" >Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
         <div class="form-group">
          <label class="text" class="lavel">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="Password">
         </div>
        <button type="submit" class="btn btn-success">Submit</button>
     </form>
   </div>
 </div>
</div>
@endsection