$(function(){
	$('#expenses_amount').keyup(function(){
		var expenses_amount = this.value;
		expenses_amount = parseFloat(expenses_amount.replace(',',''));
		var expenses_amount_vat = expenses_amount*7/100;
		var expenses_amount_tax = expenses_amount*1/100;

		$('#expenses_amount_vat').val(expenses_amount_vat);
		$('#expenses_amount_disburse').val(expenses_amount+expenses_amount_vat);
		$('#expenses_amount_tax').val(expenses_amount_tax);
		$('#expenses_amount_result').val(expenses_amount+expenses_amount_vat-expenses_amount_tax);
	});

	$('#expenses_amount_disburse').keyup(function(){
		var expenses_amount_disburse = this.value;
		expenses_amount_disburse = parseFloat(expenses_amount_disburse.replace(',',''));

		var expenses_amount_vat = expenses_amount_disburse*7/107;
		var expenses_amount = expenses_amount_disburse - expenses_amount_vat;
		var expenses_amount_tax = expenses_amount*1/100;

		$('#expenses_amount').val(expenses_amount);
		$('#expenses_amount_vat').val(expenses_amount_vat);
		$('#expenses_amount_tax').val(expenses_amount_tax);
		$('#expenses_amount_result').val(expenses_amount+expenses_amount_vat-expenses_amount_tax);
	});

	$('#expenses_amount_fine').keyup(function(){
		var expenses_amount_fine = this.value;
		expenses_amount_fine = parseFloat(expenses_amount_fine.replace(',',''));

			var expenses_amount = $('#expenses_amount').val();
			expenses_amount = parseFloat(expenses_amount.replace(',',''));

			var expenses_amount_vat = $('#expenses_amount_vat').val();
			expenses_amount_vat = parseFloat(expenses_amount_vat.replace(',',''));

			var expenses_amount_disburse = $('#expenses_amount_disburse').val();
			expenses_amount_disburse = parseFloat(expenses_amount_disburse.replace(',',''));

			var expenses_amount_tax = $('#expenses_amount_tax').val();
			expenses_amount_tax = parseFloat(expenses_amount_tax.replace(',',''));
		if(expenses_amount_fine){
			$('#expenses_amount_result').val(expenses_amount+expenses_amount_vat-expenses_amount_tax - expenses_amount_fine);
		}else{
			$('#expenses_amount_result').val(expenses_amount+expenses_amount_vat-expenses_amount_tax);
		}
	});

	
});