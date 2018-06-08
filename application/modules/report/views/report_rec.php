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
                      <h5 class="inline text-right">ข้อมูล ณ วันที่ 11 พฤษภาคม 2561</h5> 
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
                          <!-- <th>ประมาณการรายรับ</th> -->
                          <th>รายรับจริง</th>
                          <th><i class="fa fa-plus"</i>  <i class="fa fa-minus"</i>  </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td><b>หมวดภาษีอากร</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&emsp;&emsp;ภาษีโรงเรือนและที่ดิน</td>
                            <!-- <td align="right">23,000,000.00</td> -->
                            <td align="right">25,528,752.62</td>
                            <td align="right">2,528,752.62</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีบำรุงท้องที่</td>
                          <!-- <td align="right">130,000.00</td> -->
                          <td align="right">180,686.81</td>
                          <td align="right">50,686.81</td>
                        </tr>

                        <tr>
                          <td> &emsp;&emsp;ภาษีป้าย</td>
                          <!-- <td align="right">4,500,000.00</td> -->
                          <td align="right">4,057,128.19</td>
                          <td align="right">-442,871.81</td>
                        </tr>
                        <tr>
                            <td><b>หมวดภาษีจัดสรร</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีสรรพสามิต</td>
                          <!-- <td align="right">2,400,000.00</td> -->
                          <td align="right">3,536,013.95</td>
                          <td align="right">1,136,013.95</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีสุรา</td>
                          <!-- <td align="right">1,400,000.00</td> -->
                          <td align="right">1,467,297.34</td>
                          <td align="right">67,297.34</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีและค่าธรรมเนียมรถยนต์และล้อเลื่อน</td>
                          <!-- <td align="right">700,000.00</td> -->
                          <td align="right">2,145,642.95</td>
                          <td align="right">1,445,642.95</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีมูลค่าเพิ่ม 1 ใน 9</td>
                          <!-- <td align="right">3,300,000.00</td> -->
                          <td align="right">4,154,039.97</td>
                          <td align="right">854,039.97</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีมูลค่าเพิ่ม พรบ. กำหนดแผน</td>
                          <!-- <td align="right">6,000,000.00</td> -->
                          <td align="right">5,914,259.85</td>
                          <td align="right">-85,740.15</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ภาษีธุรกิจเฉพาะ</td>
                          <!-- <td align="right">250,000.00</td> -->
                          <td align="right">503,438.02</td>
                          <td align="right">253,438.02</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมจดทะเบียนสิทธิและนิติกรรม</td>
                          <!-- <td align="right">30,000,000.00</td> -->
                          <td align="right">22,931,025.00</td>
                          <td align="right">-7,068,975.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าภาคหลวงปิโตรเลียม</td>
                          <!-- <td align="right">50,000.00</td> -->
                          <td align="right">45,720.41</td>
                          <td align="right">-4,279.59</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าภาคหลวงธรรมเนียมป่าไม้และสิ่งประดิษฐ์</td>
                          <!-- <td align="right">5,000.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">-5,000.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าภาคหลวงแร่</td>
                          <!-- <td align="right">5,000.00</td> -->
                          <td align="right">59,798.14</td>
                          <td align="right">54,798.14</td>
                        </tr>
                        <tr>
                          <td align="center"><b>รวมรายรับ</b></td>
                          <!-- <td align="right"><b>30,000,000.00</b></td> -->
                          <td align="right"><b>22,931,025.00</b></td>
                          <td align="right"><b>2,052,413.01</b></td>
                        </tr>

                    </tbody>

                    <tbody>
                        <tr>
                          <td><b>หมวดค่าธรรมเนียม ค่าปรับ และใบอนุญาต</b></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมเกี่ยวกับการควบคุมอาคาร</td>
                          <!-- <td align="right">100,000.00</td> -->
                          <td align="right">93,452.40</td>
                          <td align="right">-6,547.60</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าปรับผู้ทำผิดกฎจราจร</td>
                          <!-- <td align="right">400,000.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">-400,000.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมที่เกี่ยวกับสาธารณสุข</td>
                          <!-- <td align="right">200,000.00</td> -->
                          <td align="right">467,170.00</td>
                          <td align="right">267,170.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าใบอนุญาตที่เกี่ยวกับการควบคุมอาคาร</td>
                          <!-- <td align="right">8,000.00</td> -->
                          <td align="right">2,235.00</td>
                          <td align="right">-5,765.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าปรับการผิดสัญญา</td>
                          <!-- <td align="right">50,000.00</td> -->
                          <td align="right">576,260.00</td>
                          <td align="right">526,260.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมและรักษาคุณภาพสิ่งแวดล้อม</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">0.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมทางวิ่งและที่จอดรถยนต์</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">0.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมใบอนุญาตการพนัน</td>
                          <!-- <td align="right">3,000.00</td> -->
                          <td align="right">1,040.00</td>
                          <td align="right">-1,960.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าใบอนุญาตใช้น้ำบาดาล</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">1,760.00</td>
                          <td align="right">1,760.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าธรรมเนียมเกี่ยวกับการทะเบียนราษฎร์</td>
                          <!-- <td align="right">5,000.00</td> -->
                          <td align="right">7,600.00</td>
                          <td align="right">2,600.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าปรับและค่าธรรมเนียมอื่น ๆ </td>
                          <!-- <td align="right">10,000.00</td> -->
                          <td align="right">21,983.00</td>
                          <td align="right">11,983.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าใบอนุญาตขายสุรา</td>
                          <!-- <td align="right">10,000.00</td> -->
                          <td align="right">8,749.40</td>
                          <td align="right">-1,250.60</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าใบอนุญาตตั้งโรงงาน</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">0.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าใบอนุญาตอื่น ๆ </td>
                          <!-- <td align="right">12,000.00</td> -->
                          <td align="right">3,150.00</td>
                          <td align="right">-8,850.00</td>
                        </tr>
                        <tr>
                          <td align="center"><b>รวมรายรับ</b></td>
                          <!-- <td align="right"><b>500,000.00</b></td> -->
                          <td align="right"><b>931,025.00</b></td>
                          <td align="right"><b>352,413.01</b></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                          <td><b>หมวดรายได้จากทรัพย์สิน</b></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ดอกเบี้ยเงินฝากธนาคาร</td>
                          <!-- <td align="right">1,000,000.00</td> -->
                          <td align="right">563,235.95</td>
                          <td align="right">-436,764.05</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าเช่าและบริการสถานที่</td>
                          <!-- <td align="right">100,000.00</td> -->
                          <td align="right">115,700.00</td>
                          <td align="right">15,700.00</td>
                        </tr>
                        <tr>
                          <td align="center"><b>รวมรายรับ</b></td>
                          <!-- <td align="right"><b>1,000,000.00</b></td> -->
                          <td align="right"><b>763,235.95</b></td>
                          <td align="right"><b>352,413.01</b></td>
                        </tr>

                    </tbody>

                    <tbody>
                        <tr>
                          <td><b>หมวดรายได้สาธารณูปโภคและสาธารณสุขฯ</b></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;รายได้จากสาธารณูปโภคอื่น ๆ </td>
                          <!-- <td align="right" >2,800,000.00</td> -->
                          <td align="right" >2,929,435.00</td>
                          <td align="right" >129,435.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;งานแพทย์แผนไทย</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">0.00</td>
                        </tr>
                        <tr>
                          <td align="center"><b>รวมรายรับ</b></td>
                          <!-- <td align="right"><b>2,800,000.00</b></td> -->
                          <td align="right"><b>2,929,435.00</b></td>
                          <td align="right"><b>129,435.00</b></td>
                        </tr>

                    </tbody>

                    <tbody>
                        <tr>
                          <td><b>หมวดรายได้เบ็ดเตล็ด</b></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าขายแบบแปลน</td>
                          <!-- <td align="right">20,000.00</td> -->
                          <td align="right">22,000.00</td>
                          <td align="right">2000.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;ค่าบำรุงศูนย์พัฒนาเด็ก</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">0.00</td>
                          <td align="right">0.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;รายได้เบ็ดเตล็ด</td>
                          <!-- <td align="right">130,000.00</td> -->
                          <td align="right">177,834.01</td>
                          <td align="right">47,834.01</td>
                        </tr>
                        <tr>
                          <td align="center"><b>รวมรายรับ</b></td>
                          <!-- <td align="right"align="right"><b>150,000.00</b></td> -->
                          <td align="right"align="right"><b>300,000.00</b></td>
                          <td align="right"align="right"><b>50,000.00</b></td>
                        </tr>

                    </tbody>

                    <tbody>
                        <tr>
                          <td><b>หมวดเงินอุดหนุน</b></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;เงินอุดหนุนทั่วไป (เงินอุดหนุนตามอำนาจหน้าที่ฯ)</td>
                          <!-- <td align="right" align="right"align="right">31,500,000.00</td> -->
                          <td align="right" align="right"align="right">32,726,055.00</td>
                          <td align="right">1,226,055.00</td>
                        </tr>
                        <tr>
                          <td >&emsp;&emsp;เงินอุดหนุนทั่วไประบุวัตถุประสงค์/เฉพาะกิจ</td>
                          <!-- <td align="right">0.00</td> -->
                          <td align="right">1,898,950.00</td>
                          <td align="right">1,898,950.00</td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                          <td align="center"><b>รวมรายรับ</b></td>
                          <!-- <td align="right"><b>108,088,000.00</b></td> -->
                          <td align="right"><b>110,140,413.01</b></td>
                          <td align="right"><b>2,052,413.01</b></td>
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


