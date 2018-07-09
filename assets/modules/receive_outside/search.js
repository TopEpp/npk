$(function(){

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
                id : id,
                expenses_number : number,
                expenses_date_disburse : date
            }
        }).success(function (msg) {
            if (msg)
                window.location.reload();
        });
    });

	$('#search-btn').click(function(){
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

});

//del all project or prj
function pay_out(value) {
    $('#out_id').val(value);

    $('.pay_out').modal();
}