

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
  
    <div class="col-md-12" >
   <table class="table table-hover1" id="dev-table">
                                    
                         
                       
                                  <tr>
                                    <td  class="bs-callout bs-callout-info">
                                       <b> <?php echo $value->d_name ?></b> Reserved Book Title <b> <?php echo $var3['title']?></b>
                                       <a href="cancelreservedmsg2.php?borrower=<?=$var3['brid']?>&&studid=<?=$student?>"  type="button" class="btn btn-sm btn-danger pull-right"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
                                      <a href="process.php?submit=reserveconfirm&&bok=<?=$var3['brid']?>&studid=<?=$student?>"  type="button" class="btn btn-sm btn-info pull-right" data-toggle="tooltip" data-placement="right" title="Confirm"><i class="glyphicon glyphicon-th-list"></i> Confirmed</a>

                                        
    

                                    </td>
                                    
                                    
                               
                                      
                                      <td colspan="5">
                                      
                                      </td>

                                      
                                      
                                    </tr>

                                
                                  
                                
            </table>
  </div>
<br>
 <?php endforeach ?>

 

 </div>



</div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
