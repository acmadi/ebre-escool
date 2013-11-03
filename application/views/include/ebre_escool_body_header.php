<body>
 <div id="body_header">

<div class="navbar navbar-inverse navbar-fixed-top">
 <div class="navbar-inner">
   <div class="container">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="brand" href="#"> <i class="icon-home"> </i><?php echo $body_header_app_name;?></a>
  
    <div class="nav-collapse collapse">
     
            
     <ul class="nav">
		 
	  <?php if ($check_attendance): ?>                   
       <li class="active"> <a href='<?=base_url()?>index.php/attendance/check_attendance'><?php echo lang('check_attendance');?></a> </li>
      <?php endif; ?>
      
       <?php if ($mentoring): ?>                   
 
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toogle="tab"><?php echo lang('mentoring');?> <b class="caret"></b></a>
       <ul class="dropdown-menu">
         <li><a href="<?=base_url()?>index.php/attendance/mentoring_groups"><?php echo lang('mentoring_groups_mentoring');?></a></li>
         <li><a href="<?=base_url()?>index.php/attendance/mentoring_attendance_by_student"><?php echo lang('mentoring_attendance_by_student');?></a></li>
       </ul>                                                                                                                                                                                                                                                                                                                                      
      </li>
      <?php endif; ?>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toogle="tab"><?php echo lang('timetables');?> <b class="caret"></b></a>
         <ul class="dropdown-menu">
          <li><a href="<?=base_url()?>index.php/timetables/mytymetables"><?php echo lang('my_timetables');?></a></li>
         </ul>
      </li>
                                                   
      
      <?php if ($reports): ?>                   
 
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toogle="tab"><?php echo lang('reports');?> <b class="caret"></b></a>
       <ul class="dropdown-menu">
          <li class="dropdown-submenu">
			<a tabindex="-1" href="#"><?php echo lang('attendance'). ". " . lang('reports_educational_center_reports');?></a>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url()?>index.php/attendance_reports/informe_centre_d_h_1"><?php echo lang('reports_educational_center_reports_incidents_by_day_and_hour');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/informe_centre_di_df_1"><?php echo lang('reports_educational_center_reports_incidents_by_date');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/informe_centre_ranking_di_df_1"><?php echo lang('reports_educational_center_reports_incidents_by_date_ranking');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/Llistat_grup_tutor"><?php echo lang('reports_educational_center_reports_grup_mentors');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/mailing_list_report"><?php echo lang('reports_educational_center_reports_student_emails');?></a></li>
			</ul>
		  </li>	
		  <li class="dropdown-submenu">
			<a tabindex="-1" href="#"><?php echo lang('attendance'). ". " . lang('reports_group_reports');?></a>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url()?>index.php/attendance_reports/class_list_report"><?php echo lang('reports_group_reports_class_list');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/class_sheet_report"><?php echo lang('reports_group_reports_student_sheet');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/informe_resum_grup_di_df_1"><?php echo lang('reports_group_reports_incidents_by_date');?></a></li>
				<li><a href="<?=base_url()?>index.php/attendance_reports/informe_resum_grup_faltes_mes_1"><?php echo lang('reports_group_reports_monthly_report');?></a></li>
			</ul>
		  </li>	
       </ul>                                                                                                                                                                                                                                                                                                                                      
      </li>
      <?php endif; ?>
      
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toogle="tab"><?php echo "Inventari";?> <b class="caret"></b></a>
       <ul class="dropdown-menu">
         <li><a href="<?=base_url()?>index.php/inventory"><?php echo "Inventari";?></a></li>
       </ul>                                                                                                                                                                                                                                                                                                                                      
      </li>
		 
      <?php if ($show_maintenace_menu): ?>                   
 
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toogle="tab"><?php echo lang('maintenances');?> <b class="caret"></b></a>
       <ul class="dropdown-menu">
         <li><a href="<?=base_url()?>index.php/skeleton_main/organizational_unit"><?php echo lang('organizationalunit_menu');?></a></li>
         <li><a href="<?=base_url()?>index.php/skeleton_main/location"><?php echo lang('location_menu');?></a></li>

         <li class="dropdown-submenu">
          <a tabindex="-1" href="#"><?php echo "Gestió assistència";?></a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>index.php/attendance/classroom_groups"><?php echo "Grups de classe"?></a></li>
              <li><a href="<?=base_url()?>index.php/attendance/todo"><?php echo "TODO"?></a></li>
            </ul>
         </li>
         <li class="dropdown-submenu">
          <a tabindex="-1" href="#"><?php echo "Plans Estudi";?></a>
            <ul class="dropdown-menu">
              <li><a href='<?=base_url()?>index.php/managment/course'><?php echo lang('course');?></a></li>
              <li><a href='<?=base_url()?>index.php/managment/studies'><?php echo lang('studies');?></a></li>
              <li><a href='<?=base_url()?>index.php/managment/cycle'><?php echo lang('cycles');?></a></li>
              <li><a href='<?=base_url()?>index.php/managment/studies_organizational_unit'><?php echo lang('organizational_unit');?></a></li>              
            </ul>
         </li>          
    
       </ul>                                                                                                                                                                                                                                                                                                                                      
      </li>
      <?php endif; ?>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('managment');?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
			  <?php if ($show_managment_menu): ?>
            <li><a href='<?=base_url()?>index.php/skeleton_main/users')?><?php echo lang('users');?></a></li>
            <li><a href='<?=base_url()?>index.php/skeleton_main/groups')?><?php echo lang('groups');?></a></li>
            <li><a href='<?=base_url()?>index.php/managment/massive_change_password')?><?php echo lang('massive_change_password');?></a></li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#"><?php echo lang('statistics_checkings');?></a>
					<ul class="dropdown-menu">
						<li><a href='<?=base_url()?>index.php/managment/statistics_checkings_groups')?><?php echo lang('statistics_checkings_groups');?></a></li>
						<li><a href='<?=base_url()?>index.php/managment/users_in_group')?><?php echo lang('users_in_group');?></a></li>
						<li><a href='<?=base_url()?>index.php/managment/lessons')?><?php echo lang('lessons');?></a></li>
					</ul>
			</li>
			  <?php endif; ?>
            <li><a href='<?=base_url()?>index.php/skeleton_main/preferences')?><?php echo lang('preferences');?></a></li>                                            
          </ul>
      </li>
      
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    ...
                                                                            
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('language');?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>index.php/skeleton_main/change_language/catalan"><?php echo lang('catalan');?></a></li>
            <li><a href="<?=base_url()?>index.php/skeleton_main/change_language/spanish"><?php echo lang('spanish');?></a></li>
            <li><a href="<?=base_url()?>index.php/skeleton_main/change_language/english"><?php echo lang('english');?></a></li>
          </ul>
      </li>
     </ul>               
   </div>
   <div class="pull-right navbar-text">
	   (<?php echo lang('language')." : ".lang($this->session->userdata('current_language'));?>)
     <img src="http://placehold.it/30x30">
      <a href="<?=base_url()?>index.php/skeleton_main/user_info" style="color:grey"><?php echo $this->session->userdata('username');?></a>      
      <a href="<?=base_url()?>index.php/skeleton_auth/auth/logout"><?php echo lang('CloseSession');?></a>              
   </div>
  </div>
 </div>
</div>

	 
 </div>

<!-- END OF body_header. DO NOT CLOSE Body tag. Closed in body footer--> 
