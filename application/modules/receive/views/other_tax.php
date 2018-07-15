<?php
$chk = false;
foreach ($_SESSION['user_permission'] as $key => $chk_permission) :
  if ($chk_permission['app_id'] == 1) :
  $chk = true;
break;
endif;
endforeach;
if ($chk == false) {
  redirect('main/dashborad');
} ?>
<div class="right_col" role="main">
            <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายการข้อมูลบันทึกรายรับภาษีอื่น</h3>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                            <button style="width: 116px;"type="button" onclick="window.location.href='<?php echo base_url('receive/other_tax_add/') ?>'" id="" class="btn btn-success " title="บันทึกรายรับภาษีอื่น">
                                <i class="fa fa-plus-square"></i> บันทึกรายรับ
                            </button>
                      </div>
                  </div>
            </section>
          
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="top: 10px;">
                  <div class="collapse" id="search" class="x_content">
                      <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                              <label class="control-label col-md-4 col-sm-3 col-xs-12" for="type_tax">ประเภทผู้เสียภาษี
                              </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" type="text" id="type_tax">
                                  <option>บุคคลธรรมดา</option>
                                  <option>นิติบุคคล</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เลขประจำตัวผู้เสียภาษี
                              </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="text" id="id_tax" placeholder="1048174650120" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999999'" >
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-4 col-sm-3 col-xs-12" for="name_tax">ชื่อผู้เสียภาษี</label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="text" id="name_tax" placeholder="สมชาย ใจดี" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-4 col-sm-3 col-xs-12" for="income_tax">หมวดรายได้
                              </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <select id="first-disabled" class="form-control">
                                <optgroup label = "หมวดภาษีอากร">
                                    <option>ภาษีโรงเรือนและที่ดิน</option>
                                    <option>ภาษีบำรุงท้องที่</option>
                                    <option>ภาษีป้าย</option>
                                </optgroup>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              
                              <div class="col-md-5 col-sm-6 col-xs-12">
                                
                            </div>
                            
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;ค้นหา</button>
                                <button type="reset"  class="btn btn-warning" ><i class="fa fa-refresh"></i>&nbsp;คืนค่า</button>
                              </div>
                            </div>
                          <div class="ln_solid"></div>
                      </form>
                  </div>

                </div>

                      <div class="x_content">
                        <table id="tax_table" class="table" width="100%">
                            <thead>
                              <tr>
                                      <th style="width: 30px;">ลำดับ</th>
                                      <th>วันที่รับ</th>
                                      <th>หมวดรายได้</th>
                                      <th>จำนวนเงินที่รับ (บาท)</th>
                                      <th style="width: 120px;">เครื่องมือ</th>
                              </tr>
                            </thead>
                            <tbody>
                          

                            <tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>


              </div>
            </div>
</div>

                <!-- Modal Popup -->          
          <div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="delmodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="delmodal">การแจ้งเตือน!</h4>
                      </div>
                      
                      
                      <div class="modal-body">
                              <h5 align="center">ต้องการลบข้อมูลรายการนี้ใช่หรือไม่</h5>
                      </div>

                      <div class="modal-footer">
                          <button type="button" id="btn-del"  class="btn btn-danger"><i class="fa fa-trash"></i> ลบ
                          </button>

                          <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> ยกเลิก
                          </button>
                      </div>
                  </div>
              </div>
            </div>
          </div>



<style>
th{
text-align: center;
}
.dataTables_filter, .dataTables_info { display: none; }
</style>

        


