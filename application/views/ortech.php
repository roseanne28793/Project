<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url() ?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url() ?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    St. Dominic Medical Center
                    <!-- <img src="<?php echo base_url() ?>assets/img/1.jpg" alt=""> -->
                </a>
            </div>

            <ul class="nav">
                <li class="">
                    <a href="<?php echo site_url("nurse/encode"); ?>">
                        <i class="pe-7s-user"></i>
                        <p>Patient's Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url("nurse/ortech"); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Operative Technique and Finding Creation</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-ct-red navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Login/logout'); ?>">
                                <p>Log out</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Record of Operation</h4>
                                <button type="button" class="btn btn-success addbtn" data-toggle="modal" data-target="#exampleModal">Add</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Id</th>
                                    	<th>Case No.</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php $i=1; ?>
                                    <?php foreach($patient_info as $row): ?>
                                    
                                    <tbody>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td value="<?php echo $row->id ?>"><?php echo $row->case_no; ?></td>
                                            <td><?php echo $row->patient_fname." ".$row->patient_mname." ".$row->patient_lname; ?></td>
                                            <td><button class="btn btn-info previewbtn" data-toggle="modal" data-target="#exampleModal">Preview</button> <button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Delete</button></td>
                                            <?php $i++; ?>
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "include/footer.php" ?>
    </div>
</div>
<!-- Modal Add ORTech -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" method="post" action="<?php echo site_url("Nurse/addortech") ?>">
        <div class="modal-body">
            <div class="form-group">
                <label>Case No.:</label>
                <input type="text" class="form-control" name="case_no" id="case_no">
            </div>
            <div class="form-group">
                <label>OR Category:</label>
                <select class="form-control" name="or_category" id="or_category">
                    <option value="">Select OR Category</option>
                        <?php foreach($orcategory as $row): ?>
                            <option value="<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>OR Sub-Category:</label>
                <select class="form-control" name="or_subcategory" id="or_subcategory" disabled>
                    <option value="">Select OR Sub-Category</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="first_paragraph" id="first_paragraph" rows="6" class="form-control" disabled></textarea>
            </div>
            <div class="form-group">
                <textarea name="second_paragraph" id="second_paragraph" rows="6" class="form-control" disabled></textarea>
            </div>
            <div class="form-group">
                <textarea name="third_paragraph" id="third_paragraph" rows="6" class="form-control" disabled></textarea>
            </div>
            <div class="form-group">
                <textarea name="fourth_paragraph" id="fourth_paragraph" rows="18" class="form-control" disabled></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="save">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end of modal add OR Tech -->

<!-- Modal Preview -->
<div class="modal fade" id="previewmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
            <div class="form-group">
                <label>Case No.:</label>
                <input type="text" class="form-control" name="case_no" id="case_no">
            </div>
            <div class="form-group">
                <label>OR Category:</label>
                <input type="text" class="form-control" name="or_category" id="or_category">
            </div>
            <div class="form-group">
                <label>OR Sub-Category:</label>
                <input type="text" class="form-control" name="or_subcategory" id="or_subcategory">
            </div>
            <div class="form-group">
                <textarea name="paragraph" id="paragraph" rows="30" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="save">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end of modal preview -->

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url() ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url() ?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <script>
        $(document).ready(function(){
            $('.addbtn').on('click', function(){
                $('#addmodal').modal('show');
                    $tr = $(this).closest('tr');
                    
                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#case_no').val(data[1]);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.previewbtn').on('click', function(){
                $('#previewmodal').modal('show');
                    $tr = $(this).closest('tr');
                    
                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#case_no').val(data[1]);
            });
        });
    </script>


    <!-- <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.js"></script> -->
    <script>
        $(document).ready(function(){
            $('#or_category').on('change', function(){
                var category_id = $(this).val();
                if(category_id == ''){
                    $('#or_subcategory').prop('disabled', true);
                }
                else{
                    $('#or_subcategory').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>nurse/getsubcategory",
                        type: "POST",
                        data: {'category_id' : category_id},
                        dataType: 'json',
                        success: function(data){
                            $('#or_subcategory').html(data);
                        },
                        error: function(){
                            alert('Error occur ... !!!');
                        }
                    });
                }
            });

            $('#or_subcategory').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id == ''){
                    $('#first_paragraph').prop('disabled', true);
                }
                else{
                    $('#first_paragraph').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>nurse/getparagraphfirst",
                        type: "POST",
                        data: {'subcategory_id' : subcategory_id},
                        dataType: 'json',
                        success: function(data){
                            $('#first_paragraph').html(data);
                        },
                        error: function(){
                            alert('Error occur ... !!!');
                        }
                    });
                }
            });

            $('#or_subcategory').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id == ''){
                    $('#second_paragraph').prop('disabled', true);
                }
                else{
                    $('#second_paragraph').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>nurse/getparagraphsecond",
                        type: "POST",
                        data: {'subcategory_id' : subcategory_id},
                        dataType: 'json',
                        success: function(data){
                            $('#second_paragraph').html(data);
                        },
                        error: function(){
                            alert('Error occur ... !!!');
                        }
                    });
                }
            });

            $('#or_subcategory').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id == ''){
                    $('#third_paragraph').prop('disabled', true);
                }
                else{
                    $('#third_paragraph').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>nurse/getparagraphthird",
                        type: "POST",
                        data: {'subcategory_id' : subcategory_id},
                        dataType: 'json',
                        success: function(data){
                            $('#third_paragraph').html(data);
                        },
                        error: function(){
                            alert('Error occur ... !!!');
                        }
                    });
                }
            });

            $('#or_subcategory').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id == ''){
                    $('#fourth_paragraph').prop('disabled', true);
                }
                else{
                    $('#fourth_paragraph').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>nurse/getparagraphfourth",
                        type: "POST",
                        data: {'subcategory_id' : subcategory_id},
                        dataType: 'json',
                        success: function(data){
                            $('#fourth_paragraph').html(data);
                        },
                        error: function(){
                            alert('Error occur ... !!!');
                        }
                    });
                }
            });
        });
    </script>
</html>
