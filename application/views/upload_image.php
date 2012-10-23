					<div class="modal fade" id="test_modal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Modal Header</h3>
  </div>
  <div class="modal-body">
    <p>Test Modal</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
    <a href="#" class="btn btn-primary">Save Changes</a>
  </div>
</div>
					<div id="upload">
						<?php
						echo form_open_multipart('gallery');
						echo form_label('Image Upload', 'userfile');
						echo form_upload('userfile');
						echo form_submit('upload', 'Upload');
						echo form_close();
						?>
					</div>