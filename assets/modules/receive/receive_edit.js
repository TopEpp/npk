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