<!DOCTYPE html>
<html>
<head>
<title>Liste des chantiers</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<?php include 'db.php'; ?>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript">
     var url = "http://chantier.ajax/";
        </script>


</script>

</head>
<body>


<div class="container">
  <div class="form-group">
    <label for="sel1">trier par clients</label>
    <select class="form-control" id="sel1">
      <option>Tous</option>
  <?php foreach ($filtre as $tableau) {
$i=1;
    // if($result['chantier_nom_client'] != $tableau['chantier_nom_client']){
    echo '<option>'.$tableau['chantier_nom_client'].'</option>';
  // }
    $i++;

   }?>
    </select>
  </div>
  <div class="form-group">
    <label for="sel1">trier par chantiers</label>
    <select class="form-control" id="sel2">
      <option>Tous</option>
  <?php foreach ($filtre as $tableau) echo '<option>'.$tableau['chantier_nom'].'</option>' ?>
    </select>
  </div>
<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Chantiers</h2>
        </div>
        <div class="pull-right">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
  Ajouter un chantier
</button>
        </div>
    </div>
</div>


<table class="table table-bordered">
<thead>
    <tr>
      <th>liaison_id</th><th>client</th><th>chantier</th><th>poste</th><th>janvier</th><th>fevrier</th><th>mar</th><th>avril</th><th>mai</th><th>juin</th><th>juillet</th><th>aout</th><th>septembre</th>
      <th>octobre</th><th>novembre</th><th>decembre</th><th>Action</th>
    </tr>
</thead>

<tbody>
  <?php foreach ($result as $tableau)

   echo '<tr class=\'tabl1\'><td class="liaison_id">'.$tableau['liaison_id'].'</td><td class=\'test\'>'.$tableau['chantier_nom_client'].'</td><td class=\'test\'>'.$tableau['chantier_nom'].'</td><td>'
  .$tableau['poste_libelle'].'</td><td>'.$tableau['jan'].'</td><td>'.$tableau['fev'].'</td><td>'.$tableau['mar'].'</td><td>'  .$tableau['avr'].'</td><td>'.$tableau['mai'].'</td><td>'
  .$tableau['juin'].'</td><td>'.$tableau['juil'].'</td><td>'.$tableau['aou'].'</td><td>'  .$tableau['sep'].'</td><td>'.$tableau['oct'].'</td><td>'.$tableau['nov'].'</td><td>'.$tableau['decembre'].'
  </td><td><button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button><button class="btn btn-danger remove-item">Delete</button>  </td></tr>' ?>
</tbody>
</table>


<ul id="pagination" class="pagination-sm"></ul>


        <!-- Create Item Modal -->
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajouter un chantier</h4>
      </div>


      <div class="modal-body">

      <form >

      <div class="form-group">
<label class="control-label" for="title">Chantier</label>
<input type="text" name="chantier" class="form-control" data-error="Please enter chantier." required />
<div class="help-block with-errors"></div>
</div>
      <div class="form-group">
<label class="control-label" for="title">Poste</label>
<input type="text" name="poste" class="form-control" data-error="Please enter poste." required />
<div class="help-block with-errors"></div>
</div>


<div class="form-group">
    <table>
    <thead>
        <tr>
          <th>janvier</th>
          <th>fevrier</th>
          <th>mar</th>
        </tr>
    </thead>
      <tr>
        <td><input type="text" name="jan" /></td>
        <td><input type="text" name="fev" /></td>
        <td><input type="text" name="mar" /></td>
    </tr>
  </table>
  <table>
    <thead>
        <tr>
          <th>avril</th>
          <th>mai</th>
          <th>juin</th>
        </tr>
      </thead>
          <tr>
            <td><input type="text" name="avr" /></td>
            <td><input type="text" name="mai" /></td>
            <td><input type="text" name="juin" /></td>
          </td>
        </tr>
      </table>
      <table>
      <thead>
          <tr>
            <th>juillet</th>
            <th>aout</th>
            <th>septembre</th>
          </tr>
        </thead>
            <tr>
              <td><input type="text" name="juil" /></td>
              <td><input type="text" name="aout" /></td>
              <td><input type="text" name="sept" /></td>
          </tr>
        </table>
        <table>
        <thead>
            <tr>
              <th>octobre</th>
              <th>novembre</th>
              <th>decembre</th>
            </tr>
          </thead>
              <tr>
                <td><input type="text" name="oct" /></td>
                <td><input type="text" name="nov" /></td>
                <td><input type="text" name="decembre" /></td>
            </tr>
          </table>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success crud-submit">Ajouter</button>
    </div>
      </form>


      </div>
    </div>


  </div>
</div>


<!-- Edit Item Modal -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
      </div>


      <div class="modal-body">

      <input type="hidden" name="id" class="edit-id">
      <div class="form-group">
<label class="control-label" for="title">liaison_id</label>
<input type="text" name="liason_id" class="form-control" data-error="Please enter liasons_id." required />
<div class="help-block with-errors"></div>
<label class="control-label" for="title">Chantier</label>
<input type="text" name="chantier" class="form-control" data-error="Please enter chantier." required />
<div class="help-block with-errors"></div>
</div>
      <div class="form-group">
<label class="control-label" for="title">Poste</label>
<input type="text" name="poste" class="form-control" data-error="Please enter poste." required />
<div class="help-block with-errors"></div>
</div>


      <div class="form-group">
        <table>
        <thead>
            <tr>
              <th>janvier</th>
              <th>fevrier</th>
              <th>mar</th>
            </tr>
        </thead>
          <tr>
            <td><input type="text" name="jan" /></td>
            <td><input type="text" name="fev" /></td>
            <td><input type="text" name="mar" /></td>
        </tr>
        </table>
        <table>
        <thead>
            <tr>
              <th>avril</th>
              <th>mai</th>
              <th>juin</th>
            </tr>
          </thead>
              <tr>
                <td><input type="text" name="avr" /></td>
                <td><input type="text" name="mai" /></td>
                <td><input type="text" name="juin" /></td>
              </td>
            </tr>
          </table>
          <table>
          <thead>
              <tr>
                <th>juillet</th>
                <th>aout</th>
                <th>septembre</th>
              </tr>
            </thead>
                <tr>
                  <td><input type="text" name="juil" /></td>
                  <td><input type="text" name="aout" /></td>
                  <td><input type="text" name="sept" /></td>
              </tr>
            </table>
            <table>
            <thead>
                <tr>
                  <th>octobre</th>
                  <th>novembre</th>
                  <th>decembre</th>
                </tr>
              </thead>
                  <tr>
                    <td><input type="text" name="oct" /></td>
                    <td><input type="text" name="nov" /></td>
                    <td><input type="text" name="decembre" /></td>
                </tr>
              </table>
        </div>


<div class="form-group">
<button type="submit" class="btn btn-success crud-submit-edit">Modifier</button>
</div>


      </form>


      </div>
    </div>
  </div>
</div>


</div>
</body>
</html>
