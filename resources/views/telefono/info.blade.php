
  
  <!-- Modal -->
  <div class="modal fade" id="edit{{$telefono->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Telefono</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{route('dashboard.update',$telefono->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->nombre}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Marca</label>
            <input type="text"
              class="form-control" name="marca" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->marca}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input type="text"
              class="form-control" name="modelo" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->modelo}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Año</label>
            <input type="text"
              class="form-control" name="anio" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->anio}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Color</label>
            <input type="text"
              class="form-control" name="color" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->color}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Empresa de Telefonia</label>
            <input type="text"
              class="form-control" name="telefonia" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->telefonia}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text"
              class="form-control" name="tamaño" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->tamaño}}">
          </div>
          <div class="mb-3">
            <label for="featured" class="form-label">Imagen</label>
            <input type="file"
              class="form-control" name="featured" id="" aria-describedby="helpId" placeholder="" value="{{$telefono->featured}}">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">GUARDAR</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  
  
  <!-- Modal -->
  <div class="modal fade" id="delete{{$telefono->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Telefono</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('dashboard.destroy', $telefono->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
            Estas seguro de eliminar a <strong>{{$telefono->nombre}}?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
        </form>
      </div>
    </div>
  </div>