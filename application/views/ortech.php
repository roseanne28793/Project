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
                    St. Dominic Medical Center - ORTech
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
                            <a href="#">
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
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    	<th>Case No.</th>
                                        <th>Name</th>
                                        <th>OR Tech</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php foreach($patient_info as $row): ?>
                                    <tbody>
                                        <tr>
                                            <td value="<?php echo $row->id ?>"><?php echo $row->case_no; ?></td>
                                            <td><?php echo $row->patient_fname." ".$row->patient_mname." ".$row->patient_lname; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal">Add ORTech</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                            <td></td>
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
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add ORTech</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
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
                <textarea name="1st_paragraph" id="1st_paragraph" rows="10" class="form-control" disabled></textarea>
            </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->
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
            $('.editbtn').on('click', function(){
                $('#editmodal').modal('show');
                    $tr = $(this).closest('tr');
                    
                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#case_no').val(data[0]);
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
                    $('#1st_paragraph').prop('disabled', true);
                }
                else{
                    $('#1st_paragraph').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>nurse/getparagraph",
                        type: "POST",
                        data: {'subcategory_id' : subcategory_id},
                        dataType: 'json',
                        success: function(response){
                            $('#1st_paragraph').html(data);
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
