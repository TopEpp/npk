<div class="right_col" role="main">
  <section class="row">
      <div class="col-md-12">
          <h3>บันทึกรายจ่าย : <?php echo $prj->prj_name?></h3>
      </div>
  </section>
  <div class="row">
   <div class="x_content">
     <form method="post" action="<?php echo base_url('expenditure/saveExpenditure')?>" >
        <input type="hidden" name="project_id" value="<?php echo $project_id?>">
        <input type="hidden" name="expenses_id" value="<?php echo (!empty($expenses[0]->expenses_id))?$expenses[0]->expenses_id:'';?>">
        <div id="form_tab" class="x_panel">
          <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <!-- <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">บันทึกรายจ่าย</a>
                  </li>
              </ul> -->

              <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      <!-- //data prj  -->
                      <div class="col-md-6 col-xs-12  " style="float:right">
                        <h4>ข้อมูลโครงการ</h4>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>งบประมาณ</td>
                              <td class="text-right"><?php echo number_format($prj->prj_budget_sum,2) ?> บาท</td>

                            </tr>
                            <tr>
                              <td>งบเบิกจ่าย</td>
                              <td class="text-right"><?php echo number_format($prj->amount,2) ?> บาท</td>
                            </tr>
                            <tr>
                              <td>รวม</td>
                              <td class="text-right"><?php echo number_format($prj->prj_budget_sum-$prj->amount,2);?> บาท</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="step-1">
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="form-group" >
                                              <label>วันที่จัดทำ</label>
                                              <span class="required" style="color:red">*</span>
                                  
                                              <input type="text" name="expenses_date" value="<?php echo (!empty($expenses[0]->expenses_date))?$expenses[0]->expenses_date:date('Y-m-d');?>" class="form-control datepicker">
                                          </div>
                                      </div>
                                      <div class="col-md-12 ">
                                          <div class="form-group" style="margin-bottom: 0px;">
                                            <table class="table table-bordered jambo_table">
                                              <tr>
                                                <th>รายการ</th>
                                                <th>จำนวนเงิน</th>
                                              </tr>
                                              <tbody>
                                                <tr>
                                                  <td>มูลค่าสินค้า/บริการ</td>
                                                  <td><input type="text" name="expenses_amount" value="<?php echo (!empty($expenses[0]->expenses_amount))?$expenses[0]->expenses_amount:'';?>" placeholder="" id="expenses_amount" class="form-control col-md-7 col-xs-12 numeric"></td>
                                                </tr>
                                                <tr>
                                                  <td><span style="text-decoration: underline;">บวก</span> ภาษีมูลค่าเพิ่ม &nbsp;
                                                    <span class="text-right" style="">
                                                    
                                                        <label>
                                                          <input checked id="amount_vat" type="checkbox" class="flat" >
                                                        </label>
                                                        <input id="amount_vat_val" style="width:40px;text-align: center;" type="text" value="7"> %
                                                    </span>
                                                  </td>
                                                  <td><input type="text" name="expenses_amount_vat" value="<?php echo (!empty($expenses[0]->expenses_amount_vat))?$expenses[0]->expenses_amount_vat:'';?>" placeholder="" id="expenses_amount_vat" class="form-control col-md-7 col-xs-12 numeric"></td>
                                                </tr>
                                                <tr>
                                                  <td>จำนวนเงินที่ขอเบิกทั้งสิ้น</td>
                                                  <td><input type="text" name="expenses_amount_disburse" value="<?php echo (!empty($expenses[0]->expenses_amount_vat))?$expenses[0]->expenses_amount_vat:'';?>" placeholder="" id="expenses_amount_disburse" class="form-control col-md-7 col-xs-12 numeric"></td>
                                                </tr>
                                                <tr>
                                                  <td><span style="text-decoration: underline;">หัก</span> ภาษีหัก ณ ที่จ่าย &nbsp;
                                                  <span class="text-right" style="">
                                                    
                                                    <label>
                                                      <input type="checkbox" id="amount_tax" checked class="flat" >
                                                    </label>
                                                    <input id="amount_tax_val" style="width:40px;text-align: center;" type="text" value="1"> %
                                                </span>
                                                  </td>
                                                  <td><input type="text" name="expenses_amount_tax" value="<?php echo (!empty($expenses[0]->expenses_amount_tax))?$expenses[0]->expenses_amount_tax:'';?>" placeholder="" id="expenses_amount_tax" class="form-control col-md-7 col-xs-12 numeric"></td>
                                                </tr>
                                                <tr>
                                                  <td>ค่าปรับ</td>
                                                  <td><input type="text" name="expenses_amount_fine" value="<?php echo (!empty($expenses[0]->expenses_amount_fine))?$expenses[0]->expenses_amount_fine:'';?>" placeholder="" id="expenses_amount_fine" class="form-control col-md-7 col-xs-12 numeric"></td>
                                                </tr>
                                                <tr>
                                                  <td>จำนวนเงินที่จ่ายสุทธิ</td>
                                                  <td><input type="text" name="expenses_amount_result" value="<?php echo (!empty($expenses[0]->expenses_amount_result))?$expenses[0]->expenses_amount_result:'';?>" placeholder="" id="expenses_amount_result" class="form-control col-md-7 col-xs-12 numeric"></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                      </div>
                                      <div class="col-md-12 col-sm-12 col-lg-12  ">
                                          <div class="form-group" style="margin-bottom: 0px;">

                                              <label for="middle-name"> รายละเอียด
                                              </label>
                                              <div>
                                                 <textarea  class="form-control" name="expenses_detail">
                                                 <?php echo (!empty($expenses[0]->expenses_detail))?$expenses[0]->expenses_detail:'';?>
                                                 </textarea>
                                                 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          <br>
                      </div>
                  </div>
              </div>
          </div>
           <div style="text-align: right;">
            <button type="submit" class="btn btn-default">บันทึก</button>
          </div>
      </div>
      </form>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="div_table">
        <table class="table table-bordered jambo_table">
          <thead>
            <tr>
              <th>วันที่</th>
              <th>ผู้เบิกจ่าย</th>
              <th>รายละเอียด</th>
              <th>จำนวนเงิน (บาท)</th>
              <!-- <th>จัดการ</th> -->
            </tr>
          </thead>
          <tbody>
          <?php foreach ($expenses as $key => $value) { ?>
            <tr>
              <td><?php echo $this->mydate->date_eng2thai($value->expenses_date,'','S');?></td>
              <td><?php echo $value->expenses_user?></td>
              <td><?php echo $value->expenses_detail?></td>
              <td><?php echo number_format($value->expenses_amount);?></td>
              <!-- <td><?php ?></td> -->
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



