
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
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">ผู้เสียภาษี
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo ($tax_notice[0]['individual_prename'] . $tax_notice[0]['individual_firstname'] . " " . $tax_notice[0]['individual_lastname']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">เลขประจำตัวผู้เสียภาษี
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['individual_number'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">ประเภทผู้เสียภาษี
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['tax_type_name'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">เบอร์โทรศัพท์
                                    </label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['individual_phone'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                            <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="id_tax">ที่อยู่
                                    </label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <p class="control"><?php echo $tax_notice[0]['individual_address'] . " " . " หมู่" . " " . $tax_notice[0]['individual_village'] . " " . " ตำบล" . $tax_notice[0]['area_name_th'] ?></p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <hr>
                    

            <form action="<?php echo base_url('receive/recieve_tax_add_local') ?>" method="post">
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
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">จำนวนเงินที่ต้องชำระ
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" placeholder="0.00" id="tax_amount" disabled class="numeric form-control col-md-7 col-xs-12" value="<?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>">
                              </div>
                  </div>

                  <div class="form-group">
                         <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">จำนวนเงินที่ชำระ
                            <span class="required" style="color:red"> *</span>
                         </label>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <input type="text" placeholder="0.00" id="receive_amount" name="receive_amount" class="numeric form-control col-md-7 col-xs-12" value="<?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>">
                             </div>
                 </div>

                  <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">เงินเพิ่ม
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" id="interest" name="interest" value="0.00" class="numeric form-control col-md-7 col-xs-12">
                              </div>
                  </div>

                  <div class="form-group">
                          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">รวม
                          </label>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                  <input type="text" id="sum_amount" name="sum_amount" value="0.00" readonly class="numeric form-control col-md-7 col-xs-12">
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
                                                                
                                <button onclick="window.location.replace('<?php echo site_url('receive/search_tax_local'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
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
                                  <th style="background-color:#2A3F54; color: #FFF;">เลขที่</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">เล่มที่</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">หมวดรายได้</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">ชำระแล้ว</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">เงินเพิ่ม</th>
                                  <th style="background-color:#2A3F54; color: #FFF;">รวม</th>
                              </tr>
                          </thead>
                              <tbody>
                                <?php foreach ($tax_receive as $key => $value) : ?>
                                  <tr>
                                      <td scope="row" style="text-align: center;"><?php echo $key + 1 ?></td>
                                      <td style="text-align: center;"><?php echo $value['receive_date'] ?></td>
                                      <td><?php echo $value['receipt_no'] ?></td>
                                      <td><?php echo $value['receipt_number'] ?></td>
                                      <td><?php echo $value['tax_name'] ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['receive_amount'], 2); ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['interest'], 2); ?></td>
                                      <td style="text-align: right;"><?php echo number_format($value['sum_amount'], 2); ?></td>
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

<div class="modal" id="myModalAlert" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">การแจ้งเตือน!</h4>
        </div>
        <div class="modal-body">
            <center>
                <h5>จำนวนเงินมากกว่าที่ต้องชำระ</h5>
            </center>
        </div>
      </div>
      
    </div>
  </div>
        <!-- <div id="myModalAlert" class="modal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h5>จำนวนเงินมากกว่าที่ต้องชำระ</h5>
                </div>
            </div>
        </div> -->


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
<script type="text/javascript">
  document.getElementById("receive_amount").onchange = function() {getToset()};
  document.getElementById("interest").onchange = function() {getToset()};
  document.getElementById("sum_amount").value = <?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>;

  function getToset(){
    var tax_amount = document.getElementById("tax_amount").value;
    var interest = document.getElementById("interest").value;
    var receive_amount = document.getElementById("receive_amount").value;
    var sum_all = (interest*1)+(receive_amount*1);
    document.getElementById("sum_amount").value = sum_all;

    if((receive_amount*1)>(tax_amount*1)){
      modal.style.display = "block";
      document.getElementById("interest").value = "0.00";
      document.getElementById("receive_amount").value = <?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>;
      document.getElementById("sum_amount").value = <?php echo $tax_notice[0]['notice_estimate'] - $tax_notice[0]['tax_amount'] ?>;
    }

    if(document.getElementById("sum_amount").value*1==0){
      document.getElementById("btnSubmit").disabled = true;
    }else{
      document.getElementById("btnSubmit").disabled = false;
    }
  }

var modal = document.getElementById('myModalAlert');
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// check potection expenditure in
	$('#btn-submit').click(function(){

		if ($("input[name='receipt_no']").val() == '') {
			alertify.error('กรุณาระบุ เลขที่ใบเสร็จ');
			$("input[name='receipt_no']").focus();
			return false;
		}
		if ($("input[name='receipt_number']").val() == '') {
			alertify.error('กรุณาระบุ เล่มที่ใบเสร็จ');
			$("input[name='receipt_number']").focus();
			return false;
        }
        if ($("input[name='receive_date']").val() == '') {
			alertify.error('กรุณาระบุ วันที่รับ');
			$("input[name='receive_date']").focus();
			return false;
        }
        if ($("input[name='receive_amount']").val() == '') {
			alertify.error('กรุณาระบุ จำนวนภาษี');
			$("input[name='receive_amount']").focus();
			return false;
		}
    });
</script>
