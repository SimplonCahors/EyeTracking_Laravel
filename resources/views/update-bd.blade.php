
<h2>Modifier</h2>

<form method="POST">

    @csrf
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" value="{{$comic->com_title}}"/>
 
    <label for="editeur">Editeur :</label>
    <input type="text" id="editeur" name="editeur" value="{{$comic->com_publisher}}"/>
    
    <label for="auteur">Auteur :</label>
    <input type="text" id="auteur" name="auteur" value="{{$comic->com_author}}"/>

    <input type="submit"  />
</form>     


