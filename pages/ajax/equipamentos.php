<?php
session_start();
  include('../../conexao.php');
  include('../../verificar_login.php');
?>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Equipamentos</h4>
                    
                    
                  

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Tabelas Editaveis</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    
                    <div class="card-body">
                      
                         <div class="col-xl-6 m-3">
                       
                                <button type="button"class="btn btn-primary btn-rounded waves-effect waves-light">Inserir Equipamento</button>
                        
                        </div>
                        
                        

                        <h4 class="card-title">Equipamentos Cadastrados</h4>
                        <p class="card-title-desc">Lista de Equipamentos Cadastrados.</p>

                        <div class="table-responsive">

                          <!--LISTAR TODOS OS USUARIOS-->
                                <?php
                                $currentdate = date("Y-m-d");
                                $nomecolaborador = $_SESSION['nome_usuario'];
                                
                                

                                if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar']!=''){
                                    $pesquisa = $_GET['tipopesquisa'];
                                
                                    $queryTabela = "SELECT * FROM `viaturas` where matricula LIKE '$pesquisa' order by id desc";
                                    
                                }else{
                                    $queryTabela = "SELECT * FROM `viaturas` order by id desc";
                            
                                }
                                    $resultTabela =   mysqli_query($conexao, $queryTabela);
                                    

                                    $rowTabela = mysqli_num_rows($resultTabela);
                                    
                                    echo"<html><br></html>Registros Total: $rowTabela";
                                
                                if($rowTabela == ''){
                                    
                                    echo"<h3>Nao existem dados</h3>";
                                    
                                }else{
                                    ?>

                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Matricula</th>
                                        <th>Numero de pneus</th>
                                        <th>Data</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

					while($res_1 = mysqli_fetch_array($resultTabela)){
						  $id = $res_1["id"];
						  $marca  =  $res_1["marca"];
						  $modelo  =  $res_1["modelo"];
						  $matricula  =  $res_1["matricula"];
						  $pneus  =  $res_1["pneus"];
						  $data  =  $res_1["datar"];
						  $data2 = implode('/',array_reverse(explode
						  ('-', $data)));
						  ?>
                                    <tr>
                                        <td data-field="id" style="width: 80px"><?php echo $id; ?></td>
                                        <td data-field="name"><?php echo $marca; ?></td>
                                        <td data-field="age"><?php echo $modelo; ?></td>
                                        <td data-field="gender"><?php echo $matricula; ?></td>
                                        <td data-field="gender"><?php echo $pneus; ?></td>
                                        <td data-field="gender"><?php echo $data2; ?></td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <?php 
									}
							  ?>
                                        </td>
                                    </tr>
                                    <?php
							}
						  ?>
                                  
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


<!-- Table Editable plugin -->
<script src="assets/libs/table-edits/build/table-edits.min.js"></script>

<script src="assets/js/pages/table-editable.int.js"></script>