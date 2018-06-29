
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
               </div>

            <div class="x_content">
              <br />

              <!-- Smart Wizard -->

                <!-- Smart Wizard -->

        <form id="notice-form" method="post" action="<?php echo base_url('receive/receive_notice_save'); ?>" data-parsley-validate class="form-horizontal form-label-left">
            <div id="form_tab" class="x_panel">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ภาษีโรงเรือนและที่ดิน</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">ภาษีบำรุงท้องที่</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">ภาษีป้าย</a>
                        </li>
                      </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div id="step-1">
                          <br>
                                <h2 class="StepTitle">บันทึกข้อมูลภาษีโรงเรือนและที่ดิน</h2>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                            จำนวนข้อมูลภาษีโรงเรือนและที่ดิน
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                <input type="text" id="num1" name="txtCount" class="form-control col-md-4 col-xs-12" value="1" >
                                                <input type="hidden" name="individual_id[0]" value="<?php echo @$tax_notice[0]->individual_id; ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-success" type="button" id="addNum1" style="margin-right: 0px;">
                                                        <i class="fa fa-plus-square"></i>
                                                    </button>
                                                </span>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <h2 class="StepTitle">ภาษีโรงเรือนและที่ดิน </h2>
                                    
                                        <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                                <label >วันที่ประเมิน ภ.ร.ด. 2</label>
                                                                <span class="required" style="color:red">*</span>
                                                                <input type='text' name="notice_date_p2[0]" id="notice_date_p2" class="form-control datepicker" />
                                                        </div>
                                                </div>

                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="form-group">

                                                        <label> เลขที่รับ ภ.ร.ด. 2</label>
                                                        <span class="required" style="color:red">*</span>
                                                        <div>
                                                            <input type="text" name="notice_number_p2[0]" placeholder="ระบุเลขที่ ภ.ร.ด. 2" id="notice_number_p2" class="form-control col-md7 col-sx-12">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-6 col-sx-12">
                                                    <div class="form-group">
                                                            <label>รหัสประเมิน</label>
                                                            <span class="required" style="color:red">*</span>
                                                            <div>
                                                                <input type="text" name="notice_number_id[0]" placeholder="ระบุรหัสประเมิน" id="notice_number_id" class="form-control col-md7 col-sx-12">
                                                            </div>
                                                    </div>
                                                </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                                <label > วันที่ประเมิน ภ.ร.ด. 8</label>
                                                                <span class="required" style="color:red">*</span>
                                                                <input type='text' name="notice_date_p8[0]" id="notice_date_p8" class="form-control datepicker" />
                                                </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="form-group">

                                                        <label for="middle-name" class="" for="name"> เลขที่รับ ภ.ร.ด. 8
                                                        <span class="required" style="color:red">*</span>
                                                        </label>
                                                            <div >
                                                                <input type="text" name="notice_number_p8[0]" placeholder="ระบุเลขที่ ภ.ร.ด. 8" id="notice_number_p8" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                    </div>
                                                </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="form-group" >

                                                        <label for="middle-name" > เล่มที่รับ ภ.ร.ด. 8
                                                        <span class="required" style="color:red">*</span>
                                                        </label>
                                                        <div >
                                                            <input type="text" name="notice_no[0]" placeholder="ระบุเล่มที่ ภ.ร.ด. 8" id="notice_no" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                        </div>

                                    </div>

                                <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="form-group">

                                                        <label  > เลขที่โฉนด
                                                        </label>
                                                        <div >
                                                            <input type="text" name="land_deed_number[0]" placeholder="ระบุเลขที่โฉนด" id="land_deed_number" class="form-control col-md-7 col-xs-12" >
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="form-group">

                                                <label  > ประกอบกิจการ
                                                </label>
                                                <div >
                                                        <select class="form-control" name="noice_type_operation[0]">
                                                            <?php foreach ($operation as $value) : ?>
                                                                    <option value="<?php echo $value->noice_operation_id ?>"><?php echo $value->noice_operation_name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="form-group" >
                                                    <label for="middle-name" > ชื่อสถานประกอบการค้าหรือกิจการอื่น
                                                    </label>
                                                    <div >
                                                        <input type="text" name="noice_name_operation[0]" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น" id="noice_name_operation" class="form-control col-md-7 col-xs-12">
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
                                                    <input type="text" name="notice_address_number[0]" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="notice_address_number" class="form-control col-md-7 col-xs-12" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                    <label> หมู่ที่
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_address_moo[0]" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="notice_address_moo" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="form-group">

                                                <label  > ตำบล
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_address_subdistrict[0]" value="หนองป่าครั่ง" disabled  id="notice_address_subdistrict" class="form-control col-md-7 col-xs-12" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">

                                                    <label for="middle-name" > ค่ารายปี
                                                    <span class="required" style="color:red">*</span>
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_annual_fee[0]" placeholder="ระบุค่ารายปี"  id="notice_annual_fee" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                        <label  > จำนวนภาษีที่ประเมิน
                                                        <span class="required" style="color:red">*</span>
                                                        </label>
                                                        <div >
                                                            <input type="text" name="notice_estimate[0]" placeholder="ระบุจำนวนเงินที่ประเมิน" id="notice_estimate" class="form-control col-md-7 col-xs-12" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label  > ประจำปีภาษี
                                                        <span class="required" style="color:red">*</span>
                                                        </label>
                                                        <select class="form-control" name="tax_year[0]" >
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

                                    <div class="row">
                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div id="targetDiv1"></div>
                                                </div>
                                        </div>
                                    </div>

                              <br/>

                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div id="step-2">
                          <br>
                                <h2 class="StepTitle">บันทึกข้อมูลภาษีบำรุงท้องที่</h2>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12">
                                            จำนวนข้อมูลภาษีบำรุงท้องที่
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                <input type="text" id="num2" name="txtCount" class="form-control col-md-4 col-xs-12" value="1" >
                                                <input type="hidden" name="individual_id[1]" value="<?php echo @$tax_notice[0]->individual_id; ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-success" type="button" id="addNum2" style="margin-right: 0px;">
                                                        <i class="fa fa-plus-square"></i>
                                                    </button>
                                                </span>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
									<h2 class="StepTitle">ภาษีบำรุงท้องที่ </h2>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="form-group" >

                                                            <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                            <input type='text' name="notice_date[1]" class="form-control datepicker" />
                                                    </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                <label for="middle-name" class="" for="name"> เลขที่สำรวจ บ.ภ.ท. 5<span class="required" style="color:red"> *</span>
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_number[1]" placeholder="ระบุเลขเลขที่สำรวจ บ.ภ.ท. 5" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="form-group" >

                                                            <label >วันที่สำรวจ บ.ภ.ท. 5<span class="required" style="color:red"> *</span></label>
                                                            <input type='text' name="notice_date[1]" class="form-control datepicker" />
                                                    </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                    <label  > เลขที่โฉนด
                                                    </label>
                                                    <div >

                                                        <input type="text" name="land_deed_number[1]" placeholder="ระบุเลขที่โฉนด" class="form-control col-md-7 col-xs-12" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >
                                                    <label  > จุดสังเกตุ
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_address_number[1]" placeholder="ระบุจุดสังเกตุ" class="form-control col-md-7 col-xs-12" >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                <label for="middle-name" class="" for="name"> หมู่ที่
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_address_moo[1]" placeholder="หมู่ที่อยู่ที่ตั้งที่ดิน" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                    <label  > ตำบล
                                                    </label>
                                                        <div >
                                                            <input type="text" name="notice_address_subdistrict[1]" value="หนองป่าครั่ง" disabled class="form-control col-md-7 col-xs-12" >
                                                        </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                    <label  > เนื้อที่ดิน (ไร่) <span class="required" style="color:red"> *</span>
                                                    </label>
                                                        <div >
                                                            <input type="text" name="land_rai[1]" placeholder="" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                    <label  > เนื้อที่ดิน (งาน) <span class="required" style="color:red"> *</span>
                                                    </label>
                                                        <div >
                                                            <input type="text" name="land_ngan[1]" placeholder="" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" >

                                                    <label  > เนื้อที่ดิน (วา) <span class="required" style="color:red"> *</span>
                                                    </label>
                                                        <div >
                                                            <input type="text" name="land_wa[1]" placeholder="" class="form-control col-md-7 col-xs-12">
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
                                                    <input type="text" name="land_tax[1]" placeholder="" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                        </label>
                                                            <div >
                                                                <input type="text" name="notice_estimate[1]" placeholder="0" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                    </div>
                                            </div>


                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group" style="margin-bottom: 0px;">

                                                    <label  > ชำระภาษีบำรุงท้องที่ปี  <span class="required" style="color:red"> *</span>
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
                                                                <select class="form-control" name="tax_local_year[1]" type="text" >
                                                                        <?php foreach ($years as $key => $value) { ?>
                                                                            <option value="<?= $value->year_id ?>"><?= $value->year_label + 3 ?></option>
                                                                            <?php

                                                                        } ?>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div id="targetDiv2"></div>
                                                </div>
                                        </div>
                                    </div>



                              <br/>

                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <div id="step-3">
                          <br>
                                <h2 class="StepTitle">บันทึกข้อมูลภาษีป้าย</h2>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                            จำนวนข้อมูลภาษีป้าย
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                <input type="text" id="num3" name="txtCount" class="form-control col-md-4 col-xs-12" value="1" >
                                                <input type="hidden" name="individual_id[2]" value="<?php echo @$tax_notice[0]->individual_id; ?>">
                                                <span class="input-group-btn">
                                                <button class="btn btn-success" type="button" id="addNum3" style="margin-right: 0px;">
                                                        <i class="fa fa-plus-square"></i>
                                                    </button>
                                                </span>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
									<h2 class="StepTitle">ภาษีป้าย </h2>
                                    <div class="form-group" style="margin-bottom: 0px;" >
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                    <div class="form-group" style="margin-bottom: 0px;">

                                                        <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                        <input type='text' name="notice_date[2]" class="form-control datepicker" />
                                                    </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="form-group" style="margin-bottom: 0px;">
                                                    <label for="middle-name" class="" for="name"> เลขที่รับ ภ.ป.1<span class="required" style="color:red"> *</span>
                                                    </label>
                                                    <div >
                                                        <input type="text" name="notice_number[2]" placeholder="ระบุเลขที่รับ ภ.ป.1" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                    <div class="form-group" style="margin-bottom: 0px;">

                                                        <label for="middle-name" class="" for="name"> จุดสังเกตุ

                                                        </label>
                                                        <div >
                                                            <input type="text" name="notice_address_number[2]" placeholder="ระบุจุดสังเกตุ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                                <div class="row">
                                                        <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                <div class="form-group">

                                                                    <label  > ตำบล
                                                                    </label>
                                                                        <div >
                                                                            <input type="text" name="notice_address_subdistrict[2]" value="หนองป่าครั่ง" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                <div class="form-group">

                                                                    <label  > ชื่อสถานประกอบการค้าหรือกิจการอื่น <span class="required" style="color:red"> *</span>
                                                                    </label>
                                                                        <div >
                                                                            <input type="text" name="noice_name_operation[2]" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                <div class="form-group">

                                                                    <label  > ประจำปีภาษี <span class="required" style="color:red"> *</span>
                                                                    </label>
                                                                    <select class="form-control" name="tax_year[2]" >
                                                                        <?php foreach ($years as $key => $value) { ?>
                                                                            <option value="<?= $value->year_id ?>"><?= $value->year_label ?></option>
                                                                            <?php

                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        
                                                </div>



                                            <div class="row">
                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label  > ประเภทป้าย <span class="required" style="color:red"> *</span>
                                                                </label>
                                                                <div >
                                                                    <select class="form-control" name="banner_type[2]" type="text" >
                                                                        <?php foreach ($banner as $key => $value) { ?>
                                                                            <option value="<?= $value->banner_id ?>"><?= $value->banner_name ?></option>
                                                                            <?php

                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                            <label > ความกว้าง <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div >
                                                                <input type="text" name="banner_width[2]" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                            <label  > ความสูง <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div>
                                                                <input type="text" name="banner_heigth[2]" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6 col-xs-12">

                                                            <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                            </label>
                                                            <div>
                                                                <input type="text" name="notice_estimate[2]" placeholder="0"class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        
                                                        </div>
                                            </div>
                                            

                                                <div class="col-md-3 col-sm-6 col-xs-12" style="padding-left: 0px;">
                                                        <label>อัปโหลดรูปภาพ</label>
                                                            <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <span class="btn btn-success btn-file">
                                                                    อัปโหลด <input type="file" id="imgInp">
                                                                    </span>
                                                                </span>
                                                                <input type="text" class="form-control" readonly>
                                                            </div>
                                                        <img id='img-upload'/>
                                                </div>

									<div class="form-group">
										<div class="col-md-12 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div id="targetDiv3"></div>
                                                </div>
                                        </div>
                                    </div>
                                    

                              <br/>
                          </div>
                        </div>


                    </div>
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
            </div>

        </form>


              </div>
            </div>
          </div>
        </div>
    </div>

  </div>
</div>

<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;

		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});
	});
</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<script>
  $(function(){
        // bind a click event to addNumOfXYZ button
        $('#addNum1').bind('click',function(){
              var n = $('#num1').val(), // number of groups to add
              group = '<div id="XYZ">' + // create group template
              '<hr/>'+
              '<br>'+
              '<h2 class="StepTitle">ภาษีโรงเรือนและที่ดิน </h2>'+

                            '<div class="row">'+
                                        '<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">'+
                                                    '<div class="form-group" style="margin-bottom: 0px;">'+
                                                        '<label >วันที่ประเมิน ภ.ร.ด. 2 <span class="required" style="color:red"> *</span></label>'+
                                                        '<input type="date" name="notice_date" class="form-control datepicker" />'+
                                                    '</div>'+
                                            '</div>'+

                                         '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                    '<div class="form-group">'+

                                                        '<label> เลขที่รับ ภ.ร.ด. 2</label>'+
                                                        '<span class="required" style="color:red"> *</span>'+
                                                        '<div>'+
                                                            '<input type="text" name="notice_number_p2" placeholder="ระบุเลขที่ ภ.ร.ด. 2" id="notice_number_p2" class="form-control col-md7 col-sx-12">'+
                                                        '</div>'+
                                                   ' </div>'+
                                                '</div>'+

                                          '<div class="col-md-3 col-sm-6 col-sx-12">'+
                                                    '<div class="form-group">'+
                                                            '<label>รหัสประเมิน</label>'+
                                                            '<span class="required" style="color:red"> *</span>'+
                                                            '<div>'+
                                                               ' <input type="text" name="notice_number_id" placeholder="ระบุรหัสประเมิน" id="notice_number_id" class="form-control col-md7 col-sx-12">'+
                                                            '</div>'+
                                                    '</div>'+
                                                '</div>'+

                            ' </div>'+

                            '<div class="row">'+
                                        '<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">'+
                                                    '<div class="form-group" style="margin-bottom: 0px;">'+
                                                        '<label >วันที่ประเมิน ภ.ร.ด. 8 <span class="required" style="color:red"> *</span></label>'+
                                                        '<input type="date" name="notice_date" class="form-control datepicker" />'+
                                                    '</div>'+
                                            '</div>'+

                                         '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                    '<div class="form-group">'+

                                                        '<label> เลขที่รับ ภ.ร.ด. 8</label>'+
                                                        '<span class="required" style="color:red"> *</span>'+
                                                        '<div>'+
                                                            '<input type="text" name="notice_number_p2" placeholder="ระบุเลขที่ ภ.ร.ด. 8" id="notice_number_p2" class="form-control col-md7 col-sx-12">'+
                                                        '</div>'+
                                                   ' </div>'+
                                                '</div>'+

                                          '<div class="col-md-3 col-sm-6 col-sx-12">'+
                                                    '<div class="form-group">'+
                                                            '<label>เล่มที่รับ ภ.ร.ด. 8</label>'+
                                                            '<span class="required" style="color:red"> *</span>'+
                                                            '<div>'+
                                                               ' <input type="text" name="notice_number_id" placeholder="ระบุเล่มที่ ภ.ร.ด. 8" id="notice_number_id" class="form-control col-md7 col-sx-12">'+
                                                            '</div>'+
                                                    '</div>'+
                                                '</div>'+

                            ' </div>'+

                             '<div class="row">'+
                             
                                '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                            '<div class="form-group" >'+
                                                '<label  > เลขที่โฉนด</label>'+
                                                '<div >'+
                                                    '<input type="text" id="XYZ-input" name="XYZ-value" placeholder="ระบุเลขที่โฉนด" id="id_tax" class="form-control col-md-7 col-xs-12" >'+
                                                '</div>'+
                                            '</div>'+
                                            '</div>'+
                                    '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                        '<div class="form-group">'+
                                           ' <label  > ประกอบกิจการ'+
                                            '</label>'+
                                            '<div >'+
                                                    '<select class="form-control" name="noice_type_operation">'+
                                                        '<?php foreach ($operation as $value) : ?>'+
                                                                '<option value="<?php echo $value->noice_operation_id ?>"><?php echo $value->noice_operation_name ?></option>'+
                                                       ' <?php endforeach; ?>'+
                                                   ' </select>'+
                                           ' </div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                              '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > ชื่อสถานประกอบการค้าหรือกิจการอื่น'+
                                                '</label>'+
                                                '<div >'+
                                                    '<input type="text" name="noice_name_operation" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น" class="form-control col-md-7 col-xs-12">'+
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                            '</div>'+

                            '<div class="row">'+
                                          '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                              '<div class="form-group">'+
                                                '<label  > เลขที่</label>'+
                                                '<div >'+
                                                    '<input type="text" id="XYZ-input" name="XYZ-value" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="id_tax" class="form-control col-md-7 col-xs-12" >'+
                                                '</div>'+
                                              '</div>'+
                                          '</div>'+
                                        
                                          '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                          '        <div class="form-group" >'+
                                          '          <label for="middle-name" class="" for="last_name"> หมู่ที่'+
                                          '          </label>'+
                                          '          <div >'+
                                          '              <input type="text" id="XYZ-input" name="XYZ-value" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="name_tax" class="form-control col-md-7 col-xs-12">'+
                                          '          </div>'+
                                          '      </div>'+
                                          '</div>'+

                                          '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                          '  <div class="form-group">'+
                                          '    <label  > ตำบล'+
                                          '    </label>'+
                                          '    <div >'+
                                          '        <input type="text" id="XYZ-input" name="XYZ-value" value="หนองป่าครั่ง" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >'+
                                          '    </div>'+
                                          '  </div>'+
                                          '</div>'+
                            ' </div>'+

                           

                            '<div class="row">'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                                '<div class="form-group" style="margin-bottom: 0px;">'+
                                                    '<label for="middle-name" > ค่ารายปี'+
                                                    '<span class="required" style="color:red"> *</span>'+
                                                   ' </label>'+
                                                    '<div >'+
                                                        '<input type="text" name="notice_annual_fee" placeholder="ระบุค่ารายปี"  class="form-control col-md-7 col-xs-12">'+
                                                    '</div>'+
                                                '</div>'+
                                    '</div>'+

                            '          <div class="col-md-4 col-sm-6 col-xs-12">'+
                            '              <div class="form-group">'+
                            '                <label  > จำนวนภาษีที่ประเมิน'+
                            '                </label>'+
                            '              <span class="required" style="color:red">*</span>'+
                            '                <div >'+
                            '                    <input type="text" id="XYZ-input" name="XYZ-value" placeholder="ระบุจำนวนเงินที่ประเมิน" id="id_tax" class="form-control col-md-7 col-xs-12" >'+
                            '                </div>'+
                            '              </div>'+
                            '            </div>'+

                            '          <div class="col-md-4 col-sm-6 col-xs-12">'+
                            '              <div class="form-group">'+
                            '                <label  > ประจำปีภาษี'+
                            '                </label>'+
                            '                <span class="required" style="color:red"> *</span>'+
                            '                <div >'+
                                                    '<select class="form-control" name="tax_year" >'+
                                                            '<?php foreach ($years as $key => $value) { ?>'+
                                                                '<option value="<?= $value->year_id ?>">ปีงบประมาณ <?= $value->year_label ?></option>'+
                                                                '<?php

                                                            } ?>'+
                                                    '</select>'+
                            '                </div>'+
                            '              </div>'+
                            '          </div>'+
                            '</div>'+
                      ' </div>';
                      
              // loop and create n groups
              var groups;
              for ( var i = 1; i < n ; i++ ) {
                    // get copy of template
                    var tmp = group;
                    // modify copy to make ID's unique
                    // here we are replacing XYZ and XYZ-input with XYZ-i and XYZ-input-i to keep them unique
                    tmp = tmp.replace(/(XYZ|XYZ-input)/g,'$1-'+i);
                    // append tmp to groups
                    groups = groups ? groups + tmp : tmp;
              }
              // append groups to target div
              $('#targetDiv1').append(groups);
        });
  });

    $(function(){
        // bind a click event to addNumOfXYZ button
        $('#addNum2').bind('click',function(){
              var n = $('#num2').val(), // number of groups to add
              group = '<div id="XYZ">' + // create group template
              '<hr/>'+
              '<br>'+
              '<h2 class="StepTitle">ภาษีบำรุงท้องที่ </h2>'+

                                '<div class="row">'+

                                         '<div class="col-md-3 col-sm-12 col-xs-12">'+
                                            '<div class="form-group" >'+
                                                  '<label for="middle-name" class="" for="name"> เลขที่สำรวจ</label>'+
                                                  '<span class="required" style="color:red"> *</span>'+
                                                  '<div>'+
                                                      '<input type="text" id="XYZ-input" name="XYZ-value" placeholder="ระบุเลขที่สำรวจ" id="name_tax" class="form-control col-md7 col-sx-12">'+
                                                  '</div>'+
                                           ' </div>'+
                                         ' </div>'+

                                        '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                          '<div class="form-group" >'+
                                            '<label  > วันที่สำรวจ</label>'+
                                            '<span class="required" style="color:red"> *</span>'+
                                            '<div >'+
                                                '<input type="date" id="XYZ-input" name="XYZ-value"  id="id_tax" class="form-control col-md-7 col-xs-12" >'+
                                            '</div>'+
                                          '</div>'+
                                        '</div>'+

                                        '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                          '<div class="form-group" >'+
                                            '<label  > เลขที่โฉนด</label>'+
                                            '<span class="required" style="color:red"> *</span>'+
                                            '<div >'+
                                                '<input type="text" id="XYZ-input" name="XYZ-value"  id="id_tax" class="form-control col-md-7 col-xs-12" >'+
                                            '</div>'+
                                          '</div>'+
                                        '</div>'+
                                ' </div>'+
                            '</div>'+
                            '<div class="row">'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                        '<div class="form-group">'+
                                           ' <label  > จุดสังเกตุ'+
                                            '</label>'+
                                            '<div >'+
                                                    '<input type="text" name="notice_address_number" placeholder="ระบุจุดสังเกตุ" class="form-control col-md-7 col-xs-12" >'+
                                           ' </div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                              '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > หมู่ที่'+
                                                '</label>'+
                                                '<div >'+
                                                    '<input type="text" name="notice_address_moo" placeholder="หมู่ที่ตั้งที่ดิน" class="form-control col-md-7 col-xs-12">'+
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                                      '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                              '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > ตำบล'+
                                                '</label>'+
                                                '<div >'+
                                                   ' <input type="text" name="notice_address_subdistrict" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >'+
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                            '</div>'+
                            '<div class="row">'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                        '<div class="form-group">'+
                                           ' <label  > เนื้อที่ดิน (ไร่)'+
                                          ' <span class="required" style="color:red"> *</span>'+
                                            '</label>'+
                                            '<div >'+
                                                '<input type="text" name="land_rai" placeholder="" class="form-control col-md-7 col-xs-12">'+
                                           ' </div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                              '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > เนื้อที่ดิน (งาน)'+
                                                ' <span class="required" style="color:red"> *</span>'+
                                                '</label>'+
                                                '<div >'+
                                                    '<input type="text" name="land_ngan" placeholder="" class="form-control col-md-7 col-xs-12">'+
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                                      '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                            '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > เนื้อที่ดิน (วา)'+
                                                ' <span class="required" style="color:red"> *</span>'+
                                                '</label>'+
                                                '<div >'+
                                                    '<input type="text" name="land_wa" placeholder="" class="form-control col-md-7 col-xs-12">'+
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                            '</div>'+

                            '<div class="row">'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                        '<div class="form-group">'+
                                           ' <label  > เนื้อที่ดินที่ต้องชำระภาษี'+
                                          ' <span class="required" style="color:red"> *</span>'+
                                            '</label>'+
                                            '<div >'+
                                                '<input type="text" name="land_tax" placeholder="" class="form-control col-md-7 col-xs-12">'+
                                           ' </div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                              '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > จำนวนภาษีที่ประเมิน'+
                                                    ' <span class="required" style="color:red"> *</span>'+
                                                '</label>'+
                                                '<div >'+
                                                    '<input type="text" name="notice_estimate" placeholder="0" class="form-control col-md-7 col-xs-12">'+
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                                      '<div class="col-md-4 col-sm-6 col-xs-12">'+
                                            '<div class="form-group" style="margin-bottom: 0px;">'+
                                                '<label for="middle-name" > ชำระภาษีบำรุงท้องที่ปี'+
                                                ' <span class="required" style="color:red"> *</span>'+
                                                '</label>'+
                                                '<div >'+
                                                            '<div class="col-md-5 col-sm-6 col-xs-12" style="padding-left: 0px;">'+
                                                                '<select class="form-control" name="tax_year" type="text" >'+
                                                                    '<?php foreach ($years as $key => $value) { ?>'+
                                                                            '<option value="<?= $value->year_id ?>"><?= $value->year_label ?></option>'+
                                                                        '<?php

                                                                    } ?>'+
                                                               ' </select>'+
                                                            '</div>'+
                                                            '<div class="col-md-2 col-sm-6 col-xs-12" align="center"><label>ถึง</label></div>'+
                                                            '<div class="col-md-5 col-sm-6 col-xs-12" style="padding-right: 0px;">'+
                                                                '<select class="form-control" name="tax_local_year" type="text" >'+
                                                                        '<?php foreach ($years as $key => $value) { ?>'+
                                                                            '<option value="<?= $value->year_id ?>"><?= $value->year_label + 3 ?></option>'+
                                                                           ' <?php

                                                                        } ?>'+
                                                                    '</select>'+
                                                            '</div>'+
                                                '<div >'+
                                                    
                                                '</div>'+
                                            '</div>'+
                                      '</div>'+
                            '</div>'+
                      ' </div>';
                      
              // loop and create n groups
              var groups;
              for ( var i = 1; i < n ; i++ ) {
                    // get copy of template
                    var tmp = group;
                    // modify copy to make ID's unique
                    // here we are replacing XYZ and XYZ-input with XYZ-i and XYZ-input-i to keep them unique
                    tmp = tmp.replace(/(XYZ|XYZ-input)/g,'$1-'+i);
                    // append tmp to groups
                    groups = groups ? groups + tmp : tmp;
              }
              // append groups to target div
              $('#targetDiv2').append(groups);
        });
  });

      $(function(){
        // bind a click event to addNumOfXYZ button
        $('#addNum3').bind('click',function(){
              var n = $('#num3').val(), // number of groups to add
              group = '<div id="XYZ">' + // create group template
              '<hr/>'+
              '<br>'+
			  '<h2 class="StepTitle">ภาษีป้าย </h2>'+
										'<div class="row">'+

                                        '<div class="col-md-3 col-sm-6 col-xs-12">'+
													'<div class="form-group" >'+
														'<label  > จุดสังเกตุ</label>'+
															'<div >'+
																'<input type="text" name="notice_address_subdistrict" class="form-control col-md-7 col-xs-12" >'+																															
																'</div>'+
													'</div>'+
												'</div>'+

											'<div class="col-md-3 col-sm-6 col-xs-12">'+
													'<div class="form-group" >'+
														'<label  > ตำบล</label>'+
															'<div >'+
																'<input type="text" name="notice_address_subdistrict" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >'+																															
																'</div>'+
													'</div>'+
												'</div>'+
												
												'<div class="col-md-3 col-sm-6 col-xs-12">'+
													'<div class="form-group" >'+
														'<label  > ชื่อสถานประกอบการค้าหรือกิจการอื่น</label>'+
														'<span class="required" style="color:red"> *</span>'+
															'<div >'+
															'<input type="text" name="noice_name_operation" placeholder="" class="form-control col-md-7 col-xs-12">'+																															
															'</div>'+
													'</div>'+
												'</div>'+

											'<div class="col-md-3 col-sm-6 col-xs-12">'+
                                            '<div class="form-group" >'+
                                            '</div>'+
											'</div>'+
											

										' </div>'+

                                            '<div class="col-md-3 col-sm-6 col-xs-12" style="padding-left: 0px;">'+
													'<div class="form-group" >'+
														'<label  > ประเภทป้าย</label>'+
														'<span class="required" style="color:red"> *</span>'+
															'<div >'+
                                                            '<select class="form-control" name="banner_type" type="text" >'+
                                                                        '<?php foreach ($banner as $key => $value) { ?>'+
                                                                            '<option value="<?= $value->banner_id ?>"><?= $value->banner_name ?></option>'+
                                                                            '<?php

                                                                        } ?>'+
                                                                '</select>'+																'</div>'+
													'</div>'+
												'</div>'+
                                        

											'<div class="col-md-3 col-sm-6 col-xs-12">'+
													'<div class="form-group" >'+
														'<label  > ความกว้าง</label>'+
														'<span class="required" style="color:red"> *</span>'+
															'<div >'+
																'<input type="text" name="banner_width" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12">'+																															
																'</div>'+
													'</div>'+
												'</div>'+
												
												'<div class="col-md-3 col-sm-6 col-xs-12">'+
													'<div class="form-group" >'+
														'<label  > ความสูง</label>'+
														'<span class="required" style="color:red"> *</span>'+
															'<div >'+
															'<input type="text" name="banner_heigth" placeholder="" class="form-control col-md-7 col-xs-12">'+																															
															'</div>'+
													'</div>'+
												'</div>'+

												'<div class="col-md-3 col-sm-6 col-xs-12">'+
													'<div class="form-group" >'+
														'<label  > จำนวนภาษีที่ประเมิน</label>'+
														'<span class="required" style="color:red"> *</span>'+
															'<div >'+
															'<input type="text" name="notice_estimate" placeholder="0" class="form-control col-md-7 col-xs-12" >'+																															
															'</div>'+
													'</div>'+
												'</div>'+
												

												
												'</div>'+

										'<div class="row">'+
                                                '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                    '<div class="form-group">'+
                                                        '<label>อัปโหลดรูปภาพ</label>'+
                                                            '<div class="input-group">'+
                                                                '<span class="input-group-btn">'+
                                                                    '<span class="btn btn-success btn-file">'+
                                                                    'อัปโหลด <input type="file" id="imgInp">'+
                                                                    '</span>'+
                                                                '</span>'+
                                                                '<input type="text" class="form-control" readonly>'+
                                                            '</div>'+
                                                        '<img id="img-upload"/>'+
                                                    '</div>'+
                                    		'</div>'+
										'</div>'+
												
												

                                
                      ' </div>';
                      
              // loop and create n groups
              var groups;
              for ( var i = 1; i < n ; i++ ) {
                    // get copy of template
                    var tmp = group;
                    // modify copy to make ID's unique
                    // here we are replacing XYZ and XYZ-input with XYZ-i and XYZ-input-i to keep them unique
                    tmp = tmp.replace(/(XYZ|XYZ-input)/g,'$1-'+i);
                    // append tmp to groups
                    groups = groups ? groups + tmp : tmp;
              }
              // append groups to target div
              $('#targetDiv3').append(groups);
        });
  });


</script>