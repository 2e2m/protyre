<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Aprovar obra</h4>
                    
                    
                  

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tabela</a></li>
                            <li class="breadcrumb-item active">Tabela de obras por aprovar</li>
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
                       
                                <button type="button"class="btn btn-primary btn-rounded waves-effect waves-light">Inserir nova obra</button>
                        
                        </div>
                        
                        

                        <h4 class="card-title">Obras abertas</h4>
                        <p class="card-title-desc">Lista de obras abertas.</p>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Matricula</th>
                                        <th>Quilometragem</th>
                                        <th>Numero de pneus</th>
                                        <th>Data do registro</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">1</td>
                                        <td data-field="name">AAA</td>
                                        <td data-field="age">1221km</td>
                                        <td data-field="gender">4</td>
                                        <td data-field="gender">03.02</td>
                                       <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                  
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