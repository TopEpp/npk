<div class="right_col" role="main">
            <section class="row">
                  <div class="col-md-8 col-sm-4 col-xs-4">
                      <h3>ระบบบัญชีรายจ่ายนอกงบประมาณ</h3>
                  </div>
                  <!-- <div class="col-md-4 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">

                      </div>
                  </div> -->
            </section>


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                      <div class="col-xs-12 text-right">
                      <button style="width: 101px;" onclick="window.location.replace('receive_outside/search_outside_prj');" type="button" class="btn btn-success" title="ชำระภาษี"><i class="fa fa-paypal"></i> เบิกจ่าย
                        </button>
                      </div>
                  <div class="clearfix"></div>
                </div>
               <div class="x_content">
                  <table id="myTable" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>วันที่ชำระ</th>
                        <th>รายการ</th>
                        <th>รายละเอียด</th>
                        <th>จำนวนเงินที่เบิกจ่าย (บาท)</th>
                        <th>ผู้ดำเนินการ</th>
                        <th style="width: 20%;">เครื่องมือ</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($out_pay as $key => $value) {?>
                         <tr>
                          <td align="center"><?php echo $this->mydate->date_eng2thai($value->outside_pay_create, 543, 'S') ?></td>
                          <td align="center"><?php echo $value->out_name; ?></td>

                          <td><?php echo $value->outside_detail; ?></td>
                          <td align="right"><?php echo number_format($value->outside_pay_budget_sum, 2); ?></td>
                          <td align="center"><?php echo $value->user_firstname . ' ' . $value->user_lastname; ?></td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" onclick="window.location = '<?php echo base_url('receive_outside/outside_form') . '/' . $value->outside_id . '/' . $value->outside_pay_id; ?>'" class="btn btn-warning btn-sm" title="แก้ไข">
                                       แก้ไข
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-id="<?php echo $value->outside_pay_id ?>"  data-toggle="modal" data-target="#delpay_modal" title="ลบ">
                                        ลบ
                                    </button>
                                </div>
                            </center>
                          </td>
                        </tr>
                      <?php }?>
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
          <div class="modal fade" id="delpay_modal" tabindex="-1" role="dialog" aria-labelledby="delmodal" aria-hidden="true">
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
                          <button type="button" id="btn-delpay"  class="btn btn-danger"><i class="fa fa-trash"></i> ลบ
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

