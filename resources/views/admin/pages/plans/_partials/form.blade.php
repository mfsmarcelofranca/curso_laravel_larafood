@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$plan->name ?? old('name')}}">
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name="price" class="form-control" placeholder="Preço:" value="{{$plan->price ?? old('price')}}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{$plan->description ?? old('description')}}">
</div>
<div class="form-group">
    <label>Url:</label>
    <input type="text" name="url" class="form-control" placeholder="Url:" value="{{$plan->url ?? old('url')}}">
</div>
