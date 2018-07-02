<div class="right_col" role="main">
            <section class="row">
                  <div class="col-md-8 col-sm-4 col-xs-4">
                      <h3>ข้อมูลบันทึกรายรับ</h3>
                  </div>
                  <div class="col-md-4 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                        <button style="width: 101px;" onclick="window.location.replace('receive/receive_tax_pay');" type="button" class="btn btn-success" title="ชำระภาษี"><i class="fa fa-paypal"></i> ชำระภาษี
                        </button>
                      </div>
                  </div>
            </section>
          

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" style="top: 10px;">          
               <div class="x_content">
                  <table id="myTable" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <th style="width: 30px;">ลำดับ</th>
                          <th>วันที่ชำระ</th>
                          <th>เลขประจำตัวผู้เสียภาษี</th>
                          <th>ชื่อผู้เสียภาษี</th>
                          <th>หมวดรายได้</th>
                          <th>จำนวนเงินที่ประเมิน (บาท)</th>
                          <th>จำนวนเงินที่ชำระ (บาท)</th>
                          <th style="width: 120px;">เครื่องมือ</th>
                        </tr>
                      </thead>
                      <tbody>
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
      
