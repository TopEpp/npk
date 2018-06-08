<div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>บันทึกรายรับภาษีอื่น</h3>
                    </div>
                </div>

                    <br>
                    <br>

                    <div class="clearfix"></div>

       
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                            <br />

                                <?php echo form_open('Receive/insert_receipts') ?>
                                        <div class="form-horizontal form-label-left">
                                                <div class="form-group" style="margin-bottom: 0px;">
                                                    <label class="control-label col-md-4 col-sm-3 col-xs-12">เลขประจำตัวผู้เสียภาษี
                                                    </label>
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <div class="input-group">
                                                                <input type="text" name="receipts_idnumber" placeholder="เลขประจำตัว 13 หลัก" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '9999999999999'">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#detail" style="margin-right: 0px;">
                                                                            <i class="fa fa-search"></i>
                                                                        </button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first">หมวดรายได้
                                                            </label>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <select id="colorselector" class="form-control selectpicker" data-hide-disabled="true" data-live-search="true">
                                                                        <optgroup label="หมวดภาษีจัดจรร">
                                                                        <option>ภาษีสรรพสามิต</option>
                                                                        <option>ภาษีสุรา</option>
                                                                        <option>ภาษีและค่าธรรมเนียมรถยนต์และล้อเลื่อน</option>
                                                                        <option>ภาษีมูลค่าเพิ่ม 1 ใน 9</option>
                                                                        <option>ภาษีมูลค่าเพิ่ม พรบ.กำหนดแผน</option>
                                                                        <option>ภาษีธุรกิจเฉพาะ</option>
                                                                        <option>ค่าธรรมเนียมจดทะเบียนสิทธิและนิติกรรม</option>
                                                                        <option>ค่าภาคหลวงปิโตรเลียม</option>
                                                                        <option>ค่าภาคหลวงธรรมเนียมป่าไม้และสิ่งประดิษฐ์</option>
                                                                        <option>ค่าภาคหลวงแร่</option>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดค่าธรรมเนียม ค่าปรับ และใบอนุญาต">
                                                                        <option>ค่าธรรมเนียมเกี่ยวกับการควบคุมอาคาร</option>
                                                                        <option>ค่าปรับผู้ทำผิดกฎจราจร</option>
                                                                        <option>ค่าธรรมเนียมเกี่ยวกับสาธารณสุข</option>
                                                                        <option>ค่าใบอนุญาตเกี่ยวกับการควบคุมอาคาร</option>
                                                                        <option>ค่าปรับการผิดสัญญา</option>
                                                                        <option>ค่าธรรมเนียมและรักษาคุณภาพสิ่งแวดล้อม</option>
                                                                        <option>ค่าธรรมเนียมทางวิ่งและที่จอดรถยนต์</option>
                                                                        <option>ค่าธรรมเนียมใบอนุญาตการพนัน</option>
                                                                        <option>ค่าอนุญาตใช้น้ำบาดาล</option>>
                                                                        <option>ค่าธรรมเนียมเกี่ยวกับการทะเบียนราษฎร์</option>
                                                                        <option>ค่าปรับและค่าธรรมเนียมอื่นๆ</option>
                                                                        <option>ค่าใบอนุญาตขายสุรา</option>
                                                                        <option>ค่าใบอนุญาตตั้งโรงงาน</option>
                                                                        <option>ค่าใบอนุญาตอื่นๆ</option>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้จากทรัพย์สิน">
                                                                        <option>ดอกเบี้ยเงินฝากธนาคาร</option>
                                                                        <option>ค่าเช่าและบริการสถานที่</option>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้สาธารณูปโภคและสาธารณสุขฯ">
                                                                        <option>รายได้จากสาธารณูปโภคอื่น</option>
                                                                        <option>งานแพทย์แผนไทย</option>
                                                                        <option>งานโรงพยาบาล</option>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้เบ็ดเตล็ด">
                                                                        <option>ค่าขายแบบแปลน</option>
                                                                        <option>คำบำรุงศูนย์พัฒนาเด็ก</option>
                                                                        <option>รายได้เบ็ดเตล็ด</option>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดเงินอุดหนุน">
                                                                        <option>เงินอุดหนุนทั่วไป (เงินอุดหนุนตามอำนาจหน้าที่ฯ)</option>
                                                                        <option>เงินอุดหนุนทั่วไประบุวัตถุประสงค์/เฉพาะกิจ</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                </div>

                                                <div class="form-group" style="margin-bottom: 0px;">
                                                        <label for="second" class="control-label col-md-4 col-sm-3 col-xs-12" for="">วันที่รับ
                                                        </label>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class='input-group date col-md-12 col-xs-12' id='inputdatepicker'>
                                                            <input type='text' name="receipts_date" value="" class="form-control datepicker" />
                                                        </div>                        
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-3 col-xs-12">เล่มที่</label>
                                                        <div class="col-md-1 col-sm-2 col-xs-12">
                                                            <input type="text" name="receipts_num" value="" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                                    
                                                    <label class="control-label col-md-1 col-sm-1 col-xs-12">เลขที่</label>
                                                        <div class="col-md-1 col-sm-2 col-xs-12">
                                                                <input type="text" name="receipts_ber" value="" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-3 col-xs-12">จำนวนภาษี
                                                    </label>
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="text" name="receipts_sum" value=""  class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <button type="submit" value="Submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                                                        </button>
                                                        
                                                        <button onclick="window.location.replace('<?php echo site_url('receive/receipts_dashborad'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
                                                        </button>
                                                    </div>
                                                </div>   
                                        </div>

                                <?php echo form_close('') ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


