@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Ubaci proizvod</h2><br><br>
  <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
  <label for="usr">Naslov produkta:</label>
  <input type="text" name="product" class="form-control"  id="usr">
</div>
<div class="form-group">
<label for="sifra">Sifra:</label>
<input type="text" name="sifra" class="form-control" id="sifra">
</div>
<div class="form-group">
<label for="redosled">Redosled:</label>
<input type="text" name="redosled" class="form-control" id="redosled">
</div>
<div class="form-group">
<label for="usr">Cena:</label>
<input type="text" name="cena" class="form-control" id="usr">
</div>
<div class="form-group">
<label for="usr">Dostava:</label>
<input type="text" name="dostava" class="form-control" id="usr">
</div>

<div class="form-group">
<label for="materijal">Text:</label>
<textarea class="form-control" name="text" rows="1" id="text"></textarea>
</div>
<div class="form-group">
<label for="materijal">Materijal:</label>
<textarea class="form-control" name="materijal" rows="1" id="materijal"></textarea>
</div>
<div class="form-group">
<label for="materijal">Dimenzije:</label>
<textarea class="form-control" name="dimenzije" rows="1" id="dimenzije"></textarea>
</div>
<div class="form-group">
  <label for="slike">Slike:</label>
                <input type="file" name="images[]" multiple class="form-control" id="slike">
            </div>
<div class="form-group">
<label for="sel1">Kategorija:</label>
<select class="form-control" id="sel1" name="category">
  <option value=0>izaberi</option>
  @foreach(\App\Category::get() as $category)

<option value={{$category->id}}>{{$category->title}}</option>
@endforeach
</select>
</div>




    <button type="submit" class="btn btn-default" style="background:red;">Submit</button>
  </form>
</div>



@include('admin/admin_footer')
