<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
    <link rel="import" href="<?php echo base_url(); ?>assets/fonts/gl-font-2/gl-cschatthai-font.html">

    <!-- <title><?php echo $title . ' - ' . $subtitle ?></title> -->
    <title><?php echo $this->template->title->default($this->config->item('title')); ?></title>

    <!-- Bootstrap -->
    <?php echo css_asset('../plugins/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>
    <!-- Font Awesome -->
    <?php echo css_asset('../plugins/gentelella-master/vendors/font-awesome/css/font-awesome.min.css'); ?>
    <!-- NProgress -->
    <?php echo css_asset('../plugins/gentelella-master/vendors/nprogress/nprogress.css'); ?>
    <!-- iCheck -->
    <?php echo css_asset('../plugins/gentelella-master/vendors/iCheck/skins/flat/green.css'); ?>
    <!-- Custom Theme Style -->
    <?php echo css_asset('../plugins/gentelella-master/build/css/custom.min.css'); ?>
    <?php echo css_asset('../plugins/bootstrap-select-master/dist/css/bootstrap-select.css'); ?>
    <!-- easyui -->
    <?php echo css_asset('../plugins/easyui/themes/material-teal/easyui.css'); ?>
    <?php echo css_asset('../plugins/easyui/themes/icon.css'); ?>
    
    <!-- datepicker thai -->
    <?php echo css_asset('../plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'); ?>
    <!-- datatable -->
    <?php echo css_asset('../plugins/datatables/1.10.16/css/jquery.dataTables.min.css'); ?>

    <?php echo $this->template->stylesheet; ?>
    
<body class="nav-md">
  
  <div class="container body">
    <div class="main_container">

      <?php $this->load->view('template/slidemenu'); ?>

      <?php $this->load->view('template/header'); ?>

      <?php echo $this->template->content; ?>

      <?php $this->load->view('template/footer'); ?>
      


    </div>
  </div>

  <script type="text/javascript">
        var domain = '<?php echo base_url(); ?>';
    </script>

  <!-- jQuery -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/jquery/dist/jquery.min.js'); ?>
    <!-- Bootstrap -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>
    <!-- FastClick -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/fastclick/lib/fastclick.js'); ?>
    <!-- NProgress -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/nprogress/nprogress.js'); ?>
    <!-- Chart.js -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/Chart.js/dist/Chart.min.js'); ?>
    <!-- jQuery Sparklines -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>
    <!-- Flot -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/Flot/jquery.flot.js'); ?>
    <?php echo js_asset('../plugins/gentelella-master/vendors/Flot/jquery.flot.pie.js'); ?>
    <?php echo js_asset('../plugins/gentelella-master/vendors/Flot/jquery.flot.time.js'); ?>
    <?php echo js_asset('../plugins/gentelella-master/vendors/Flot/jquery.flot.stack.js'); ?>
    <?php echo js_asset('../plugins/gentelella-master/vendors/Flot/jquery.flot.resize.js'); ?>
    <!-- Flot plugins -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>
    <?php echo js_asset('../plugins/gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>
    <?php echo js_asset('../plugins/gentelella-master/vendors/flot.curvedlines/curvedLines.js'); ?>
    <!-- DateJS -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/DateJS/build/date.js'); ?>
    <!-- Custom Theme Scripts -->
    <?php echo js_asset('../plugins/gentelella-master/build/js/custom.min.js'); ?>
    <!-- bootstrap-select -->
    <?php echo js_asset('../plugins/bootstrap-select-master/dist/js/bootstrap-select.js'); ?>
    <?php echo js_asset('../plugins/select-option/js/index.js'); ?>
    <!-- iCheck -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/iCheck/icheck.min.js'); ?>
    <!-- easyui -->
    <?php echo js_asset('../plugins/easyui/jquery.easyui.min.js'); ?>
    <!-- datepicker thai -->
    <?php echo js_asset('../plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker-custom.js'); ?>
    <?php echo js_asset('../plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.th.min.js'); ?>
    <!-- datatable -->
    <?php echo js_asset('../plugins/datatables/1.10.16/js/jquery.dataTables.min.js'); ?>
    <!-- //import smartwizard -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js'); ?>
    <!-- import input mark -->
    <?php echo js_asset('../plugins/gentelella-master/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>

    
    <?php echo $this->template->javascript; ?>

    <!-- Chart -->
    <?php echo js_asset('../modules/main/js/chart.js'); ?>
    <!-- Chart (report )-->
    <?php echo js_asset('../modules/report/js/chart.js'); ?>
    <!-- Chart (report_pay )-->
    <?php echo js_asset('../modules/report/js/chart_pay.js'); ?>
    <!-- Chart (chart_debt )-->
    <?php echo js_asset('../modules/report/js/chart_debt.js'); ?>


    <!-- datatable -->
    <?php echo js_asset('../modules/datatable/js/datatable.js'); ?>
    <!-- datepicker -->
    <?php echo js_asset('../modules/datepicker/js/datepicker.js'); ?>
    <script type="text/javascript">
				function onContextMenu(e, row) {
			if (row) {
				e.preventDefault();
				$(this).treegrid('select', row.id);
				$('#mm').menu('show', {
					left: e.pageX,
					top: e.pageY
				});
			}
		}
		var idIndex = 100;

		function append() {
			idIndex++;
			var d1 = new Date();
			var d2 = new Date();
			d2.setMonth(d2.getMonth() + 1);
			var node = $('#tg').treegrid('getSelected');
			$('#tg').treegrid('append', {
				parent: node.id,
				data: [{
					id: idIndex,
					name: 'New Task' + idIndex,
					persons: parseInt(Math.random() * 10),
					begin: $.fn.datebox.defaults.formatter(d1),
					end: $.fn.datebox.defaults.formatter(d2),
					progress: parseInt(Math.random() * 100)
				}]
			})
		}

		function removeIt() {
			var node = $('#tg').treegrid('getSelected');
			if (node) {
				$('#tg').treegrid('remove', node.id);
			}
		}

		function collapse() {
			var node = $('#tg').treegrid('getSelected');
			if (node) {
				$('#tg').treegrid('collapse', node.id);
			}
		}

		function expand() {
			var node = $('#tg').treegrid('getSelected');
			if (node) {
				$('#tg').treegrid('expand', node.id);
			}
		}
</script>

  </body>
</html>