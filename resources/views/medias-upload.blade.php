<!-- laravel manages errors automatically -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/upload/save" enctype="multipart/form-data" >
@csrf
<select name="dataType">
  <option value="img">Image</option> 
  <option value="son" >Son</option>
  <option value="video">Video</option>
</select>

<input type="file" name="file"/>
<input type="submit" />
<form/>

<a href="/medias">Retour à la page Medias</a>

<div>attention : ne fonctionne pas pour les jpeg</div>