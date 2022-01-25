@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Baneri slajder</h2><br><br>
  @foreach($slide_banners as $baner)
  <form action="{{url('admin/update_slide_banner')}}" method="post" enctype="multipart/form-data">
     @csrf
<input type="hidden" name="id" class="form-control"  value="{{$baner->id}}">
    <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" class="form-control"  id="usr" value="{{$baner->title}}">
  <label for="usr">tekst1:</label>
  <input type="text" name="text1" class="form-control"  id="usr" value="{{$baner->text1}}">
  <label for="usr">link:</label>
  <input type="text" name="link" class="form-control"  id="usr" value="{{$baner->link}}">

</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@if($baner->image)
<img style="width:500px;" src="{{asset($baner->image)}}"><br><br><a href="{{url('admin/delete_slide_banner_image/'.$baner->id)}}">obrisi</a>
@else
<form action="{{url('admin/add_slide_banner_image')}}" method="post" enctype="multipart/form-data">
   @csrf
   <input type="hidden" name="id" class="form-control"  value="{{$baner->id}}">
   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
@endif

<hr style="border: 10px solid black;
border-radius: 5px;">
@endforeach

</div><hr style="border: 10px solid black;
border-radius: 5px;"><hr style="border: 10px solid black;
border-radius: 5px;">

<div class="container" style="max-width: 900px;">
  <h2>Desni baner na naslovnoj</h2><br><br>

  <form action="{{url('admin/update_top_right_banner')}}" method="post" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" class="form-control"  id="usr" value="{{$right_banner->top_right_banner_title}}">
  <label for="usr">tekst1:</label>
  <input type="text" name="text1" class="form-control"  id="usr" value="{{$right_banner->top_right_banner_text}}">
  <label for="usr">link:</label>
  <input type="text" name="link" class="form-control"  id="link" value="{{$right_banner->top_right_banner_link}}">

</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@if($right_banner->top_right_banner_image)
<img style="width:500px;" src="{{asset($right_banner->top_right_banner_image)}}"><br><br><a href="{{url('admin/delete_top_right_banner_image')}}">obrisi</a>
@else
<form action="{{url('admin/add_top_right_banner_image')}}" method="post" enctype="multipart/form-data">
   @csrf

   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
 @endif


<hr style="border: 10px solid black;
border-radius: 5px;">


</div>

<hr style="border: 10px solid black;
border-radius: 5px;"><hr style="border: 10px solid black;
border-radius: 5px;">

<div class="container" style="max-width: 900px;">
  <h2>Baner sa linkom naslovna</h2><br><br>

  <form action="{{url('admin/update_second_right_banner')}}" method="post" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" class="form-control"  id="usr" value="{{$right_banner->second_right_banner_title}}">
  <label for="usr">tekst1:</label>
  <input type="text" name="text1" class="form-control"  id="usr" value="{{$right_banner->second_right_banner_txt}}">
  <label for="usr">link:</label>
  <input type="text" name="link" class="form-control"  id="link" value="{{$right_banner->second_right_banner_link}}">

</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@if($right_banner->second_right_banner_image)
<img style="width:500px;" src="{{asset($right_banner->second_right_banner_image)}}"><br><br><a href="{{url('admin/delete_second_right_banner_image')}}">obrisi</a>
@else
<form action="{{url('admin/add_second_right_banner_image')}}" method="post" enctype="multipart/form-data">
   @csrf

   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
 @endif


<hr style="border: 10px solid black;
border-radius: 5px;">


</div>




<hr style="border: 10px solid black;
border-radius: 5px;"><hr style="border: 10px solid black;
border-radius: 5px;">

<div class="container" style="max-width: 900px;">
  <h2>Baner sa videom naslovna</h2><br><br>

  <form action="{{url('admin/update_video_banner')}}" method="post" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" class="form-control"  id="usr" value="{{$right_banner->video_banner_title}}">
  <label for="usr">tekst1:</label>
  <input type="text" name="text1" class="form-control"  id="usr" value="{{$right_banner->video_banner_txt}}">
  <label for="usr">source:</label>
  <input type="text" name="link" class="form-control"  id="link" value="{{$right_banner->video_banner_source}}">

</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@if($right_banner->video_banner_image)
<img style="width:500px;" src="{{asset($right_banner->video_banner_image)}}"><br><br><a href="{{url('admin/delete_video_banner_image')}}">obrisi</a>
@else
<form action="{{url('admin/add_video_banner_image')}}" method="post" enctype="multipart/form-data">
   @csrf

   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
 @endif


<hr style="border: 10px solid black;
border-radius: 5px;">


</div>








@include('admin/admin_footer')
