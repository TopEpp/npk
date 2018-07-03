 <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

<div class="right_col" role="main">
        <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายงานลูกหนี้ค้างชำระ</h3>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                          <button type="button" class="btn btn-success" title="กรองข้อมูล"><i class="glyphicon glyphicon-filter"> </i> ตัวกรอง
                          </button>
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
                          <h5 class="inline text-right">ข้อมูล ณ วันที่ <?php echo $this->mydate->date_eng2thai(date('Y-m-d'),543,'S')?></h5> 
                    </div>
                 </div>
                </div>
              
               <div class="x_content">
                <?php echo '<pre>'; print_r($data);?>
                 <br>
                    <table class="table table-bordered jambo_table">
                        <thead>
                        <tr> 
                            <th colspan="10" >หมวดรายได้ </th>
                                <tr>
                                    <th style="width: 5%; vertical-align: middle;" rowspan="2" data-defaultsign="nospan" >ลำดับ</th>
                                    <th style="width: 15%; vertical-align: middle;" rowspan="2" data-defaultsign="nospan">เลขประจำตัวผู้เสียภาษี</th>
                                    <th style=" width: 20%; vertical-align: middle;" rowspan="2" data-defaultsign="nospan">ชื่อ - สกุล</th>
                                    <th colspan="2" style="text-align: center;">ภาษีโรงเรือนและที่ดิน</th>
                                    <th colspan="2" style="text-align: center;">ภาษีบำรุงท้องที่</th>
                                    <th colspan="2" style="text-align: center;">ภาษีป้าย</th>
                                    <th style="width: 12%; vertical-align: middle;" rowspan="2" data-defaultsign="nospan">รวม</th>
                                </tr>
                       </tr>
                            <tr>
                              <th style="width: 7%;">จำนวนเงิน</th>
                              <th style="width: 7%;">เงินเพิ่ม</th>
                              <th style="width: 7%;">จำนวนเงิน</th>
                              <th style="width: 7%;">เงินเพิ่ม</th>
                              <th style="width: 7%;">จำนวนเงิน</th>
                              <th style="width: 7%;">เงินเพิ่ม</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  foreach ($data as $key => $value) { ?>

                            <?php } ?>
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
background-color:#2A3F54;
color: #FFF;
}


</style>
      


