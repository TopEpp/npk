
<div class="right_col" role="main">
          <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายงานบัญชีรายจ่าย</h3>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                          <!-- <button type="button" class="btn btn-success" title="กรองข้อมูล"><i class="glyphicon glyphicon-filter"> </i> ตัวกรอง
                          </button> -->
                          <button type="button" class="btn btn-success" title="ส่งออกข้อมูล"> <i class="fa fa-upload"> </i> ส่งออกข้อมูล
                          </button>
                          <button type="button" class="btn btn-success" title="พิมพ์"> <i class="glyphicon glyphicon-print"> </i> พิมพ์
                          </button>
                      </div>
                  </div>
          </section>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" style="top: 10px;">
                  <div class="col-xs-12 ">
                      <h5 class="inline text-right">ข้อมูล ณ วันที่ 
                        <?php echo $this->mydate->date_eng2thai(date('Y-m-d'),543,'S')?></h5> 
                  </div>

              
          
               <div class="x_content">
                 <div style="text-align: center;">
                   <h2>สรุปการใช้จ่ายเงินงบประมาณ <?php echo $this->session->userdata('year')+543?></h2>
                 </div>
                 <br>
                 <table class="table table-bordered jambo_table">
                      <thead>
                        <tr>
                          <th>แผนงาน</th>
                          <!-- <th>ประมาณการรายรับ</th> -->
                          <th width="8%">ตั่งไว้</th>
                          <th width="8%">โอนลด</th>
                          <th width="8%">โอนเพิ่ม</th>
                          <th width="8%">รวมถือจ่าย</th>
                          <th width="8%">ใช้ไป</th>
                          <th width="8%">คาดว่าจะใช้</th>
                          <th width="8%">คงเหลือ</th>
                        </tr>
                      </thead>
                      <?= $project; ?>
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
background-color:#2A3F54;
color: #FFF;
}


</style>

