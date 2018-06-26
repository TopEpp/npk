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
                          <!-- <th><i class="fa fa-plus"</i>  <i class="fa fa-minus"</i>  </th> -->
                        </tr>
                      </thead>
                      <tbody>
                          
                                  <tr>
                                    <td><b>หมวดภาษีจัดสรร</b></td>
                                    <td></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมจดทะเบียนสิทธิและนิติกรรม</td>
                                    <?php 
                                    foreach ($tax17 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าภาคหลวงธรรมเนียมป่าไม้และสิ่งประดิษฐ์</td>
                                    <?php 
                                    foreach ($tax19 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ค่าภาคหลวงปิโตรเลียม</td>
                                    <?php 
                                    foreach ($tax18 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าภาคหลวงแร่</td>
                                    <?php 
                                    foreach ($tax20 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ภาษีธุรกิจเฉพาะ</td>
                                    <?php 
                                    foreach ($tax16 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ภาษีมูลค่าเพิ่ม 1 ใน 9</td>
                                    <?php 
                                    foreach ($tax14 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ภาษีมูลค่าเพิ่ม พ.ร.บ กำหนดแผน</td>
                                    <?php 
                                    foreach ($tax15 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ภาษีสรรพสามิต</td>
                                    <?php 
                                    foreach ($tax11 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                   <tr>
                                    <td>&emsp;&emsp;ภาษีสุรา</td>
                                    <?php 
                                    foreach ($tax12 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ภาษีและค่าธรรมเนียมรถยนต์และล้อเลื่อน</td>
                                    <?php 
                                    foreach ($tax13 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                
                                  <tr>
                                    <td><b>หมวดค่าธรรมเนียม ค่าปรับ และใบอนุญาต</b></td>
                                    <td></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมทางวิ่งและที่จอดรถยนต์</td>
                                    <?php 
                                    foreach ($tax27 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมที่เกี่ยวกับสาธารณสุข</td>
                                    <?php 
                                    foreach ($tax23 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมเกี่ยวกับการควบคุมอาหาร</td>
                                    <?php 
                                    foreach ($tax21 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมเกี่ยวกับการทะเบียนราษฎร์</td>
                                    <?php 
                                    foreach ($tax30 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมและรักษาคุณภาพสิ่งแวดล้อม</td>
                                    <?php 
                                    foreach ($tax26 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าธรรมเนียมใบอนุญาตการพนัน</td>
                                    <?php 
                                    foreach ($tax28 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าปรับการผิดสัญญา</td>
                                    <?php 
                                    foreach ($tax25 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าปรับผู้ทำผิดกฎจราจร</td>
                                    <?php 
                                    foreach ($tax22 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าปรับและค่าธรรมเนียมอื่นๆ</td>
                                    <?php 
                                    foreach ($tax31 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าใบอนุญาตขายสุรา</td>
                                    <?php 
                                    foreach ($tax32 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                   <tr>
                                    <td>&emsp;&emsp;ค่าใบอนุญาตตั้งโรงงาน</td>
                                    <?php 
                                    foreach ($tax33 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าใบอนุญาตอื่นๆ</td>
                                    <?php 
                                    foreach ($tax34 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ค่าใบอนุญาติที่เกี่ยวกับการควบคุมอาหาร</td>
                                    <?php 
                                    foreach ($tax24 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ค่าใบอนุญาตใช้น้ำบาดาล</td>
                                    <?php 
                                    foreach ($tax29 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td><b>หมวดรายได้จากทรัพย์สิน</b></td>
                                    <td></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;ค่าเช่าและบริการสถานที่</td>
                                    <?php 
                                    foreach ($tax36 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;ดอกเบี้ยเงินฝากธนาคาร</td>
                                    <?php 
                                    foreach ($tax35 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td><b>หมวดรายได้สาธารณูปโภคและสาธารณสุขฯ</b></td>
                                    <td></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>&emsp;&emsp;งานแพทย์แผนไทย</td>
                                    <?php 
                                    foreach ($tax38 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;งานโรงพยาบาล</td>
                                    <?php 
                                    foreach ($tax39 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

                                  <tr>
                                    <td>&emsp;&emsp;รายได้จากสาธารณูปโภคอื่นๆ</td>
                                    <?php 
                                    foreach ($tax37 as $key => $value) { ?>
                                    <td align="right"><?php echo number_format($value->sum_amount, 2); ?></td> 
                                    <?php 
                                  } ?> 
                                  </tr>

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


