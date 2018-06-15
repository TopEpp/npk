<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
          <div class="title_left">
            <h3>บันทึกรายการ</h3>
          </div>
      </div>

          <br>
          <br>

      <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <br />

              <!-- Smart Wizard -->
            
                <!-- Smart Wizard -->

    <form id="notice-form" method="post" action="<?php echo base_url('receive/receive_notice_save' . '/' . $this->uri->segment(3)); ?>" data-parsley-validate class="form-horizontal form-label-left">          

            <div id="form_tab" class="x_panel">

                <?php if (!empty($notice[0]->tax_id)) { // have  data notice
                    if ($notice[0]->tax_id == 8) { ?>

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ภาษีโรงเรือนและที่ดิน</a>
                            </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <div id="step-1">
                                    <br>
                                        <h2 class="StepTitle">บันทึกข้อมูลภาษีโรงเรือนและที่ดิน</h2>
                                        <div class="form-group" style="margin-bottom: 0px;">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">
                                                จำนวนข้อมูลภาษีโรงเรือนและที่ดิน
                                                </label>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="input-group">
                                                    <input type="text"  class="form-control col-md-4 col-xs-12" value="1" >
                                                    <input type="hidden"  class="form-control col-md-4 col-xs-12" name="individual_id[0]" value="<?php echo @$notice[0]->individual_id; ?>" >
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button" style="margin-right: 0px;">
                                                            <i class="fa fa-plus-square"></i>
                                                        </button>
                                                    </span>
                                                    </div>
                                                </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="row">
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group" style="margin-bottom: 0px;">
                                                                    <label >วันที่ประเมิน</label>
                                                                    <span class="required" style="color:red">*</span>
                                                                    <input type='date' name="notice_date[0]" value="<?php echo @$notice[0]->notice_date; ?>" class="form-control" />
                                                            </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                            <label for="middle-name" class="" for="name"> เลขที่รับแบบ</label>
                                                            <span class="required" style="color:red">*</span>
                                                            <div>
                                                                <input type="text" name="notice_reception[0]" value="<?php echo @$notice[0]->notice_reception; ?>" placeholder="เลขที่รับแบบ" id="name_tax" class="form-control col-md7 col-sx-12">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label for="middle-name" class="" for="name"> เลขที่รับ
                                                            <span class="required" style="color:red">*</span>
                                                            </label>
                                                                <div >
                                                                    <input type="text" name="notice_number[0]" value="<?php echo @$notice[0]->notice_number; ?>" placeholder="เลขที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label for="middle-name" > เล่มที่รับ
                                                            <span class="required" style="color:red">*</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="notice_no[0]" value="<?php echo @$notice[0]->notice_no; ?>" placeholder="เล่มที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                            <label  > เลขที่โฉนด
                                                            <span class="required" style="color:red">*</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="notice_deed[0]" value="<?php echo @$notice[0]->notice_deed; ?>" placeholder="เลขที่โฉนด" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                
                                                <label  > ประกอบกิจการ
                                                <span class="required" style="color:red">*</span>
                                                </label>
                                                <div >
                                                    <select class="form-control" name="noice_type_operation" type="text" >
                                                        <option value="" >เลือก</option>
                                                        <option value="ตึก">ตึก</option>
                                                        <option value="โรงเรือน">โรงเรือน</option>
                                                        <option value="โรง">โรง</option>
                                                        <option value="ตึกแถว">ตึกแถว</option>
                                                        <option value="โรงเรือนแถว">โรงเรือนแถว</option>
                                                        <option value="แพ">แพ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" style="margin-bottom: 0px;">
                                                    <label for="middle-name" > ชื่อกิจการ/ร้านค้า
                                                    </label>
                                                    <div >
                                                        <input type="text" name="noice_name_operation[0]" value="<?php echo @$notice[0]->noice_name_operation; ?>" placeholder="" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                        </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">                                                
                                                    <label  > เลขที่
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_address_number[0]" value="<?php echo @$notice[0]->notice_address_number; ?>" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label> หมู่ที่
                                                        </label>
                                                        <div >
                                                            <input type="text" name="notice_address_moo[0]" value="<?php echo @$notice[0]->notice_address_moo; ?>" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                
                                                    <label  > ตำบล
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_address_moo[0]" value="หนองป่าครั่ง" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label for="middle-name" > ค่ารายปี
                                                        <span class="required" style="color:red">*</span>
                                                        </label>
                                                        <div >
                                                            <input type="text" name="notice_annual_fee[0]" value="<?php echo @$notice[0]->notice_annual_fee; ?>" placeholder="0" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                            <label  > จำนวนภาษีที่ประเมิน
                                                            <span class="required" style="color:red">*</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="notice_estimate[0]" value="<?php echo @$notice[0]->notice_estimate; ?>" placeholder="0" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label  > ประจำปีภาษี
                                                            <span class="required" style="color:red">*</span>
                                                            </label>
                                                            <!-- //query year form db -->
                                                            <?php $query = $this->db->query("select * from tbl_year");
                                                            $years = $query->result();
                                                            ?>
                                                            <!-- //end query year form db -->
                                                            <select class="form-control" name="tax_year[0]" type="text" >
                                                                <?php foreach ($years as $key => $value) { ?>
                                                                    <option value="<?= $value->year_id ?>">ปีงบประมาณ <?= $value->year_label ?></option>
                                                                    <?php 
                                                                } ?>
                                                            </select>
                                                        <div >
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                }
                if ($notice[0]->tax_id == 9) { ?>

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ภาษีบำรุงท้องที่</a>
                            </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <div id="step-2">
                                    <br>
                                    <h2 class="StepTitle">บันทึกข้อมูลภาษีบำรุงท้องที่</h2>
                                        <div class="form-group" style="margin-bottom: 0px;">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">
                                                จำนวนข้อมูลภาษีบำรุงท้องที่
                                                </label>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="input-group">
                                                    <input type="text"  class="form-control col-md-4 col-xs-12" value="1" >
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button" style="margin-right: 0px;">
                                                            <i class="fa fa-plus-square"></i>
                                                        </button>
                                                    </span>
                                                    </div>
                                                </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                            <input type='date' name="notice_date[1]" value="<?php echo @$notice[0]->notice_date; ?>"class="form-control" />
                                                    </div>
                                            </div>

                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                <label for="middle-name" class="" for="name"> เลขที่รับ<span class="required" style="color:red"> *</span>
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_number[1]" value="<?php echo @$notice[0]->notice_number; ?>" placeholder="เลขที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                    <label  > เลขที่โฉนด<span class="required" style="color:red"> *</span>
                                                    </label>
                                                    <div >
                                                    
                                                        <input type="text" name="notice_deed[1]" value="<?php echo @$notice[0]->notice_deed; ?>" placeholder="เลขที่โฉนด" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                    </div>
                                                </div>
                                            </div>


                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">                                                
                                                        <label  > เลขที่ตั้งที่ดิน
                                                        </label>
                                                        <div >
                                                            <input type="text" name="notice_address_number[1]" value="<?php echo @$notice[0]->notice_address_number; ?>"placeholder="ที่อยู่ที่ตั้งที่ดิน" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                    
                                                    <label for="middle-name" class="" for="name"> หมู่ที่
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_address_moo[1]" value="<?php echo @$notice[0]->notice_address_moo; ?>" placeholder="หมู่ที่อยู่ที่ตั้งที่ดิน" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label  > ตำบล
                                                        </label>
                                                            <div >
                                                                <input type="text" value="หนองป่าครั่ง" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                            </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label  > เนื้อที่ดิน (ไร่) <span class="required" style="color:red"> *</span>
                                                        </label>
                                                            <div >
                                                                <input type="text" name="land_rai[1]" value="<?php echo @$notice[0]->land_rai; ?>" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label  > เนื้อที่ดิน (งาน) <span class="required" style="color:red"> *</span>
                                                        </label>
                                                            <div >
                                                                <input type="text" name="land_ngan[1]" value="<?php echo @$notice[0]->land_ngan; ?>" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label  > เนื้อที่ดิน (วา) <span class="required" style="color:red"> *</span>
                                                        </label>
                                                            <div >
                                                                <input type="text" name="land_wa[1]" value="<?php echo @$notice[0]->land_wa; ?>" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                    
                                                    <label for="middle-name" class="" for="name"> เนื้อที่ดินที่ต้องชำระภาษี<span class="required" style="color:red"> *</span>
                                                    </label>
                                                    <div >
                                                        <input type="text" name="land_tax[1]" value="<?php echo @$notice[0]->land_tax; ?>" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                            </label>
                                                                <div >
                                                                    <input type="text" name="notice_estimate[1]" value="<?php echo @$notice[0]->notice_estimate; ?>" placeholder="0"id="id_tax" class="form-control col-md-7 col-xs-12">
                                                                </div>
                                                        </div>
                                                </div>                  

                                                
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        
                                                        <label  > ชำระภาษีบำรุงท้องที่ ประจำปี  <span class="required" style="color:red"> *</span>
                                                        </label>
                                                            <div >
                                                                <div class="col-md-5 col-sm-6 col-xs-12" style="padding-left: 0px;">
                                                                    <select class="form-control" name="tax_year[1]" type="text" >
                                                                        <?php foreach ($years as $key => $value) { ?>
                                                                                <option value="<?= $value->year_id ?>"><?= $value->year_label ?></option>
                                                                            <?php 
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2 col-sm-6 col-xs-12" align="center"><label>ถึง</label></div>
                                                                <div class="col-md-5 col-sm-6 col-xs-12" style="padding-right: 0px;">
                                                                    <select class="form-control" name="tax_year[1]" type="text" >
                                                                            <?php foreach ($years as $key => $value) { ?>
                                                                                <option value="<?= $value->year_id ?>"><?= $value->year_label ?></option>
                                                                                <?php 
                                                                            } ?>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                
                                        <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php

            }
            if ($notice[0]->tax_id == 10) { ?>

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ภาษีป้าย</a>
                                </li>
                            </ul>

                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    <div id="step-3">
                                        <br>
                                        <h2 class="StepTitle">บันทึกข้อมูลภาษีป้าย</h2>
                                        <div class="form-group" style="margin-bottom: 0px;">
                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">
                                                จำนวนข้อมูลภาษีป้าย
                                                </label>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="input-group">
                                                    <input type="text"  class="form-control col-md-4 col-xs-12" value="1" >
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success" type="button" style="margin-right: 0px;">
                                                            <i class="fa fa-plus-square"></i>
                                                        </button>
                                                    </span>
                                                    </div>
                                                </div>
                                        </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                            <input type='date' name="notice_date[2]" class="form-control" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label for="middle-name" class="" for="name"> เลขที่รับ
                                                                <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="notice_number[2]" value="<?php echo @$notice[0]->notice_number; ?>" naplaceholder="เลขที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label for="middle-name" class="" for="name"> เลขที่อยู่ที่ตั้งป้าย
                                                            <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="notice_address_number[2]" placeholder="อยู่ที่ตั้งป้าย" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                            
                                                            <label > หมู่ที่ <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="notice_address_moo[2]" placeholder="หมู่ที่อยู่ติดตั้งป้าย"id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-sm-6 col-xs-12" >
                                                                <div class="form-group">
                                                                    
                                                                    <label  > ตำบล <span class="required" style="color:red"> *</span>
                                                                    </label>
                                                                        <div >
                                                                            <input type="text" name="notice_address_subdistrict[2]" value="หนองป่าครั่ง" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="col-md-4 col-sm-6 col-xs-12" >
                                                                <div class="form-group">
                                                                    
                                                                    <label  > ชื่อกิจการ/ร้านค้า <span class="required" style="color:red"> *</span>
                                                                    </label>
                                                                        <div >
                                                                            <input type="text" name="noice_name_operation[2]" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label  > เนื้อที่ดิน (ไร่) <span class="required" style="color:red"> *</span>
                                                            </label>
                                                                <div >
                                                                    <input type="text" name="land_rai[1]" value="<?php echo @$notice[0]->land_rai; ?>" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label  > เนื้อที่ดิน (งาน) <span class="required" style="color:red"> *</span>
                                                            </label>
                                                                <div >
                                                                    <input type="text" name="land_ngan[1]" value="<?php echo @$notice[0]->land_ngan; ?>" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                            
                                                            <label  > เนื้อที่ดิน (วา) <span class="required" style="color:red"> *</span>
                                                            </label>
                                                                <div >
                                                                    <input type="text" name="land_wa[1]" value="<?php echo @$notice[0]->land_wa; ?>" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                                </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            
                                                            <label  > ประเภทป้าย <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div >
                                                                    <select class="form-control" type="text" id="type_tax">
                                                                            <option>มีอักษรไทยล้วน</option>
                                                                            <option>มีอักษรไทยปนอักษรต่างประเทศหรือเครื่องหมาย</option>
                                                                            <option>ป้ายที่ไม่มีอักษรไทย</option>
                                                                    </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                                            <label > ความกว้าง <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="banner_width[2]" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-sm-6 col-xs-12">                                                    
                                                            <label  > ความสูง <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div>
                                                                <input type="text" name="banner_heigth[2]" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                                        
                                                            <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div>
                                                                <input type="text" name="notice_estimate[2]" placeholder="0.00"id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                
                                                                <label  > ประจำปีภาษี <span class="required" style="color:red"> *</span>
                                                                </label>
                                                                    <div >
                                                                        <input type="text" placeholder="ปีงบประมาณ" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>

                                                

                                            <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <?php

                }
                ?>
                <?php 
            } ?>
                

                </div>



                <!-- End SmartWizard Content -->  		

                  <div class="ln_solid"></div>
                      <div class="form-group">
                          <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 text-center">
                              <button type="submit" value="Submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                              </button>
                              <button onclick="window.location.replace('<?php echo site_url('receive/receive_tax'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
                              </button>
                          </div>
                      </div>   
                  </div>      
    </form>
              </div>
            </div>
          </div>
        </div>
    </div>
 
  </div>
</div>


