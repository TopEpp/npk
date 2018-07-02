 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
                          <h5 class="inline text-right">ข้อมูล ณ วันที่ 11 พฤษภาคม 2561</h5> 
                    </div>

                
              <div class="col-md-1 col-sm-6 col-xs-12">
              </div>
              <div class="conteiner-fluid ">
                     <div class="row x_content">
                     <div class="col-sm-6">
                    <table class="table table-bordered jambo_table">
                        <thead>
                       <tr>

                        <td align="center">ชื่อภาษี</td>
                        <td align="center">จำนวนเงิน</td>
                        <td align="center">เงินเพิ่ม</td>
                        <td align="center">รวม</td>
                      
                       </tr>

                      </thead>
                      <tbody>

                    <tr>
                        <?php 
                              $test = 0;
                              $test2 = 0;
                              $test3 = 0;

                              foreach ($parentTax as $key => $value) { 

                                $tax1 = $value->tax_name;

                              

                              foreach ($parentTax1 as $key => $value1) {
                              
                                $tax2 = $value1->tax_name;
                              
                           
                      if ($tax1 == $tax2)  {
                                $tax = $value->notice_estimate - $value1->receive_amount;
                     

                              
                        ?>

                        <td style="width: 23%; text-align:center"><?php echo $tax1; ?></td>
                       <td style="width: 12%; text-align:right"><?php  echo number_format($tax,2);?></td> 
                        <td style="width: 12%; text-align:right"><?php  echo number_format ($value1->interest,2);?></td> 
                      <td style="width: 12%; text-align:right"><?php  echo number_format (($tax+$value1->interest),2);?></td>
                        
        
                  </tr>
                   <?php
                              $test = $test + ($tax+$value1->interest);
                              $test2 = $test2 + $value1->interest;
                              $test3 = $test3 + $tax;


                    
                          }
                          
                          }
                      
                          } 


                        ?>
                      </tbody> 
                        
                   <tr> 
                        <th style="width: 23%; text-align:center">รวม</th>
                        <th style="width: 12%; text-align:right"><?php echo number_format($test3,2); ?></th>
                        <th style="width: 12%; text-align:right"><?php echo number_format($test2,2); ?></th>
                        <th style="width: 12%; text-align:right"><?php echo number_format($test,2); ?></th>
                    </tr>

                   

                       
                    </table>
                </div>  
                    <div class="col-sm-6"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                  <a class="btn btn-default btn-xs" id="chart_download" download="ChartJpg.jpg"><i class="fa fa-file-image-o"></i> Download</a>
                    <div >
                    <canvas id="chart_debt"></canvas>
                    </div>
              </div>

                 </div>
                    </div>

              <div class="col-md-1 col-sm-6 col-xs-12">
              </div>
              
               <div class="x_content">
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
                            <tr>
                                <td align="center">1</td>
                                <td align="center">8396269419703</td>
                                <td>สมบูรณ์ เอื้ออัชฌาสัย</td>
                                <td align="right">3,000.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">3200.00</td>
                            </tr>
                            <tr>
                                <td align="center">2</td>
                                <td align="center">1756043006342</td>
                                <td>ชูศักดิ์  เกียรติเฉลิมคุณ</td>
                                <td align="right">3,000.00</td>
                                <td align="right">0.00</td>
                                <td align="right">100.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">3100.00</td>
                            </tr>
                            <tr>
                                <td align="center">3</td>
                                <td align="center">7872035432812</td>
                                <td>ดำรงค์  ปคุณวานิช</td>
                                <td align="right">4,600.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">4800.00</td>
                            </tr>
                            <tr>
                                <td align="center">4</td>
                                <td align="center">3899846161597</td>
                                <td>นุปกรณ์ หาญภูวดล</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                            </tr>
                            <tr>
                                <td align="center">5</td>
                                <td align="center">1853922756311</td>
                                <td>สมหวัง จตุรงค์ล้ำเลิศ</td>
                                <td align="right">2,200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">2,200.00</td>
                            </tr>
                            <tr>
                                <td align="center">6</td>
                                <td align="center">4010791379607</td>
                                <td>พงษ์ศัก คงมา</td>
                                <td align="right">6,200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">6,400.00</td>
                            </tr>
                            <tr>
                                <td align="center">7</td>
                                <td align="center">3899846161597</td>
                                <td>พรมภิราช พันธุ์ยุลา</td>
                                <td align="right">2,200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">2,200.00</td>
                            </tr>
                            <tr>
                                <td align="center">8</td>
                                <td align="center">1347035378265</td>
                                <td>เพชร ยินดีรัมย์</td>
                                <td align="right">2,200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">2,200.00</td>
                            </tr>
                            <tr>
                                <td align="center">9</td>
                                <td align="center">9585701591998</td>
                                <td>บจ.ตวงศิริโฮลดิ้ง จำกัด</td>
                                <td align="right">2,200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">2,200.00</td>
                            </tr>
                            <tr>
                                <td align="center">10</td>
                                <td align="center">4475486542975</td>
                                <td>บจ.ห้างทองอรุณชัย จำกัด</td>
                                <td align="right">2,200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">0.00</td>
                                <td align="right">200.00</td>
                                <td align="right">0.00</td>
                                <td align="right">2,200.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td align="right"><b>27,800.00</b></td>
                                <td align="right"><b>0.00</b></td>
                                <td align="right"><b>300.00</b></td>
                                <td align="right"><b>0.00</b></td>
                                <td align="right"><b>16,000.00</b></td>
                                <td align="right"><b>0.00</b></td>
                                <td align="right"><b>28,700.00</b></td>
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
      


