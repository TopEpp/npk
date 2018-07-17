$(function () {

    $('#amount_vat').on("ifChanged", function () {
        var outside_pay_amount = $('#outside_pay_budget').val();
        outside_pay_amount = parseFloat(outside_pay_amount.replace(',', ''));


        var outside_pay_amount_vat = 0;
        var outside_pay_amount_tax = 0;
        if ($('input#amount_vat').is(':checked')) {
            vat = $('#outside_pay_vat_val').val();
            outside_pay_amount_vat = outside_pay_amount * vat / 100;
        }
        if ($('input#amount_tax').is(':checked')) {
            tax = $('#outside_pay_tax_val').val();
            outside_pay_amount_tax = outside_pay_amount * tax / 100;
        }

        $('#outside_pay_vat').val(outside_pay_amount_vat);
        $('#outside_pay_tax').val(outside_pay_amount_tax);
        $('#outside_pay_budget_sum').val(outside_pay_amount + outside_pay_amount_vat - outside_pay_amount_tax);
    });

    $('#amount_tax').on("ifChanged", function () {
        var outside_pay_amount = $('#outside_pay_budget').val();
        outside_pay_amount = parseFloat(outside_pay_amount.replace(',', ''));


        var outside_pay_amount_vat = 0;
        var outside_pay_amount_tax = 0;
        if ($('input#amount_vat').is(':checked')) {
            vat = $('#outside_pay_vat_val').val();
            outside_pay_amount_vat = outside_pay_amount * vat / 100;
        }
        if ($('input#amount_tax').is(':checked')) {
            tax = $('#outside_pay_tax_val').val();
            outside_pay_amount_tax = outside_pay_amount * tax / 100;
        }

        $('#outside_pay_vat').val(outside_pay_amount_vat);
        $('#outside_pay_tax').val(outside_pay_amount_tax);
        $('#outside_pay_budget_sum').val(outside_pay_amount + outside_pay_amount_vat - outside_pay_amount_tax);
    });

    $('#outside_pay_budget').keyup(function () {
        var outside_pay_amount = this.value;
        outside_pay_amount = parseFloat(outside_pay_amount.replace(',', ''));


        var outside_pay_amount_vat = 0;
        var outside_pay_amount_tax = 0;
        if ($('input#amount_vat').is(':checked')) {
            vat = $('#outside_pay_vat_val').val();
            outside_pay_amount_vat = outside_pay_amount * vat / 100;
        }
        if ($('input#amount_tax').is(':checked')) {
            tax = $('#outside_pay_tax_val').val();
            outside_pay_amount_tax = outside_pay_amount * tax / 100;
        }

        $('#outside_pay_vat').val(outside_pay_amount_vat);
        $('#outside_pay_tax').val(outside_pay_amount_tax);
        $('#outside_pay_budget_sum').val(outside_pay_amount + outside_pay_amount_vat - outside_pay_amount_tax);
    });
    // //load id to modal
    // $('#delmodal').on('show.bs.modal', function (e) {
    //     var data = $(e.relatedTarget).data();
    //     $(this).find('#btn-del').attr('del', data.id);
    // });

    // // check delete on click
    // $('#btn-del').on('click', function (e) {
    //     e.preventDefault();
    //     var id = $(this).attr('del');
    //     window.location.replace(domain + 'expenditure/' + 'expenditure_del' + '/' + id);
    // });


    //load id to modal
    $('#delpay_modal').on('show.bs.modal', function (e) {
        var data = $(e.relatedTarget).data();
        $(this).find('#btn-delpay').attr('del', data.id);
    });

    // check delete on click
    $('#btn-delpay').on('click', function (e) {

        e.preventDefault();
        var id = $(this).attr('del');
        window.location.replace(domain + 'receive_outside/' + 'outSidePayDel' + '/' + id);
    });

    //load id to modal
    $('#paymodal').on('show.bs.modal', function (e) {
        var data = $(e.relatedTarget).data();
        $(this).find('#btn-pay').attr('pay', data.id);
    });

    // check delete on click
    $('#btn-pay').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('pay');
        var number = $("input[name='expenses_number']").val();
        var date = $("input[name='expenses_date_disburse']").val();
        $.ajax({
            method: "POST",
            url: domain + 'expenditure/saveExpenditureNumber',
            data: {
                id: id,
                expenses_number: number,
                expenses_date_disburse: date
            }
        }).success(function (msg) {
            if (msg)
                window.location.reload();
        });
    });

    $('#search-btn').click(function () {
        $.ajax({
            method: "POST",
            url: domain + 'receive_outside/getPrj',
            data: {
                keyword: $('#search').val(),
            }
        }).done(function (msg) {
            if (msg) {
                console.log(msg);
                $('#div_table').html(msg);
            }
        });

    });


    // check potection outside in
    $('#btn-submit').click(function () {
        if ($("input[name='outside_pay_create']").val() == '') {
            alertify.error('กรุณาระบุวันที่จัดทำ');
            $("input[name='outside_pay_create']").focus();
            return false;
        }
        if ($("input[name='outside_pay_budget']").val() == '') {
            alertify.error('กรุณาระบุจำนวนเงิน');
            $("input[name='outside_pay_budget']").focus();
            return false;
        }
    });

    // check potection outside in
    $('#btn-submit_pay').click(function () {
        if ($("input[name='outside_pay_create']").val() == '') {
            alertify.error('กรุณาระบุวันที่จัดทำ');
            $("input[name='outside_pay_create']").focus();
            return false;
        }
        if ($("input[name='outside_pay_budget']").val() == '') {
            alertify.error('กรุณาระบุจำนวนเงิน');
            $("input[name='outside_pay_budget']").focus();
            return false;
        }

        if ($('#amount_vat').is(':checked')) {
            var outside_pay_vat = $("input[name='outside_pay_vat']").val();
            if (outside_pay_vat == '') {
                alertify.error('กรุณาระบุ จำนวนภาษีมูลค่าเพิ่ม');
                $("input[name='outside_pay_vat']").focus();
                return false;
            }
        }
        if ($('#amount_tax').is(':checked')) {
            var outside_pay_tax = $("input[name='outside_pay_tax']").val();
            if (outside_pay_tax == '') {
                alertify.error('กรุณาระบุ จำนวนภาษีหัก ณ ที่จ่าย');
                $("input[name='outside_pay_tax']").focus();
                return false;
            }
        }
    });




});

//del all project or prj
function pay_out(value) {
    $('#out_id').val(value);

    $('.pay_out').modal();
}