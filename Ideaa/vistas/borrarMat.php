<div id="delete_user<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body"><div class="alert alert-danger">¿Estas seguro de eliminar este Material de estudio?</div></div>		
    <div class="modal-footer">
        <a class="btn btn-danger" href="delete_Material.php<?php echo '?id=' . $id; ?>"><i class="icon-check"></i>&nbsp;Si</a>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;No</button>
    </div>
</div>