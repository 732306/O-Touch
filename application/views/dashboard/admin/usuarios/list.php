 <main class="main col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <div class="widget">
                            <section class="content-header">
                                <h3 class="titulo">Usuarios
                                    <small>Listado</small>
                                </h3>
                            </section>
                            <section class ="content">
                                <div class="box box-solid">
                                    <div class="box-solid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="<?php echo base_url();?>admin/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar usuario</a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                            <th>Email</th>
                                                            <th>Dirección</th>
                                                            <th>Ciudad</th>
                                                            <th>Provincia</th>
                                                            <th>Registro</th>                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                          <th scope="row">1</th>
                                                          <td>Mark</td>
                                                          <td>Otto</td>
                                                          <td>Río Duero Nº5 1ºC</td>
                                                          <td>Ponferrada</td>
                                                          <td>León</td>
                                                          <td>28-02-19</td>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row">2</th>
                                                          <td>Alberto</td>
                                                          <td>Robles</td>
                                                          <td>Río Duero Nº5 1ºC</td>
                                                          <td>Ponferrada</td>
                                                          <td>León</td>
                                                          <td>28-02-19</td>
                                                        </tr>
                                                        <!--
                                                        <?php if(!empty($usuarios)):?>
                                                            <?php foreach($usuarios as $usuario):?>
                                                                <tr>
                                                                    <td><?php echo $usuario['id'];?></td>
                                                                    <td><?php echo $usuario['nombre'];?></td>
                                                                    <td><?php echo $usuario['email'];?></td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-default" value="<?php echo $datacliente?>">
                                                                                <span class="fa fa-search"></span>
                                                                            </button>
                                                                            <a href="<?php echo base_url()?>admin/usuarios/edit/" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                                            <a href="<?php echo base_url();?>admin/usuarios/delete/" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach;?>
                                                        <?php endif;?>-->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion del usuario</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
            <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
