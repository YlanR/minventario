<!-- Content Header (Page header) -->
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Venta de Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Venta de Productos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
       
      <div class="row ">
        <div class="col-lg-12 ">
         <!-- <div class="card card-info"> -->
          <table id="tbl_productos" class="table table-striped w-100 shadow" >
            <thead class="card-info text-center"  style="background: #17a2b8; color: #ffff">
                <tr>
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Venta Total</th>
                    <th>Salidas</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
           
            <?php foreach($salidas as $salida => $valor): ?>
          
          <tr class="text-center">
            <td><?=($salida+1)?></td>
            <td><?=$valor->codigo?></td>
            <td><?=$valor->descripcion?></td>
            <td><?=$valor->categorias?></td>
            <td><?=$valor->ventat?>$</td>
            <td><?=$valor->salida?> Und(s)</td>
            <td><?=$valor->fecha?></td>
          </tr>

          <?php endforeach; ?>
            </tbody>
            <tfoot class="text-center">
                    <tr>
                      <th>#</th>
                      <th>Codigo</th>
                      <th>Descripcion</th>
                      <th>Categoria</th>
                      <th>Venta Total</th>
                      <th>Salidas</th>
                      <th>Fecha</th>
                    </tr>
                    </tfoot>
          </table>
          </div>
        
      </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>

   

