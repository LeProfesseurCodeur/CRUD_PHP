<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Ajouter</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
            </div>
            <div class="modal-body">
			    <div class="container-fluid">
			        <form method="POST" action="add.php">
				        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nom:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="firstname">
                            </div>
				        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Prénom:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lastname">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Adresse:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Quitter</button>
                            <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Enregister</a>
                        </div>
			        </form>
                </div>
            </div>
        </div>
    </div>
</div>
