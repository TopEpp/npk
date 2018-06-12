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
          <?php echo form_open('Receive/insert_receive') ?>
              <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">          
            
                <!-- Smart Wizard -->
                  <div id="form_tab" class="swMain">
                    <ul class="anchor">
                      <li><a href="#step-1">
                            <label class="stepNumber"></label>
                            <span class="stepDesc" >
                              ภาษีโรงเรือนและที่ดิน<br />
                              <small>บันทึกรายการ</small>
                            </span>
                        </a></li>
                      <li><a href="#step-2">
                            <label class="stepNumber"></label>
                            <span class="stepDesc">
                              ภาษีบำรุงท้องที่<br />
                              <small>บันทึกรายการ</small>
                            </span>
                        </a></li>
                      <li><a href="#step-3">
                            <label class="stepNumber"></label>
                            <span class="stepDesc">
                              ภาษีป้าย<br />
                              <small>บันทึกรายการ</small>
                            </span>
                        </a></li>
                    </ul>
                    <input type='hidden' name="individual_id" value="<?php echo @$tax_notice[0]->individual_id; ?>" class="form-control" />
            
                    <div id="step-1">	
                            <h2 class="StepTitle">บันทึกข้อมูลภาษีโรงเรือนและที่ดิน</h2>
                                  <div class="form-group" style="margin-bottom: 0px;">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">
                                          จำนวนข้อมูลภาษีโรงเรือนและที่ดิน
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
                                  <hr/>
                                  <div class="form-group">
                                      <input type="hidden" name="tax_id" value="8" >
                                      <div class="row">
                                          <div class="col-md-4 col-sm-6 col-xs-12">
                                                  <div class="form-group" style="margin-bottom: 0px;">
                                                        <label >วันที่ประเมิน</label>
                                                        <span class="required" style="color:red">*</span>
                                                        <input type='date' name="notice_date" class="form-control" />
                                                  </div>
                                          </div>

                                          <div class="col-md-2 col-sm-6 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0px;">
                                              
                                                  <label for="middle-name" class="" for="name"> เลขที่รับแบบ</label>
                                                  <span class="required" style="color:red">*</span>
                                                  <div>
                                                      <input type="text" name="notice_reception" placeholder="เลขที่รับแบบ" id="name_tax" class="form-control col-md7 col-sx-12">
                                                  </div>
                                            </div>
                                          </div>

                                          <div class="col-md-2 col-sm-6 col-xs-12">
                                              <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                  <label for="middle-name" class="" for="name"> เลขที่รับ
                                                  <span class="required" style="color:red">*</span>
                                                  </label>
                                                    <div >
                                                        <input type="text" name="notice_number" placeholder="เลขที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                              </div>
                                          </div>

                                          <div class="col-md-2 col-sm-6 col-xs-12">
                                              <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                <label for="middle-name" > เล่มที่รับ
                                                <span class="required" style="color:red">*</span>
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_no" placeholder="เล่มที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                          </div>

                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                          <div class="form-group" style="margin-bottom: 0px;">
                                          
                                            <label  > เลขที่โฉนด
                                            <span class="required" style="color:red">*</span>
                                            </label>
                                            <div >
                                                <input type="text" name="notice_deed" placeholder="เลขที่โฉนด" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                            </div>
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
                                                <input type="text" name="notice_address_number" placeholder="ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                            </div>
                                          </div>
                                      </div>

                                      <div class="col-md-4 col-sm-6 col-xs-12">
                                              <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                <label for="middle-name" > หมู่ที่
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_address_moo" placeholder="หมู่ที่อยู่โรงเรือน/สิ่งปลูกสร้าง" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                      </div>

                                      <div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                          
                                            <label  > ตำบล
                                            </label>
                                            <div >
                                                <input type="text" name="notice_address_subdistrict" value="<?php echo @$tax_notice[0]->individual_send_subdistrict; ?>" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >
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
                                                    <input type="text" name="noice_name_operation" placeholder="" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                      </div>

                                      <div class="col-md-4 col-sm-6 col-xs-12">
                                              <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                <label for="middle-name" > ค่ารายปี
                                                <span class="required" style="color:red">*</span>
                                                </label>
                                                <div >
                                                    <input type="text" name="notice_annual_fee" placeholder="0" id="name_tax" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      
                                      <div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                          
                                            <label  > จำนวนภาษีที่ประเมิน
                                            <span class="required" style="color:red">*</span>
                                            </label>
                                            <div >
                                                <input type="text" name="notice_estimate" placeholder="0" id="id_tax" class="form-control col-md-7 col-xs-12" >
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
                                                  <select class="form-control" name="tax_year" type="text" >
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
                            <hr/>
                    </div>

                    <div id="step-2">	
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
                                <hr/>
                            <div class="form-group">
                              
                              <div class="row">
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="form-group" style="margin-bottom: 0px;">
                                                
                                                <label >วันที่ประเมิน<span class="required" style="color:red"> *</span></label>
                                                <input type='date' name="notice_date" class="form-control" />
                                          </div>
                                  </div>

                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                      
                                      <label for="middle-name" class="" for="name"> เลขที่<span class="required" style="color:red"> *</span>
                                      </label>
                                      <div >
                                          <input type="text" name="notice_number" placeholder="เลขที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                      
                                        <label  > เลขที่โฉนด<span class="required" style="color:red"> *</span>
                                        </label>
                                        <div >
                                        
                                            <input type="text" name="notice_deed" placeholder="เลขที่โฉนด" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                      
                                        <label  > เลขที่ที่ตั้งที่ดิน
                                        </label>
                                        <div >
                                            <input type="text" name="notice_address_number" placeholder="ที่อยู่ที่ตั้งที่ดิน" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>
                                </div>

                                
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                      
                                      <label for="middle-name" class="" for="name"> หมู่ที่
                                      </label>
                                      <div >
                                          <input type="text" name="notice_address_moo" placeholder="หมู่ที่อยู่ที่ตั้งที่ดิน" id="name_tax" class="form-control col-md-7 col-xs-12">
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

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                     
                                      <label for="middle-name" class="" for="name"> เนื้อที่ดินที่ต้องชำระภาษี<span class="required" style="color:red"> *</span>
                                      </label>
                                      <div >
                                          <input type="text" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12">
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
                                                <input type="text" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="form-group" style="margin-bottom: 0px;">
                                        
                                          <label  > เนื้อที่ดิน (งาน) <span class="required" style="color:red"> *</span>
                                          </label>
                                            <div >
                                                <input type="text" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="form-group" style="margin-bottom: 0px;">
                                        
                                          <label  > เนื้อที่ดิน (วา) <span class="required" style="color:red"> *</span>
                                          </label>
                                            <div >
                                                <input type="text" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                      </div>
                                  </div>



                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                  
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="form-group" style="margin-bottom: 0px;">
                                        
                                          <label  > ประเมินปี <span class="required" style="color:red"> *</span>
                                          </label>
                                              <div >
                                                  <div class="col-md-5 col-sm-6 col-xs-12" style="padding-left: 0px;">
                                                      <select class="form-control" name="tax_year" type="text" >
                                                          <?php foreach ($years as $key => $value) { ?>
                                                                <option value="<?= $value->year_id ?>"><?= $value->year_label ?></option>
                                                              <?php 
                                                            } ?>
                                                      </select>
                                                  </div>
                                                  <div class="col-md-2 col-sm-6 col-xs-12" align="center"><label>ถึง</label></div>
                                                  <div class="col-md-5 col-sm-6 col-xs-12" style="padding-right: 0px;">
                                                      <select class="form-control" name="tax_year" type="text" >
                                                            <?php foreach ($years as $key => $value) { ?>
                                                                  <option value="<?= $value->year_id ?>"><?= $value->year_label ?></option>
                                                                <?php 
                                                              } ?>
                                                        </select>
                                                  </div>
                                              </div>

                                            <!-- <div >
                                                <input type="text" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div> -->
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="form-group" style="margin-bottom: 0px;">
                                        
                                          <label  > จำนวนภาษีที่ประเมิน <span class="required" style="color:red"> *</span>
                                          </label>
                                            <div >
                                                <input type="text" placeholder="0"id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                      </div>
                                  </div>                                
                              </div>
                            </div>
                            <hr/>
                    </div>

                    <div id="step-3">	
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
                              <hr/>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="form-group" style="margin-bottom: 0px;">
                                              <span class="required" style="color:red">*</span>
                                              <label >วันที่ประเมิน</label>
                                              <input type='text' class="form-control datepicker" />
                                        </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group" style="margin-bottom: 0px;">
                                    <span class="required" style="color:red">*</span>
                                    <label for="middle-name" class="" for="name"> เลขที่
                                    </label>
                                    <div >
                                        <input type="text" placeholder="เลขที่รับ" id="name_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group" style="margin-bottom: 0px;">
                                    <span class="required" style="color:red">*</span>
                                    <label for="middle-name" class="" for="name"> สถานที่ติดตั้งป้าย
                                    </label>
                                    <div >
                                        <input type="text" placeholder="สถานที่ติดตั้งป้าย" id="name_tax" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>
                                </div>

                               
                              </div>
                          </div>

                         <div class="row">
                           
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <span class="required" style="color:red">*</span>
                                  <label > หมู่ที่
                                  </label>
                                  <div >
                                    <input type="text" placeholder="หมู่ที่อยู่ติดตั้งป้าย"id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>
                            </div>

                             <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="form-group">
                                        <span class="required" style="color:red">*</span>
                                          <label  > ตำบล
                                          </label>
                                            <div >
                                                <input type="text" value="หนองป่าครั่ง" disabled id="id_tax" class="form-control col-md-7 col-xs-12" >
                                            </div>
                                      </div>
                              </div>

                              <div class="col-md-4 col-sm-6 col-xs-12">
                                      <div class="form-group">
                                        <span class="required" style="color:red">*</span>
                                          <label  > ชื่อกิจการ
                                          </label>
                                            <div >
                                                <input type="text" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                            </div>
                                      </div>
                              </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                <span class="required" style="color:red">*</span>
                                  <label  > ประเภทป้าย
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
                            <span class="required" style="color:red">*</span>
                              <label > ความกว้าง
                              </label>
                              <div >
                                  <input type="text" placeholder="" id="id_tax" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                              <div class="col-md-2 col-sm-6 col-xs-12">
                              <span class="required" style="color:red">*</span>
                                <label  > ความสูง
                                  </label>
                                  <div>
                                      <input type="text" placeholder=""id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>
                            </div>

                            <div class="col-md-2 col-sm-6 col-xs-12">
                              <span class="required" style="color:red">*</span>
                                <label  > จำนวนภาษีที่ประเมิน
                                  </label>
                                  <div>
                                      <input type="text" placeholder="0.00"id="id_tax" class="form-control col-md-7 col-xs-12">
                                  </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <span class="required" style="color:red">*</span>
                                      <label  > ประจำปีภาษี
                                      </label>
                                        <div >
                                            <input type="text" placeholder="ปีงบประมาณ" id="id_tax" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                  </div>
                            </div>
                          </div>

                          <!-- <div class="row">
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                      <label  > อัปโหลดรูปภาพป้าย
                                      </label>
                                        <div class="container">
                                        <button class="btn btn-success" type='file' onchange="readURL(this);"><i class="fa fa-upload"></i> อัปโหลด
                                            
                                            </button>
                                            <img width="80px" height="80px" src="../assets/images/nopicture.jpg">
                                        </div>
                                  </div>
                              </div>
                          </div> -->
                          

                        <hr/>

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
        <?php echo form_close('') ?>
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
    font: bold 16px CSChatThaiUI, sans-serif;
}
ul.anchor li a .stepDesc small {
    font: normal 12px CSChatThaiUI, sans-serif;
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
 setTimeout(function(){
  $(document).ready(function(){

      //focus input
      $('#id_tax_tab1').focus(function() {
        document.getElementById("individual_tab1").style.display = "block";
        
      })
      .blur(function() {
      
        if ($('#id_tax_tab1').val() != ''){
          document.getElementById("individual_tab1").style.display = "block";
        }else{
          document.getElementById("individual_tab1").style.display = "none";
        }
      });
      //end focus input
      //focus input
      $('#id_tax_tab2').focus(function() {
        document.getElementById("individual_tab2").style.display = "block";
        
      })
      .blur(function() {
      
        if ($('#id_tax_tab2').val() != ''){
          document.getElementById("individual_tab2").style.display = "block";
        }else{
          document.getElementById("individual_tab2").style.display = "none";
        }
      });
      //end focus input
     
    	// Smart Wizard 	
  		$('#form_tab').smartWizard({
     
        keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
        enableAllSteps: true,  // Enable/Disable all steps on first load
        transitionEffect: 'slide', // Effect on navigation, none/fade/slide/slideleft
       
        onShowStep: fixHeight,

      });

      function fixHeight(){
        $('.stepContainer').css({
          'height': '50%'}
        ); //if you want to add some css
        $('.swMain .stepContainer div.content').css({
          'height': '50'}
        ); //if you want to add some css
      }

      $('.actionBar').hide();
  });
}, 100);
    
</script>
