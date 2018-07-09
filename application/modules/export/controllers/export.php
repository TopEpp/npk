<?php
class export extends My_Controller {

 public function __construct()
    {
        parent::__construct();

        $this->excel=($this->input->get('type')=="pdf")?false:true;
        $this->load->library('ExportExcel');
        $this->load->library('ExportPdf');
        $this->load->model('export_model');

       
    }

function thainumDigit($num){
    return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
    array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
    $num);
}


    function gat1($ID){





  $gat1 = $this->export_model->gat1($ID);
  
 
          $content='<table border="0" style="width:100%;margin-left: 45px;" >
              <tr> 

                <td colspan="3" style="text-align: right;" ></td>
              </tr>
              <tr> 
                <td style="width:center;">ภ.ป. ๓ 
                  <br><br>หนังสือแจ้งการประเมิน<br><br> 
                      
                      ที่ ........./..............

                </td>
                <td> <img src="assets/images/unnamed.jpg" style="width: 100px;margin-left: 170px;">  </td> 
                <td style="text-align: right; ">เทศบาลตำบลหนองป่าครั่ง<br><br>อ.เมือง จ.เชียงใหม่ 50000 </td >   
              </tr>

              <tr> 
              <br>
                <td colspan="3"><br>เรื่อง  แจ้งการประเมิน '." ".' '.$gat1['tax_name'].'<br><br> เรียน '." ".' '.$gat1['individual_fullname'].'</td>
              </tr>
              <tr> 
                <td colspan="3" style="text-align: center;"><br><br>ตามที่ท่านได้ยื่นแบบแสดงรายการ'." ".' '.$gat1['tax_name'].'ไว้ตามแบบ ภ.ป. ๑ 
                เลขรับที่'." ".'    '. ($gat1['notice_number']).'/'."".'    '. ($gat1['tax_year']).'
              </tr>
              <tr> 
                <td colspan="3" style="width:20%;"><br>
                ลงวันที่'." ".'    '. ($gat1['notice_date']).'   ไว้ นั้น
              </tr>
              <tr> 
                <td colspan="3" style="text-align: center;"><br>บัดนี้ พนักงานเจ้าหน้าที่ได้ทำการประเมินเสร็จแล้ว เป็นเงิน

                '." ".' '.$gat1['tax_name'].'  '."  ".' '.number_format($gat1['notice_estimate']).'บาท
              </tr>
              <tr> 
                <td colspan="3" style="width:10px;"><br>
                '." ".' '.number_format($gat1['notice_estimate']).'สตางค์ และเงินเพิ่ม.......................บาท.......................สตางค์ รวมทั้งสิ้นเป็นเงิน......................บาท
              </tr>
              <tr> 
                <td colspan="3" style="width:10px;"><br>
                .......................สตางค์ โปรดนำเงินจำนวนดังกล่าวไปชำระภายใน ๑๕ วัน นับตั้งแต่วันที่ได้รับหนังสือนี้ 
                หากพ้น<br><br>กำหนดจะต้องเสียเงินเพิ่มตามกฏหมาย
              </tr>
              <tr> 
              <td></td>
              <td style="width:10px;"></td>
              <td style="text-align: center;"><br><br><br><br>  ขอแสดงความนับถือ (อย่างสูง) 
              <br><br><br>................................................................ <br><br> (................................................................) <br><br> พนักงานเจ้าหน้าที่ </td>
            </tr>
            <tr> 
              <td colspan="3" style="text-align: center;"><br><br><br><br><br><br><br><br>ใบรับ ภ.ป.๓</td>
            </tr>
            <tr> 
              <td colspan="3" style="text-align: center;"><br><br> ข้าพเจ้า............................................อยู่บ้านเลขที่.......................................ตรอก...................................... <br><br> ซอย...........................................ถนน.................................หมู่ที่...........................ตำบล......................................... <br></td>
            </tr>
            </table>';

    

      $dataExport[]=array('html'=>$content,'border'=>true,'auto'=>true );

      $this->exportpdf->exportFhtml($dataExport);
      
    
  }

     function gat2(){

      $content='<table border="0" style="width:100%;" >
              <tr> 
                <td colspan="3" style="text-align: right;" >26-30-02</td>
              </tr>
              <tr> 
                <td style="width:center;">ภ.ป. ๓ 
                  <br><br>หนังสือแจ้งการประเมิน 
                </td>
                <td> <br>  </td> 
                <td style="text-align: right; ">........................................<br><br>.................................................... </td >   
              </tr>

              <tr> 
                <td colspan="3"><br>เรื่อง  แจ้งการประเมินภาษีป้าย <br><br> เรื่อง.........................................</td>
              </tr>
              <tr> 
                <td colspan="3" style="text-align: right;"><br><br>ตามที่ท่านได้ยื่นแบบแสดงรายการภาษีป้ายไว้ตามแบบ ภ.ป. ๑ เลขรับที่....................../๒๕......................... 
              </tr>
              <tr> 
                <td colspan="3" style="width:10px;"><br>
                ลงวันที่...........................เดือน..................................................พ.ศ...................................ไว้ นั้น
              </tr>
              <tr> 
                <td colspan="3" style="text-align: right;"><br>บัดนี้ พนักงานเจ้าหน้าที่ได้ทำการประเมินเสร็จแล้ว เป็นเงินภาษีป้าย....................................................บาท
              </tr>
              <tr> 
                <td colspan="3" style="width:10px;"><br>
                .......................สตางค์ และเงินเพิ่ม.......................บาท.......................สตางค์ รวมทั้งสิ้นเป็นเงิน......................บาท
              </tr>
              <tr> 
                <td colspan="3" style="width:10px;"><br>
                .......................สตางค์ โปรดนำเงินจำนวนดังกล่าวไปชำระภายใน ๑๕ วัน นับตั้งแต่วันที่ได้รับหนังสือนี้ 
                หากพ้น<br><br>กำหนดจะต้องเสียเงินเพิ่มตามกฏหมาย
              </tr>
              <tr> 
                <td></td>
                <td style="width:10px;"></td>
                <td style="text-align: center;"><br><br><br><br>  ขอแสดงความนับถือ (อย่างสูง) <br><br><br>................................................................ <br><br> (................................................................) <br><br> พนักงานเจ้าหน้าที่ </td>
              </tr>
              <tr> 
                <td colspan="3" style="text-align: center;"><br><br><br><br><br><br><br><br>ใบรับ ภ.ป.๓</td>
              </tr>
              <tr> 
                <td colspan="3" style="text-align: center;"><br><br> ข้าพเจ้า............................................อยู่บ้านเลขที่.......................................ตรอก...................................... <br><br> ซอย...........................................ถนน.................................หมู่ที่...........................ตำบล......................................... <br></td>
              </tr>
            </table>';


       $dataExport[]=array('html'=>$content,'border'=>true,'auto'=>true );

      $this->exportpdf->exportFhtml($dataExport);
      
    }



    





}