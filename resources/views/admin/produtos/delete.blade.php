<div id="delete-{{$produto->id}}" class="modal">
  <div class="modal-content">
    <h4><i class="material-icons">delete</i> Deletar </h4>
    <div class="col s12">
      <div class="row">     
          Tem Certeza que queres deletar {{ $produto->name }}
      </div> 
    
      <form action="{{ route('admin.delete', $produto->id) }}" method="POST">
        @method('DELETE')
        @csrf

        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
        <button type="submit" class="waves-effect waves-green btn red right">Excluir</button><br>
      </form>
    </div>
  </div>
</div>