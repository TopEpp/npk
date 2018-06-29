<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="right_col" role="main">
            <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>บันทึกรายจ่าย</h3>
                  </div>
            </section>
            <br>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="panel">
                                    <div class=" panel-body " style="padding-left: 25px;padding-right: 30px;padding-top: 20px;padding-bottom: 20px;">
                                        <div class="btn-group col-md-3">
                                            <a href="<?php echo (base_url('expenditure/expenditure_prj')) ?>">
                                                <button type="button" class="btn btn-nav" style="height: 110px; width:270px;" >
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <h4>รายจ่ายในงบประมาณ</h4>
                                                </button>
                                                </a>
                                        </div>
                                        
                                        <div class="col-md-1">
                                        </div>

                                        <div class="btn-group col-md-3">
                                            <a href="<?php echo (base_url('receive/receive_save')) ?>">
                                                <button type="button" class="btn btn-nav" style="height: 110px; width:270px;">
                                                    <i class="fas fa-dollar-sign"></i>
                                                    <h4>รายจ่ายนอกงบประมาณ</h4>
                                                </button>
                                            </a>
                                        </div>
                                        
                                        <div class="col-md-1">
                                        </div>

                                    </div>
                                </div>
                            </div>

                </div>
            </div>
</div>

<style>

.site-title {margin-top: 80px;margin-bottom: 20px; font-weight: 300;}
.panel {
    -moz-box-shadow: 0 2px 6px rgba(0,0,0,.08);
    -webkit-box-shadow: 0 2px 6px rgba(0,0,0,.08);
    box-shadow: 0 2px 6px rgba(0,0,0,.08);
    background-color: #fff;
    margin-bottom: 30px;
}
*, *:before, *:after {
  /* Chrome 9-, Safari 5-, iOS 4.2-, Android 3-, Blackberry 7- */
  -webkit-box-sizing: border-box; 

  /* Firefox (desktop or Android) 28- */
  -moz-box-sizing: border-box;

  /* Firefox 29+, IE 8+, Chrome 10+, Safari 5.1+, Opera 9.5+, iOS 5+, Opera Mini Anything, Blackberry 10+, Android 4+ */
  box-sizing: border-box;
}

.main {
    background-color: #ECF0F1;
    border: 0px solid #8E44AD;
    border-radius: 5px;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box; /* Opera/IE 8+ */
    margin-bottom: 40px;
    margin-right: 10%;
    margin-left: 10%;
    
}

.btn-nav {
    text-align: center;
    background-color: #ECF0F1;
    border: 0px solid #8E44AD;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box; /* Opera/IE 8+ */
    margin-bottom: 40px;
}
.btn-nav:hover {
    background-color: #1ABC9C;
    color: white;
    
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
    box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);

}


.btn-nav.active {
    color: #8E44AD;
    padding: 2px;
    border-top: 8px solid #8E44AD;
	border-bottom: 8px solid #8E44AD;
    border-left: 0;
    border-right: 0;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
    -webkit-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -moz-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -ms-transition: border 0.3s ease-out, color 0.3s ease 0.5s; /* IE10 is actually unprefixed */
    -o-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -webkit-animation: pulsate 1.2s linear infinite;
    animation: pulsate 1.2s linear infinite;
}
.btn-nav.active:before {
	content: '';
	position: absolute;
	border-style: solid;
	border-width: 6px 6px 0;
	border-color: #8E44AD transparent;
	display: block;
	width: 0;
	z-index: 1;
	margin-left: -6px;
	top: 0;
	left: 50%;
}
.btn-nav .fas {
    padding-top: 16px;
	font-size: 40px;
}
.btn-nav.active p {
    margin-bottom: 8px;
}

</style>

<script>
    $(document).ready(function(){

        $('.btn-nav').hover(
            // trigger when mouse hover
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // trigger when mouse out
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>
