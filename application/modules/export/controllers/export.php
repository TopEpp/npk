<?php
class export extends My_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->excel=($this->input->get('type')=="pdf")?false:true;
        $this->load->library('ExportExcel');
        $this->load->library('ExportPdf');
    }

    function test(){

      $content="<table cellspacing='0' cellpadding='0' width='100%'>
                  <tr><td COLSPAN='8'  ALIGN='center'>TEST</td></tr>
                  <tr><td COLSPAN='8'  ALIGN='center'>Students Proficient or Above</td></tr>
                  <tr><td COLSPAN='8'  ALIGN='center'>XXX XXX</td></tr>
                </table>";

      $dataExport[]=array('html'=>$content,'border'=>false,'auto'=>true ) ;

      $content = '<table class="table table-striped table-bordered" cellspacing="0" cellpadding="0" width="100%" border="1">
                    <thead>
                    <tr>
                        <th>School Year</th>
                        <th>Target</th>
                        <th>All Grades Tested</th>
                        <th class="grade3" >Grade 3</th>
                        <th class="grade4" >Grade 4</th>
                        <th class="grade5" >Grade 5</th>
                        <th class="grade6" >Grade 6</th>
                        <th class="grade7" >Grade 7</th>
                        <th class="grade8" >Grade 8</th>
                        <th class="grade9" >Grade 9</th>
                        <th class="grade10" >Grade 10</th>
                        <th class="grade11" >Grade 11</th>
                        <th class="grade12" >Grade 12</th>
                        <th># of Exams</th>
                      </tr>
                    </thead>
                    <tbody>';

      $content .='
                  </tbody>
              </table>';


      $dataExport[]=array('html'=>$content,'border'=>true,'auto'=>true );

      if($this->excel){
          $this->exportexcel->exportFhtml($dataExport);
      }else{
          $this->exportpdf->exportFhtml($dataExport);
      }

    }


}