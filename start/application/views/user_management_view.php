<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Innov MKTG - User Management</title>
  <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSETS_PATH; ?>dist/css/skins/_all-skins.min.css">
  <link href="<?php echo HTTP_ASSETS_PATH; ?>bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
  
  <?php $this->load->view('include/customstyle');  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
  $data = array("name"=>$name);
  $this->load->view('include/header', $data); 
  // Sidebars 
  $data2 = array(
	"name"=>$name,
	"dashboard"=>'',
	"applicants"=>'',
	"user_management"=>'active');
  $this->load->view('include/sidebar', $data2); 
  
  // table Counts
  $data3 = array(
    "applicantList"=>$applicantList,
	"userList"=>$userList
	);
  $this->load->view('include/sidebar', $data3); 
  ?>
  
  
  
 
  <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Management Page
        <!--<small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Management Page</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
                <div class="box-title pull-left">
						<span style='padding:5px;margin-right:5px'>Action/s:</span>
						<select style='padding:0px;margin-right:5px' id='option1'>
							<option value='1'>Active</option>
							<option value='0'>Block</option>
						</select>
						<a id='submitActions' style=''><i class='fa fa-floppy-o' style='border:1px solid #white;padding:5px 8px;color:white;background-color:#3c8dbc'></i></a>
			  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
					 <table id="user_table" class="table table-bordered table-striped">
							<thead>
								<tr>
								  <th style="margin:0;padding:0 0 0 8px;"><input type="checkbox" class="checkboxApplicantsAll" ></th>
								  <th>Full Name</th>
								  <th>Email Address</th>
								  <th>Password</th>
								  <th>User Blocked</th>
								  <th>Created Date</th>
								  <th>Updated Date</th>
								</tr>
							</thead>
							<tbody>
								 <?php 
									if(count($userList) > 0){
										foreach($userList as $row){
											echo '
												  <tr>
														<td><input type="checkbox" class="checkboxApplicants" data-id="'.$row["id"].'" data-val="'.$row["user_blocked"].'"></td>
													   <td><a class="editUser"  data-type="text" data-pk="'.$row["id"].'" data-name="name" data-value="'.$row["name"].'"  data-title="Enter Fullname">'.$row["name"].'</a></td>
													   <td><a class="editUser"  data-type="text" data-pk="'.$row["id"].'" data-name="email" data-value="'.$row["email"].'"  data-title="Enter Email">'.$row["email"].'</a></td>
													   <td><a class="editUser"  data-type="text" data-pk="'.$row["id"].'" data-name="password" data-value=""  data-title="Enter New Password">'.$row["password"].'</td>
													   <td><a class="userBlocked"  data-type="select" data-name="user_blocked" data-pk="'.$row["id"].'" data-value="'.$row["user_blocked"].'" data-url="user_management/updateUsers" data-title="Select Block Type">'.$row["user_blocked_text"].'</a></td>
													   <td>'.$row["created_at"].'</td>
													   <td>'.$row["updated_at"].'</td>
												  </tr>
											';
										}
									}else{
											echo '
												<tr>
													 <td></td>
													 <td></td>
													 <td></td>
													 <td> No Records </td>
													 <td></td>
													 <td></td>
													 <td></td>
												</tr>
											';
									}
										
								?>
							</tbody>
							<tfoot>
								 <tr>
								  <th><input type="checkbox" class="checkboxApplicantsAll2"></th>
								  <th>Full Name</th>
								  <th>Email Address</th>
								  <th>Password</th>
								  <th>User Blocked</th>
								  <th>Created Date</th>
								  <th>Updated Date</th>
								</tr>
							</tfoot>
					 </table>
					 
				</div>
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
 <?php
  $this->load->view('include/footer'); 
  
  $this->load->view('include/settings'); 
 ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery 2.2.3 -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo HTTP_ASSETS_PATH; ?>dist/js/demo.js"></script>
<script src="<?php echo HTTP_ASSETS_PATH; ?>bootstrap-editable/js/bootstrap-editable.js"></script>
<!-- page script -->

  <?php $this->load->view('include/customscript');  ?>

<script>
 $(function () {
    $("#user_table").DataTable({
		"aaSorting": [],
		"columnDefs": [
			{ "width": "1%", "targets": 0, "orderable":false },
			{ "width": "12%", "targets": [1,2,3] },
			{ "width": "10%", "targets": 4 },
			{ "width": "8%", "targets": [5,6] }
		]
	});
	$.fn.editable.defaults.mode = 'inline';
	$('.userBlocked').editable({
		url:'user_management/updateUsers',
        source: [
              {value: 1, text: 'Active'},
              {value: 0, text: 'Blocked'},
           ]
    });
	
	$('.editUser').editable({
		url:'user_management/updateUsers',
		success:function(data){
			var obj = JSON.parse(data);
			if(obj == 'edit_password'){
				 window.location.href = 'user_management'
			}
			
		}
	});
	
  });

 
  
  $(document).on('click','#submitActions',function(){
	var arrid = []; var arrstorageid = [];
	
	  $('.checkboxApplicants').each(function () {
		  if ($(this).is(":checked")) {
				 arrid.push($(this).data('id'));
		   }
	  });
	  if(arrid.length > 0){
		  var option1 = $('#option1 option:selected').val();
		  $.ajax({
			  type:'POST',
			  url:'<?php echo base_url('user_management/updateUserAccess'); ?>',
			  data:{
				  arrstorageid:arrid,
				  option1Storage:option1
			  },
			  success:function(data){
				location.reload();
			  }
		  })
	  }else{
		  alert('No row selected.');
	  }
  });
  
  $(document).on('click','.checkboxApplicantsAll',function(){
	 var checkBoxes = $('.checkboxApplicants');  var checkBoxesall = $('.checkboxApplicantsAll2');
		checkBoxes.prop("checked", !checkBoxes.prop("checked"));
		checkBoxesall.prop("checked", !checkBoxesall.prop("checked"));
	})
	$(document).on('click','.checkboxApplicantsAll2',function(){
	 var checkBoxes = $('.checkboxApplicants');  var checkBoxesall = $('.checkboxApplicantsAll');
		checkBoxes.prop("checked", !checkBoxes.prop("checked"));
		checkBoxesall.prop("checked", !checkBoxesall.prop("checked"));
	})

</script>
</body>
</html>
