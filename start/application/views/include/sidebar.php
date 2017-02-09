 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--<img src="<?php echo HTTP_ASSETS_PATH; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
		  <i class="ion ion-person img-circle" style="color:white;border:1px solid white;border-radius:40px;padding:10px;width:auto;text-align:center"></i>
        </div>
        <div class="pull-left info">
          <p><?php if(isset($name)) echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if(isset($dashboard)) echo $dashboard; ?> treeview">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
			<span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
        </li>
		<li class="<?php if(isset($applicants)) echo $applicants; ?> treeview">
          <a href="applicant">
            <i class="fa fa-user"></i> <span>Applicant List</span>
				<?php  if(isset($applicantList)) if(count($applicantList) > 0){ echo '
				<span class="pull-right-container">
				  <span class="label label-primary pull-right">'.count($applicantList).'</span>
				  '.'
				</span>'; }else{ echo ""; }
				?>
          </a>
		
        </li>
        <!--<li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
        <li class="header">Settings</li>
		
		<li  class="<?php if(isset($user_management)) echo $user_management; ?> treeview">
			<a href="user_management">
				<i class="fa fa-users"></i> <span>Users Management</span>
				<?php  if(isset($userList)) if(count($userList) > 0){ echo '
				<span class="pull-right-container">
				  <span class="label label-primary pull-right">'.count($userList).'</span>
				  '.'
				</span>'; }else{ echo ""; }
				?>
			</a>
		</li>
        <!--<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
