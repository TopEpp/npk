
<div class="right_col" role="main">

          <div class="page-title">
            <div class="title_left">
              <h3>จ่าย<?php echo $tax_notice[0]['tax_name'] ?></h3>
            </div>
          </div>
            <br>
            <br>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" height: 100%;>
                  <div class="clearfix"></div>
                  <br />
                  <br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">ผู้เสียภาษี :
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo ($tax_notice[0]['individual_prename'] . $tax_notice[0]['individual_fullname']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">เลขประจำตัวผู้เสียภาษี :
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['individual_number'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">ประเภทผู้เสียภาษี :
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['tax_type_name'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">ที่อยู่ :
                                    </label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['individual_address'] . " " . " หมู่" . " " . $tax_notice[0]['individual_village'] . " " . " ตำบล" . $tax_notice[0]['area_name_th'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">เบอร์โทรศัพท์ :
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['individual_phone'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    

            <form action="<?php echo base_url('receive/recieve_tax_add_house') ?>" method="post">
                <div class="form-horizontal form-label-left">
                  <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เลขที่ใบเสร็จ
                            <span class="required" style="color:red"> *</span>
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="ระบุเลขที่ใบเสร็จ" id="receipt_no" name="receipt_no" class="form-control col-md-7 col-xs-12">
                              </div>
                  </div>
                  <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เล่มที่ใบเสร็จ
                            <span class="required" style="color:red"> *</span>
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="ระบุเล่มที่ใบเสร็จ" id="receipt_number" name="receipt_number"  class="form-control col-md-7 col-xs-12">
                              </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 0px;">
                      <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">วันที่ชำระ
                            <span class="required" style="color:red"> *</span>
                      </label>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class='input-group date col-md-12 col-xs-12' id='inputdatepicker'>
                                  <input type='text' name="receive_date" class="form-control datepicker" />
                              </div>
                          </div>
                  </div>


                   <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">จำนวนเงินภาษี
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="0.00" id="amount" name="amount" readonly class="cal numeric form-control col-md-7 col-xs-12" value="<?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>">
                              </div>
                  </div>

                   <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เงินเพิ่ม
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" id="interest" name="interest" value="" placeholder="0.00" class="cal numeric form-control col-md-7 col-xs-12">
                              </div>
                  </div>

                  <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">รวมจำนวนเงินที่ต้องชำระ
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="0.00" id="sum_amount" name="sum_amount" readonly class="cal numeric form-control col-md-7 col-xs-12" value="<?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>">
                              </div>
                  </div>


                 <div class="form-group">
                         <label class="control-label col-md-4 col-sm-3 col-xs-12"  for="id_tax">จำนวนเงินที่ชำระ
                            <span class="required" style="color:red"> *</span>
                         </label>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <input type="text" placeholder="0.00" id="receive_amount" name="receive_amount" class="cal numeric form-control col-md-7 col-xs-12" value="">
                             </div>
                 </div>
                 

                  <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">คงเหลือ
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="0.00" id="balance" name="balance" readonly class="cal numeric form-control col-md-7 col-xs-12" value="">
                              </div>
                  </div>
                 
                        <input type="hidden" name="individual_id" value="<?php echo $tax_notice[0]['individual_id'] ?>">
                        <input type="hidden" name="tax_id" value="<?php echo $tax_notice[0]['tax_id'] ?>">
                        <input type="hidden" name="notice_id" value="<?php echo $tax_notice[0]['notice_id'] ?>">
                        <div class="form-group">
                            <div class="text-center">
                            <br>
                                <button type="submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                                </button>
                                                                
                                <button onclick="window.location.replace('<?php echo site_url('receive/receive_dashborad'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
                                </button>
                            </div>
                        </div>   
                        <hr>
                </div>
            </form>

                  <br>
                  <div class="x_content">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th style="background-color:#2A3F54; color: #FFF;" >ครั้งที่</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">วันที่ชำระ</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">เลขที่ใบเสร็จ</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">เล่มที่ใบเสร็จ</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">ชื่อผู้เสียภาษี</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">จำนวนเงินค่าภาษี</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">จำนวนเงินที่ชำระ</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">เงินเพิ่ม</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">คงเหลือ</th>
                              </tr>
                          </thead>
                              <tbody>
                                <?php foreach ($tax_receive as $key => $value) : ?>
                                  <tr>
                                      <td scope="row" style="text-align: center;"><?php echo $key + 1 ?></td>
                                      <td align="center"><?php echo $this->mydate->date_eng2thai($value['receive_date'], 543, 'S'); ?></td>                                       
                                      <td><?php echo $value['receipt_no'] ?></td>
                                      <td><?php echo $value['receipt_number'] ?></td>
                                      <td><?php echo $value['individual_prename'] . $value['individual_fullname'] ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['amount'], 2); ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['receive_amount'], 2); ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['interest'], 2); ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['balance'], 2); ?></td>
                                  </tr>
                                <?php endforeach; ?>

                              </tbody>
                      </table>
                  </div>

                            </div>
                          </div>
                      </div>

            </div>
          </div>
      </div>


<style>
th{
text-align: center;


}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>




<!-- <script type="text/javascript">
  document.getElementById("receive_amount_tax").onchange = function() {getToset()};
  document.getElementById("receive_amount").onchange = function() {getToset()};
  document.getElementById("interest").onchange = function() {getToset()};
  document.getElementById("total_pay").onchange = function() {getToset()};
  document.getElementById("sum_amount").onchange = function() {getToset()};

  function getToset(){
    
    var tax_amount = $('#tax_amount').val();
        tax_amount = parseFloat(tax_amount.replace(',', ''));

    var interest = $('#interest').val();
        interest = parseFloat(interest.replace(',', ''));

    var total_pay = $('#total_pay').val();
        total_pay = parseFloat(total_pay.replace(',', ''));

    // var receive_amount = $('#receive_amount').val(tax_amount+interest);
    //     receive_amount = parseFloat(receive_amount.replace(',', ''));

    var receive_amount_tax = $('#receive_amount_tax').val(tax_amount+interest);
        receive_amount_tax = parseFloat(receive_amount_tax.replace(',', ''));


    // var sum_amount = $('#sum_amount').val(receive_amount_tax-total_pay);
    //     sum_amount = parseFloat(sum_amount.replace(',', ''));

    
    // var tax_amount = document.getElementById("tax_amount").value;
    // var interest = document.getElementById("interest").value;
    // var total_pay = document.getElementById("total_pay").value;

    // var receive_amount = (tax_amount*1)+(interest*1);
    // document.getElementById("receive_amount").value = receive_amount;

    // $('#receive_amount').val(tax_amount + interest);


    // var sum_amount = (receive_amount*1)-(total_pay*1);
    // document.getElementById("sum_amount").value = sum_amount;

    if((total_pay*1)>(receive_amount*1)){
    alertify.error('จำนวนเงินมากกว่าที่ต้องชำระ');
      document.getElementById("interest").value;
      document.getElementById("receive_amount").value;
      document.getElementById("total_pay").value = '';
      document.getElementById("sum_amount").value = receive_amount;
    }


    if(document.getElementById("sum_amount").value*1==0){
      document.getElementById("btnSubmit").disabled = true;
    }else{
      document.getElementById("btnSubmit").disabled = false;
    }
  }

</script> -->
