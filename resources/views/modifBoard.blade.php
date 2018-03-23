@extends('layout.app')

@section('title')
Home
@endsection
   
@section('content')

<div id="appModif">
  <section id="sectionModifBoard">
    <div class="row">

      <div class="col-4">
        <button type="button" class="btn btn-outline-secondary" id="buttonCreateZone">Créer une zone</button> 
        <button type="button" class="btn btn-outline-secondary" id="buttonModifZone">Modifier une zone</button> 
      
        <div class="card" id="formZone">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="mediaFiles">Fichier médias</label>
                <input type="file" class="form-control" id="mediaFiles">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-12">
                    <label for="tpsDeclenchement">Temps de déclenchement</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <input type="number" class="form-control" id="tpsDeclenchement">
                  </div>
                  <div class="col-4">  
                    secondes
                  </div>
                </div> 
              </div> 
              <button type="submit" class="btn btn-primary">Valider</button>
            </form>
          </div>
        </div>
      
  </div>
      <div class="col-8" id="imgModif">
      <div id="page">
        <img src="img/plancheBD.JPG" alt="planche BD">
        </div>
      </div>
    </div>
  </section>
</div>

@endsection


