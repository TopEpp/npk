<div class="right_col" role="main">
          
          <div class="page-title">
            <div class="title_left">
              <h3>ระบบบัญชีรายจ่าย</h3>
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
                          <button type="button" class="btn btn-success"  onclick="window.location.href='<?php echo base_url('expenditure/search_prj');?>'" title="เบิกจ่าย"><i class="fa fa-paypal"></i>
                          </button>
                      </div>
                  <div class="clearfix"></div>
                </div>

              

               <div class="x_content">
                  <table id="myTable" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <th>วันที่ชำระ</th>
                          <th>เลขที่เช็ค / ฎีกา</th>
                          <th>แผนงาน / โครงการ</th>
                          <th>จำนวนเงินที่เบิกจ่าย</th>
                          <th>ผู้ดำเนินการ</th>
                          <th style="width: 120px;">เครื่องมือ</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($expenditure as $key => $value) {?>
                         <tr>
                          <td align="center"><?php echo $this->mydate->date_eng2thai($value->expenses_date,543,'S')?></td>
                          <td align="center"><?php echo $value->expenses_number;?></td>
                          <td><?php echo $value->prj_name;?></td>  
                          <td align="right"><?php echo number_format($value->expenses_amount_result,2); ?></td>
                          <td></td>
                          <td>
                            <center>
                                <div class="btn-group ">
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
                      <?php } ?> 

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
              <?php $this->load->view('expenditure/expenditure_pay_popup.php'); ?>
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
      


