<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
      <form class="col s12" action="{{ route('admin.produto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
         
            <input type="hidden" name="id_user" id="id_user" type="text" value="{{ auth()->user()->id }}">
            

          <div class="row">

            <div class="input-field col s6">
                <input name="name" id="name" type="text" class="validate">
                <label for="name">Nome</label>
            </div>
  
            <div class="input-field col s6">
              <input id="preco" name="preco" type="text" class="validate">
              <label for="preco">Preço</label>
            </div>
  
            <div class="input-field col s6">
              <input id="descricao" name="descricao" type="text" class="validate">
              <label for="descricao">Descrição</label>
            </div>
  
            <div class="input-field col s6">
                <select name="id_categoria">
                        <option value="" disabled selected>Escolha uma opção</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>    
                        @endforeach
                </select>
                <label>Categoria</label>
            </div>

          </div>
          
          <div class="file-field input-field s12">
            <div class="btn">
              <span>Imagem</span>
              <input name="imagem" type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </div> 
      
        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
        <button type="submit" class="waves-effect waves-green btn green right">Cadastrar</button>
        <br>
    </div>
    
  </form>
  </div>