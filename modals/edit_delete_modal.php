<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modification</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="crud/edit.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" value="<?php echo $row->firstname; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Prénom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row->lastname; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Addresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer définitivement </h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sur de voulour supprimer</p>
				<h2 class="text-center"><?php echo $row->firstname.' '.$row->lastname; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <a href="crud/delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> OUI</a>
            </div>
 
        </div>
    </div>
</div>