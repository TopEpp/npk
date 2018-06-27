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
        <input type="hidden" name="expenses_id" value="">
        <div id="form_tab" class="x_panel">
          <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">บันทึกรายจ่าย</a>
                  </li>
              </ul>

              <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      <div id="step-1">
                              <div class="form-group">
                                  <div class="row">
                                          <div class="col-md-4 col-sm-6 col-xs-12">
                                                  <div class="form-group" style="margin-bottom: 0px;">
                                                          <label>วันที่เบิกจ่าย</label>
                                                          <span class="required" style="color:red">*</span>
                                                          <input type="text" name="expenses_date" value="<?php echo date('Y-m-d')?>" class="form-control datepicker">
                                                  </div>
                                          </div>

                                          <div class="col-md-4 col-sm-6 col-xs-12">
                                              <div class="form-group" style="margin-bottom: 0px;">

                                                  <label for="middle-name" class=""> เลขที่เช็ค / ฎีกา</label>
                                                  
                                                  <div>
                                                      <input type="text" name="expenses_number" value="" placeholder="" id="name_tax" class="form-control col-md7 col-sx-12">
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-md-4 col-sm-6 col-xs-12">
                                              <div class="form-group" style="margin-bottom: 0px;">

                                                  <label for="middle-name" class=""> จำนวนเงินที่เบิกจ่าย
                                                  <span class="required" style="color:red">*</span>
                                                  </label>
                                                      <div>
                                                          <input type="text" name="expenses_amount" value="" placeholder="" id="name_tax" class="form-control col-md-7 col-xs-12 numeric">
                                                      </div>
                                              </div>
                                          </div>

                                          <div class="col-md-12 ">
                                              <div class="form-group" style="margin-bottom: 0px;">

                                                  <label for="middle-name"> รายละเอียด
                                                  </label>
                                                  <div>
                                                     <textarea class="form-control" name="expenses_detail"></textarea>
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
              <th>เลขที่เช็ค / ฎีกา</th>
              <th>ผู้เบิกจ่าย</th>
              <th>รายละเอียด</th>
              <th>จำนวนเงิน</th>
              <th>จัดการ</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($expenses as $key => $value) { ?>
            <tr>
              <td><?php echo $value->expenses_date?></td>
              <td><?php echo $value->expenses_number?></td>
              <td><?php echo $value->expenses_user?></td>
              <td><?php echo $value->expenses_detail?></td>
              <td><?php echo $value->expenses_amount?></td>
              <td><?php echo $value->expenses_date?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



