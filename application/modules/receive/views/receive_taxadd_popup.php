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
              <form id="individual-form" method="post" action="<?php echo base_url('receive/receive_taxadd_popup_save'); ?>" data-parsley-validate class="form-horizontal form-label-left">          
            
                <!-- Smart Wizard -->
                  <div id="form_tab" class="swMain">
                    
                  
                      <?php if (!empty($individual[0]->tax_type_id)) { // have  data individual
                        if ($individual[0]->tax_type_id == 1) { ?>
                        <ul class="anchor">
                         <li><a href="#step-1">
                            <label class="stepNumber"></label>
                            <span class="stepDesc">
                            บุคคลธรรมดา<br />
                              <small>บันทึกรายการ</small>
                            </span>
                          </a></li>
                        </ul>
                        <div id="step-1">
                          <h2 class="StepTitle">&nbsp;</h2>	
                          
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                  <span class="required" style="color:red">*</span>เลขประจำตัวผู้เสียภาษี
                                </label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <input name="individual_number[0]" type="text" value="<?php echo @$individual[0]->individual_number; ?>" placeholder="4371239640692" id="id_tax_tab1" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999999'">
                                </div>
                            </div>
                            <hr/>
                            <h4>ที่อยู่</h4><br/>
                            <div class="form-group type-value" id="" style="display:block;margin-bottom: 0px;" >
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                        <label >คำนำหน้าชื่อ</label>
                                        <select name="individual_prename[0]" class="form-control" type="text" id="type_tax">
                                          <option selected disabled>เลือก</option>
                                            <?php foreach ($prename as $key => $value) {
                                              $prename = '';
                                              if (@$individual[0]->individual_prename == $value->prename_th) {
                                                $prename = 'selected';
                                              }
                                              ?>
                                              <option <?php echo $prename; ?> value="<?php echo $value->prename_th; ?>"><?php echo $value->prename_th; ?></option>
                                            <?php 
                                          } ?>
                                        </select>              
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="middle-name" class="" for="name">ชื่อ
                                    </label>
                                    <div >
                                        <input type="text" value="<?php echo @$individual[0]->individual_firstname; ?>" placeholder="ไพโรจน์" id="name_tax" name="individual_firstname[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                              
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="middle-name" class="" for="last_name">นามสกุล
                                    </label>
                                    <div >
                                        <input type="text" value="<?php echo @$individual[0]->individual_lastname; ?>" placeholder="" id="name_tax" name="individual_lastname[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                      
                                  </div>
                                </div>

                              
                              </div>


                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-4">
                                    <div class="form-group">
                                      <label  >เบอร์โทรศัพท์
                                      </label>
                                      <div >
                                          <input type="text" value="<?php echo @$individual[0]->individual_phone; ?>" name="individual_phone[0]" placeholder="xxx-xxxxxxx" id="id_tax" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999-9999999'">
                                      </div>
                                        
                                    </div>
                                  </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label >เลขที่บ้าน
                                  </label>
                                  <div >
                                      <input type="text" name="individual_address[0]" value="<?php echo @$individual[0]->individual_address; ?>" placeholder="-" id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>

                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >หมู่
                                    </label>
                                    <div>
                                        <input type="text" name="individual_village[0]" value="<?php echo @$individual[0]->individual_village; ?>" placeholder="-"id="id_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >ซอย/ตรอก
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" name="individual_lane[0]" value="<?php echo @$individual[0]->individual_lane; ?>" id="id_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >ถนน
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_road[0]" value="<?php echo @$individual[0]->individual_road; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                              
                              </div>

                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label>จังหวัด
                                  </label>
                                  <div>
                                      <select class="form-control" name="individual_provice[0]" id="province">
                                        <option value="" >เลือก</option>
                                        <?php foreach ($province as $key => $value) {
                                          $data_province = '';
                                          if (@$individual[0]->individual_provice == $value->area_code) {
                                            $data_province = 'selected';
                                          }
                                          ?>
                                          <option <?php echo $data_province; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >อำเภอ
                                    </label>
                                    <div>
                                      <select class="form-control" name="individual_district[0]" id="district">
                                        <option value=""  >เลือก</option>
                                          <?php foreach ($amphur as $key => $value) {
                                            $send_district = '';
                                            if (@$individual[0]->individual_district == $value->area_code) {
                                              $send_district = 'selected';
                                            }

                                            ?>
                                            <option <?php echo $send_district; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                          <?php 
                                        } ?>
                                      </select>
                                    </div>
                                  </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >ตำบล
                                    </label>
                                    <div >
                                      <select class="form-control" name="individual_subdistrict[0]" id="subdistrict">
                                        <option value=""  >เลือก</option>
                                          <?php foreach ($tambon as $key => $value) {
                                            $send_district = '';
                                            if (@$individual[0]->individual_subdistrict == $value->area_code) {
                                              $send_district = 'selected';
                                            }

                                            ?>
                                            <option <?php echo $send_district; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                          <?php 
                                        } ?>
                                      </select>
                                    </div>
                                  </div>

                                  

                              </div>
                              <br/>
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label  >รหัสไปรษณีย์
                                    </label>
                                    <div >
                                        <input type="text" name="individual_zipcode[0]" value="<?php echo @$individual[0]->individual_zipcode; ?>" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label  >ชื่อร้านค้า/องค์กร/หน่วยงาน (ถ้ามี)
                                    </label>
                                    <div >
                                        <input type="text" name="individual_business_name[0]"  value="<?php echo @$individual[0]->individual_business_name; ?>" class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div>
                              </div>
                            
                            </div>

                            <hr/>
                            <div class="row">
                              <div class="col-md-2">
                                <label>ที่อยู่จัดส่ง</label>
                              </div>

                            </div>
                            <br/>
                            <div class="form-group type-value" id="individual_tab1"style="display:block;margin-bottom: 0px;" >

                              <div class="row">

                                <div class="col-md-3 col-sm-6 col-xs-6">
                                  <label >เลขที่
                                  </label>
                                  <div >
                                      <input type="text" placeholder="-" name="individual_send_address[0]" value="<?php echo @$individual[0]->individual_send_address; ?>" id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >หมู่
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" id="id_tax" name="individual_send_village[0]" value="<?php echo @$individual[0]->individual_send_village; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >ซอย/ตรอก
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_send_lane[0]" value="<?php echo @$individual[0]->individual_send_lane; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >ถนน
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_send_road[0]" value="<?php echo @$individual[0]->individual_send_road; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                              
                              </div>

                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label>จังหวัด
                                  </label>
                                  <div>
                                      <select class="form-control" name="individual_send_province[0]" id="province">
                                        <option value="" >เลือก</option>
                                        <?php foreach ($province as $key => $value) {
                                          $data_province = '';
                                          if (@$individual[0]->individual_send_province == $value->area_code) {
                                            $data_province = 'selected';
                                          }

                                          ?>
                                          <option <?php echo $data_province; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >อำเภอ
                                    </label>
                                    <div>
                                      <select class="form-control" name="individual_send_district[0]" id="district">
                                        <option value=""  >เลือก</option>
                                        <?php foreach ($send_amphur as $key => $value) {
                                          $send_district = '';
                                          if (@$individual[0]->individual_send_district == $value->area_code) {
                                            $send_district = 'selected';
                                          }

                                          ?>
                                          <option <?php echo $send_district; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >ตำบล
                                    </label>
                                    <div >
                                      <select class="form-control" name="individual_send_subdistrict[0]"  id="subdistrict">
                                        <option value=""  >เลือก</option>
                                        <?php foreach ($send_tambon as $key => $value) {
                                          $subdistrict = '';
                                          if (@$individual[0]->individual_send_subdistrict == $value->area_code) {
                                            $subdistrict = 'selected';
                                          }

                                          ?>
                                          <option <?php echo $subdistrict; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                    </div>
                                  </div>

                                  

                              </div>
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                      <label  >รหัสไปรษณีย์
                                      </label>
                                      <div >
                                          <input type="text" name="individual_send_zipcode[0]" value="<?php echo @$individual[0]->individual_send_zipcode; ?>"  class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                      </div>
                                </div>
                              </div>
                              <br/>

                            
                            </div>

                        </div>

                      <?php 
                    } else { ?>
                      <ul class="anchor">
                        <li><a href="#step-2">
                            <label class="stepNumber"></label>
                            <span class="stepDesc">
                              นิติบุคคล<br />
                              <small>บันทึกรายการ</small>
                            </span>
                        </a></li>
                      </ul>
                        <div id="step-2">	
                          <h2 class="StepTitle">&nbsp;</h2>
                        
                          <div class="form-group">
                              <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                <span class="required" style="color:red">*</span>เลขประจำตัวผู้เสียภาษี
                              </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="4371239640692" id="id_tax_tab2" name="individual_number[1]"  value="<?php echo @$individual[0]->individual_number; ?>" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999999999999'">
                              </div>
                          </div>
                          <hr/>


                          <div class="form-group type-value" style=" display:block;margin-bottom: 0px;" >
                            <div class="row">
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <label for="middle-name" for="name_company">ชื่อบริษัท
                                  </label>
                                  <div >
                                      <input type="text" placeholder="-" id="name_tax" name="individual_firstname[1]" value="<?php echo @$individual[0]->individual_firstname; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>
                            

                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <label  >เบอร์โทรศัพท์
                                  </label>
                                  <div >
                                      <input type="text" placeholder="xxx-xxxxxxx" nane="individual_phone[1]" value="<?php echo @$individual[0]->individual_phone; ?>" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999-9999999'">
                                  </div>
                                    
                                </div>
                              </div>

                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label >เลขที่
                                      </label>
                                      <div >
                                          <input type="text" placeholder="-" name="individual_address[1]" value="<?php echo @$individual[0]->individual_address; ?>" id="id_tax" class="form-control col-md-7 col-xs-12">
                                      </div>

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label  >หมู่
                                        </label>
                                        <div>
                                            <input type="text" placeholder="-" name="individual_village[1]" value="<?php echo @$individual[0]->individual_village; ?>" id="id_tax" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                </div>

                              </div>
                            </div>


                            <div class="row">

                              <div class="col-md-2 col-sm-3 col-xs-4">
                                <label  >ซอย/ตรอก
                                  </label>
                                  <div>
                                      <input type="text" placeholder="-" name="individual_lane[1]" id="id_tax" value="<?php echo @$individual[0]->individual_lane; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>
                              <div class="col-md-2 col-sm-3 col-xs-4">
                                <label  >ถนน
                                  </label>
                                  <div>
                                      <input type="text" placeholder="-" name="individual_road[1]" id="id_tax" value="<?php echo @$individual[0]->individual_road; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>


                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <label>จังหวัด
                                </label>
                                <div>
                                    <select class="form-control" name="individual_provice[1]" id="province">
                                          <option value="" >เลือก</option>
                                      <?php foreach ($province as $key => $value) {
                                        $data_province = '';
                                        if (@$individual[0]->individual_provice == $value->area_code) {
                                          $data_province = 'selected';
                                        }

                                        ?>
                                        <option <?php echo $data_province; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                      <?php 
                                    } ?>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label >อำเภอ
                                  </label>
                                  <div>
                                    <select class="form-control" name="individual_district[1]" id="district">
                                        <option value=""  >เลือก</option>
                                          <?php foreach ($amphur as $key => $value) {
                                            $send_district = '';
                                            if (@$individual[0]->individual_district == $value->area_code) {
                                              $send_district = 'selected';
                                            }

                                            ?>
                                            <option <?php echo $send_district; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                          <?php 
                                        } ?>
                                    </select>
                                  </div>
                              </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label >ตำบล
                                  </label>
                                  <div >
                                    <select class="form-control" name="individual_subdistrict[1]" id="subdistrict">
                                      <option value=""  >เลือก</option>
                                        <?php foreach ($tambon as $key => $value) {
                                          $subdistrict = '';
                                          if (@$individual[0]->individual_subdistrict == $value->area_code) {
                                            $subdistrict = 'selected';
                                          }

                                          ?>
                                          <option <?php echo $subdistrict; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                    </select>
                                  </div>
                                </div>

                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <label  >รหัสไปรษณีย์
                                </label>
                                <div >
                                    <input type="text" name="individual_zipcode[1]" value="<?php echo @$individual[0]->individual_zipcode; ?>" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                </div>
                              </div>
                              
                            </div>
                          
                          </div>

                          <hr/>
                          <div class="row">
                            <div class="col-md-2">
                              <label>ที่อยู่จัดส่ง</label>
                            </div>
                            <!-- <div class="col-md-3">
                              <p>
                                <input type="radio" class="flat" name="individual_adr_2" id="individual_adr_2" value="0" checked=""  /> ที่อยู่เดิม &nbsp;
                                <input type="radio" class="flat" name="individual_adr_2" id="individual_adr_2" value="1" /> เพิ่มที่อยู่
                              </p>
                            </div> -->
                          
                          </div>
                          <br/>
                          <div class="form-group type-value" id="individual_tab1"style="display:block;margin-bottom: 0px;" >

                            <div class="row">

                              <div class="col-md-3 col-sm-6 col-xs-6">
                                <label >เลขที่บ้าน
                                </label>
                                <div >
                                    <input type="text" placeholder="-" name="individual_send_address[1]" value="<?php echo @$individual[0]->individual_send_address; ?>" id="id_tax" class="form-control col-md-7 col-xs-12">
                                </div>

                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-6">
                                <label  >หมู่
                                  </label>
                                  <div>
                                      <input type="text" placeholder="-" id="id_tax" name="individual_send_village[1]" value="<?php echo @$individual[0]->individual_send_village; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-6">
                                <label  >ซอย/ตรอก
                                  </label>
                                  <div>
                                      <input type="text" placeholder="-"id="id_tax" name="individual_send_lane[1]" value="<?php echo @$individual[0]->individual_send_lane; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-6">
                                <label  >ถนน
                                  </label>
                                  <div>
                                      <input type="text" placeholder="-"id="id_tax" name="individual_send_road[1]" value="<?php echo @$individual[0]->individual_send_road; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>

                            
                            </div>

                            <div class="row">
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <label>จังหวัด
                                </label>
                                <div>
                                    <select class="form-control" name="individual_send_province[1]" id="province">
                                          <option value="" >เลือก</option>
                                      <?php foreach ($province as $key => $value) {
                                        $data_province = '';
                                        if (@$individual[0]->individual_send_province == $value->area_code) {
                                          $data_province = 'selected';
                                        }
                                        ?>
                                        <option <?php echo $data_province; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                      <?php 
                                    } ?>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label >อำเภอ
                                  </label>
                                  <div>
                                    <select class="form-control" name="individual_send_district[1]" id="district">
                                      <option value=""  >เลือก</option>
                                        <?php foreach ($send_amphur as $key => $value) {
                                          $subdistrict = '';
                                          if (@$individual[0]->individual_send_district == $value->area_code) {
                                            $subdistrict = 'selected';
                                          }

                                          ?>
                                          <option <?php echo $subdistrict; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label >ตำบล
                                  </label>
                                  <div >
                                    <select class="form-control" name="individual_send_subdistrict[1]" id="subdistrict">
                                      <option value=""  >เลือก</option>
                                        <?php foreach ($send_tambon as $key => $value) {
                                          $subdistrict = '';
                                          if (@$individual[0]->individual_send_subdistrict == $value->area_code) {
                                            $subdistrict = 'selected';
                                          }

                                          ?>
                                          <option <?php echo $subdistrict; ?> value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                    </select>
                                  </div>
                              </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                      <label  >รหัสไปรษณีย์
                                      </label>
                                      <div >
                                          <input type="text" name="individual_send_zipcode[1]" value="<?php echo @$individual[0]->individual_send_zipcode; ?>" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                      </div>
                                </div>
                              </div>
                            <br/>

                          
                          </div>

                      
        
                        </div>  
                      <?php 
                    }
                  } else { //don't have data ?>
                      <ul class="anchor">
                        <li><a href="#step-1">
                            <label class="stepNumber"></label>
                            <span class="stepDesc">
                            บุคคลธรรมดา<br />
                              <small>บันทึกรายการ</small>
                            </span>
                        </a></li>
                        <li><a href="#step-2">
                            <label class="stepNumber"></label>
                            <span class="stepDesc">
                              นิติบุคคล<br />
                              <small>บันทึกรายการ</small>
                            </span>
                        </a></li>
                      </ul>
                        <div id="step-1">
                          <h2 class="StepTitle">&nbsp;</h2>	
                          
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                  <span class="required" style="color:red">*</span>เลขประจำตัวผู้เสียภาษี
                                </label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <input name="individual_number[0]" type="text" placeholder="4371239640692" id="id_tax_tab1" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999999'">
                                </div>
                            </div>
                            <hr/>
                            <h4>ที่อยู่</h4><br/>
                            <div class="form-group type-value" id="" style="display:block;margin-bottom: 0px;" >
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                        <label >คำนำหน้าชื่อ</label>
                                        <select name="individual_prename[0]" class="form-control" type="text" id="type_tax">
                                          <option selected disabled>เลือก</option>
                                            <?php foreach ($prename as $key => $value) { ?>
                                              <option value="<?php echo $value->prename_th; ?>"><?php echo $value->prename_th; ?></option>
                                            <?php 
                                          } ?>
                                        </select>              
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="middle-name" class="" for="name">ชื่อ
                                    </label>
                                    <div >
                                        <input type="text" placeholder="ไพโรจน์" id="name_tax" name="individual_firstname[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                              
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="middle-name" class="" for="last_name">นามสกุล
                                    </label>
                                    <div >
                                        <input type="text" placeholder="" id="name_tax" name="individual_lastname[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                      
                                  </div>
                                </div>

                              
                              </div>


                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-4">
                                    <div class="form-group">
                                      <label  >เบอร์โทรศัพท์
                                      </label>
                                      <div >
                                          <input type="text" name="individual_phone[0]" placeholder="xxx-xxxxxxx" id="id_tax" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999-9999999'">
                                      </div>
                                        
                                    </div>
                                  </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label >เลขที่บ้าน
                                  </label>
                                  <div >
                                      <input type="text" name="individual_address[0]" placeholder="-" id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>

                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >หมู่
                                    </label>
                                    <div>
                                        <input type="text" name="individual_village[0]" placeholder="-"id="id_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >ซอย/ตรอก
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" name="individual_lane[0]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >ถนน
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_road[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                              
                              </div>

                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label>จังหวัด
                                  </label>
                                  <div>
                                      <select class="form-control" name="individual_provice[0]" id="province">
                                            <option value="" >เลือก</option>
                                        <?php foreach ($province as $key => $value) { ?>
                                          <option value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >อำเภอ
                                    </label>
                                    <div>
                                      <select class="form-control" name="individual_district[0]" id="district">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                  </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >ตำบล
                                    </label>
                                    <div >
                                      <select class="form-control" name="individual_subdistrict[0]" id="subdistrict">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                  </div>

                                  

                              </div>
                              <br/>
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label  >รหัสไปรษณีย์
                                    </label>
                                    <div >
                                        <input type="text" name="individual_zipcode[0]" value="" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label  >ชื่อร้านค้า/องค์กร/หน่วยงาน (ถ้ามี)
                                    </label>
                                    <div >
                                        <input type="text" name="individual_business_name[0]" value="" class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div>
                              </div>
                            
                            </div>

                            <hr/>
                            <div class="row">
                              <div class="col-md-2">
                                <label>ที่อยู่จัดส่ง</label>
                              </div>
                              <!-- <div class="col-md-3">
                                <p>
                                  <input type="radio" class="flat" name="individual_adr_1" id="individual_adr_1" value="0" checked="checked"  /> ที่อยู่เดิม &nbsp;
                                  <input type="radio" class="flat" name="individual_adr_1" id="individual_adr_1" value="1" /> เพิ่มที่อยู่
                                </p>
                              </div> -->
                            
                            </div>
                            <br/>
                            <div class="form-group type-value" id="individual_tab1"style="display:block;margin-bottom: 0px;" >

                              <div class="row">

                                <div class="col-md-3 col-sm-6 col-xs-6">
                                  <label >เลขที่
                                  </label>
                                  <div >
                                      <input type="text" placeholder="-" name="individual_send_address[0]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >หมู่
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" id="id_tax" name="individual_send_village[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >ซอย/ตรอก
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_send_lane[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >ถนน
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_send_road[0]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                              
                              </div>

                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label>จังหวัด
                                  </label>
                                  <div>
                                      <select class="form-control" name="individual_send_province[0]" id="province">
                                            <option value="" >เลือก</option>
                                        <?php foreach ($province as $key => $value) { ?>
                                          <option value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >อำเภอ
                                    </label>
                                    <div>
                                      <select class="form-control" name="individual_send_district[0]" id="district">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >ตำบล
                                    </label>
                                    <div >
                                      <select class="form-control" name="individual_send_subdistrict[0]" id="subdistrict">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                  </div>

                                  

                              </div>
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                      <label  >รหัสไปรษณีย์
                                      </label>
                                      <div >
                                          <input type="text" name="individual_send_zipcode[0]" value="" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                      </div>
                                </div>
                              </div>
                              <br/>

                            
                            </div>

                        </div>
                        <div id="step-2">	
                            <h2 class="StepTitle">&nbsp;</h2>
                          
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" >
                                  <span class="required" style="color:red">*</span>เลขประจำตัวผู้เสียภาษี
                                </label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <input type="text" placeholder="4371239640692" id="id_tax_tab2" name="individual_number[1]" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999999'">
                                </div>
                            </div>
                            <hr/>


                            <div class="form-group type-value" style=" display:block;margin-bottom: 0px;" >
                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label for="middle-name" for="name_company">ชื่อบริษัท
                                    </label>
                                    <div >
                                        <input type="text" placeholder="-" id="name_tax" name="individual_firstname[1]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                              

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label  >เบอร์โทรศัพท์
                                    </label>
                                    <div >
                                        <input type="text" placeholder="xxx-xxxxxxx" nane="individual_phone[1]" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999-9999999'">
                                    </div>
                                      
                                  </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label >เลขที่
                                        </label>
                                        <div >
                                            <input type="text" placeholder="-" name="individual_address[1]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                        </div>

                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label  >หมู่
                                          </label>
                                          <div>
                                              <input type="text" placeholder="-" name="individual_village[1]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                          </div>
                                      </div>
                                  </div>

                                </div>
                              </div>


                              <div class="row">

                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >ซอย/ตรอก
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" name="individual_lane[1]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                  <label  >ถนน
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" name="individual_road[1]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label>จังหวัด
                                  </label>
                                  <div>
                                      <select class="form-control" name="individual_provice[1]" id="province">
                                            <option value="" >เลือก</option>
                                        <?php foreach ($province as $key => $value) { ?>
                                          <option value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >อำเภอ
                                    </label>
                                    <div>
                                      <select class="form-control" name="individual_district[1]" id="district">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                </div>
                              </div>
                              <br/>

                              <div class="row">
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >ตำบล
                                    </label>
                                    <div >
                                      <select class="form-control" name="individual_subdistrict[1]" id="subdistrict">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                  </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label  >รหัสไปรษณีย์
                                  </label>
                                  <div >
                                      <input type="text" name="individual_zipcode[1]" value="" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                  </div>
                                </div>
                                
                              </div>
                            
                            </div>

                            <hr/>
                            <div class="row">
                              <div class="col-md-2">
                                <label>ที่อยู่จัดส่ง</label>
                              </div>
                              <!-- <div class="col-md-3">
                                <p>
                                  <input type="radio" class="flat" name="individual_adr_2" id="individual_adr_2" value="0" checked=""  /> ที่อยู่เดิม &nbsp;
                                  <input type="radio" class="flat" name="individual_adr_2" id="individual_adr_2" value="1" /> เพิ่มที่อยู่
                                </p>
                              </div> -->
                            
                            </div>
                            <br/>
                            <div class="form-group type-value" id="individual_tab1"style="display:block;margin-bottom: 0px;" >

                              <div class="row">

                                <div class="col-md-3 col-sm-6 col-xs-6">
                                  <label >เลขที่
                                  </label>
                                  <div >
                                      <input type="text" placeholder="-" name="individual_send_address[1]" id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >หมู่
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-" id="id_tax" name="individual_send_village[1]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >ซอย/ตรอก
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_send_lane[1]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                  <label  >ถนน
                                    </label>
                                    <div>
                                        <input type="text" placeholder="-"id="id_tax" name="individual_send_road[1]" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                              
                              </div>

                              <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <label>จังหวัด
                                  </label>
                                  <div>
                                      <select class="form-control" name="individual_send_province[1]" id="province">
                                            <option value="" >เลือก</option>
                                        <?php foreach ($province as $key => $value) { ?>
                                          <option value="<?php echo $value->area_code; ?>"><?php echo $value->area_name_th; ?> </option>
                                        <?php 
                                      } ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >อำเภอ
                                    </label>
                                    <div>
                                      <select class="form-control" name="individual_send_district[1]" id="district">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label >ตำบล
                                    </label>
                                    <div >
                                      <select class="form-control" name="individual_send_subdistrict[1]" id="subdistrict">
                                        <option value=""  >เลือก</option>
                                      </select>
                                    </div>
                                </div>
                                
                              </div>
                              <div class="row">
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                        <label  >รหัสไปรษณีย์
                                        </label>
                                        <div >
                                            <input type="text" name="individual_send_zipcode[1]" value="" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999'">
                                        </div>
                                  </div>
                                </div>
                              <br/>

                            
                            </div>

                        
          
                        </div>  

                      <?php 
                    } ?>

                                  
                  </div>
                <!-- End SmartWizard Content -->  		

                  <div class="ln_solid"></div>
                      <div class="form-group">
                          <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 text-center">
                              <button  type="submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                              </button>
                              <button onclick="window.location.replace('<?php echo site_url('receive/receive_tax'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก 
                              </button>
                          </div>
                  </div>   
                    

              </form>
            </div>
                                              

          </div>
        </div>
      </div>
 
  </div>
</div>

 
<style>
  
  ul.anchor {
    position: relative;
    display: block;
    float: left;
    list-style: none;
    padding: 0px;
    margin: 10px 0;
    clear: both;
    border: 0px solid #CCCCCC;
    background: transparent;
  }
  ul.anchor li {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
        padding-right: 0px;
        padding-left: 0px;
    padding-left: 3px;
    padding-right: 3px;
    border: 0px solid #E0E0E0;
    float: left;
}
ul.anchor li a.selected {
    color: #F8F8F8;
    background: #2A3F54;
    border: 1px solid #2A3F54;
    cursor: text;
    -moz-box-shadow: 5px 5px 8px #888;
    -webkit-box-shadow: 5px 5px 8px #888;
    box-shadow: 5px 5px 8px #888;
}
ul.anchor li a {
    display: block;
    position: relative;
    float: left;
    margin: 0;
    padding: 3px;
    height: 60px;
    width: 230px;
    text-decoration: none;
    outline-style: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    z-index: 99;
}
ul.anchor li a .stepNumber {
    position: relative;
    float: left;
    width: 30px;
    text-align: center;
    padding: 5px;
        padding-top: 5px;
    padding-top: 0;
    font: bold 45px Verdana, Arial, Helvetica, sans-serif;
}

ul.anchor li a .stepDesc {
    position: relative;
    display: block;
    float: left;
    text-align: left;
    padding: 5px;
    font: bold 20px Verdana, Arial, Helvetica, sans-serif;
}
ul.anchor li a .stepDesc small {
    font: normal 12px Verdana, Arial, Helvetica, sans-serif;
}

ul.anchor li a.done:hover {
    color: #2A3F54;
    background: #476888;
    border: 1px solid #5A5655;
}

ul.anchor li a.done {
    position: relative;
    color: #FFF;
    background: #476888;
    border: 1px solid #476888;
    z-index: 99;
}
.swMain .stepContainer {
    display: block;
    position: relative;
    margin: 0;
    padding: 0;
    border: 0px solid #CCC;
    overflow: hidden;
    clear: both;
    height: 300px;
}

</style>

<script type="text/javascript">
    var domain='<?php echo base_url(); ?>/';
</script>

<script type="text/javascript">

 setTimeout(function(){
  $(document).ready(function(){
    
    	// Smart Wizard 	
  		$('#form_tab').smartWizard({
     
        keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
        enableAllSteps: true,  // Enable/Disable all steps on first load
        transitionEffect: 'slide', // Effect on navigation, none/fade/slide/slideleft
       
        onShowStep: fixHeight,
        onLeaveStep:clearData

      });

      function clearData(){
      
        $('input').val('');
        $('select').val('');
        return true;
      }

      function fixHeight(){
        $('.stepContainer').css({
          'height': '50%'}
        ); //if you want to add some css
        $('.swMain .stepContainer div.content').css({
          'height': '50'}
        ); //if you want to add some css
      }

      $('.actionBar').hide();

      //check address new 
   

    


      //get data district or sub district 1
      $('body').on('change',"select[name='individual_provice[0]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_provice[0]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getDistrict',
                'cache':false,
                'data':{province:data},
                'success':function(html){
                    $("select[name='individual_district[0]']").html(html);
                }
          });
          return false;
      });
      $('body').on('change',"select[name='individual_district[0]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_district[0]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getSubDistrict',
                'cache':false,
                'data':{district:data},
                'success':function(html){
                    $("select[name='individual_subdistrict[0]']").html(html);
                }
          });
          return false;
      });
      $('body').on('change',"select[name='individual_send_province[0]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_send_province[0]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getDistrict',
                'cache':false,
                'data':{province:data},
                'success':function(html){
                    $("select[name='individual_send_district[0]']").html(html);
                }
          });
          return false;
      });
      $('body').on('change',"select[name='individual_send_district[0]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_send_district[0]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getSubDistrict',
                'cache':false,
                'data':{district:data},
                'success':function(html){
                    $("select[name='individual_send_subdistrict[0]']").html(html);
                }
          });
          return false;
      });
      
      //get data district or sub district 2

      $('body').on('change',"select[name='individual_provice[1]']",function(e){
      
        e.preventDefault();
        var data = $("select[name='individual_provice[1]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getDistrict',
                'cache':false,
                'data':{province:data},
                'success':function(html){
                    $("select[name='individual_district[1]']").html(html);
                }
          });
          return false;
      });
      $('body').on('change',"select[name='individual_district[1]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_district[1]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getSubDistrict',
                'cache':false,
                'data':{district:data},
                'success':function(html){
                    $("select[name='individual_subdistrict[1]']").html(html);
                }
          });
          return false;
      });
      $('body').on('change',"select[name='individual_send_province[1]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_send_province[1]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getDistrict',
                'cache':false,
                'data':{province:data},
                'success':function(html){
                    $("select[name='individual_send_district[1]']").html(html);
                }
          });
          return false;
      });
      $('body').on('change',"select[name='individual_send_district[1]']",function(e){
        e.preventDefault();
        var data = $("select[name='individual_send_district[1]']").val();
          $.ajax({
                'type':'POST',
                'url':domain+'receive/getSubDistrict',
                'cache':false,
                'data':{district:data},
                'success':function(html){
                    $("select[name='individual_send_subdistrict[1]']").html(html);
                }
          });
          return false;
      });
     
    
    // $('#btn-submit').click(function(){
    //   alert('asd');
    // });

      
  });
}, 500);
    
</script>





