<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include("head.php"); ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include("nav.php"); ?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Clientes</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Opções</th>
                      </tr>
                    </thead>


                    <tbody id="table_body">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>


  <!-- /page content -->
  <!-- MODAL DELETE-->
  <div class="modal fade" tabindex="-1" id='deleteModal'>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir item</h5>
          <a href="tables_dynamic.php"><button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button></a>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja apagar o item selecionado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="hidden" id="idDelete" value="" />
          <a id="btnDelete"><button type="button" class="btn btn-primary">Apagar</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- /MODAL -->

  <!-- MODAL ALTER-->
  <div class="modal fade" tabindex="-1" id='alterModal'>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Alterar item</h5>
          <a href="tables_dynamic.php"><button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button></a>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <a id="btnAlter"><button type="button" class="btn btn-primary">Alterar</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- /MODAL -->

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
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../vendors/jszip/dist/jszip.min.js"></script>
  <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
  
  
  <script type="module" src="interact.js"></script>
  <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
 <script type="module">
    import * as read from './interact.js'
    read.display()

  </script>




</body>

</html>