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
              <div class="x_panel"style="height: 650px;">
                  <div class="clearfix"></div>
                  <br />
                  <br>
                  <br>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
<<<<<<< HEAD
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขที่รับ
                          <span class="required" style="color:red"> *</span>
=======
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขรับ
>>>>>>> Dev-Branch
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขประจำตัวผู้เสียภาษี
                          <span class="required" style="color:red"> *</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
<<<<<<< HEAD
                            <input type="text" id="id_tax" name="individual_number" class="form-control col-md-7 col-xs-12" placeholder="ระบุเลขประจำตัว 10 หลัก หรือ 13 หลัก" >
=======
                          <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12" placeholder="4371239640692">
>>>>>>> Dev-Branch
                        </div>
                      </div>
                      <br>
                      <div class="col-md-12 col-sm-6 col-xs-12 text-center" >
                            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#detail"><i class="fa fa-search"></i>&nbsp;ค้นหา</button>
                            <button onclick="window.location.replace('<?php echo site_url('receive/receive_save'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i>&nbsp;ยกเลิก</button>
                          <hr>
                          </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
<<<<<<< HEAD
                      <?php if (!empty($receive_tax_pay)) : ?>
=======
>>>>>>> Dev-Branch

                      <div class="collapse" id="detail">
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ผู้เสียภาษี
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static">สมชาย ใจดี</p>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ประเภทผู้เสียภาษี
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <p class="form-control-static">บุคคลธรรมดา</p>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">รายการที่ต้องชำระ
                                </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
<<<<<<< HEAD
                                  <p class="form-control-static">1 </p>
=======
                                  <p class="form-control-static">3</p>
>>>>>>> Dev-Branch
                              </div>
                          </div>

                          <div class="x_content">
                                <table id="table_tax" class="display" style="width:100%">
                                  <thead>
                                    <tr>
<<<<<<< HEAD
                                      <th style="text-align: center;">หมวดรายได้</th>
                                      <th style="text-align: center;width: 86px;">เลขรับ/ปีภาษี</th>
                                      <!-- <th style="text-align: center;">รายละเอียดภาษี</th> -->
                                      <th style="text-align: center;">จำนวนค่าภาษี</th>
                                      <th style="text-align: center;">เงินเพิ่ม</th>
                                      <th style="text-align: center;">ชำระแล้ว</th>
                                      <th style="text-align: right;">คงเหลือ</th>
=======
                                      <th>หมวดรายได้</th>
                                      <th>เลขรับ/ปีภาษี</th>
                                      <th>รายละเอียดภาษี</th>
                                      <th>จำนวนค่าภาษี</th>
                                      <th>เงินเพิ่ม</th>
                                      <th>ชำระแล้ว</th>
                                      <th>คงเหลือ</th>
>>>>>>> Dev-Branch
                                      <th style="width: 120px;">เครื่องมือ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
<<<<<<< HEAD
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
=======
                                    <tr>
                                      <td>ภาษีป้าย</td>
                                      <td></td>
                                      <td>มีอักษรไทยล้วน จำนวน 1 ป้าย</td>  
                                      <td align="right">1,600.00</td>
                                      <td align="right">0.00</td>
                                      <td align="right">0.00</td>
                                      <td align="right">1,600.00</td>
                                      <td>
                                        <center>
                                            <div class="btn-group ">
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmodal" title="จ่าย">
                                                    <i class="fa fa-paypal"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal"title="ลบ">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </div>
                                        </center>               
                                      </td>
                                    </tr>
>>>>>>> Dev-Branch

                                    <tr>
                                      <td>ภาษีโรงเรือนและที่ดิน</td>
                                      <td></td>
                                      <td>ประเภทตึกแถว 1 หลัง 3 ห้อง</td>  
                                      <td align="right">2,000.00</td>
                                      <td align="right">0.00</td>
                                      <td align="right">0.00</td>
                                      <td align="right">2,000.00</td>
                                      <td>
                                        <center>
                                            <div class="btn-group ">
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmodal" title="จ่าย">
                                                    <i class="fa fa-paypal"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </div>
                                        </center>               
                                      </td>
                                    </tr>

<<<<<<< HEAD
                                    <th>ยอดรวมทั้งหมด</th>
                                    <th></th>
                                    <!-- <th></th> -->
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th style="text-align: right;"><?php echo number_format($receive_tax_pay[0]['notice_estimate'] - $receive_tax_pay[0]['tax_amount'], 2) ?></td>                                        </th>
                                    <th></th>
=======
                                    <tr>
                                      <td>ภาษีบำรุงท้องที่</td>
                                      <td></td>
                                      <td>เนื้อที่ดิน 1 ไร่ 4 งาน 400 ตาราวา</td>  
                                      <td align="right">3,400.00</td>
                                      <td align="right">0.00</td>
                                      <td align="right">2,000.00</td>
                                      <td align="right">1,400.00</td>
                                      <td>
                                        <center>
                                            <div class="btn-group ">
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmodal" title="จ่าย">
                                                    <i class="fa fa-paypal"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </div>
                                        </center>               
                                      </td>
                                    </tr>
>>>>>>> Dev-Branch
                                  <tbody>
                                </table>
                            </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </form>
                  
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
      


