<div class="right_col" role="main">
          <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายงานบัญชีรายรับ</h3>
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
                      <h5 class="inline text-right">ข้อมูล ณ 
                        <?php
                        echo "<meta charset='utf-8'>";
                        function ThDate()
                        {
                              //เดือนภาษาไทย
                          $ThMonth = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                              
                              //กำหนดคุณสมบัติ
                          $week = date("w"); // ค่าวันในสัปดาห์ (0-6)
                          $months = date("m") - 1; // ค่าเดือน (1-12)
                          $day = date("d"); // ค่าวันที่(1-31)
                          $years = date("Y") + 543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

                          return "วันที่ $day  
                                      $ThMonth[$months] 
                                      $years";
                        }

                        echo ThDate(); // แสดงวันที่ 

                        ?>
                      
                      </h5> 
                  </div>

              <div class="col-md-1 col-sm-6 col-xs-12">
              </div>
              
              <div class="col-md-10 col-sm-12 col-xs-12">
                  <a class="btn btn-default btn-xs" id="chart_download" download="ChartJpg.jpg"><i class="fa fa-file-image-o"></i> Download</a>
                  <canvas id="report_receive"></canvas>
              </div>

              <div class="col-md-1 col-sm-6 col-xs-12">
              </div>
              
              


               <div class="x_content">
                 <br>
                 <table class="table table-bordered jambo_table">
                      <thead>
                        <tr>
                          <th>รายการ</th>
                          <th>รายรับจริง</th>

                        </tr>

                      </thead>
                      <tbody>
                          <tr>
                            <td>55</td>
                          </tr>
                           <?php  
                          foreach ($getrec as $key => $value) { 
                        ?>
                          <tr>
                         <td style="width: 23%; text-align:center; font-weight:700"><?php echo $value->tax_name;?></td>
                         </tr>

                      <?php }?>
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


