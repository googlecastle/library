<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>Library Information System</title>


<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/docs.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/docs.min.js"></script>
 


<style type="text/css">

 input.search-query {
  padding-right: 14px;
  padding-right: 4px \9;
  padding-left: 14px;
  padding-left: 4px \9;
  /* IE7-8 doesn't have border-radius, so don't indent the padding */

  margin-bottom: 0;
  -webkit-border-radius: 15px;
     -moz-border-radius: 15px;
          border-radius: 15px;
}
 .table-hover1 tr:hover { 

  background-color: skyblue;
  


}

  
div.list-group a:hover { 

  background-color: skyblue;
  


}
  .banned{
    width:140px;
    height: 140px;
    }


    .laid{
      
    
     
      min-width:160px;
      padding:5px 0;
      margin:2px 0 0;
      font-size:14px;
      text-align:left;
      list-style:none;
      background-color:#fff;
      -webkit-background-clip:padding-box;
      background-clip:padding-box;
      border:1px solid #ccc;
      border:1px solid rgba(0,0,0,.15);
      border-radius:4px;
      -webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);
      box-shadow:0 6px 12px rgba(0,0,0,.175);
      }



body {
   font-size: 12px;    
}



</style>







<script>
$(document).ready(function() {
 $("#navigation").navPlugin({
   'itemWidth': 152,
   'itemHeight': 50,
   'navEffect': "slide",
   'speed': 250
 });
}); // end ready









</script>
</head>
<body >



    <br>
        <br>
        <br>
        <br>
    

    <div class="container" >

  <div class="row">
     <div class="col-md-3">
   
  </div>

<!--  <div class="col-md-6">
    <div class="bs-callout bs-callout-danger">
    <center><h4>Login to Library System</h4></center>
    </div>
  </div> -->
  
 <div class="col-md-3">


  </div>





  </div>







      

<div class="row">

  <div class="col-md-3">

        <img src="<?php echo base_url(); ?>assets/images/cirilo.jpg" class="banned img-circle pull-right">

  </div>




  <div class="col-md-6">


<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center><b>Login Form</b></center> </div>
  <div class="panel-body">
 
         <?php echo form_open('login/validate'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Enter Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary form-control" value="login" name="submit">Login</button>
</form>



  </div>


</div>


     
    
       


</div>















  <div class="col-md-3">

<img src="<?php echo base_url(); ?>assets/images/cirilo.jpg" class="banned img-circle">

  </div>

  </div>

      

      <hr class="panel-warning">

 

    </div><!--/.container-->

