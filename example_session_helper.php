<?php
// Call this after submit to database
//Sample success toaster calling
flash('System Settings','Systems Settings Updated Successfully', 'success');

//Sample page redirect after submit
redirect('admin/settings');



//Call this on your header section in admin
 echo flash();
?>
