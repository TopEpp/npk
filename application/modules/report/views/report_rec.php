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
                  <div class="container-fluid">
                      <div class="row-container">
                        <div class="col-sm-6">
                          <h1></h1>
                      </div> 

                  <div class="col-sm-6"></div> 
                             <div class="col-md-6 col-sm-12 col-xs-12">
                  <a class="btn btn-default btn-xs" id="chart_download" download="ChartJpg.jpg"><i class="fa fa-file-image-o"></i> Download</a>
                    <div >
                    <canvas id="report_receive"></canvas>
                    </div>
              </div>

                       </div>
                       </div>    

            
              
        

               <div class="x_content">
                 <br>
                 <table class="table table-bordered jambo_table">
                      <thead>
                        <tr>
                          <th style="width:25%">รายการ</th>
                          <th style="width:25%">ประมานการรายรับ</th>
                          <th style="width:25%">รายรับจริง</th>
                          <th style="width:25%">+สูง -ต่ำ</th>
                        </tr>

                      </thead>
                      <tbody>
                        <?php foreach ($getrec[0] as $key => $title) { ?>

                          <tr>
                            <td style="width: 23%; font-weight:700"> <?php  echo $title->tax_name; ?></td>
                            <td></td>
                          </tr>

                           <?php  

                             $test = 0;
                              $test2 = 0;
                              $test3 = 0;
                          foreach ($getrec[$title->tax_id] as $key => $title2) {

                            $tax1 = $title2->tax_name;


                          foreach ($getTax1[$title->tax_id] as $key => $title3) {

                            $tax2 = $title2->tax_name;


                            if ($tax1 == $tax2) {

                              $tax = $title3->tax_estimate - $title2->receive_amount;


                             ?>
                             
                      

                          <tr>
                         <td><?php echo $title2->tax_name;?></td>              
                         <td style="text-align:right"><?php echo number_format ($title3->tax_estimate,2);?></td> 
                         <td style="text-align:right"><?php echo number_format ($title2->receive_amount,2);?></td>      
                         <td style="text-align:right"><?php echo number_format ($tax,2);?></td>     
                                   
                         </tr>


                      <?php }
                            }
                            }
                            }
                          
                            
                          

                      ?>
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


