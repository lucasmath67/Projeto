@csrf
<div class="form-group">
  <label>Nome:</label>
<input  name="name" type="text" class="form-control" value="{{$product->name ?? old('name')}}"  placeholder="Nome do Produto">
</div>
<div class="form-group">
  <label>Preço:</label>
  <input name="price" type="text" class="form-control" value="{{$product->price ?? old('price')}}"  placeholder="Preço do Produto">
</div>

<button type="submit" class="btn btn-primary">Adicionar</button>
