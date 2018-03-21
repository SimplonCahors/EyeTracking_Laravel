<h2>Ajouter</h2>

<form method="POST" enctype="multipart/form-data"  >

    @csrf

    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" placeholder="Votre titre" required/>
    
    <label for="auteur">Auteur :</label>
    <input type="text" id="auteur" name="auteur" placeholder="Nom de l'auteur" required/>

    <label for="editeur">Editeur :</label>
    <input type="text" id="editeur" name="editeur" placeholder="Nom de l'éditeur" required/>
 


    <label for="miniature">miniature :</label>

    <input type="file" id="miniature" name="miniature" />

    <input type="submit"  />
</form>     





