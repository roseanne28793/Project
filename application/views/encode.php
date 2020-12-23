<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<title>Encode</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url() ?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!-- time picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mdtimepicker.css">

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
                <li class="active">
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>Patient's Profile</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
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
						<li class="separator hidden-lg hidden-md"></li>
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
                                <h4 class="title">Patient's Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3" id="case">
                                            <div class="form-group">
                                                <label>Case No.:</label>
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Room No.:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2" id="date">
                                            <div class="form-group">
                                                <label>Date:</label>
                                                <input type="text" class="form-control" id="picker" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Birthday:</label>
                                                <input type="date" class="form-control" id="txtbirthdate" name="textbirthdate" onkeyup="getAgeVal(0)" onblur="getAgeVal(0)">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Age:</label>
                                                <input type="text" class="form-control" name="lblage" id="txtage" autocomplete="off" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Sex:</label>
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Status:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Province:</label>
                                                <select class="form-control" name="province" id="province">
                                                    <option>Select Province</option>
                                                    <?php
                                                        foreach($province as $row)
                                                        {
                                                        echo '<option value="'.$row->province_id.'">'.$row->province_name.'</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>City:</label>
                                                <select class="form-control" name="city" id="city">
                                                    <option value="">Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Barangay:</label>
                                                <select class="form-control" name="barangay" id="barangay">
                                                    <option value="">Select Barangay</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Membership:</label>
                                                <select class="form-control">
                                                    <option value="">Membership 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>TRANS-IN:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>TRANS-OUT:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Operation:</label>
                                                <input type="date" class="form-control" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type of Anesthesia Used:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Surgeon:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Scrub Staff:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Assistant Surgeon:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Circulating Staff:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Anesthesiologist:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Other Personnel:</label>
                                                <textarea rows="1" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pre-Operative Diagnosis:</label>
                                                <textarea rows="2" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Operative Performed:</label>
                                                <textarea rows="2" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. of Sponges (PRE-OP):</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. of Sponges (POST-OP):</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. of Kellys (PRE-OP):</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. of Kellys (POST-OP):</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. of Needles (PRE-OP):</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. of Needles (POST-OP):</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="header">
                                            <h4 class="title">Anesthesia:</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Began:</label>
                                                <input type="text" class="form-control" id="timepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ended:</label>
                                                <input type="text" class="form-control" id="timepicker1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="header">
                                            <h4 class="title">Operation:</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Started:</label>
                                                <input type="text" class="form-control" id="timepicker2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ended:</label>
                                                <input type="text" class="form-control" id="timepicker3">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Baby Out:</label>
                                                <input type="text" class="form-control" id="timepicker4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>APGAR:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>SEX:</label>
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Post-Operative Diagnosis:</label>
                                                <textarea rows="2" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Specimen/s forwarded to Laboratory for Examination:</label>
                                                <textarea rows="2" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a>St. Dominic Medical Center</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url() ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods -->
    <script src="<?php echo base_url() ?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- time picker -->
    <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/js/mdtimepicker.js"></script>
    <script>
        $(document).ready(function(){
            $('#timepicker').mdtimepicker();
        });

        $(document).ready(function(){
            $('#timepicker1').mdtimepicker();
        });

        $(document).ready(function(){
            $('#timepicker2').mdtimepicker();
        });

        $(document).ready(function(){
            $('#timepicker3').mdtimepicker();
        });

        $(document).ready(function(){
            $('#timepicker4').mdtimepicker();
        });
    </script>


    <!-- date picker
    <script>
        $(document).ready(function(){
            $("#datepicker1").datepicker({
                
            });
        });
    </script> -->

    <!-- real time date default picker -->
    <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/daterangepicker.js"></script>
    <script>
        var today = new Date();
        var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
        document.getElementById("picker").value = date;
    </script>

    <!-- auto compute age -->
    <script>
        function formatDate(date){
            var d= new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');
        }

        function getAge(dateString){
            var birthdate = new Date().getTime();
            if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){ //variable is undefined or null value
                birthdate = new Date().getTime();
            }
            birthdate = new Date(dateString).getTime();
            var now = new Date().getTime();

            var n = (now - birthdate)/1000;
            if (n < 604800){ //less than a week
                var day_n = Math.floor(n/86400);
                if ( typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'Nan')){
                    //variable is undefined or null
                    return '';
                }
                else{
                    return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
                }
            }
            else if (n < 2629743){ //less than a month
                var week_n = Math.floor(n/604800);
                if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
                    return '';
                }
                else{
                    return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
                }
            }
            else if (n < 31562417){ //less than 24 months
                var month_n = Math.floor(n/2629743);
                if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
                    return '';
                }
                else{
                    return month_n + ' month' + (week_n > 1 ? 's' : '') + ' old';
                }
            }
            else{
                var year_n = Math.floor(n/31556926);
                if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
                    return year_n  = '';
                }
                else{
                    return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
                }
            }
        }

        function getAgeVal(pid){
            var birthdate = formatDate(document.getElementById("txtbirthdate").value);
            var count = document.getElementById("txtbirthdate").value.length;

            if (count == '10'){
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);
                if (res =='-' || res =='0'){
                    document.getElementById("txtbirthdate").value = "";
                    document.getElementById("txtage").value = "";
                    $('#txtbirthdate').focus();
                    return false;
                }
                else{
                    document.getElementById("txtage").value = age;
                }
            }
            else{
                document.getElementById("txtage").value = "";
                return false;
            }
        }
    </script>

    <!-- selecting province, city and barangay -->
    <!-- <script>
        $(document).ready(function(){
            $('#province').change(function(){
                var province_id = $('#province').val();
                if(country_id != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>encode/getCity",
                        method:"POST",
                        data:{province_id:province_id},
                        success:function(data){
                            $('#city').html(data);
                            $('#barangay').html('<option value="">Select Barangay</option>');
                        }
                    });
                }
                else{
                    $('#state').html('<option value="">Select City</option>');
                    $('#barangay').html('<option value="">Select Barangay</option>');
                }
            });

            $('#city').change(function(){
                var city_id = $('#city').val();
                if(city_id != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>encode/getBarangay",
                        method:"POST",
                        data:{city_id:city_id},
                        success:function(data){
                            $('#barangay').html(data);
                        }
                    });
                }
                else{
                    $('#barangay').html('<option value="">Select Barangay</option');
                }
            });
        });
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#province').change(function(){
                var province_id = $('#province').val();
  
                if(province_id != ''){
                    $.ajax({
                        url:"<?php echo base_url(); ?>nurse/fetch_city",
                        method:"POST",
                        data:{province_id:province_id},
                        success:function(data)
                        {
                        $('#city').html(data);
                        $('#barangay').html('<option value="">Select Barangay</option>');
                        }
                    });
                }
                else{
                    $('#city').html('<option value="">Select City</option>');
                    $('#barangay').html('<option value="">Select Barangay</option>');
                }

                $('#city').change(function(){
                    var city_id = $('#city').val();
                    if(city_id != ''){
                        $.ajax({
                            url:"<?php echo base_url(); ?>nurse/fetch_barangay",
                            method:"POST",
                            data:{city_id:city_id},
                            success:function(data)
                            {
                            $('#barangay').html(data);
                            }
                        });
                    }
                    else{
                        $('#barangay').html('<option value="">Select Barangay</option>');
                    }
            });
        });
    </script>
</html>
