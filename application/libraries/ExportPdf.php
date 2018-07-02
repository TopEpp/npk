<?php
/**
 * Created by PhpStorm.
 * User: sanitkeawtawan
 * Date: 6/17/14 AD
 * Time: 4:59 PM
 */

include("ExportPdf/mpdf.php");

class ExportPdf {
    public $fileAction="D";
    public $file="report.pdf";
    public function exportFhtml($data){
        $format='A4';
        $mgl=$mgr=$mgt=$mgb=$mgh="5";
        $mgf="0";
        $mpdf=new mPDF('utf-8',$format,"","",$mgl,$mgr,$mgt,$mgb,$mgh,$mgf);
        $mpdf->SetAutoFont(AUTOFONT_THAIVIET);
        $mpdf->mirrorMargins = 1;
        $mpdf->allow_output_buffering = true;
        $mpdf->displayDefaultOrientation = true;
        $mpdf->SetDisplayMode('fullpage');
        $c="";
        foreach($data as $index=>$val){
            $c.=$val['html'];
        }
        $mpdf->WriteHTML($c);

        $mpdf->Output($this->file,$this->fileAction);
    }
} 