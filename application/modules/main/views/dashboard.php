        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <!-- /top tiles -->
          <br />
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-shirtsinbulk"></i> ยุทธศาสตร์</span>
              <div class="count"><?= number_format($sum_project_training);?></div>
              <span class="count_bottom"> (บาท)</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-database"></i> บัญชีรายรับ</span>
              <div class="count green">55,532,447</div>
              <span class="count_bottom"> (บาท)</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-paypal"></i> บัญชีรายจ่าย</span>
              <div class="count red">31,500,000</div>
              <span class="count_bottom"> (บาท)</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> ลูกหนี้ค้างชำระ</span>
              <div class="count">28,700</div>
              <span class="count_bottom"> (บาท)</span>
            </div>
          </div>

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>บัญชีรายรับ <small>ข้อมูล ณ วันที่ 11 พฤษภาคม 2561</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="receive_main" style="width: 354px; height: 177px;" width="354" height="130"></canvas>
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>บัญชีรายจ่าย <small>ข้อมูล ณ วันที่ 11 พฤษภาคม 2561</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="expenditure_main" style="width: 354px; height: 177px;" width="354" height="130"></canvas>
                  </div>
                </div>
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>บัญชีรายรับ<small>ข้อมูล ณ วันที่ 11 พฤษภาคม 2561</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">หมวดรายได้</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">รายเดือน</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <div class="x_content">
                            <table class="table">
                              <thead>
                                <tr>
                                  
                                  <th style="width: 250px;">หมวดรายได้</th>
                                  <th style="width: 276px; text-align: right;">รายรับจริง</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  
                                  <td>หมวดภาษีอากร</td>
                                  <td style="text-align: right;">5,886,022.31</td>
                                </tr>
                                <tr>
                                  
                                  <td>หมวดภาษีจัดสรร</td>
                                  <td style="text-align: right;">20,931,025.00</td>
                                </tr>
                                <tr>
                                  
                                  <td>หมวดค่าธรรมเนียม ค่าปรับ และใบอนุญาต</td>
                                  <td style="text-align: right;">2,235,487.00</td>
                                </tr>
                                <tr>
                                  
                                  <td>หมวดรายได้จากทรัพย์สิน</td>
                                  <td style="text-align: right;">363,235.95</td>
                                </tr>
                                <tr>
                                  
                                  <td>หมวดรายได้สาธารณูปโภคและสาธารณสุขฯ</td>
                                  <td style="text-align: right;">1,673,215.00</td>
                                </tr>
                                <tr>
                                  
                                  <td>หมวดรายได้เบ็ดเตล็ด</td>
                                  <td style="text-align: right;">236,658.40</td>
                                </tr>   
                                <tr>
                                  
                                  <td>หมวดเงินอุดหนุน</td>
                                  <td style="text-align: right;">33,636,024.21</td>
                                </tr>  
                                <tr>
                                  <th style="width: 250px;">รวมรายรับทั้งสิ้น</th>
                                  <th style="width: 276px; text-align: right;">55,532,447.34</th>
                                </tr>                       
                              </tbody>
                            </table>
                          </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div class="x_content">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width: 250px;">เดือน</th>
                                  <th style="width: 276px; text-align: right;">รายรับจริง</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>ตุลาคม</td>
                                  <td style="text-align: right;">506,761.63</td>
                                </tr>  
                                <tr>
                                  <td>พฤศจิกายน</td>
                                  <td style="text-align: right;">2,640,413.01</td>
                                </tr>  
                                <tr>
                                  <td>ธันวาคม</td>
                                  <td style="text-align: right;">23,776,773.77</td>
                                </tr>  
                                <tr>
                                  <td>มกราคม</td>
                                  <td style="text-align: right;">13,931,025.00</td>
                                </tr>
                                <tr>
                                  <td>กุมภาพันธ์</td>
                                  <td style="text-align: right;">631,025.00</td>
                                </tr>
                                <tr>
                                  <td>มีนาคม</td>
                                  <td style="text-align: right;">2,563,235.95</td>
                                </tr>
                                <tr>
                                  <td>เมษายน</td>
                                  <td style="text-align: right;">6,169,317.93</td>
                                </tr>
                                <tr>
                                  <td>พฤษภาคม</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>  
                                <tr>
                                  <td>มิถุนายน</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>   
                                <tr>
                                  <td>กรกฎาคม</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>
                                <tr>
                                  <td>สิงหาคม</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>  
                                <tr>
                                  <td>กันยายน</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>
                                <tr>
                                  <th style="width: 250px;">รวมรายรับทั้งสิ้น</th>
                                  <th style="width: 276px; text-align: right;">55,532,447.34</th>
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

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>บัญชีรายจ่าย<small>ข้อมูล ณ วันที่ 11 พฤษภาคม 2561</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content3" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">รายเดือน</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="home-tab">
                          <div class="x_content">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width: 250px;">เดือน</th>
                                  <th style="width: 276px; text-align: right;">รายจ่าย</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>ตุลาคม</td>
                                  <td style="text-align: right;">1,506,761.63</td>
                                </tr>  
                                <tr>
                                  <td>พฤศจิกายน</td>
                                  <td style="text-align: right;">2,640,413.01</td>
                                </tr>  
                                <tr>
                                  <td>ธันวาคม</td>
                                  <td style="text-align: right;">3,776,773.77</td>
                                </tr>  
                                <tr>
                                  <td>มกราคม</td>
                                  <td style="text-align: right;">13,931,025.00</td>
                                </tr>
                                <tr>
                                  <td>กุมภาพันธ์</td>
                                  <td style="text-align: right;">631,025.00</td>
                                </tr>
                                <tr>
                                  <td>มีนาคม</td>
                                  <td style="text-align: right;">563,235.95</td>
                                </tr>
                                <tr>
                                  <td>เมษายน</td>
                                  <td style="text-align: right;">169,317.93</td>
                                </tr>
                                <tr>
                                  <td>พฤษภาคม</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>  
                                <tr>
                                  <td>มิถุนายน</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>   
                                <tr>
                                  <td>กรกฎาคม</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>
                                <tr>
                                  <td>สิงหาคม</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>  
                                <tr>
                                  <td>กันยายน</td>
                                  <td style="text-align: right;">0.00</td>
                                </tr>
                                <tr>
                                  <th style="width: 250px;">รวมรายจ่ายทั้งหมด</th>
                                  <th style="width: 276px; text-align: right;">31,500,000.00</th>
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

        </div>
        <!-- /page content -->

