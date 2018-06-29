<div class="right_col" role="main">
          
          <div class="page-title">
            <div class="title_left">
              <h3>ชำระภาษี</h3>
            </div>
          </div>
            <br>
            <br>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel"style="height: 100%;">
                  <div class="clearfix"></div>
                  <br />
                  <br>
                  <br>
                  <form id="demo-form2" method="post" action="<?php echo base_url('receive/receive_tax_pay'); ?>" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขที่รับ
                         
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" id="id_tax" name="notice_number" class="form-control col-md-7 col-xs-12" placeholder="ระบุเลขที่รับ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขประจำตัวผู้เสียภาษี
                          
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="text" id="id_tax" name="individual_number" class="form-control col-md-7 col-xs-12" placeholder="ระบุเลขประจำตัว 10 หลัก หรือ 13 หลัก" >
                        </div>
                      </div>
                      <br>
                      <div class="col-md-12 col-sm-6 col-xs-12 text-center" >
                            <button type="submit" class="btn btn-primary" ><i class="fa fa-search"></i>&nbsp;ค้นหา</button>
                            <button onclick="window.location.replace('<?php echo site_url('receive/receive_save'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i>&nbsp;ยกเลิก</button>
                          <hr>
                          </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <?php if (!empty($receive_tax_pay)) : ?>

                      <div >
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ผู้เสียภาษี
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static"><?php print_r($receive_tax_pay[0]['individual_prename'] . $receive_tax_pay[0]['individual_firstname'] . " " . $receive_tax_pay[0]['individual_lastname']); ?></p>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เลขประจำตัวผู้เสียภาษี
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static"><?php echo $receive_tax_pay[0]['individual_number'] ?></p>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ประเภทผู้เสียภาษี
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static"><?php echo $receive_tax_pay[0]['tax_type_name'] ?></p>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เบอร์โทรศัพท์
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static"><?php echo $receive_tax_pay[0]['individual_phone'] ?></p>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">รายการที่ต้องชำระ
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static">1 </p>
                              </div>
                          </div>



                          <div class="x_content">
                          <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center;">หมวดรายได้</th>
                                      <th style="text-align: center;width: 86px;">เลขรับ/ปีภาษี</th>
                                      <!-- <th style="text-align: center;">รายละเอียดภาษี</th> -->
                                      <th style="text-align: center;">จำนวนค่าภาษี</th>
                                      <th style="text-align: center;">เงินเพิ่ม</th>
                                      <th style="text-align: center;">ชำระแล้ว</th>
                                      <th style="text-align: right;">คงเหลือ</th>
                                      <th style="width: 120px;">เครื่องมือ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php foreach ($receive_tax_pay as $key => $value) : ?>
                                      <tr>
                                        <td><?php echo $receive_tax_pay[0]['tax_name'] ?></td>
                                        <td align="center"><?php echo $receive_tax_pay[0]['notice_number'] ?>/<?php echo $receive_tax_pay[0]['tax_year'] + 543 ?></td>
                                        <!-- <td></td> -->
                                        <td align="right"><?php echo number_format($receive_tax_pay[0]['notice_estimate'], 2) ?></td>
                                        <td align="right"><?php echo number_format($receive_tax_pay[0]['tax_interest'], 2) ?></td>
                                        <td align="right"><?php echo number_format($receive_tax_pay[0]['tax_amount'], 2) ?></td>
                                        <td align="right"><?php echo number_format($receive_tax_pay[0]['notice_estimate'] - $receive_tax_pay[0]['tax_amount'], 2) ?></td>                                        
                                        <td>
                                          <center>
                                              <div class="btn-group ">
                                                  <?php if (($receive_tax_pay[0]['notice_estimate'] - $receive_tax_pay[0]['tax_amount']) > 0) : ?>
                                                    <a title="จ่าย" class="btn btn-success btn-sm" href="receive_tax_pay_add/<?php echo $receive_tax_pay[0]['notice_id'] ?>"><i class="fa fa-paypal"></i></a>
                                                  <?php endif; ?>
                                                  <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal"title="ลบ">
                                                      <i class="glyphicon glyphicon-trash"></i>
                                                  </button>
                                              </div>
                                          </center>
                                        </td>
                                      </tr>
                                    <?php endforeach; ?>


                                    <th>ยอดรวมทั้งหมด</th>
                                    <th></th>
                                    <!-- <th></th> -->
                                    <th style="text-align: right;"><?php echo number_format($receive_tax_pay[0]['notice_estimate'], 2) ?></th>
                                    <th style="text-align: right;"><?php echo number_format($receive_tax_pay[0]['tax_interest'], 2) ?></th>
                                    <th style="text-align: right;"><?php echo number_format($receive_tax_pay[0]['tax_amount'], 2) ?></th>
                                    <th style="text-align: right;"><?php echo number_format($receive_tax_pay[0]['notice_estimate'] - $receive_tax_pay[0]['tax_amount'], 2) ?></td>                                        </th>
                                    <th></th>
                                  <tbody>
                                </table>
                            </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </form>
                  <?php endif; ?>
                  
            </div>
          </div>
          </div>
      </div>

        <!-- Modal Popup -->
          
          <div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="delmodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <?php $this->load->view('receive/del_popup.php'); ?>
            </div>
          </div>


<style>
th{
text-align: center;
}
</style>
      


