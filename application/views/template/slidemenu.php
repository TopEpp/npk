<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a class="site_title" href="<?php echo site_url('main/dashborad'); ?>">
              <img src="<?php echo base_url(); ?>assets/images/logo.png" width="48">
              <span>NPK SYSTEMS</span>
            </a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <br>
          <div class="profile clearfix" style="margin-left: 5px;">
            <select class="selectpicker">
              <option>ปีงบประมาณ 2561</option>
              <option>ปีงบประมาณ 2560</option>
              <option>ปีงบประมาณ 2559</option>
            </select>
          </div>
          <br>
          <!-- /menu profile quick info -->

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li> 
                    <a href="<?php echo site_url('main/dashborad'); ?>"> <i class="fa fa-home"></i> หน้าหลัก</a>
                </li>
                <li> 
                    <a href="<?php echo site_url('project_training/project'); ?>"> <i class="fa fa-sitemap"></i> ระบบบริหารโครงการ</a>
                </li>

                <li>
                  <a>
                    <i class="fa fa-database"></i> ระบบบัญชีรายรับ
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="<?php echo site_url('receive/receive_tax'); ?>">ข้อมูลผู้เสียภาษี</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('receive/receive_dashborad'); ?>">ข้อมูลการประเมินรายรับ</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('receive/receive_save'); ?>">ข้อมูลบันทึกรายรับ</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('receive/receipts_add'); ?>">บันทึกรายรับภาษีอื่น</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('receive/receipts_dashborad'); ?>">ข้อมูลบันทึกรายรับภาษีอื่น</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('#'); ?>">ข้อมูลการประมาณการรายรับ</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('#'); ?>">นำเข้าข้อมูล</a>
                    </li>
                  </ul>
                </li>

                <li> 
                    <a  href="<?php echo site_url('expenditure/expenditure_prj'); ?>"> <i class="fa fa-table"></i> ระบบบัญชีรายจ่าย</a>
                </li>

                <li>
                  <a>
                    <i class="fa fa-line-chart"></i> รายงาน
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a>ยุทธศาสตร์</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('report/report_rec'); ?>">บัญชีรายรับ</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('report/report_pay'); ?>">บัญชีรายจ่าย</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('report/report_debt'); ?>">ลูกหนี้ค้างชำระ</a>
                    </li>
                  </ul>
                </li>
                
                <li>
                  <a href="<?php echo site_url('usm'); ?>">
                    <i class="fa fa-users"></i>บัญชีผู้ใช้งาน
                  </a>
                </li>
                
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

        </div>
      </div>
