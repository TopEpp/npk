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
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขรับ
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax" >เลขประจำตัวผู้เสียภาษี
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12" placeholder="4371239640692">
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
                                  <p class="form-control-static">3</p>
                              </div>
                          </div>

                          <div class="x_content">
                                <table id="table_tax" class="display" style="width:100%">
                                  <thead>
                                    <tr>
                                      <th>หมวดรายได้</th>
                                      <th>เลขรับ/ปีภาษี</th>
                                      <th>รายละเอียดภาษี</th>
                                      <th>จำนวนค่าภาษี</th>
                                      <th>เงินเพิ่ม</th>
                                      <th>ชำระแล้ว</th>
                                      <th>คงเหลือ</th>
                                      <th style="width: 120px;">เครื่องมือ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
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
        <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <?php $this->load->view('receive/receive_tax_paypopup.php'); ?>
            </div>
          </div>
          
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
      


