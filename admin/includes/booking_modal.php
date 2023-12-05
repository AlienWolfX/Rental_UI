<!-- Modal -->
<div class="modal fade" id="edit">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">EDIT: <span class="del_customer_name"></span></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form method="POST" action="">
	  <div class="modal-body">
		<input type="hidden" class="cust_id" name="id">
		<div class="col-md-12">
             <div class="form-group">
               <label for="edit_lastname" class="control-label">FIRST NAME</label>
               <input type="text" class="form-control" id="edit_firstname" name="lastname">
             </div>
         </div>
		 <div class="col-md-12">
             <div class="form-group">
               <label for="edit_lastname" class="control-label">MIDDLE NAME</label>
               <input type="text" class="form-control" id="edit_middlename" name="lastname">
             </div>
         </div>
		 <div class="col-md-12">
             <div class="form-group">
               <label for="edit_lastname" class="control-label">LAST NAME</label>
               <input type="text" class="form-control" id="edit_lastname" name="lastname">
             </div>
         </div>
		 <div class="col-md-12">
             <div class="form-group">
               <label for="edit_lastname" class="control-label">PHONE</label>
               <input type="text" class="form-control" id="edit_phone" name="lastname">
             </div>
         </div>
		 <div class="col-md-12">
             <div class="form-group">
               <label for="edit_lastname" class="control-label">EMAIL</label>
               <input type="text" class="form-control" id="edit_email" name="lastname">
             </div>
         </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary" name="submit">Save changes</button>
	  </div>
	  </form>
	</div>
  </div>
</div>