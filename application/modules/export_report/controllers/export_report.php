<?php
class export_report extends My_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->excel = ($this->input->get('type') == "pdf") ? false : true;
        $this->load->library('ExportExcel');
        $this->load->library('ExportPdf');
        $this->load->model('report/Report_model');

    }

    public function report_yeartoyear()
    {
        $data = array();
        $this->load->model('project_training/project_model');
        $data['project'] = $this->project_model->getProject();
        $prj = array();
        foreach ($data['project'] as $key => $value) {
            $prj[$value->project_id] = $value;
        }
 
        $project = $this->Report_model->getTreeYeartoYear($prj);

        $content="<table cellspacing='0' cellpadding='0' width='100%'>
                    <tr><td COLSPAN='4'  ALIGN='center'> รายงานเปรียบเทียบ ยุทธศาสตร์ปี ".($this->session->userdata('year') + 543 - 1)." - ".($this->session->userdata('year') + 543 )."</td></tr>
                    <tr><td COLSPAN='4'  ALIGN='center'> ข้อมูล ณ วันที่ ".$this->mydate->date_eng2thai(date('Y-m-d'),543,'S')."</td></tr>
                  </table>";

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        $content = '<table cellspacing="0" cellpadding="0" width="100%" border=1>
                      <thead>
                        <tr>
                          <th rowspan="2">แผนงาน</th>
                          <th colspan="4">ประมาณการงบประมาณ</th>
                        </tr>
                        <tr>
                          <th width="10%">ปี '.($this->session->userdata('year') + 543 - 1 ).'</th>
                          <th width="10%">ปี '.($this->session->userdata('year') + 543 ).'</th>
                          <th width="10%">เปลี่ยนแปลง </th>
                          <th width="10%">ยอดต่าง (%) </th>
                        </tr>
                      </thead>'.$project.'
                  </table>
                </div>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        // echo '<pre>'; 
        // print_r($dataExport);

        if($this->excel){
          $this->exportexcel->exportFhtml($dataExport);
        }else{
          $this->exportpdf->exportFhtml($dataExport);
        }
    }

    function report_rec_sum(){
      $getrec = $this->Report_model->getrec();

      foreach ($getrec[0] as $key => $title) {
          foreach ($getrec[$title->tax_id] as $key => $title2) {
            @$sum[$title->tax_id]->tax_estimate += $title2->tax_estimate;
            @$sum[$title->tax_id]->receive_amount += $title2->receive_amount;
          } 
      } 

      $content = '<table cellspacing="0" cellpadding="0" width="100%" border=1>
                      <thead>
                        <tr>
                          <th style="width:40%">รายการ</th>
                          <th style="width:20%">ประมานการรายรับ</th>
                          <th style="width:20%">รายรับจริง</th>
                          <th style="width:20%">+สูง -ต่ำ</th>
                        </tr>
                      </thead>
                      <tbody>';

                        $sum1 = $sum2 = 0;
                        foreach ($getrec[0] as $key => $title) {
                          $diff = $sum[$title->tax_id]->tax_estimate - $sum[$title->tax_id]->receive_amount;
                          $color = '';
                          if ($diff < 0) {
                            $color = 'style="color: red;"';
                          }

                          $sum1 = $sum[$title->tax_id]->tax_estimate;
                          $sum2 = $sum[$title->tax_id]->receive_amount;

                          $content .= '<tr>
                            <td style="font-weight:bolder;">'.$title->tax_name.'</td>
                            <td style="font-weight:bolder;text-align:right">'.number_format(@$sum[$title->tax_id]->tax_estimate, 2).'</td> 
                            <td style="font-weight:bolder;text-align:right">'.number_format(@$sum[$title->tax_id]->receive_amount, 2).'</td>  
                            <td style="font-weight:bolder;text-align:right"><span '.$color.'>'.number_format($diff, 2).'</span></td>  
                          </tr>';
                      }

                $content .= '</tbody>
                    <tfoot>
                      <tr>
                        <td align="center">รวม</td>
                        <td align="right">'.number_format($sum1, 2).'</td>
                        <td align="right">'.number_format($sum2, 2).'</td>
                        <td align="right">'.number_format($sum1 - $sum2, 2).'</td>
                      </tr>
                    </tfoot>
                </table>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        if($this->excel){
          $this->exportexcel->exportFhtml($dataExport);
        }else{
          $this->exportpdf->exportFhtml($dataExport);
        }
    }

    function report_rec(){
      $getrec = $this->Report_model->getrec();

      foreach ($getrec[0] as $key => $title) {
          foreach ($getrec[$title->tax_id] as $key => $title2) {
            @$sum[$title->tax_id]->tax_estimate += $title2->tax_estimate;
            @$sum[$title->tax_id]->receive_amount += $title2->receive_amount;
          } 
      } 

      $content = '<table cellspacing="0" cellpadding="0" width="100%" border=1>
                      <thead>
                        <tr>
                          <th style="width:40%">รายการ</th>
                          <th style="width:20%">ประมานการรายรับ</th>
                          <th style="width:20%">รายรับจริง</th>
                          <th style="width:20%">+สูง -ต่ำ</th>
                        </tr>
                      </thead>
                      <tbody>';

                        $sum1 = $sum2 = 0;
                        foreach ($getrec[0] as $key => $title) {
                          $diff = $sum[$title->tax_id]->tax_estimate - $sum[$title->tax_id]->receive_amount;
                          $color = '';
                          if ($diff < 0) {
                            $color = 'style="color: red;"';
                          }

                          $sum1 = $sum[$title->tax_id]->tax_estimate;
                          $sum2 = $sum[$title->tax_id]->receive_amount;

                          $content .= '<tr>
                            <td style="font-weight:bolder;">'.$title->tax_name.'</td>
                            <td style="font-weight:bolder;text-align:right">'.number_format(@$sum[$title->tax_id]->tax_estimate, 2).'</td> 
                            <td style="font-weight:bolder;text-align:right">'.number_format(@$sum[$title->tax_id]->receive_amount, 2).'</td>  
                            <td style="font-weight:bolder;text-align:right"><span '.$color.'>'.number_format($diff, 2).'</span></td>  
                          </tr>';

                          foreach ($getrec[$title->tax_id] as $key => $title2) {
                            $diff = @$title2->tax_estimate - @$title2->receive_amount;
                            $color = '';
                            if ($diff < 0) {
                              $color = 'style="color: red;"';
                            }
                            
                              $content .= '<tr>
                             <td><span style="padding-left: 10px;">'.$title2->tax_name.'</span></td>              
                             <td style="text-align:right">'.number_format(@$title2->tax_estimate, 2).'</td> 
                             <td style="text-align:right">'.number_format(@$title2->receive_amount, 2).'</td>      
                             <td style="text-align:right"><span '.$color.'>'.number_format($diff, 2).'</span></td>   
                             </tr>';
                          }
                      }

                $content .= '</tbody>
                    <tfoot>
                      <tr>
                        <td align="center">รวม</td>
                        <td align="right">'.number_format($sum1, 2).'</td>
                        <td align="right">'.number_format($sum2, 2).'</td>
                        <td align="right">'.number_format($sum1 - $sum2, 2).'</td>
                      </tr>
                    </tfoot>
                </table>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        // echo '<pre>'; 
        // print_r($dataExport);

        if($this->excel){
          $this->exportexcel->exportFhtml($dataExport);
        }else{
          $this->exportpdf->exportFhtml($dataExport);
        }
    }

    function report_projectManage()
    {
        $data = array();
        $this->load->model('project_training/project_model');
        $data['project'] = $this->project_model->getProject();
        $prj = array();
        foreach ($data['project'] as $key => $value) {
            $prj[$value->project_id] = $value;
        }
 
        // var_dump($prj[0]);die();
        $post = $this->input->post();
        if(!empty($post)){
            $this->Report_model->filter_date1 = $this->mydate->date_thai2eng($post['filter_date1'],-543);
            $this->Report_model->filter_date2 = $this->mydate->date_thai2eng($post['filter_date2'],-543);

            $data['filter_date1'] = $this->Report_model->filter_date1;
            $data['filter_date2'] = $this->Report_model->filter_date2;
        }
        

        $project = $this->Report_model->getTreeProjectManage($prj);

        $content="<table cellspacing='0' cellpadding='0' width='100%'>
                    <tr><td COLSPAN='7'  ALIGN='center'> สรุปการใช้จ่ายเงินงบประมาณปี ".($this->session->userdata('year') + 543)."</td></tr>
                    <tr><td COLSPAN='7'  ALIGN='center'> ข้อมูล ณ วันที่ ".$this->mydate->date_eng2thai(date('Y-m-d'),543,'S')."</td></tr>
                  </table>";

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        $content = '<table cellspacing="0" cellpadding="0" width="100%" border=1>
                      <thead>
                        <tr>
                          <th>แผนงาน</th>
                          <th width="8%">ตั้งไว้</th>
                          <th width="8%">โอนลด</th>
                          <th width="8%">โอนเพิ่ม</th>
                          <th width="8%">รวมถือจ่าย</th>
                          <th width="8%">ใช้ไป</th>
                          <th width="8%">คงเหลือ</th>
                        </tr>
                      </thead>'.$project.'
                  </table>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        // echo '<pre>'; 
        // print_r($dataExport);

        if($this->excel){
          $this->exportexcel->exportFhtml($dataExport);
        }else{
          $this->exportpdf->exportFhtml($dataExport);
        }
    }

    function report_debt()
    {
        $data = array();
        $year =  $this->session->userdata('year');
        $taxDebt = $this->Report_model->getTaxDebt($year);
        $person = $this->Report_model->getPersonDebt($year);

        $content="<table cellspacing='0' cellpadding='0' width='100%'>
                    <tr><td COLSPAN='7'  ALIGN='center'> รายงานลูกหนี้ค้างชำระ </td></tr>
                    <tr><td COLSPAN='7'  ALIGN='center'> ข้อมูล ณ วันที่ ".$this->mydate->date_eng2thai(date('Y-m-d'),543,'S')."</td></tr>
                  </table>";

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        $content = '<table cellspacing="0" cellpadding="0" width="100%" border=1>
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
                        <tbody>';
                            $int = 1;
                            $sum1 = $sum2 = $sum3 = $sum4 = $sum5 = $sum6 = 0;
                            foreach ($person as $key => $value) {
                              if ((@$value[8]['notice_estimate'] - @$value[8]['receive_amount']) + (@$value[9]['notice_estimate'] - @$value[9]['receive_amount']) + (@$value[10]['notice_estimate'] - @$value[10]['receive_amount']) + @$value[8]['interest'] + @$value[9]['interest'] + @$value[10]['interest'] > 0) {
                                $sum1 += (@$value[8]['notice_estimate'] - @$value[8]['receive_amount']);
                                $sum2 += (@$value[8]['interest']);

                                $sum3 += (@$value[9]['notice_estimate'] - @$value[9]['receive_amount']);
                                $sum4 += (@$value[9]['interest']);

                                $sum5 += (@$value[10]['notice_estimate'] - @$value[10]['receive_amount']);
                                $sum6 += (@$value[10]['interest']);
                                
                            $content .= '<tr>
                                <td align="center">'.$int++.'</td>
                                <td align="center">'.$value['idcard'].'</td>
                                <td>'.$value['name'].'</td>
                                <td align="right">'.number_format(@$value[8]['notice_estimate'] - @$value[8]['receive_amount'], 2).'</td>
                                <td align="right">'.number_format(@$value[8]['interest'], 2).'</td>
                                <td align="right">'.number_format(@$value[9]['notice_estimate'] - @$value[9]['receive_amount'], 2).'</td>
                                <td align="right">'.number_format(@$value[9]['interest'], 2).'</td>
                                <td align="right">'.number_format(@$value[10]['notice_estimate'] - @$value[10]['receive_amount'], 2).'</td>
                                <td align="right">'.number_format(@$value[10]['interest'], 2).'</td>
                                <td align="right">'.number_format((@$value[8]['notice_estimate'] - @$value[8]['receive_amount']) + (@$value[9]['notice_estimate'] - @$value[9]['receive_amount']) + (@$value[10]['notice_estimate'] - @$value[10]['receive_amount']) + @$value[8]['interest'] + @$value[9]['interest'] + @$value[10]['interest'], 2).'</td>
                            </tr>';
                          }
                        } 
                        $content .='</tbody>
                        <tfoot>
                          <tr>
                            <td align="center" colspan="3">รวม</td>
                            <td align="right">'.number_format($sum1, 2).'</td>
                            <td align="right">'.number_format($sum2, 2).'</td>
                            <td align="right">'.number_format($sum3, 2).'</td>
                            <td align="right">'.number_format($sum4, 2).'</td>
                            <td align="right">'.number_format($sum5, 2).'</td>
                            <td align="right">'.number_format($sum6, 2).'</td>
                            <td align="right">'.number_format($sum1 + $sum2 + $sum3 + $sum4 + $sum5 + $sum6, 2).'</td>
                          </tr>
                        </tfoot>
                  </table>';

        $dataExport[] = array('html' => $content, 'border' => true, 'auto' => true);

        // echo '<pre>'; 
        // print_r($dataExport);

        if($this->excel){
          $this->exportexcel->exportFhtml($dataExport);
        }else{
          $this->exportpdf->exportFhtml($dataExport);
        }
 
    }
}
