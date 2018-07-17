
<div class="right_col" role="main">
          
          <div class="page-title">
            <div class="title_left">
              <h3>ระบบบัญชีรายจ่ายในงบประมาณ</h3>
            </div>
          </div>

            <br>
            <br>

          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                      <div class="col-xs-12 text-right">
                          <button type="button" class="btn btn-success"  onclick="window.location.href='<?php echo base_url('expenditure/search_prj'); ?>'" title="เบิกจ่าย"><i class="fa fa-paypal"> เบิกจ่าย</i>
                          </button>
                      </div>
                  <div class="clearfix"></div>
                </div>

              

               <div class="x_content">
                  <table id="myTable" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <th>วันที่ลงเช๊ค</th>
                          <th>เลขที่เช็ค / ฎีกา</th>
                          <th>วันที่ชำระ</th>
                          <th>แผนงาน / โครงการ</th>
                          <th>จำนวนเงินที่เบิกจ่าย (บาท)</th>
                          <th>ผู้ดำเนินการ</th>
                          <th style="width: 20%;">เครื่องมือ</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($expenditure as $key => $value) { ?>
                         <tr>
                          <td align="center"><?php echo $this->mydate->date_eng2thai($value->expenses_date_disburse, 543, 'S') ?></td>
                          <td align="center"><?php echo $value->expenses_number; ?></td>
                          <td align="center"><?php echo $this->mydate->date_eng2thai($value->expenses_date, 543, 'S') ?></td>
                          <td><?php echo $value->prj_name; ?></td>  
                          <td align="right"><?php echo number_format($value->expenses_amount_result, 2); ?></td>
                          <td align="center"><?php echo $value->user_firstname; ?></td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" data-toggle="modal" data-target="#paymodal" data-id="<?php echo $value->expenses_id ?>" class="btn btn-default btn-sm" title="เช๊ค">
                                       เลขเช๊ค
                                    </button>
                                    <button type="button" onclick="window.location = '<?php echo base_url('expenditure/expenditure_form') . '/' . $value->project_id . '/' . $value->expenses_id; ?>'" class="btn btn-warning btn-sm" title="แก้ไข">
                                       แก้ไข
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-id="<?php echo $value->expenses_id ?>"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                        ลบ
                                    </button>
                                </div>
                            </center>               
                          </td>
                        </tr>
                      <?php 
                    } ?> 

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

          <div class="modal fade" id="paymodal" tabindex="-1" role="dialog" aria-labelledby="paymodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="delmodal">บันทึก เลขที่เช็ค /วันที่เช๊ค!</h4>
                        </div>
                      
                        <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <label> เลขที่เช๊ค</label>
                            <input type="text" name="expenses_number" class="form-control">
                          </div>
                        </div>
                        <br/>
                        <div class="row">
                          <div class="col-sm-12">
                            <label> วันที่เช๊ค</label>
                            <input type="text" name="expenses_date_disburse" value="<?php echo date('Y-m-d'); ?>" class="form-control datepicker">
                          </div>
                        </div>
                  
                               
                        </div>

                        <div class="modal-footer">
                            <button type="button" id="btn-pay"  class="btn btn-primary"></i> บันทึก
                            </button>

                            <button type="button" class="btn btn-default" data-dismiss="modal"></i> ยกเลิก
                            </button>
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
</style>
      


