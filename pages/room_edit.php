<?php include('../_partials/header.php') ?>
                <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                   
                                    <h5 class="page-title">Add New Room</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title text-center ">Room Details</h4>
                                           
            								<form>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Room No.</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Floor No.</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Floor #1</option>
                                                        <option>Floor #2</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Room Price</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Room Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Single Bedded</option>
                                                        <option>Double Bedded</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>

                                            

                                            
                                            
                                              

                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                  <?php include('../_partials/cancel.php') ?>
                                                  

                                             <button type="button" class="btn btn-primary waves-effect waves-light">Update Room</button>
                                                </div>
                                            </div>

                                            


                                        </form>
                                            
                                            
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
       

        <!-- App js -->
        <?php include('../_partials/app.php') ?>
       

    </body>
</html>