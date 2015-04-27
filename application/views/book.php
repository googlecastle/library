

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >



<div class="row">

  

<div class="col-md-3 " >
</div>
  <div class="col-md-9 " >

  <center><h1 style="margin:0;">Dewey Decimal System</h1></center>
<?php foreach ($record as $value): ?>
  
    <div class="col-md-3" >
    <div class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
      <div class="caption">
       <center><h2><span style="color:orange;font-weight:bold;"><?php echo $value->d_id; ?></span></h2></center> 
        <p><?php echo $value->d_name; ?></p>
        <center><p><span style="color:orange;">Category(<?php echo $this->book_model->getcategory($value->d_id);?>)</span></p></center>
        <center> <p><?php echo anchor('category/go/$value->d_id','View') ?></p></center>
       
      </div>
    </div>
  </div>
<br>
 <?php endforeach ?>

 

 </div>



</div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
