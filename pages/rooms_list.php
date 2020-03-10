<?php include('../_partials/header.php') ?>
  <style type="text/css">  <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css"></style>

<div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    
                                    <h5 class="page-title">Floors</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Rooms</h4>   
                                            <a href="floor_new.php" type="button" class="btn btn-primary waves-effect waves-light text-white ml-auto" style="float: right;">Rooms Detials</a>

                                            
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                <thead>
                                                <tr>
                                                    <th>Room No.</th>
                                                    <th>Floor No.</th>
                                                    <th>Room Price</th>
                                                    <th>Room Type</th>
                                                    
                                                   
                                                    <th class="text-center"> <i class="fa fa-eye"></i>
                                                      
                                                   </th>
                                                    <th class="text-center"> <i class="fa fa-edit"></i>
                                                      
                                                   </th>
                                                    <th  class="text-center"><i class="fa fa-trash"></i></th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>12</td>
                                                    <td>2</td>
                                                    <td>1200</td>
                                                    <td>SIngle bedded</td>
                                                    
                                                     <td class="text-center"><a href="./room_view.php" type="button" class="btn text-white btn-success waves-effect waves-light">View</a></td>
                                                    <td class="text-center"><a href="./room_edit.php" type="button" class="btn text-white btn-warning waves-effect waves-light">Edit</a></td>
                                                    <td class="text-center"><a type="button" id="sa-warning" class="btn text-white btn-danger waves-effect waves-light">Delete</a></td>


                                                </tr>
                                                 <tr>
                                                    <td>12</td>
                                                    <td>2</td>
                                                    <td>1200</td>
                                                    <td>SIngle bedded</td>
                                                    
                                                     <td class="text-center"><a href="./room_view.php" type="button" class="btn text-white btn-success waves-effect waves-light">View</a></td>
                                                    <td class="text-center"><a href="./floor_edit.php" type="button" class="btn text-white btn-warning waves-effect waves-light">Edit</a></td>
                                                    <td class="text-center"><a type="button" id="sa-warning" class="btn text-white btn-danger waves-effect waves-light">Delete</a></td>


                                                </tr>
                                                 <tr>
                                                    <td>12</td>
                                                    <td>2</td>
                                                    <td>1200</td>
                                                    <td>SIngle bedded</td>
                                                    
                                                     <td class="text-center"><a href="./room_view.php" type="button" class="btn text-white btn-success waves-effect waves-light">View</a></td>
                                                    <td class="text-center"><a href="./floor_edit.php" type="button" class="btn text-white btn-warning waves-effect waves-light">Edit</a></td>
                                                    <td class="text-center"><a type="button" id="sa-warning" class="btn text-white btn-danger waves-effect waves-light">Delete</a></td>


                                                </tr>
                                                
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                          
            
                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

 </div> <!-- content -->
<?php include('../_partials/footer.php') ?>
          
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
 <!-- jQuery  -->
        <?php include('../_partials/jquery.php') ?>

<!-- Required datatable js -->
        <?php include('../_partials/datatable.php') ?>
>

<!-- Buttons examples -->
        <?php include('../_partials/buttons.php') ?>

<!-- Responsive examples -->
        <?php include('../_partials/responsive.php') ?>

<!-- Datatable init js -->
        <?php include('../_partials/datatableInit.php') ?>

<!-- Sweet-Alert  -->
        <?php include('../_partials/sweetalert.php') ?>

<!-- App js -->
        <?php include('../_partials/app.php') ?>

    </body>
</html>