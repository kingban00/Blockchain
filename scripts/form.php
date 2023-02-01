<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include("head.php"); ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
		<?php include("nav.php");?>
      

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Formulário de Cadastro</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2> <small></small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />


                  <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nome <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="email" name="email" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="cpf" class="col-form-label col-md-3 col-sm-3 label-align">Cpf</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="cpf" class="form-control" type="text" name="cpf">
											</div>
										</div>

                    <div class="item form-group">
											<label for="cel" class="col-form-label col-md-3 col-sm-3 label-align">Telefone</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="cel" class="form-control" type="text" name="cel">
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Data <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="date" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="button" onclick="window.location.href = 'tables_dynamic.php' ">Cancelar</button>
                        <button class="btn btn-primary" type="reset" onclick="window.location.href = 'form.php' ">Refazer</button>
                        <button id="signUp" class="btn btn-success">Cadastrar</button>
                      </div>
                    </div>

                  <!-- </form> -->


                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>




  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="../vendors/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="../vendors/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="../vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="../vendors/starrr/dist/starrr.js"></script>
  <!-- Custom Theme Scripts -->
  <!-- <script src="../build/js/custom.min.js"></script> -->
  <script src="../src/js/custom.js"></script>

  <script src="../vendors/pnotify/dist/pnotify.js"></script>
  <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"
        type="application/javascript"></script>
  <script type="module" src="interact.js"></script>



  <script type="module">
    import * as read from './interact.js'
    
    $("#signUp").click(()=>{
      const nome = String($("#name").val())
      const date = $("#date").val()
      const email = String($("#email").val())
      const cel = parseInt($("#cel").val())
      let cpf = $("#cpf").val()
      cpf = parseInt(cpf)
      console.log(typeof(date))    
      read.signUp(nome, email, date, cpf, cel)
      // alert('ok')
    })
  

    async function startApp() {
      read.display()


      // let criar = await CRUD.create(nome, email, cpf, date, cel)      
      // window.location.href = "tables_dynamic.php"
    }
  </script>

</body>

</html>