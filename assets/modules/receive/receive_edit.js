 //load id to modal
 $('#delpay_modal_local').on('show.bs.modal', function (e) {
     var data = $(e.relatedTarget).data();
     $(this).find('#btn-delpay_local').attr('del', data.id);
     $(this).find('#btn-delpay_local').attr('del_name', data.name);
 });

 // check delete on click
 $('#btn-delpay_local').on('click', function (id) {

     var id = $(this).attr('del');
     var name = $(this).attr('del_name');
     var individual_id = $('.individual_id').val();
     var tax_id = $('.tax_id').val();
     var total_estimate_local = $('.total_estimate_local').val();
     var interest_local = $('.interest_local').val();
     var notic = (total_estimate_local * 1) - ($('.notice_estimate_local' + name).val() * 1);
     var total_interest = (notic * 1) + (interest_local * 1);

     $('.total_estimate_local').val(notic);
     $('.total_local').val(total_interest);
     window.location.replace(domain + 'receive/' + 'receive_edit_delete_local' + '/' + id + '/' + individual_id + '/' + tax_id);

 });

 //load id to modal
 $('#delpay_modal_label').on('show.bs.modal', function (e) {
     var data = $(e.relatedTarget).data();
     $(this).find('#btn-delpay_label').attr('del', data.id);
     $(this).find('#btn-delpay_label').attr('del_name', data.name);
 });

 // check delete on click
 $('#btn-delpay_label').on('click', function (id) {

     var id = $(this).attr('del');
     var name = $(this).attr('del_name');
     var individual_id = $('.individual_id').val();
     var tax_id = $('.tax_id').val();
     var total_estimate_label = $('.total_estimate_label').val();
     var interest_label = $('.interest_label').val();
     var notic_label = (total_estimate_label * 1) - ($('.notice_estimate_label' + name).val() * 1);
     var total_interest = (notic_label * 1) + (interest_label * 1);

     $('.total_estimate_label').val(notic_label);
     $('.total_label').val(total_interest);
     window.location.replace(domain + 'receive/' + 'receive_edit_delete_label' + '/' + id + '/' + individual_id + '/' + tax_id);

 });

 //load id to modal
 $('#delpay_modal_house').on('show.bs.modal', function (e) {
     var data = $(e.relatedTarget).data();
     $(this).find('#btn-delpay_house').attr('del', data.id);
     $(this).find('#btn-delpay_house').attr('del_name', data.name);
 });

 // check delete on click
 $('#btn-delpay_house').on('click', function (id) {

     var id = $(this).attr('del');
     var name = $(this).attr('del_name');
     var individual_id = $('.individual_id').val();
     var tax_id = $('.tax_id').val();
     var total_estimate = $('.total_estimate').val();
     var interest_house = $('.interest_house').val();
     var notic_house = (total_estimate * 1) - ($('.estimate' + name).val() * 1);
     var total_interest = (notic_house * 1) + (interest_house * 1);

     $('.total_estimate').val(notic_house);
     $('.total').val(total_interest);
     window.location.replace(domain + 'receive/' + 'receive_edit_delete_house' + '/' + id + '/' + individual_id + '/' + tax_id);

 });





 function land(id) {
     var land_rai = $('.land_rai' + id).val();
     var land_ngan = $('.land_ngan' + id).val();
     var land_wa = $('.land_wa' + id).val();

     var total = land_rai + '-' + land_ngan + '-' + land_wa;

     $('.total_land' + id).val(total);
 }


 function calculate_estimate_house(obj, id) {
     var notice_annual_fee = $('.notice_estimate_house' + id).val();
     var annual_estimate = notice_annual_fee * 12.5 / 100;
     $('.estimate' + id).val(annual_estimate);
     calculate(obj, id);
 }

 function calculate(obj, id) {
     var sum = cal();
     if ($('.interest_house').val()) {
         var interest_house = $('.interest_house').val();
     } else {
         var interest_house = 0;
     }

     var total = parseFloat(sum) + parseFloat(interest_house);
     //$('.estimate' + id).val(annual_estimate);
     console.log(total);
     $('.total_estimate').val(sum);
     $('.total').val(total);
 }



 function cal() {
     var sum = 0;
     for (i = 0; i < $('#num_one').val(); i++) {
         var notice_annual_fee = $('.estimate' + i).val();
         sum = (sum * 1) + (notice_annual_fee * 1);
     }
     return sum;
 }

 function calculate_1(id) {
     var sum_1 = cal1();
     var notice_estimate_local = $('.notice_estimate_local' + id).val();
     var interest_local = $('.interest_local').val();
     var total_interest = (sum_1 * 1) + (interest_local * 1);

     $('.total_estimate_local').val(sum_1);
     $('.total_local').val(total_interest);

 }

 function cal1() {
     var sum_1 = 0;
     for (i = 0; i < $('#num_two').val(); i++) {
         var notice_estimate_local = $('.notice_estimate_local' + i).val();
         sum_1 = (sum_1 * 1) + (notice_estimate_local * 1);
         console.log(sum_1);
     }
     return sum_1;
 }

 function calculate_2(id) {
     var sum_2 = cal2();
     var notice_estimate_label = $('.notice_estimate_label' + id).val();
     var interest_label = $('.interest_label').val();
     var total_interest = (sum_2 * 1) + (interest_label * 1);

     $('.total_estimate_label').val(sum_2);
     $('.total_label').val(total_interest);

 }

 function cal2() {
     var sum_2 = 0;
     for (i = 0; i < $('#num_three').val(); i++) {
         var notice_estimate_label = $('.notice_estimate_label' + i).val();
         sum_2 = (sum_2 * 1) + (notice_estimate_label * 1);
         console.log(sum_2);
     }
     return sum_2;
 }

 function remove_tab_house(id) {
     var num_one = $('.num_one').val();
     var estimate = $('.estimate' + 1).val();
     var total_estimate = $('.total_estimate').val();
     var interest_house = $('.interest_house').val();
     var notic_house = (total_estimate * 1) - ($('.estimate' + id).val() * 1);
     var total_interest = (notic_house * 1) + (interest_house * 1);

     $('.total_estimate').val(notic_house);
     $('.total').val(total_interest);
     $('.num_one').val(num_one - 1);
     $('#button_one' + id).remove();
 }

 function remove_tab_local(id) {
     var num_two = $('.num_two').val();
     var total_estimate_local = $('.total_estimate_local').val();
     var interest_local = $('.interest_local').val();
     var notic = (total_estimate_local * 1) - ($('.notice_estimate_local' + id).val() * 1);
     var total_interest = (notic * 1) + (interest_local * 1);

     $('.total_estimate_local').val(notic);
     $('.total_local').val(total_interest);
     $('.num_two').val(num_two - 1);
     $('#button_two' + id).remove();
 }

 function remove_tab_label(id) {
     var num_three = $('.num_three').val();
     var total_estimate_label = $('.total_estimate_label').val();
     var interest_label = $('.interest_label').val();
     var notic_label = (total_estimate_label * 1) - ($('.notice_estimate_label' + id).val() * 1);
     var total_interest = (notic_label * 1) + (interest_label * 1);

     $('.total_estimate_label').val(notic_label);
     $('.total_label').val(total_interest);
     $('.num_three').val(num_three - 1);
     $('#button_three' + id).remove();
 }