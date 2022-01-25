@include('admin/admin_header')


<div class="container" style="max-width: 900px;">
  <h2>Izmeni - o nama</h2><br><br>

  <form action="{{url('admin/update_abouts')}}" method="post" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" class="form-control"  id="usr" value="{{$abouts->right_banner_title}}">
  <div class="form-group">
  <label for="text">Text:</label>
  <textarea class="form-control" name="text1" rows="1" id="text">{{$abouts->right_banner_text}}</textarea>
  </div>

</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
<h4>top baner</h4>
@if($abouts->top_banner_image)

<img style="width:500px;" src="{{asset($abouts->top_banner_image)}}"><br><br><a href="{{url('admin/delete_about_top_banner_image')}}">obrisi</a>
@else
<form action="{{url('admin/add_about_top_banner_image')}}" method="post" enctype="multipart/form-data">
   @csrf

   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
 @endif


<br><br>
<h4>slika pored teksta</h4>
@if($abouts->right_banner_image)
<img style="width:500px;" src="{{asset($abouts->right_banner_image)}}"><br><br><a href="{{url('admin/delete_about_right_banner_image')}}">obrisi</a>
@else
<form action="{{url('admin/add_about_right_banner_image')}}" method="post" enctype="multipart/form-data">
   @csrf

   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
 @endif


</div>








@include('admin/admin_footer')
