<div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>แก้ไขรายรับภาษีอื่น</h3>
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

                                <?php echo form_open('Receive/updateOtherTax') ?>
                                        <div class="form-horizontal form-label-left">

                                                <div class="form-group">
                                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first">
                                                                <span class="required" style="color:red">*</span> หมวดรายได้
                                                            </label>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <select id="colorselector" name="tax_id" class="form-control selectpicker" data-hide-disabled="true" data-live-search="true" >
                                                                        <optgroup label="หมวดภาษีจัดสรร">
                                                                            <?php foreach ($tax_allocate as $key => $value) { ?>

                                                                                <?php if ($other_tax[0]['receive_amount'] == $key['tax_id']) : ?>
                                                                                    <option selected value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php else : ?>  
                                                                                    <option value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php endif; ?>
                                                                            <?php 
                                                                        } ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดค่าธรรมเนียม ค่าปรับ และใบอนุญาต">
                                                                            <?php foreach ($tax_fine as $key => $value) { ?>
                                                                                <option value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php 
                                                                            } ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้จากทรัพย์สิน">
                                                                            <?php foreach ($tax_asset as $key => $value) { ?>
                                                                                <option value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php 
                                                                            } ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้สาธารณูปโภคและสาธารณสุขฯ">
                                                                            <?php foreach ($tax_health as $key => $value) { ?>
                                                                                <option value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php 
                                                                            } ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้เบ็ดเตล็ด">
                                                                            <?php foreach ($tax_miscellaneous as $key => $value) { ?>
                                                                                <option value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php 
                                                                            } ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดเงินอุดหนุน">
                                                                            <?php foreach ($tax_subsidy as $key => $value) { ?>
                                                                                <option value="<?php echo $value->tax_id; ?>"><?php echo $value->tax_name; ?></option>
                                                                                <?php 
                                                                            } ?>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                </div>

                                                <div class="form-group" style="margin-bottom: 0px;">
                                                        <label for="second" class="control-label col-md-4 col-sm-3 col-xs-12" for="">
                                                            <span class="required" style="color:red">*</span> วันที่รับ
                                                        </label>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class='input-group date col-md-12 col-xs-12' id='inputdatepicker'>
                                                            <input type='date' name="receive_date" value="<?php echo $other_tax[0]['receive_date'] ?>" class="form-control" />
                                                        </div>                        
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-3 col-xs-12">
                                                        <span class="required" style="color:red">*</span> จำนวนภาษี
                                                    </label>
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="text" name="receive_amount" value="<?php echo $other_tax[0]['receive_amount'] ?>" placeholder="0.00" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <button type="submit" value="Submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                                                        </button>
                                                        
                                                        <button onclick="window.location.replace('<?php echo site_url('receive/other_tax'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
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


