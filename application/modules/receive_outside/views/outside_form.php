<div class="right_col" role="main">
  <section class="row">
      <div class="col-md-12">
          <h3>บันทึกรายจ่ายนอกงบประมาณ: <?php echo @$out[0]->out_name?></h3>
      </div>
  </section>
  <div class="row">
   <div class="x_content">
     <form method="post" action="<?php echo base_url('receive_outside/saveOutSidePay')?>" >
        <input type="hidden" name="outside_pay_id" value="<?php echo @$out_pay[0]->outside_pay_id;?>">
        <input type="hidden" name="out_id" value="<?php echo (!empty($out[0]->out_id))?$out[0]->out_id:'';?>">
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
                        <h4>ข้อมูล</h4>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>งบประมาณ</td>
                              <td class="text-right"><?php echo number_format(@$out[0]->out_budget_sum,2) ?> บาท</td>

                            </tr>
                            <tr>
                              <td>งบเบิกจ่าย</td>
                              <td class="text-right"><?php echo number_format(@$out_pay[0]->sum_pay_budget,2) ?> บาท</td>
                            </tr>
                            <tr>
                              <td>รวม</td>
                              <td class="text-right"><?php echo number_format(@$out[0]->out_budget_sum-@$out[0]->out_budget_sum,2);?> บาท</td>
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
                                  
                                              <input type="text" name="outside_pay_create" value="<?php echo (!empty($out_pay[0]->outside_pay_create))?$out_pay[0]->outside_pay_create:date('Y-m-d');?>" class="form-control datepicker">
                                          </div>
                                      </div>
                                      <div class="col-md-12 ">
                                          <div class="form-group" style="margin-bottom: 0px;">
                                            <table class="table table-bordered jambo_table">
                                              <tr>
                                                <th>รายการ</th>
                                                <th class="text-right">จำนวนเงิน (บาท)</th>
                                              </tr>
                                              <tbody>
                                                <tr>
                                                  <td>ระบุจำนวน</td>
                                                  <td ><input type="text" name="outside_pay_budget" value="<?php echo (!empty($out_pay[0]->outside_pay_budget))?$out_pay[0]->outside_pay_budget:'';?>" placeholder="" id="expenses_amount" class="form-control col-md-7 col-xs-12 numeric text-right"></td>
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
                                                 <textarea  class="form-control" name="outside_detail"><?php echo (!empty($out_pay[0]->outside_detail))?$out_pay[0]->outside_detail:'';?></textarea>
                                                 
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
              <th class="text-center">วันที่</th>
              <th class="text-center">ผู้เบิกจ่าย</th>
              <th class="text-center">รายละเอียด</th>
              <th class="text-right">จำนวนเงิน (บาท)</th>
              <!-- <th>จัดการ</th> -->
            </tr>
          </thead>
          <tbody>
          <?php foreach ($out_pay_all as $key => $value) { ?>
            <tr>
              <td><?php echo $this->mydate->date_eng2thai($value->outside_pay_create,'','S');?></td>
              <td><?php echo $value->user_firstname .' '.$value->user_lastname?></td>
              <td><?php echo $value->outside_detail?></td>
              <td class="text-right"><?php echo number_format($value->outside_pay_budget,2);?></td>
          
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



