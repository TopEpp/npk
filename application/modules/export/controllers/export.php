<?php
class export extends My_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->excel = ($this->input->get('type') == "pdf") ? false : true;
        $this->load->library('ExportExcel');
        $this->load->library('ExportPdf');
        $this->load->model('export_model');

    }

    public function gat1($id = '')
    {

        $gat1 = $this->export_model->getTaxNotice($id);

        $date = explode('-', $gat1['notice_date']);
        $budget = explode('.', $gat1['notice_estimate']);

        $content = '<table border="0" style="width:100%;" >

            <tr>
              <td colspan="3" style="text-align: right;" >26-30-02</td>
            </tr>
            <tr>
              <td style="width: 5%">ภ.ป. ๓<br><br><b>หนังสือแจ้งการประเมิน</b><br><br></td>
              <td style="text-align: left;"> <img src="assets/images/unnamed.jpg" style="width: 100px;margin-left: 170px;">  </td>
            </tr>
            <tr>
              <td style="width: 25%">
                    ที่ .............../...............
              </td>
              <td>&nbsp;</td>
              <td style="text-align: right; ">เทศบาลตำบลหนองป่าครั่ง<br><br>อ.เมือง จ.เชียงใหม่ ๕๐๐๐๐ </td >
            </tr>

            <tr>
            <br>
              <td colspan="3"><br>เรื่อง  แจ้งการประเมิน ' . " " . ' ' . $gat1['tax_name'] . '<br><br> เรียน ' . " " . ' ' . $gat1['individual_fullname'] . '</td>
            </tr>
            <tr>
              <td colspan="3" style="text-align: center;"><br><br>ตามที่ท่านได้ยื่นแบบแสดงรายการ' . " " . ' ' . $gat1['tax_name'] . ' ไว้ตามแบบ ภ.ป. ๑
              เลขรับที่' . " " . '    ' . $this->mydate->conv_th_digit($gat1['notice_number']) . '/' . "" . '    ' . $this->mydate->conv_th_digit($gat1['tax_year'] + 543) . '
            </tr>
            <tr>
              <td colspan="3" style="width:20%;"><br>
              ลงวันที่' . " " . $this->mydate->conv_th_digit($date[2]) . ' เดือน ' . $this->mydate->getMonthname($date[1] * 1) . ' พ.ศ. ' . $this->mydate->conv_th_digit($date[0] + 543) . '   ไว้ นั้น
            </tr>
            <tr>
              <td colspan="3" style="text-align: center;"><br>บัดนี้ พนักงานเจ้าหน้าที่ได้ทำการประเมินเสร็จแล้ว เป็นเงิน

              ' . " " . ' ' . $gat1['tax_name'] . '  ' . "  " . ' ' . $this->mydate->conv_th_digit(number_format($budget[0])) . ' บาท
            </tr>
            <tr>
              <td colspan="3" style="width:10px;"><br>
              ' . " " . ' ' . $this->mydate->conv_th_digit(number_format($budget[1])) . ' สตางค์ และเงินเพิ่ม.......................บาท.......................สตางค์ รวมทั้งสิ้นเป็นเงิน......................บาท
            </tr>
            <tr>
              <td colspan="3" style="width:10px;"><br>
              .......................สตางค์ โปรดนำเงินจำนวนดังกล่าวไปชำระภายใน ๑๕ วัน นับตั้งแต่วันที่ได้รับหนังสือนี้
              หากพ้นกำหนด<br><br>จะต้องเสียเงินเพิ่มตามกฏหมาย
            </tr>
            <tr>
            <td></td>
            <td style="width:10px;"></td>
            <td style="text-align: center;"><br><br><br><br>  ขอแสดงความนับถือ (อย่างสูง)
            <br><br><br>................................................................ <br><br> (................................................................) <br><br> พนักงานเจ้าหน้าที่ </td>
          </tr>
          <tr>
            <td colspan="3" style="text-align: center;"><br><b><u>ใบรับ ภ.ป.๓</u></b></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align: left;"><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้า............................................อยู่บ้านเลขที่.......................................ตรอก...................................... <br><br>
            ซอย...........................................ถนน.................................หมู่ที่...........................ตำบล......................................... <br><br>
            อำเภอ.........................................จังหวัด................................เกี่ยวข้องเป็น...............................................................<br/><br/>
            กับเจ้าของป้าย ได้รับ ภ.ป.๓ ที่.............../๒๕........................... ลงวันที่............................เดือน..............................<br/><br>
            พ.ศ. ๒๕...................ไว้แล้ว แต่วันที่....................พ.ศ........................
            <br/><br/><br/><br/>
            </td>
          </tr>
          <tr>
          <td colspan="3" style="text-align: center;">
            ลงชื่อ...................................................ผู้รับ ลงชื่อ.............................................ผู้ส่ง
            </td>
          </tr>
          </table>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        $this->exportpdf->exportFhtml($dataExport);

    }

    public function gat2($id = '')
    {

        $data = $this->export_model->getTaxNotice($id);
        $date = explode('-', $data['notice_date']);
        $content = '	<style>
                        table {
                            border-collapse: collapse;

                        }
                        pre{
                          font-size:16px;
                        }
                      </style>
        <table border="0" style="width:100%;border-style: none;" >
        <tr>
          <td  style="width: 350px;" ><b>ภ.ร.ด. ๘</b></td>
          <td  style="width: 1px;  border-left: 1px solid black;" rowspan="12" ></td>
          <td  style="text-align: right;" rowspan="12" >
            <table border="0" style="width:100%;border-style: none;" >
              <tr>
                <td style="text-align: left;"><b>&nbsp;ภ.ร.ด. ๘</b></td>
                <td style="text-align: center;"><h3>ใบแจ้งรายการประเมิน ตามมาตรา ๒๔ แห่ง</h3></td>
              </tr>
              <tr>
                <td style="text-align: left;">&nbsp;เล่มที่ ' . $this->mydate->conv_th_digit($data['notice_number']) . '</td>
                <td style="text-align: center;"><h3>พระราชบัญญัติภาษีโรงเรือนและที่ดิน พ.ศ. ๒๔๗๕</h3></td>
              </tr>
              <tr>
                <td style="text-align: left;">&nbsp;เลขที่ ' . $this->mydate->conv_th_digit($data['notice_no']) . '</td>
                <td style="text-align: center;">____________________________</td>
              </tr>
              <tr>
                <td style="text-align: center;"><br></td>
                <td style="text-align: center;"></td>
              </tr>
              <tr>
                <td style="text-align: left;" colspan="2">
                  <pre>&nbsp;ภ.ร.ด ๒ เลขประจำตำบลที่ ' . $this->mydate->conv_th_digit($data['notice_no']) . '/' . $this->mydate->conv_th_digit($data['tax_year'] + 543) . '  เทศบาลหนองป่าครั่ง                                       วันที่ ' . $this->mydate->conv_th_digit($date[2]) . ' เดือน ' . $this->mydate->getMonthname($date[1] * 1) . ' พ.ศ. ' . $this->mydate->conv_th_digit($date[0] + 543) . '

                  แจ้งความมายัง ' . $data['individual_fullname'] . '                                                   ผู้รับประเมินภาษีโรงเรือน จำนวน พ.ศ. ๒๕๖๐

                  ด้วยพนักงานเจ้าหน้าที่เห็นสมควรกำหนดค่ารายปีและค่าภาษีที่พึ่งชำระสำหรับทรัพย์สินของท่าน ดังแจ้งต่อไปนี้
                  </pre></td>

              </tr>
              <tr>
                <td style="text-align: right; " colspan="4" >
                  <table border="1" style="text-align: center;width:100%; " >
                    <tr>
                      <th rowspan="2" width="20%">ทรัพย์สิน</th>
                      <th rowspan="2" width="10%">เลขสำมะโนครัว</th>
                      <th rowspan="2" width="10%">ตำบล หรือ ถนน</th>
                      <th colspan="2" width="20%">ค่ารายปี</th>
                      <th colspan="2" width="20%">ค่าภาษี</th>
                      <th rowspan="2" width="10%" style="border-right-color: white;">หมายเหตุ</th>
                    </tr>

                    <tr>
                      <td style="text-align:center">บาท</td>
                      <td style="text-align:center">สต.</td>
                      <td style="text-align:center">บาท</td>
                      <td style="text-align:center">สต.</td>
                    </tr>

                    <tr style="text-align: left; font-size:10px">
                      <td style="font-size:10px">' . $data['noice_name_operation'] . '</td>
                      <td style="font-size:10px">' . $data['land_deed_number'] . '</td>
                      <td style="font-size:10px">ต.หนองป่าครั่ง อ.เมือง จ.เชียงใหม่</td>
                      <td style="font-size:10px"> ' . $this->mydate->conv_th_digit(number_format($data['notice_annual_fee']), 2) . '</td>
                      <td style="font-size:10px">-</td>
                      <td style="font-size:10px"> ' . $this->mydate->conv_th_digit(number_format($data['notice_estimate']), 2) . '</td>
                      <td style="font-size:10px">-</td>
                      <td style="border-right-color: white;"></td>
                    </tr>

                    <tr>
                      <td><br></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="border-right-color: white;"></td>
                    </tr>

                    <tr>
                      <td><br></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="border-right-color: white;"></td>
                    </tr>

                    <tr>
                      <td><br></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="border-right-color: white;"></td>
                    </tr>

                    <tr>
                      <td><br></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="border-right-color: white;"></td>
                    </tr>
                    <tr >
                      <td colspan="2" style="border-left:none;border-bottom:none;"></td>
                      <td style="font-size:10px">รวม</td>
                      <td style="font-size:10px">' . $this->mydate->conv_th_digit(number_format($data['notice_annual_fee']), 2) . '</td>
                      <td>-</td>
                      <td style="font-size:10px">' . $this->mydate->conv_th_digit(number_format($data['notice_estimate']), 2) . '</td>
                      <td>-</td>
                      <td style="border-right-color: white;"></td>
                    </tr>
                  </table>
                  <br>
                  <br>

                </td>
              </tr>
              <tr>

                <td style="text-align: left;" colspan="3">
                <pre>                     ขอให้ท่านนำเงินไปชำระต่อสำนักงานเทศบาลตำบลหนองป่าครั่ง ภายใน ๓๐ วัน นับตั้งแต่วันที่รับใบประเมิน
      ................................ถ้ามิได้ชำระตามกำหนด จะต้องเสียเเงินเพิ่มมาตรา ๔๓ หากผู้รับประเมินไม่พอใจในการประเมิน
      ให้ยืนคำร้องขอให้พิจารณาการประเมินใหม่ภายในเวลา ๑๕ นับตั้งแต่วันที่ได้รับแจ้ง
                </pre></td>
              </tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr>
                <td style="text-align: right;" colspan="3">
                (ลงชื่อ).................................................
                </td>
              </tr>

            </table>
          </td>

        </tr>
        <tr>
          <td  style="text-align: ;" ><br></td>
        </tr>
        <tr>
          <td  style="text-align: ;" >แบบแจ้งรายการประเมิน</td>
        </tr>
        <tr>
          <td  style="text-align: ;" >ตามมาตรา ๒๔ สำหรับภาษีโรงเรือน</td>
        </tr>
        <tr>
          <td  style="text-align: ;" >คำนวณ พ.ศ. ๒๕๖๐</td>
        </tr>
        <tr>
          <td  style="text-align: ;" >ภ.ร.ด. ๒ เลขประจำตำบลที่ ' . $this->mydate->conv_th_digit($data['notice_no']) . '/' . $this->mydate->conv_th_digit($data['tax_year'] + 543) . '</td>
        </tr>
        <tr>
          <td  style="text-align: ;" >เทศบาลตำบลหนองป่าครั่ง</td>
        </tr>
        <tr>
          <td  style="text-align: ;" >ถึง ' . $data['individual_fullname'] . '</td>
        </tr>
        <tr>
          <td  style="text-align: center;" ><b>รายการทรัพย์สิน</b></td>
        </tr>
        <tr>
          <td  style="" >
          ..........................................................................<br>
            ..........................................................................<br>
            ..........................................................................
            ..........................................................................<br>
            ..........................................................................<br>

          </td>
        </tr>
        <tr><td>&nbsp;</td></tr>

        <tr>
          <td  style="text-align: left;" ><b>ค่ารายปี     ' . $this->mydate->conv_th_digit(number_format($data['notice_annual_fee']), 2) . '    บาท</td>
        </b></tr>
        <tr>
          <td  style="text-align: left;" ><b>ค่าภาษี     ' . $this->mydate->conv_th_digit(number_format($data['notice_estimate']), 2) . '     บาท</td>
        </b></tr>
      </table>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        $this->exportpdf->exportFhtml($dataExport, 'A4-L');

    }

}
