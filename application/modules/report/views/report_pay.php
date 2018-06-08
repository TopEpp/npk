<div class="right_col" role="main">
          <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายงานบัญชีรายจ่าย</h3>
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
              
              <div class="col-md-10 col-sm-12 col-xs-12">
                  <a class="btn btn-default btn-xs" id="chart_download" download="ChartJpg.jpg"><i class="fa fa-file-image-o"></i> Download</a>
                  <canvas id="report_pay"></canvas>
              </div>

              <div class="col-md-1 col-sm-6 col-xs-12">
              </div>
              
              

            <div class="clearfix"></div>
            <div class="ln_solid"></div>
              <div class="x_content">
                      <div class="form-group">
                          <div class="col-md-3 col-sm-3 col-xs-12" style="padding-left: 0px;">
                                <select id="colorselector" class="form-control" data-hide-disabled="true" data-live-search="true">
                                          <option value="Jan">มกราคม</option>
                                          <option value="Feb">กุมภาพันธ์</option>
                                          <option value="Mar">มีนาคม</option>
                                          <option value="Apr">เมษายน</option>
                                          <option value="May">พฤษภาคม</option>
                                          <option value="Jun">มิถุนายน</option>
                                          <option value="Jul">กรกฎาคม</option>
                                          <option value="Aug">สิงหาคม</option>
                                          <option value="Sep">กันยายน</option>
                                          <option value="Oct">ตุลาคม</option>
                                          <option value="Nov">พฤศจิกายน</option>
                                          <option value="Dec">ธันวาคม</option>                                    
                                </select>
                              <br>
                          </div>
                      </div>           
                      
                                  <!-- Jan -->
                    <div class="form-group type-value" id="Jan" style="margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover"><!--table table-bordered jambo_table  -->
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>                 
                        </tbody>
                      </table>
                    </div>

                                <!-- Feb -->
                    <div class="form-group type-value" id="Feb" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                                <!-- Mar -->
                    <div class="form-group type-value" id="Mar" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="form-group type-value" id="Apr" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="form-group type-value" id="May" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="form-group type-value" id="Jun" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="form-group type-value" id="Jul" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="form-group type-value" id="Aug" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="form-group type-value" id="Sep" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>           

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!-- Oct -->
                    <div class="form-group type-value" id="Oct" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>         

                          </tr>
                        </thead>
                        <tbody>                  
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!-- Nov -->
                    <div class="form-group type-value" id="Nov" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>         

                          </tr>
                        </thead>
                        <tbody>                  
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!-- Dec -->
                    <div class="form-group type-value" id="Dec" style="display:none; margin-bottom: 0px;">
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>แผนงาน / โครงการ</th>                  
                            <th>เบิกจ่าย</th>         

                          </tr>
                        </thead>
                        <tbody>                  
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิเคราะห์นโยบายและแผน</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอ่างเก็บน้ำสวนสาธารณะ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการจัดทำงบประมาณ</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;&emsp;- โครงการวิจัยและประเมินผล</td>
                            <td align="right"><?php echo number_format(10000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานการบริหารทรัพยากรบุคคล</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
                          </tr>
                          <tr>
                            <td>&emsp;&emsp;<b>แผนงานอุโมงค์ลดโลกร้อน</b></td>
                            <td align="right"><?php echo number_format(50000, 2); ?></td>               
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
</div>

<style>
th{
text-align: center;
background-color:#2A3F54;
color: #FFF;
}


</style>
      


