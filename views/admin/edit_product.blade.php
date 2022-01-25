@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Izmeni proizvod</h2><br><br>
  <form action="{{url('product_update')}}" method="post" enctype="multipart/form-data">
     @csrf

   <input type="hidden" name="id" class="form-control" value="{{$product->id}}"  >

    <div class="form-group">
  <label for="usr">Naslov produkta:</label>
  <input type="text" name="product" class="form-control" value="{{$product->title}}"  id="usr">
</div>
<div class="form-group">
<label for="sifra">Sifra:</label>
<input type="text" name="sifra" class="form-control" id="sifra" value="{{$product->sifra}}">
</div>
<div class="form-group">
<label for="redosled">Redosled:</label>
<input type="text" name="redosled" class="form-control" id="redosled" value="{{$product->redosled}}">
</div>

<div class="form-group">
<label for="usr">Cena:</label>
<input type="text" name="cena" class="form-control" value="{{$product->cena}}" id="usr">
</div>
<div class="form-group">
<label for="usr">Dostava:</label>
<input type="text" name="dostava" class="form-control" value="{{$product->dostava}}" id="usr">
</div>

<div class="form-group">
<label for="materijal">Text:</label>
<textarea class="form-control" name="text" rows="1" id="text">{{$product->text}}</textarea>
</div>
<div class="form-group">
<label for="materijal">Materijal:</label>
<textarea class="form-control" name="materijal" rows="1" id="materijal">{{$product->materijal}}</textarea>
</div>
<div class="form-group">
<label for="materijal">Dimenzije:</label>
<textarea class="form-control" name="dimenzije" rows="1" id="dimenzije">{{$product->dimenzije}}</textarea>
</div>

<div class="form-group">
<label for="sel1">Kategorija:</label>
<select class="form-control" id="sel1" name="category">
  <option value=0>izaberi</option>
  @foreach(\App\Category::get() as $category)
  @if($product->category)
  @if($product->category->id==$category->id)
  <option value={{$category->id}} selected>{{$category->title}}</option>
  @else
  <option value={{$category->id}}>{{$category->title}}</option>
  @endif
  @else
  <option value={{$category->id}}>{{$category->title}}</option>
  @endif
  @endforeach
</select>
</div>




    <button type="submit" class="btn btn-default" style="background:red;">Sacuvaj</button>
  </form>
  <a href="{{url('admin/delete_product/'.$product->id)}}"><button class="btn btn-default" style="background:blue; float:right;">Obrisi</button></a>
</div>

<br><br><hr>
<form action="{{url('images_update')}}" method="post" enctype="multipart/form-data" >
   @csrf
<div class="form-group">
  <label for="slike">Dodaj slike:</label>
               <input type="hidden" name='id' value="{{$product->id}}">
                <input type="file" name="images[]" multiple class="form-control" id="slike">
            </div>

  <button type="submit" class="btn btn-default" style="background:red;">Sacuvaj</button>
</form>
<br><br><hr>
<div style="display:flex">
  @foreach($product->image_product as $image)
  <div style="margin:10px">
  <img style="width:90px" class="pic-1 img-fluid" src="{{asset($image->image)}}"><br>
  <a href="{{url('delete_image/'.$image->id)}}">obrisi</a>
</div>
@endforeach
</div>
@include('admin/admin_footer')
