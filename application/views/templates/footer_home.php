	</div>

	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                Are you sure you want to delete this <span id="deleteType"></span>?
	            </div>
	            <div class="modal-footer">
	                <form id="deleteForm" method="post">
	                    <input type="hidden" name="id" id="deleteId">
	                    <button type="submit" class="btn btn-danger">Delete</button>
	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	<script>
	    $('#deleteModal').on('show.bs.modal', function(event) {
	        var button = $(event.relatedTarget);
	        var id = button.data('id');
	        var type = button.data('type');


	        var modal = $(this);
	        modal.find('.modal-body #deleteType').text(type.charAt(0).toUpperCase() + type.slice(1));
	        modal.find('#deleteId').val(id);
	        modal.find('#deleteForm').attr('action', '<?php echo site_url('proyek/delete'); ?>/' + id);

	        if (type === 'lokasi') {
	            modal.find('#deleteForm').attr('action', '<?php echo site_url('lokasi/delete'); ?>/' + id);
	        }
	    });
	</script>
	</body>

	</html>