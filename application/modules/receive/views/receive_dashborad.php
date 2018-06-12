<div class="right_col" role="main">
            <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายการการประเมินรายรับ</h3>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                            <button type="button" class="btn btn-success"  data-toggle="collapse" data-target="#search" title="ค้นหา"><i class="fa fa-search"> </i> ค้นหา
                            </button>
                            <button onclick="window.location.replace('');" type="button" class="btn btn-success" title="ทำซ้ำข้อมูล"><i class="glyphicon glyphicon-duplicate"></i> ทำซ้ำข้อมูล
                            </button>
                            <button onclick="window.location.replace('');" type="button" class="btn btn-success" title="พิมพ์ใบแจ้งรายการการประเมิน"><i class="glyphicon glyphicon-print"></i> พิมพ์
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
                    <table id="myTable" class="display" style="width:100%">                        
                        <thead>
                          <tr>
                            <th style="width: 30px;">ลำดับ</th>
                            <th style="width: 30px;">รหัสประเมิน</th>
                            <th style="width: 100px;">เลขประจำตัวผู้เสียภาษี</th>
                            <th>ชื่อผู้เสียภาษี</th>
                            <th style="width: 100px;">ประเภทผู้เสียภาษี</th>
                            <th style="width: 100px;">หมวดรายได้</th>
                            <th>จำนวนเงินที่ประเมิน (บาท)</th>
                            <th style="width: 120px;">เครื่องมือ</th>
                          </tr>
                        </thead>
                        <tbody>
                                <?php if (!empty($notice)) {
                                  foreach ($notice as $key => $value) : ?>
                                    
                                    <tr>
                                        <td align="center"><?php echo $key + 1; ?></td>
                                        <td  align="center"><?php echo $value['notice_id'] ?></td>
                                        <td  align="center"><?php echo $value['individual_number'] ?></td>
                                        <td> <?php echo $value['individual_prename'] ?><?php echo $value['individual_firstname'] ?><?php echo $value['individual_lastname'] ?> </td>
                                        <td> <?php echo $value['tax_type_name'] ?></td>
                                        <td> <?php echo $value['tax_name'] ?></td>
                                        <td align="right"> <?php echo number_format($value['notice_estimate'], 2) ?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group ">
                                                    <button type="button" onclick="window.location.href='<?php echo base_url('receive/receive_add/') . '/' . $value['individual_id'] ?>'" id="edit-notice" class="btn btn-success btn-sm" title="แก้ไข">
                                                        <i class="glyphicon glyphicon-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                </div>
                                            </center>       
                                        </td>
                                    </tr>

                                <?php endforeach;
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
        


