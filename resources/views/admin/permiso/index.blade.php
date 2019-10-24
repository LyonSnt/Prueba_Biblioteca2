@extends("theme.$theme.layout");

@section('titulo')
   permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Permisos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th></th>    
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->id}}</td>
                            <td>{{$permiso->nombre}}</td>
                            <td>{{$permiso->slug}}</td>
                            <td></td>

                        </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
            </div>

        </div>
    </div>
</div>
@endsection