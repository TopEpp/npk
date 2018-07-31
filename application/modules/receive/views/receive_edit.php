
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
                                    <form id="notice-form" method="post" action="<?php echo base_url('receive/receive_notice_update'); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                            <div id="form_tab" class="x_panel">
                                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                            <li role="presentation" class="<?php echo ($tax_id == '8') ? 'active' : ''; ?>"><a href="#tab_content1" role="tab" id="tab1" data-toggle="tab" aria-expanded="true">ภาษีโรงเรือนและที่ดิน</a>
                                                            </li>
                                                            <li role="presentation" class="<?php echo ($tax_id == '9') ? 'active' : ''; ?>"><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">ภาษีบำรุงท้องที่</a>
                                                            </li>
                                                            <li role="presentation" class="<?php echo ($tax_id == '10') ? 'active' : ''; ?>"><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">ภาษีป้าย</a>
                                                            </li>
                                                        </ul>
                                                        <br>
                                                        <div class=row>
                                                            <div class="form-group">
                                                                <label class="control col-md-2" >ผู้เสียภาษี :</label>
                                                                <div class="control col-md-3">
                                                                    <p><?php echo $tax_notice_read[0]->individual_prename . $tax_notice_read[0]->individual_firstname . " " . $tax_notice_read[0]->individual_lastname; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control col-md-2" >เลขประจำตัวผู้เสียภาษี :</label>
                                                                <div class="control col-md-3">
                                                                    <p><?php echo $tax_notice_read[0]->individual_number; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control col-md-2" >ประเภทผู้เสียภาษี :</label>
                                                                <div class="control col-md-3">
                                                                    <p><?php echo $tax_notice_read[0]->tax_type_name; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control col-md-2" >ที่อยู่ :</label>
                                                                <div class="control col-md-4">
                                                                    <p><?php echo $tax_notice_read[0]->individual_address . " " . "หมู่" . " " . $tax_notice_read[0]->individual_village . " " . "ตำบล หนองป่าครั่ง อำเภอ เมือง จังหวัด เชียงใหม่ "; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control col-md-2" >เบอร์โทรศัพท์ :</label>
                                                                <div class="control col-md-3">
                                                                    <p><?php echo $tax_notice_read[0]->individual_phone; ?></p>
                                                                </div>
                                                            </div>
                                                </div>
                                                <hr>

                                                    <div id="myTabContent" class="tab-content">
                                                        <?php if (!empty($tax_notice[8])) { ?>
                                                                <div role="tabpanel" class="tab-pane fade <?php echo ($tax_id == '8') ? 'active in' : ''; ?> " id="tab_content1" aria-labelledby="tab1">
                                                                    <div id="step-1">
                                                                        <br>
                                                                            <h2 class="StepTitle">บันทึกข้อมูลภาษีโรงเรือนและที่ดิน</h2>
                                                                                <div class="form-group" style="margin-bottom: 0px;">
                                                                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">
                                                                                        จำนวนข้อมูลภาษีโรงเรือนและที่ดิน
                                                                                    </label>
                                                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                            <div class="input-group">
                                                                                                <input type="text"  id="num_one" class="form-control col-md-4 col-xs-12" name="notice_amount[0][]"value="<?php echo @$tax_notice_id[0]->notice_amount; ?>" >
                                                                                                <input type="hidden"  class="form-control col-md-4 col-xs-12" name="individual_id[0][]" value="<?php echo @$tax_notice_read[0]->individual_id; ?>" >
                                                                                                <span class="input-group-btn">
                                                                                                    <button class="btn btn-success" type="button" id="addNum_one" style="margin-right: 0px;">
                                                                                                        <i class="fa fa-plus-square"></i>
                                                                                                    </button>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                                <hr>

                                                                            <?php 

                                                                            $tax_count = 0;
                                                                            foreach ($tax_notice[8] as $key => $notice) {
                                                                                $tax_count++;
                                                                                ?>
                                                                                    <input type="hidden" name="notice_id[0][]" value="<?php echo @$notice->notice_id; ?>" >
                                                                                    <h2 class="StepTitle">ภาษีโรงเรือนและที่ดิน <?php echo $tax_count; ?> </h2>
                                                                                        <?php if ($tax_count == 1) {
                                                                                            ?>
                                                                                                    <div class="row">
                                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                    <div class="form-group">
                                                                                                                            <label >วันที่รับ ภ.ร.ด. 2</label>
                                                                                                                            <span class="required" style="color:red">*</span>
                                                                                                                            <input type='text' name="notice_date_p2[0][]" id="notice_date_p2" value="<?php echo $this->mydate->date_db2str($notice->notice_date_p2, 543); ?>"data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" /> 
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group">
                                                                                                                    <label> เลขที่รับ ภ.ร.ด. 2</label>
                                                                                                                    <span class="required" style="color:red">*</span>
                                                                                                                    <div>
                                                                                                                        <input type="text" name="notice_number[0][]" value="<?php echo @$notice->notice_number; ?>" placeholder="ระบุเลขที่ ภ.ร.ด. 2" class="form-control col-md7 col-sx-12">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group">
                                                                                                                    <label > วันที่ประเมิน ภ.ร.ด. 8</label>
                                                                                                                    <span class="required" style="color:red">*</span>
                                                                                                                    <input type='text' name="notice_date[0][]" id="notice_date_p8" value="<?php echo $this->mydate->date_db2str($notice->notice_date, 543); ?>"data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" /> 
                                                                                                                </div>
                                                                                                        </div>

                                                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="middle-name" class="" for="name"> เลขที่รับ ภ.ร.ด. 8
                                                                                                                            <span class="required" style="color:red">*</span>
                                                                                                                        </label>
                                                                                                                        <div >
                                                                                                                            <input type="text" name="notice_number_p8[0][]" value="<?php echo @$notice->notice_number_p8; ?>" placeholder="ระบุเลขที่ ภ.ร.ด. 8" id="notice_number_p8" class="form-control col-md-7 col-xs-12">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                    <div class="form-group" >
                                                                                                                            <label for="middle-name" > เล่มที่รับ ภ.ร.ด. 8
                                                                                                                                <span class="required" style="color:red">*</span>
                                                                                                                            </label>
                                                                                                                            <div >
                                                                                                                                 <input type="text" name="notice_no[0][]" value="<?php echo @$notice->notice_no; ?>" placeholder="ระบุเล่มที่ ภ.ร.ด. 8" id="notice_no" class="form-control col-md-7 col-xs-12">
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                    </div>
                                                                                                    

                                                                                            <?php 
                                                                                        } //if tax_count
                                                                                        ?>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label  > เลขที่โฉนด</label>
                                                                                                                        <div >
                                                                                                                            <input type="text" name="land_deed_number[0][]" value="<?php echo @$notice->land_deed_number; ?>" placeholder="ระบุเลขที่โฉนด" id="land_deed_number" class="form-control col-md-7 col-xs-12" >
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                            <div class="form-group">
                                                                                                                <label  > ประกอบกิจการ
                                                                                                                </label>
                                                                                                                <div >
                                                                                                                    <select class="form-control" name="noice_type_operation[0][]" type="text">
                                                                                                                        <?php foreach ($operation as $value) : ?>

                                                                                                                            <?php if ($notice->noice_type_operation == $value->noice_operation_id) : ?>
                                                                                                                                <option  selected value="<?php echo $value->noice_operation_id ?>"><?php echo $value->noice_operation_name ?></option>
                                                                                                                            <?php else : ?>
                                                                                                                                <option value="<?php echo $value->noice_operation_id ?>"><?php echo $value->noice_operation_name ?></option>
                                                                                                                            <?php endif; ?>

                                                                                                                        <?php endforeach; ?>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group" >
                                                                                                                    <label for="middle-name" > ประเภทกิจการ
                                                                                                                    </label>
                                                                                                                    <div >
                                                                                                                        <input type="text" name="noice_name_operation_other[0][]" placeholder="ระบุประเภทกิจการ" class="select cls-select form-control col-md-7 col-xs-12" disabled>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group" >
                                                                                                                    <label for="middle-name" > ชื่อสถานประกอบการค้าหรือกิจการอื่น
                                                                                                                    </label>
                                                                                                                    <div >
                                                                                                                        <input type="text" name="noice_name_operation[0][]"  value="<?php echo @$notice->noice_name_operation; ?>" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น" id="noice_name_operation" class="form-control col-md-7 col-xs-12">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                            <div class="form-group">
                                                                                                                <label  > เลขที่
                                                                                                                </label>
                                                                                                                <div >
                                                                                                                    <input type="text" name="notice_address_number[0][]" value="<?php echo @$notice->notice_address_number; ?>" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="notice_address_number" class="form-control col-md-7 col-xs-12" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group" >
                                                                                                                    <label> หมู่ที่
                                                                                                                    </label>
                                                                                                                    <div >
                                                                                                                        <input type="text" name="notice_address_moo[0][]" value="<?php echo @$notice->notice_address_moo; ?>" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="notice_address_moo" class="form-control col-md-7 col-xs-12">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                            <div class="form-group">

                                                                                                                <label  > ตำบล
                                                                                                                </label>
                                                                                                                <div >
                                                                                                                    <input type="text" name="notice_address_subdistrict[0][]" value="หนองป่าครั่ง" disabled  id="notice_address_subdistrict" class="form-control col-md-7 col-xs-12" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group">

                                                                                                                    <label for="middle-name" > ค่ารายปี
                                                                                                                    <span class="required" style="color:red">*</span>
                                                                                                                    </label>
                                                                                                                    <div >
                                                                                                                        <input type="text" name="notice_annual_fee[0][]" value="<?php echo @$notice->notice_annual_fee; ?>" onkeyup="calculate(0)" class="notice_estimate_house0 form-control col-md-7 col-xs-12 numeric text-right">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group">
                                                                                                                        <label  > จำนวนภาษีที่ประเมิน
                                                                                                                        <span class="required" style="color:red">*</span>
                                                                                                                        </label>
                                                                                                                        <div >
                                                                                                                            <input type="text" name="notice_estimate[0][]" value="<?php echo @$notice->notice_estimate; ?>" class="estimate0 form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                            <div class="form-group">
                                                                                                                <label  > ประจำปีภาษี
                                                                                                                        <span class="required" style="color:red">*</span>
                                                                                                                </label>                                                                                                                        
                                                                                                                <select class="form-control" name="tax_year[0][]">
                                                                                                                

                                                                                                                            <?php foreach ($tax_years as $value) : ?>

                                                                                                                                <?php if ($notice->tax_year == $value->tax_year_id) : ?>
                                                                                                                                    <option  selected value="<?php echo $value->tax_year_id ?>">พ.ศ. <?php echo $value->tax_year_label ?></option>
                                                                                                                                <?php else : ?>
                                                                                                                                    <option value="<?php echo $value->tax_year_id ?>">พ.ศ. <?php echo $value->tax_year_label ?></option>
                                                                                                                                <?php endif; ?>

                                                                                                                            <?php endforeach; ?>
                                                                                                                 </select>
                                                                                                            </div>
                                                                                                            <br>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                                                <div class="form-group">
                                                                                                                    <div id="targetDiv1"></div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <hr>

                                                                                                   
                                                                                                    
                                                                                <?php 
                                                                            }// if for

                                                                            ?>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <h2 class="StepTitle">รวมค่าภาษีโรงเรือนและที่ดิน </h2>
                                                                                        </div>
                                                                                </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > จำนวนภาษีที่ประเมิน
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="total_estimate[0][]" value="<?php echo @$notice->total_estimate; ?>" class="total_estimate form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > ค่าปรับ
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="tax_interest[0][]" value="<?php echo @$notice->tax_interest; ?>" class="interest form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > จำนวนเงินภาษี/ค่าปรับ
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="sum_amount_tax[0][]" value="<?php echo @$notice->sum_amount_tax; ?>" class="total form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                            </div>
                                                                            <br>
                                                                    </div>
                                                                </div>
                                                        <?php

                                                    } else {
                                                        ?>
                                                        <div role="tabpanel" class="tab-pane fade <?php echo ($tax_id == '8') ? 'active in' : ''; ?> " id="tab_content1" aria-labelledby="tab1">
                                                            <br>
                                                            <div id="step-1">
                                                                    <h2 class="StepTitle">บันทึกข้อมูลภาษีโรงเรือนและที่ดิน</h2>
                                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                                                                จำนวนข้อมูลภาษีโรงเรือนและที่ดิน
                                                                                </label>
                                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                    <div class="input-group">
                                                                                    <input type="text" id="num_one" name="notice_amount[0][]" class="form-control col-md-4 col-xs-12" value="1" >
                                                                                    <input type="hidden" name="individual_id[0][]" value="<?php echo @$tax_notice_read[0]->individual_id; ?>">
                                                                                    <span class="input-group-btn">
                                                                                        <button class="btn btn-success" type="button" id="addNum_one" style="margin-right: 0px;">
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
                                                                                                    <label >วันที่รับ ภ.ร.ด. 2</label>
                                                                                                    <span class="required" style="color:red">*</span>
                                                                                                    <input type='text' name="notice_date_p2[0][]" value="<?php echo date('d/m/') . (date('Y') + 543); ?>" data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" />
                                                                                            </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">

                                                                                            <label> เลขที่รับ ภ.ร.ด. 2</label>
                                                                                            <span class="required" style="color:red">*</span>
                                                                                            <div>
                                                                                                <input type="text" name="notice_number[0][]" placeholder="ระบุเลขที่ ภ.ร.ด. 2" class="form-control col-md7 col-sx-12">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                                    <label > วันที่ประเมิน ภ.ร.ด. 8</label>
                                                                                                    <span class="required" style="color:red">*</span>
                                                                                                    <input type='text' name="notice_date[0][]" value="<?php echo date('d/m/') . (date('Y') + 543); ?>" data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" />
                                                                                    </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">

                                                                                            <label for="middle-name" class="" for="name"> เลขที่รับ ภ.ร.ด. 8
                                                                                            <span class="required" style="color:red">*</span>
                                                                                            </label>
                                                                                                <div >
                                                                                                    <input type="text" name="notice_number_p8[0][]" placeholder="ระบุเลขที่ ภ.ร.ด. 8" class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                            <label for="middle-name" > เล่มที่รับ ภ.ร.ด. 8
                                                                                            <span class="required" style="color:red">*</span>
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="notice_no[0][]" placeholder="ระบุเล่มที่ ภ.ร.ด. 8" class="form-control col-md-7 col-xs-12">
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
                                                                                                    <input type="text" name="land_deed_number[0][]" placeholder="ระบุเลขที่โฉนด" class="form-control col-md-7 col-xs-12" >
                                                                                                </div>
                                                                                            </div>
                                                                                </div>

                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label  > ประกอบกิจการ
                                                                                        </label>
                                                                                        <div >
                                                                                            <select class="form-control" name="noice_type_operation[0][]" >
                                                                                                <?php foreach ($operation as $key => $value) { ?>
                                                                                                    <option value="<?= $value->noice_operation_id ?>"><?= $value->noice_operation_name ?></option>
                                                                                                    <?php

                                                                                                } ?>
                                                                                            </select>
                                                                                        
                                                                                                <!-- <select onclick="select()" class="cls-select form-control" name="noice_type_operation[0][]">
                                                                                                    <option value="0">หอพัก</option>
                                                                                                    <option value="1">ร้านค้า</option>
                                                                                                    <option value="2">บ้านเช่า</option>
                                                                                                    <option value="3">อาคารให้เช่า</option>
                                                                                                    <option value="4">อื่นๆ</option>
                                                                                                </select>
 -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >
                                                                                            <label for="middle-name" > ประเภทกิจการ
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="noice_name_operation_other[0][]" placeholder="ระบุประเภทกิจการ" class="select cls-select form-control col-md-7 col-xs-12">
                                                                                            </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >
                                                                                            <label for="middle-name" > ชื่อสถานประกอบการค้าหรือกิจการอื่น
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="noice_name_operation[0][]" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น" class="form-control col-md-7 col-xs-12">
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label  > เลขที่
                                                                                    </label>
                                                                                    <div >
                                                                                        <input type="text" name="notice_address_number[0][]" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" class="form-control col-md-7 col-xs-12" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group" >

                                                                                        <label> หมู่ที่
                                                                                        </label>
                                                                                        <div >
                                                                                            <input type="text" name="notice_address_moo[0][]" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" class="form-control col-md-7 col-xs-12">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group">

                                                                                    <label  > ตำบล
                                                                                    </label>
                                                                                    <div >
                                                                                        <input type="text" name="notice_address_subdistrict[0][]" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">

                                                                                        <label for="middle-name" > ค่ารายปี
                                                                                        <span class="required" style="color:red">*</span>
                                                                                        </label>
                                                                                        <div >
                                                                                            <input type="text" name="notice_annual_fee[0][]"  onkeyup="calculate(0)"  class="notice_estimate_house0 form-control col-md-7 col-xs-12 numeric text-right">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                            <label  > จำนวนภาษีที่ประเมิน
                                                                                            <span class="required" style="color:red">*</span>
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="notice_estimate[0][]"   class="estimate0 form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > ประจำปีภาษี
                                                                                            <span class="required" style="color:red">*</span>
                                                                                            </label>
                                                                                            <select class="form-control" name="tax_year[0][]" >
                                                                                                <?php foreach ($tax_years as $key => $value) { ?>
                                                                                                    <option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>
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
                                                                        <br>
                                                                        <hr>
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <h2 class="StepTitle">รวมค่าภาษีโรงเรือนและที่ดิน </h2>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > จำนวนภาษีที่ประเมิน
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="total_estimate[0][]" class="total_estimate form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                            </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label  > ค่าปรับ
                                                                                        </label>
                                                                                        <div >
                                                                                            <input type="text" name="tax_interest[0][]" class="interest form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label  > จำนวนเงินภาษี/ค่าปรับ
                                                                                        </label>
                                                                                        <div >
                                                                                            <input type="text" name="sum_amount_tax[0][]" class="total form-control col-md-7 col-xs-12 numeric text-right">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                        
                                                                            
                                                                            </div>

                                                                <br/>
                                                        
                                                            </div>
                                                            </div>
                                                        <?php

                                                    }// if empty
                                                    ?>
                                                     <?php if (!empty($tax_notice[9])) { ?>
                                                                <div role="tabpanel" class="tab-pane fade <?php echo ($tax_id == '9') ? 'active in' : ''; ?> " id="tab_content2" aria-labelledby="tab2">
                                                                    <div id="step-2">                                                                   
                                                                    <br>
                                                                        <h2 class="StepTitle">บันทึกข้อมูลภาษีบำรุงท้องที่</h2>
                                                                                <div class="form-group" style="margin-bottom: 0px;">
                                                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">
                                                                                        จำนวนข้อมูลภาษีบำรุงท้องที่
                                                                                        </label>
                                                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                            <div class="input-group">
                                                                                            <input type="text" id="num_two" name="land_amount[1][]" class="form-control col-md-4 col-xs-12" value="<?php echo @$tax_notice_id[0]->land_amount; ?>" >
                                                    
                                                                                            <input type="hidden"  class="form-control col-md-4 col-xs-12" name="individual_id[1][]" value="<?php echo @$tax_notice_read[0]->individual_id; ?>" >

                                                                                            <span class="input-group-btn">
                                                                                                <button class="btn btn-success" type="button" id="addNum_two" style="margin-right: 0px;">
                                                                                                    <i class="fa fa-plus-square"></i>
                                                                                                </button>
                                                                                            </span>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                                <hr>

                                                                            <?php 
                                                                            $tax_count = 0;
                                                                            foreach ($tax_notice[9] as $key => $notice) {
                                                                                $tax_count++;
                                                                                ?>
                                                                                 <input type="hidden" name="notice_id[1][]" value="<?php echo @$notice->notice_id; ?>" >
                                                                                <h2 class="StepTitle">ภาษีบำรุงท้องที่ <?php echo $tax_count; ?></h2>
                                                                                    <?php if ($tax_count == 1) {
                                                                                        ?>
                                                                                    <div class="row">
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group" >

                                                                                                        <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                                                                        <input type='text' name="notice_date[1][]"  value="<?php echo $this->mydate->date_db2str($notice->notice_date, 543); ?>"data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" /> 
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group" >
                                                                                                        <label >วันที่สำรวจ ภ.บ.ท. 5<span class="required" style="color:red"> *</span></label>
                                                                                                        <input type='text' name="notice_date_p5[1][]" value="<?php echo $this->mydate->date_db2str($notice->notice_date_p5, 543); ?>"data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" /> 
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group" >
                                                                                                    <label > เลขที่สำรวจ ภ.บ.ท. 5<span class="required" style="color:red"> *</span>
                                                                                                    </label>
                                                                                                <div >
                                                                                                    <input type="text" name="notice_number[1][]" value="<?php echo @$notice->notice_number; ?>" placeholder="ระบุเลขเลขที่สำรวจ ภ.บ.ท. 5" class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                                </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    <?php 
                                                                                } // if tax_count
                                                                                ?>
                                                                                <div class="row">
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group" >
                                                                                                <label  > เลขที่โฉนด
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="land_deed_number[1][]" value="<?php echo @$notice->land_deed_number; ?>" placeholder="ระบุเลขที่โฉนด" class="form-control col-md-7 col-xs-12" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group" >
                                                                                                <label  > จุดสังเกต
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="notice_mark[1][]" value="<?php echo @$notice->notice_mark; ?>" placeholder="ระบุจุดสังเกต" class="form-control col-md-7 col-xs-12" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group" >
                                                                                                <label for="middle-name" class="" for="name"> หมู่ที่
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="notice_address_moo[1][]" value="<?php echo @$notice->notice_address_moo; ?>" placeholder="หมู่ที่อยู่ที่ตั้งที่ดิน" class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group" >
                                                                                                <label  > ตำบล
                                                                                                </label>
                                                                                                    <div >
                                                                                                        <input type="text" name="notice_address_subdistrict[1][]" value="หนองป่าครั่ง" disabled class="form-control col-md-7 col-xs-12" >
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                            <label  > เนื้อที่ดิน (ไร่) <span class="required" style="color:red"> *</span>
                                                                                            </label>
                                                                                                <div >
                                                                                                    <input type="text" name="land_rai[1][]" value="<?php echo @$notice->land_rai; ?>" placeholder="ระบุเนื้อที่ดิน (ไร่)" class="land_rai land form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                            <label  > เนื้อที่ดิน (งาน) <span class="required" style="color:red"> *</span>
                                                                                            </label>
                                                                                                <div >
                                                                                                    <input type="text" name="land_ngan[1][]" value="<?php echo @$notice->land_ngan; ?>" placeholder="ระบุเนื้อที่ดิน (งาน)" class="land_ngan land form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                            <label  > เนื้อที่ดิน (วา) <span class="required" style="color:red"> *</span>
                                                                                            </label>
                                                                                                <div >
                                                                                                    <input type="text" name="land_wa[1][]" value="<?php echo @$notice->land_wa; ?>" placeholder="ระบุเนื้อที่ดิน (วา)" class="land_wa land form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group" style="margin-bottom: 0px;">

                                                                                            <label for="middle-name" class="" for="name"> เนื้อที่ดินที่ต้องชำระภาษี<span class="required" style="color:red"> *</span>
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="land_tax[1][]" value="<?php echo @$notice->land_tax; ?>" placeholder="ระบุเนื้อที่ดินที่ต้องชำระภาษี" class="total land form-control col-md-7 col-xs-12">
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group" style="margin-bottom: 0px;">
                                                                                                    <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                                                                    </label>
                                                                                                        <div >
                                                                                                            <input type="text" name="notice_estimate[1][]" value="<?php echo @$notice->notice_estimate; ?>" onkeyup="calculate_1(0)"  class="notice_estimate_local0 form-control col-md-7 col-xs-12 numeric text-right">
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>


                                                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                            <div class="form-group" style="margin-bottom: 0px;">

                                                                                                <label  > ชำระภาษีบำรุงท้องที่ปี  <span class="required" style="color:red"> *</span>
                                                                                                </label>
                                                                                                    <div >
                                                                                                        <div class="col-md-5 col-sm-6 col-xs-12" style="padding-left: 0px;">
                                                                                                        
                                                                                                            <select class="form-control" name="tax_year[1][]" type="text" >
                                                                                                                <?php foreach ($tax_years as $key => $value) { ?>

                                                                                                                        <?php if ($notice->tax_year == $value->year_id) : ?>
                                                                                                                            <option  selected value="<?php echo $value->tax_year_id ?>">พ.ศ. <?php echo $value->tax_year_label ?></option>
                                                                                                                        <?php else : ?>
                                                                                                                        <option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>
                                                                                                                        <?php endif; ?>
                                                                                                                    <?php

                                                                                                                } ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="col-md-2 col-sm-6 col-xs-12" align="center"><label>ถึง</label></div>
                                                                                                        <div class="col-md-5 col-sm-6 col-xs-12" style="padding-right: 0px;">
                                                                                                            <select class="form-control" name="tax_local_year[1][]" type="text" >
                                                                                                            <?php foreach ($tax_years as $key => $value) { ?>

                                                                                                                    <?php if ($notice->tax_year == $value->year_id) : ?>
                                                                                                                        <option  selected value="<?php echo $value->tax_year_id ?>">พ.ศ. <?php echo $value->tax_year_label ?></option>
                                                                                                                    <?php else : ?>
                                                                                                                    <option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>
                                                                                                                    <?php endif; ?>
                                                                                                                    <?php

                                                                                                                } ?>
                                                                                                                </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <br>
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
                                                                            <hr>
                                                                        <?php 
                                                                    } // if for
                                                                    ?>
                                                                    <div class="row">
                                                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <h2 class="StepTitle">รวมค่าภาษีบำรุงท้องที่ </h2>
                                                                                    </div>
                                                                            </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > จำนวนภาษีที่ประเมิน
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="total_estimate[1][]" value="<?php echo @$notice->total_estimate; ?>" class="total_estimate_local form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > เงินเพิ่ม
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="tax_interest[1][]" value="<?php echo @$notice->tax_interest; ?>" class="interest_local form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > จำนวนเงินภาษี/เงินเพิ่ม
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="sum_amount_tax[1][]" value="<?php echo @$notice->sum_amount_tax; ?>" class="total_local form-control col-md-7 col-xs-12 numeric text-right">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                        </div>
                                                                </div>
                                                                </div>
                                                     <?php 
                                                } else {
                                                    ?>
                                                    <div role="tabpanel" class="tab-pane fade <?php echo ($tax_id == '9') ? 'active in' : ''; ?> " id="tab_content2" aria-labelledby="tab2">
                                                        <div id="step-2">
                                                        <br>
                                                                <h2 class="StepTitle">บันทึกข้อมูลภาษีบำรุงท้องที่</h2>
                                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                                            <label class="control-label col-md-4 col-sm-3 col-xs-12">
                                                                            จำนวนข้อมูลภาษีบำรุงท้องที่
                                                                            </label>
                                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                <div class="input-group">
                                                                                <input type="text" id="num_two" name="land_amount[1][]" class="form-control col-md-4 col-xs-12" value="1" >
                                                                                <input type="hidden"  class="form-control col-md-4 col-xs-12" name="individual_id[1][]" value="<?php echo @$tax_notice_read[0]->individual_id; ?>" >
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn btn-success" type="button" id="addNum_two" style="margin-right: 0px;">
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
                                                                                            <input type='text' name="notice_date[1][]" value="<?php echo date('d/m/') . (date('Y') + 543); ?>" data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" />
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">

                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group" >

                                                                                            <label >วันที่สำรวจ ภ.บ.ท. 5<span class="required" style="color:red"> *</span></label>
                                                                                            <input type='text' name="notice_date_p5[1][]" value="<?php echo date('d/m/') . (date('Y') + 543); ?>" data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" />
                                                                                    </div>
                                                                            </div>
                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group" >

                                                                                <label for="middle-name" class="" for="name"> เลขที่สำรวจ ภ.บ.ท. 5<span class="required" style="color:red"> *</span>
                                                                                </label>
                                                                                <div >
                                                                                    <input type="text" name="notice_number[1][]" placeholder="ระบุเลขเลขที่สำรวจ ภ.บ.ท. 5" class="form-control col-md-7 col-xs-12">
                                                                                </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="row">
                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                            <label  > เลขที่โฉนด
                                                                                            </label>
                                                                                            <div >

                                                                                                <input type="text" name="land_deed_number[1][]" placeholder="ระบุเลขที่โฉนด" class="form-control col-md-7 col-xs-12" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >
                                                                                            <label  > จุดสังเกต
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="notice_mark[1][]" placeholder="ระบุจุดสังเกต" class="form-control col-md-7 col-xs-12" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                        <label for="middle-name" class="" for="name"> หมู่ที่
                                                                                        </label>
                                                                                        <div >
                                                                                            <input type="text" name="notice_address_moo[1][]" placeholder="หมู่ที่อยู่ที่ตั้งที่ดิน" class="form-control col-md-7 col-xs-12">
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group" >

                                                                                            <label  > ตำบล
                                                                                            </label>
                                                                                                <div >
                                                                                                    <input type="text" name="notice_address_subdistrict[1][]" value="หนองป่าครั่ง" disabled class="form-control col-md-7 col-xs-12" >
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group" >

                                                                                    <label  > เนื้อที่ดิน (ไร่) <span class="required" style="color:red"> *</span>
                                                                                    </label>
                                                                                        <div >
                                                                                            <input type="text" name="land_rai[1][]" placeholder="ระบุเนื้อที่ดิน (ไร่)" class="land_rai land form-control col-md-7 col-xs-12">
                                                                                        </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group" >

                                                                                    <label  > เนื้อที่ดิน (งาน) <span class="required" style="color:red"> *</span>
                                                                                    </label>
                                                                                        <div >
                                                                                            <input type="text" name="land_ngan[1][]" placeholder="ระบุเนื้อที่ดิน (งาน)" class="land_ngan land form-control col-md-7 col-xs-12">
                                                                                        </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group" >

                                                                                    <label  > เนื้อที่ดิน (วา) <span class="required" style="color:red"> *</span>
                                                                                    </label>
                                                                                        <div >
                                                                                            <input type="text" name="land_wa[1][]" placeholder="ระบุเนื้อที่ดิน (วา)" class="land_wa land form-control col-md-7 col-xs-12">
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                <div class="form-group" style="margin-bottom: 0px;">

                                                                                <label for="middle-name" class="" for="name"> เนื้อที่ดินที่ต้องชำระภาษี<span class="required" style="color:red"> *</span>
                                                                                </label>
                                                                                <div >
                                                                                    <input type="text" name="land_tax[1][]" placeholder="ระบุเนื้อที่ดินที่ต้องชำระภาษี" class="total form-control col-md-7 col-xs-12">
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                                                        <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                                                        </label>
                                                                                            <div >
                                                                                                <input type="text" name="notice_estimate[1][]" onkeyup="calculate_1(0)"  class="notice_estimate_local0 form-control col-md-7 col-xs-12 numeric text-right">
                                                                                            </div>
                                                                                    </div>
                                                                            </div>


                                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                <div class="form-group" style="margin-bottom: 0px;">

                                                                                    <label  > ชำระภาษีบำรุงท้องที่ปี  <span class="required" style="color:red"> *</span>
                                                                                    </label>
                                                                                        <div >
                                                                                            <div class="col-md-5 col-sm-6 col-xs-12" style="padding-left: 0px;">
                                                                                                <select class="form-control" name="tax_year[1][]" type="text" >
                                                                                                    <?php foreach ($tax_years as $key => $value) { ?>
                                                                                                        <option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>
                                                                                                        <?php

                                                                                                    } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-2 col-sm-6 col-xs-12" align="center"><label>ถึง</label></div>
                                                                                            <div class="col-md-5 col-sm-6 col-xs-12" style="padding-right: 0px;">
                                                                                                <select class="form-control" name="tax_local_year[1][]" type="text" >
                                                                                                    <?php foreach ($tax_years as $key => $value) { ?>
                                                                                                        <option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label + 3 ?></option>
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
                                                                    <br>
                                                                    <hr>
                                                                    <div class="row">
                                                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <h2 class="StepTitle">รวมค่าภาษีบำรุงท้องที่ </h2>
                                                                                    </div>
                                                                            </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > จำนวนภาษีที่ประเมิน
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="total_estimate[1][]" class="total_estimate_local form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > เงินเพิ่ม
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="tax_interest[1][]" class="interest_local form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > จำนวนเงินภาษี/เงินเพิ่ม
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="sum_amount_tax[1][]" class="total_local form-control col-md-7 col-xs-12 numeric text-right">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                        </div>



                                                            <br/>

                                                        </div>
                                                        </div>
                                                    <?php 

                                                }// if empty 
                                                ?>

                                                    <?php if (!empty($tax_notice[10])) { ?>
                                                        <div role="tabpanel" class="tab-pane fade <?php echo ($tax_id == '10') ? 'active in' : ''; ?> " id="tab_content3" aria-labelledby="tab3">
                                                            <div id="step-3">
                                                            <br>
                                                                    <h2 class="StepTitle">บันทึกข้อมูลภาษีป้าย</h2>
                                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                                                                จำนวนข้อมูลภาษีป้าย
                                                                                </label>
                                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                    <div class="input-group">
                                                                                    <input type="text" id="num_three" name="banner_amount[2][]" value="<?php echo @$tax_notice_id[0]->banner_amount; ?>"class="form-control col-md-4 col-xs-12" >
                                                                                    <input type="hidden"  class="form-control col-md-4 col-xs-12" name="individual_id[2][]" value="<?php echo @$tax_notice_read[0]->individual_id; ?>" >
                                                                                    <span class="input-group-btn">
                                                                                    <button class="btn btn-success" type="button" id="addNum_three" style="margin-right: 0px;">
                                                                                            <i class="fa fa-plus-square"></i>
                                                                                        </button>
                                                                                    </span>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <hr>

                                                                        <?php 
                                                                        $tax_count = 0;
                                                                        foreach ($tax_notice[10] as $key => $notice) {
                                                                            $tax_count++;
                                                                            ?>
                                                                             <input type="hidden" name="notice_id[2][]" value="<?php echo @$notice->notice_id; ?>" >
                                                                                <h2 class="StepTitle">ภาษีป้าย <?php echo $tax_count; ?></h2>
                                                                                    <?php if ($tax_count == 1) {
                                                                                        ?>
                                                                                    <div class="form-group" style="margin-bottom: 0px;" >
                                                                                        <div class="row">
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                                                                    <div class="form-group" style="margin-bottom: 0px;">

                                                                                                        <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                                                                        <input type='text' name="notice_date[2][]" value="<?php echo $this->mydate->date_db2str($notice->notice_date, 543); ?>"data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" /> 
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group" style="margin-bottom: 0px;">
                                                                                                    <label for="middle-name" class="" for="name"> เลขที่รับ ภ.ป.1<span class="required" style="color:red"> *</span>
                                                                                                    </label>
                                                                                                    <div >
                                                                                                        <input type="text" name="notice_number[2][]" value="<?php echo @$notice->notice_number; ?>" placeholder="ระบุเลขที่รับ ภ.ป.1" class="form-control col-md-7 col-xs-12">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                                                    <div class="form-group">
                                                                                                        <label  > ประจำปีภาษี <span class="required" style="color:red"> *</span>
                                                                                                        </label>
                                       
                                                                                                        <select class="form-control" name="tax_year[2][]" type="text">
                                                                                                        <?php foreach ($tax_years as $value) : ?>

                                                                                                            <?php if ($notice->tax_year == $value->tax_year_id) : ?>
                                                                                                                <option  selected value="<?php echo $value->tax_year_id ?>">พ.ศ. <?php echo $value->tax_year_label ?></option>
                                                                                                            <?php else : ?>
                                                                                                                <option value="<?php echo $value->tax_year_id ?>">พ.ศ. <?php echo $value->tax_year_label ?></option>
                                                                                                            <?php endif; ?>

                                                                                                        <?php endforeach; ?>
                                                                                                        </select>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> 
                                                                                    <?php 
                                                                                } //tax_count 
                                                                                ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                                                        <div class="form-group" style="margin-bottom: 0px;" >
                                                                                            <label  > จุดสังเกต
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="notice_mark[2][]" value="<?php echo @$notice->notice_mark; ?>" placeholder="ระบุจุดสังเกต" class="form-control col-md-7 col-xs-12" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                                            <div class="form-group">
                                                                                                <label  > ตำบล
                                                                                                </label>
                                                                                                    <div >
                                                                                                        <input type="text" name="notice_address_subdistrict[2][]" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                                                    <div class="form-group">

                                                                                                        <label  > ชื่อสถานประกอบการค้าหรือกิจการอื่น
                                                                                                        </label>
                                                                                                            <div >
                                                                                                                <input type="text" name="noice_name_operation[2][]" value="<?php echo @$notice->noice_name_operation; ?>" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น " class="form-control col-md-7 col-xs-12" >
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                            <br> 
                                                                                </div>
                                                                                <div class="row">
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <label  > ประเภทป้าย <span class="required" style="color:red"> *</span>
                                                                                                    </label>
                                                                                                    <div >
                                                                                                        <select class="form-control" name="banner_type[2][]" type="text" >
                                                                                                            <?php foreach ($banner as $key => $value) { ?>
                                                                                                                <?php if ($notice->banner_type == $value->banner_id) : ?>
                                                                                                                    <option  selected value="<?= $value->banner_id ?>"><?= $value->banner_name ?></option>
                                                                                                                <?php else : ?>
                                                                                                                <option value="<?= $value->banner_id ?>"><?= $value->banner_name ?></option>
                                                                                                                <?php endif; ?>
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
                                                                                                    <input type="text" name="banner_width[2][]" value="<?php echo @$notice->banner_width; ?>" placeholder="ระบุความกว้าง"  class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <label  > ความสูง <span class="required" style="color:red"> *</span>
                                                                                                </label>
                                                                                                <div>
                                                                                                    <input type="text" name="banner_heigth[2][]" value="<?php echo @$notice->banner_heigth; ?>" placeholder="ระบุความสูง" class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">

                                                                                                <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                                                                </label>
                                                                                                <div>
                                                                                                    <input type="text" name="notice_estimate[2][]" onkeyup="calculate_2(0)" value="<?php echo @$notice->notice_estimate; ?>" class="notice_estimate_label0 form-control col-md-7 col-xs-12  numeric text-right">
                                                                                                </div>
                                                                                            </div>

                                                                                            
                                                                                        </div>
                                                                                        <div class="row">   
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <label>อัปโหลดรูปภาพ</label>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-btn">
                                                                                                                <span class="btn btn-success btn-file">
                                                                                                                อัปโหลด <input type="file" id="imgInp" name="picture"class="imgInp">
                                                                                                                </span>
                                                                                                            </span>
                                                                                                            <input type="text" class="form-control" readonly>
                                                                                                        </div>
                                                                                                    <img id="img-uploadimgInp0"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                                    <div class="form-group">
                                                                                                        <div id="targetDiv3"></div>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div> 
                                                                                    <hr>
                                                                                
                                                                                
                                                                            <?php 
                                                                        } // if for 
                                                                        ?>
                                                                        
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <h2 class="StepTitle">รวมค่าภาษีป้าย </h2>
                                                                                        </div>
                                                                                </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <label  > จำนวนภาษีที่ประเมิน
                                                                                                    </label>
                                                                                                    <div >
                                                                                                        <input type="text" name="total_estimate[2][]" value="<?php echo @$notice->total_estimate; ?>" class="total_estimate_label form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                    </div>
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > เงินเพิ่ม
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="tax_interest[2][]" value="<?php echo @$notice->tax_interest; ?>" class="interest_label form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > จำนวนเงินภาษี
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="sum_amount_tax[2][]" value="<?php echo @$notice->sum_amount_tax; ?>" class="total_label form-control col-md-7 col-xs-12 numeric text-right">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                            </div>

                                                                    </div> 
                                                                </div>                                                           
                                                     <?php 
                                                } else {
                                                    ?>
                                                        <div role="tabpanel" class="tab-pane fade <?php echo ($tax_id == '10') ? 'active in' : ''; ?> " id="tab_content3" aria-labelledby="tab3">
                                                            <div id="step-3">
                                                            <br>
                                                                    <h2 class="StepTitle">บันทึกข้อมูลภาษีป้าย</h2>
                                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                                                <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                                                                จำนวนข้อมูลภาษีป้าย
                                                                                </label>
                                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                    <div class="input-group">
                                                                                    <input type="text" id="num_three" name="banner_amount[2][]" class="form-control col-md-4 col-xs-12" value="1" >
          
                                                                                    <input type="hidden"  class="form-control col-md-4 col-xs-12" name="individual_id[2][]" value="<?php echo @$tax_notice_read[0]->individual_id; ?>" >
                                                                                    <span class="input-group-btn">
                                                                                    <button class="btn btn-success" type="button" id="addNum_three" style="margin-right: 0px;">
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
                                                                                            <input type='text' name="notice_date[2][]" value="<?php echo date('d/m/') . (date('Y') + 543); ?>" data-provide="datepicker" data-date-language="th-th" class="form-control datepicker" />
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                                                        <label for="middle-name" class="" for="name"> เลขที่รับ ภ.ป.1<span class="required" style="color:red"> *</span>
                                                                                        </label>
                                                                                        <div >
                                                                                            <input type="text" name="notice_number[2][]" placeholder="ระบุเลขที่รับ ภ.ป.1" class="form-control col-md-7 col-xs-12">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                                                    <div class="form-group">

                                                                                                        <label  > ประจำปีภาษี <span class="required" style="color:red"> *</span>
                                                                                                        </label>
                                                                                                        <select class="form-control" name="tax_year[2][]" >
                                                                                                            <?php foreach ($tax_years as $key => $value) { ?>
                                                                                                                <option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>
                                                                                                                <?php

                                                                                                            } ?>
                                                                                                        </select>
                                                                                                    </div>
                                                                                            </div>
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>

                                                                                    <div class="row">
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                                                                                                <div class="form-group" style="margin-bottom: 0px;" >
                                                                                                    <label  > จุดสังเกต
                                                                                                    </label>
                                                                                                    <div >
                                                                                                        <input type="text" name="notice_mark[2][]" placeholder="ระบุจุดสังเกต" class="form-control col-md-7 col-xs-12" >
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                                                    <div class="form-group">

                                                                                                        <label  > ตำบล
                                                                                                        </label>
                                                                                                            <div >
                                                                                                                <input type="text" name="notice_address_subdistrict[2][]" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>

                                                                                            <div class="col-md-3 col-sm-6 col-xs-12" >
                                                                                                    <div class="form-group">

                                                                                                        <label  > ชื่อสถานประกอบการค้าหรือกิจการอื่น
                                                                                                        </label>
                                                                                                            <div >
                                                                                                                <input type="text" name="noice_name_operation[2][]" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น " class="form-control col-md-7 col-xs-12" >
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>

                                                                                            
                                                                                            
                                                                                    </div>



                                                                                <div class="row">
                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <label  > ประเภทป้าย <span class="required" style="color:red"> *</span>
                                                                                                    </label>
                                                                                                    <div >
                                                                                                        <select class="form-control" name="banner_type[2][]" type="text" >
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
                                                                                                    <input type="text" name="banner_width[2][]" placeholder="ระบุความกว้าง"  class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                                <label  > ความสูง <span class="required" style="color:red"> *</span>
                                                                                                </label>
                                                                                                <div>
                                                                                                    <input type="text" name="banner_heigth[2][]" placeholder="ระบุความสูง" class="form-control col-md-7 col-xs-12">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-3 col-sm-6 col-xs-12">

                                                                                                <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                                                                                </label>
                                                                                                <div>
                                                                                                    <input type="text" name="notice_estimate[2][]" onkeyup="calculate_2(0)"  class="notice_estimate_label0 form-control col-md-7 col-xs-12 numeric text-right">
                                                                                                </div>
                                                                                            </div>

                                                                                            
                                                                                            </div>
                                                                                </div>
                                                                                

                                                                                    <div class="row">   
                                                                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label>อัปโหลดรูปภาพ</label>
                                                                                                    <div class="input-group">
                                                                                                        <span class="input-group-btn">
                                                                                                            <span class="btn btn-success btn-file">
                                                                                                            อัปโหลด <input type="file" id="imgInp_0" class="imgInp">
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <input type="text" class="form-control" readonly>
                                                                                                    </div>
                                                                                                    <img class="img-upload" id="img-upload_0"/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> 

                                                                        <div class="form-group">
                                                                            <div class="col-md-12 col-sm-6 col-xs-12" style="padding-left: 0px;">
                                                                                    <div class="form-group">
                                                                                        <div id="targetDiv3"></div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <h2 class="StepTitle">รวมค่าภาษีป้าย </h2>
                                                                                    </div>
                                                                            </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <label  > จำนวนภาษีที่ประเมิน
                                                                                                </label>
                                                                                                <div >
                                                                                                    <input type="text" name="total_estimate[2][]" class="total_estimate_label form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > เงินเพิ่ม
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="tax_interest[2][]" class="interest_label form-control col-md-7 col-xs-12 numeric text-right" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <label  > จำนวนเงินภาษี/เงินเพิ่ม
                                                                                            </label>
                                                                                            <div >
                                                                                                <input type="text" name="sum_amount_tax[2][]" class="total_label form-control col-md-7 col-xs-12 numeric text-right">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                        </div>
                                                
                                                                        

                                                                <br/>
                                                            </div>
                                                            </div>


                                                        </div>
                                                        <?php

                                                    }  // if empty
                                                    ?>

                                                 </div>
                                                
                                                    
   



                                                <div class="ln_solid"></div>
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 text-center">
                                                                    <button type="submit" value="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                                                                    </button>
                                                                    <button onclick="window.location.replace('<?php echo site_url('receive/receive_dashborad'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
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

.img-upload{
    width: 100%;
}
</style>

<!-- <script>
  $(function() {
    $('.cls-select').change(function() {

      if ($(this).val() === '4') {
        $('.cls-select:gt(' + $('.cls-select').index($(this)) + ')').val('').prop('disabled', false)
        console.log("1");

      } else {
        $('#select').prop('disabled', true);
      }
    });
    
  })

</script> -->

<script>

$(function() {

$('.land').keyup(function() {
    var land_rai = $('.land_rai').val();
    var land_ngan = $('.land_ngan').val();
    var land_wa = $('.land_wa').val();


    var total = land_rai+'-'+land_ngan+'-'+land_wa;

    $('.total').val(total);

});
});


function calculate(id) {
    $('.notice_estimate_house'+id).keyup(function() {
                var interest = $('.interest').val();
                console.log(interest);

                var notice_annual_fee = $('.notice_estimate_house'+id).val();
                var sum =  cal();
                var annual_estimate = notice_annual_fee*12.5/100;
                var annual_fee = sum*12.5/100;
                var total_interest = (annual_fee*1)+(interest*1);

                $('.estimate'+id).val(annual_estimate);
                $('.total_estimate').val(annual_fee);
                $('.total').val(total_interest);
    });    
}
function cal(){
    var sum =0 ;
    for(i = 0; i< $('#num_one').val();i++){
        var notice_annual_fee = $('.notice_estimate_house'+i).val();
        sum = (sum*1)+(notice_annual_fee*1);
    }
    return sum;
}

function calculate_1(id) {
    $('.notice_estimate_local'+id).keyup(function() {
                var sum_1 = cal1();
                var notice_estimate_local = $('.notice_estimate_local'+id).val();
                var interest_local = $('.interest_local').val();
                var total_interest = (sum_1*1)+(interest_local*1);

                $('.total_estimate_local').val(sum_1);
                $('.total_local').val(total_interest);

            });    
}
function cal1(){
    var sum_1 =0 ;
    for(i = 0; i< $('#num_two').val();i++){
        var notice_estimate_local = $('.notice_estimate_local'+i).val();
        sum_1 = (sum_1*1)+(notice_estimate_local*1);
        console.log(sum_1);
    }
    return sum_1;
}

function calculate_2(id) {
    $('.notice_estimate_label'+id).keyup(function() {
                var sum_2 = cal2();
                var notice_estimate_label = $('.notice_estimate_label'+id).val();
                var interest_label = $('.interest_label').val();
                var total_interest = (sum_2*1)+(interest_label*1);

                $('.total_estimate_label').val(sum_2);
                $('.total_label').val(total_interest);

            });    
}
function cal2(){
    var sum_2 =0 ;
    for(i = 0; i< $('#num_three').val();i++){
        var notice_estimate_label = $('.notice_estimate_label'+i).val();
        sum_2 = (sum_2*1)+(notice_estimate_label*1);
        console.log(sum_2);
    }
    return sum_2;
}





function setScript(){
    auto_setformat();

    // $(document).keyup('.notice_estimate_house', function() {
    //             var notice_annual_fee = $('.notice_estimate_house').val();
    //             var annual_fee = notice_annual_fee*12.5/100;
            
    //             $('.estimate').val(annual_fee);
    // });

    

    // $(document).on('change', '.notice_estimate_house', function() {
    //             var sum = 0;
    //             console.log( "house" );
    //             $(".notice_estimate_house").each(function() {
    //             var val = $.trim( $(this).val() );
                
    //             if ( val ) {
    //                 val = parseFloat( val.replace( /^\$/, "" ) );
                
    //                 sum += !isNaN( val ) ? val : 0;
                    
    //             }
    //             $('#sum_amount_house').val(sum);
    //         });
    //     });

        $(document).on('change', '.notice_estimate_local', function() {
                var sum = 0;
                console.log( "local" );
                $(".notice_estimate_local").each(function() {
                var val = $.trim( $(this).val() );
                
                if ( val ) {
                    val = parseFloat( val.replace( /^\$/, "" ) );
                
                    sum += !isNaN( val ) ? val : 0;
                    
                }
                $('#sum_amount_local').val(sum);
                });
            });

        $(document).on('change', '.notice_estimate_label', function() {
                var sum = 0;
                console.log( "label" );
                $(".notice_estimate_label").each(function() {
                var val = $.trim( $(this).val() );
                
                if ( val ) {
                    val = parseFloat( val.replace( /^\$/, "" ) );
                
                    sum += !isNaN( val ) ? val : 0;
                    
                }
                $('#sum_amount_label').val(sum);
                });
            });

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
        function readURL(input,id=0) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img-upload_'+id).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".imgInp").change(function(){
            var form_id = this.id;
            var id = form_id.split('_');
            readURL(this,id[1]);
        });
}
function select(id) {

$('.cls-select').change(function() {

if ($(this).val() === '4') {
  $('.cls-select:gt(' + $('.cls-select').index($(this)) + ')').val('').prop('disabled', false)
  console.log("1");

} else {
    $('.select').prop('disabled', true);
}
});
}

$(document).ready( function() {
     setScript();
                
});
</script>


<script>
    function house(id) {
        group = '<div>' + // create group template
                '<hr/>'+
                '<br>'+
                '<h2 class="StepTitle">ภาษีโรงเรือนและที่ดิน </h2>'+
                                '<div class="row">'+
                                
                                    '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                '<div class="form-group" >'+
                                                    '<label  > เลขที่โฉนด</label>'+
                                                    '<div >'+
                                                        '<input type="text" name="land_deed_number[0][]" placeholder="ระบุเลขที่โฉนด" class="form-control col-md-7 col-xs-12" >'+
                                                    '</div>'+
                                                '</div>'+
                                                '</div>'+
                                                
                                        '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                            '<div class="form-group">'+
                                            ' <label  > ประกอบกิจการ'+
                                                '</label>'+
                                                '<div >'+
                                                        '<select class="form-control" name="noice_type_operation[0][]" >'+
                                                            '<?php foreach ($operation as $key => $value) { ?>'+
                                                                '<option value="<?= $value->noice_operation_id ?>"><?= $value->noice_operation_name ?></option>'+
                                                                '<?php

                                                            } ?>'+
                                                        '</select>'+
                                            ' </div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-md-3 col-sm-6 col-xs-12 ">'+
                                                        '<div class="form-group" >'+
                                                            '<label for="middle-name" > ประเภทกิจการ'+
                                                            '</label>'+
                                                            '<div >'+
                                                                '<input type="text" name="noice_name_operation_other[0][]" placeholder="ระบุประเภทกิจการ" class="select cls-select form-control col-md-7 col-xs-12">'+
                                                            '</div>'+
                                                        '</div>'+
                                                '</div>'+
                                        '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                '<div class="form-group" style="margin-bottom: 0px;">'+
                                                    '<label for="middle-name" > ชื่อสถานประกอบการค้าหรือกิจการอื่น'+
                                                    '</label>'+
                                                    '<div >'+
                                                        '<input type="text"  name="noice_name_operation[0][]" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น" class="form-control col-md-7 col-xs-12">'+
                                                    '</div>'+
                                                '</div>'+
                                        '</div>'+
                                '</div>'+

                                '<div class="row">'+
                                            '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                '<div class="form-group">'+
                                                    '<label  > เลขที่</label>'+
                                                    '<div >'+
                                                        '<input type="text" name="notice_address_number[0][]" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" class="form-control col-md-7 col-xs-12" >'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            
                                            '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                            '        <div class="form-group" >'+
                                            '          <label for="middle-name" class="" for="last_name"> หมู่ที่'+
                                            '          </label>'+
                                            '          <div >'+
                                            '              <input type="text" name="notice_address_moo[0][]" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" class="form-control col-md-7 col-xs-12">'+
                                            '          </div>'+
                                            '      </div>'+
                                            '</div>'+

                                            '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                            '  <div class="form-group">'+
                                            '    <label  > ตำบล'+
                                            '    </label>'+
                                            '    <div >'+
                                            '        <input type="text" name="notice_address_subdistrict[0][]" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >'+
                                            '    </div>'+
                                            '  </div>'+
                                            '</div>'+
                                ' </div>'+

                            

                                '<div class="row">'+
                                        '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                    '<div class="form-group" style="margin-bottom: 0px;">'+
                                                        '<label for="middle-name" > ค่ารายปี'+
                                                        '<span class="required" style="color:red"> *</span>'+
                                                    ' </label>'+
                                                        '<div >'+
                                                            '<input type="text" name="notice_annual_fee[0][]" onkeyup="calculate('+id+')" class="notice_estimate_house'+id+' form-control col-md-7 col-xs-12 numeric text-right" >'+
                                                        '</div>'+
                                                    '</div>'+
                                        '</div>'+

                                '          <div class="col-md-3 col-sm-6 col-xs-12">'+
                                                '<div class="form-group">'+
                                                            '<label  > จำนวนภาษีที่ประเมิน'+
                                                            '<span class="required" style="color:red"> *</span>'+
                                                            '</label>'+
                                                            '<div >'+
                                                                '<input type="text" name="notice_estimate[0][]" onkeyup="calculate('+id+')" class="estimate'+id+' form-control col-md-7 col-xs-12 numeric text-right" >'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                '          <div class="col-md-3 col-sm-6 col-xs-12">'+
                                '              <div class="form-group">'+
                                '                <label  > ประจำปีภาษี'+
                                '                <span class="required" style="color:red"> *</span>'+
                                '                </label>'+
                                '                <div >'+
                                                        '<select class="form-control" name="tax_year[0][]" >'+
                                                        '<?php foreach ($tax_years as $key => $value) { ?>'+
                                                                    '<option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>'+
                                                                    '<?php

                                                                } ?>'+
                                                        '</select>'+
                                '                </div>'+
                                '              </div>'+
                                '          </div>'+
                                '</div>'+
                        ' </div>';

                        return group;
        
    }
        $(function(){
                        $('#addNum_one').bind('click',function(){
                        var n = $('#num_one').val(); // number of groups to add
                        
                                
                        // loop and create n groups
                        //   var groups = "";
                        for ( var i = 1; i < n ; i++ ) {
                                // get copy of template
                                var tmp = house(i);
                            
                                var groups = groups ? groups + tmp : tmp;
                        }
                        // append groups to target div
                        $('#targetDiv1').append(groups);

                        setScript();
                    });
        });

        function local(id) {
                 group = '<div>' + 
                             '<hr/>'+
                             '<br>'+
                             '<h2 class="StepTitle">ภาษีบำรุงท้องที่ </h2>'+

                                                 '<div class="row">'+
                                                         '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                         '<div class="form-group" >'+
                                                             '<label  > เลขที่โฉนด</label>'+
                                                             '<div >'+
                                                                 '<input type="text" name="land_deed_number[1][]"  placeholder="ระบุเลขที่โฉนด" class="form-control col-md-7 col-xs-12" >'+
                                                             '</div>'+
                                                         '</div>'+
                                                         '</div>'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                         '<div class="form-group">'+
                                                         ' <label  > จุดสังเกต'+
                                                             '</label>'+
                                                             '<div >'+
                                                                     '<input type="text" name="notice_mark[1][]" placeholder="ระบุจุดสังเกต" class="form-control col-md-7 col-xs-12" >'+
                                                         ' </div>'+
                                                         '</div>'+
                                                     '</div>'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                             '<div class="form-group" style="margin-bottom: 0px;">'+
                                                                 '<label for="middle-name" > หมู่ที่'+
                                                                 '</label>'+
                                                                 '<div >'+
                                                                     '<input type="text" name="notice_address_moo[1][]" placeholder="หมู่ที่ตั้งที่ดิน" class="form-control col-md-7 col-xs-12">'+
                                                                 '</div>'+
                                                             '</div>'+
                                                     '</div>'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                             '<div class="form-group" style="margin-bottom: 0px;">'+
                                                                 '<label for="middle-name" > ตำบล'+
                                                                 '</label>'+
                                                                 '<div >'+
                                                                 ' <input type="text" name="notice_address_subdistrict[1][]" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >'+
                                                                 '</div>'+
                                                             '</div>'+
                                                     '</div>'+
                                             '</div>'+
                                             '<div class="row">'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                         '<div class="form-group">'+
                                                         ' <label  > เนื้อที่ดิน (ไร่)'+
                                                         ' <span class="required" style="color:red"> *</span>'+
                                                             '</label>'+
                                                             '<div >'+
                                                                 '<input type="text" name="land_rai[1][]" placeholder="ระบุเนื้อที่ดิน (ไร่)" class="land_rai land form-control col-md-7 col-xs-12">'+
                                                         ' </div>'+
                                                         '</div>'+
                                                     '</div>'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                             '<div class="form-group" style="margin-bottom: 0px;">'+
                                                                 '<label for="middle-name" > เนื้อที่ดิน (งาน)'+
                                                                 ' <span class="required" style="color:red"> *</span>'+
                                                                 '</label>'+
                                                                 '<div >'+
                                                                     '<input type="text" name="land_ngan[1][]" placeholder="ระบุเนื้อที่ดิน (งาน)" class="land_ngan land form-control col-md-7 col-xs-12">'+
                                                                 '</div>'+
                                                             '</div>'+
                                                     '</div>'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                             '<div class="form-group" style="margin-bottom: 0px;">'+
                                                                 '<label for="middle-name" > เนื้อที่ดิน (วา)'+
                                                                 ' <span class="required" style="color:red"> *</span>'+
                                                                 '</label>'+
                                                                 '<div >'+
                                                                     '<input type="text" name="land_wa[1][]" placeholder="ระบุเนื้อที่ดิน (วา)" class="land_wa land form-control col-md-7 col-xs-12">'+
                                                                 '</div>'+
                                                             '</div>'+
                                                     '</div>'+
                                             '</div>'+

                                             '<div class="row">'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                         '<div class="form-group">'+
                                                         ' <label  > เนื้อที่ดินที่ต้องชำระภาษี'+
                                                         ' <span class="required" style="color:red"> *</span>'+
                                                             '</label>'+
                                                             '<div >'+
                                                                 '<input type="text" name="land_tax[1][]" placeholder="ระบุเนื้อที่ดินที่ต้องชำระภาษี" class="total land form-control col-md-7 col-xs-12">'+
                                                         ' </div>'+
                                                         '</div>'+
                                                     '</div>'+
                                                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                                             '<div class="form-group" style="margin-bottom: 0px;">'+
                                                                 '<label for="middle-name" > จำนวนภาษีที่ประเมิน'+
                                                                     ' <span class="required" style="color:red"> *</span>'+
                                                                 '</label>'+
                                                                 '<div >'+
                                                                     '<input type="text" name="notice_estimate[1][]" onkeyup="calculate_1('+id+')"  class="notice_estimate_local'+id+' form-control col-md-7 col-xs-12 numeric text-right">'+
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
                                                                                 '<select class="form-control" name="tax_year[1][]" type="text" >'+
                                                                                 '<?php foreach ($tax_years as $key => $value) { ?>'+
                                                                                     '<option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label ?></option>'+
                                                                                 ' <?php

                                                                                } ?>'+
                                                                             ' </select>'+
                                                                             '</div>'+
                                                                             '<div class="col-md-2 col-sm-6 col-xs-12" align="center"><label>ถึง</label></div>'+
                                                                             '<div class="col-md-5 col-sm-6 col-xs-12" style="padding-right: 0px;">'+
                                                                                 '<select class="form-control" name="tax_local_year[1][]" type="text" >'+
                                                                                     '<?php foreach ($tax_years as $key => $value) { ?>'+
                                                                                     '<option value="<?= $value->tax_year_id ?>">พ.ศ. <?= $value->tax_year_label + 3 ?></option>'+
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

                                 return group;
        }  

            $(function(){
                            $('#addNum_two').bind('click',function(){
                            var n = $('#num_two').val(); // number of groups to add
                            
                                    
                            // loop and create n groups
                            //   var groups = "";
                            for ( var i = 1; i < n ; i++ ) {
                                    // get copy of template
                                    var tmp = local(i);
                                
                                    var groups = groups ? groups + tmp : tmp;
                            }
                            // append groups to target div
                            $('#targetDiv2').append(groups);

                            setScript();
                        });
            });
            
            function label(id) {
                var group = '<div>' +
                 '<hr/>'+
                 '<br>'+
                 '<h2 class="StepTitle">ภาษีป้าย </h2>'+
                     '<div class="row">'+

                     '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                 '<div class="form-group" >'+
                                     '<label  > จุดสังเกต</label>'+
                                         '<div >'+
                                             '<input type="text" name="notice_mark[2][]" placeholder="ระบุจุดสังเกต" class="form-control col-md-7 col-xs-12" >'+                                                                                                                         
                                             '</div>'+
                                 '</div>'+
                             '</div>'+

                         '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                 '<div class="form-group" >'+
                                     '<label  > ตำบล</label>'+
                                         '<div >'+
                                             '<input type="text" name="notice_address_subdistrict[2][]" value="หนองป่าครั่ง" disabled  class="form-control col-md-7 col-xs-12" >'+                                                                                                                           
                                             '</div>'+
                                 '</div>'+
                             '</div>'+
                            
                             '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                 '<div class="form-group" >'+
                                     '<label  > ชื่อสถานประกอบการค้าหรือกิจการอื่น</label>'+
                                         '<div >'+
                                         '<input type="text" name="noice_name_operation[2][]" placeholder="ระบุชื่อสถานประกอบการค้าหรือกิจการอื่น" class="form-control col-md-7 col-xs-12">'+                                                                                                                            
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
                                         '<select class="form-control" name="banner_type[2][]" type="text" >'+
                                                     '<?php foreach ($banner as $key => $value) { ?>'+
                                                         '<option value="<?= $value->banner_id ?>"><?= $value->banner_name ?></option>'+
                                                         '<?php

                                                        } ?>'+
                                             '</select>'+                                                                '</div>'+
                                 '</div>'+
                             '</div>'+
                    

                         '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                 '<div class="form-group" >'+
                                     '<label  > ความกว้าง</label>'+
                                     '<span class="required" style="color:red"> *</span>'+
                                         '<div >'+
                                             '<input type="text" name="banner_width[2][]" placeholder="ระบุความกว้าง" class="form-control col-md-7 col-xs-12">'+                                                                                                                         
                                             '</div>'+
                                 '</div>'+
                             '</div>'+
                            
                             '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                 '<div class="form-group" >'+
                                     '<label  > ความสูง</label>'+
                                     '<span class="required" style="color:red"> *</span>'+
                                         '<div >'+
                                         '<input type="text" name="banner_heigth[2][]" placeholder=ระบุความสูง class="form-control col-md-7 col-xs-12">'+                                                                                                                            
                                         '</div>'+
                                 '</div>'+
                             '</div>'+

                             '<div class="col-md-3 col-sm-6 col-xs-12">'+
                                 '<div class="form-group" >'+
                                     '<label  > จำนวนภาษีที่ประเมิน</label>'+
                                     '<span class="required" style="color:red"> *</span>'+
                                         '<div >'+
                                         '<input type="text" name="notice_estimate[2][]" onkeyup="calculate_2('+id+')"  class="notice_estimate_label'+id+' form-control col-md-7 col-xs-12 numeric text-right">'+
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
                                                 'อัปโหลด <input type="file" id="imgInp_'+id+'" class="imgInp">'+
                                                 '</span>'+
                                             '</span>'+
                                             '<input type="text" class="form-control" readonly>'+
                                         '</div>'+
                                     '<img class="img-upload" id="img-upload_'+id+'"/>'+
                                 '</div>'+
                         '</div>'+
                     '</div>'+
                ' </div>';

                return group;
            }

                $(function(){
                        $('#addNum_three').bind('click',function(){
                        var n = $('#num_three').val(); // number of groups to add
                        
                                
                        // loop and create n groups
                        //   var groups = "";
                        for ( var i = 1; i < n ; i++ ) {
                                // get copy of template
                                var tmp = label(i);
                            
                                var groups = groups ? groups + tmp : tmp;
                        }
                        // append groups to target div
                        $('#targetDiv3').append(groups);

                        setScript();
                    });
                });

</script>



