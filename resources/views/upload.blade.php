
<form method="post" action="/upload/save" enctype="multipart/form-data" >
@csrf
<select name="dataType">
  <option value="img">Image</option> 
  <option value="son" >Son</option>
  <option value="video">Video</option>
</select>

<input type="file" name="filename" />
<input type="submit" />
<form/>


<a href="/medias">Retour à la page Medias</a>