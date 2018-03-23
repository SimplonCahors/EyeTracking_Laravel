<h2>Update page</h2>

<form method="GET" enctype="multipart/form-data" {{action('PageController@update')}}>         

    <input type="number" name="numeroPage" placeholder="numero de page">
    <!-- <input type="file" name="filename"/> -->
    <input type="submit" value="update" name="update">
    
</form>

<h2>Delete page</h2>

<form method="GET" {{action('PageController@delete')}}>
<input type="number" name="numPageToDelete">
<input type="submit" value="delete" name="delete">
</form>
