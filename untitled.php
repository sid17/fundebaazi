$x=$x. '<div class="modal-header">';
$x=$x.'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
$x=$x. '<h2 class="modal-title">Book A Consultation </h2>';
$x=$x. '</div>';
$x=$x. '<div class="container">';
$x=$x.'<div class="row">';
$x=$x.'<div class="col-sm-offset-2 col-sm-4">';


$x=$x.'<form method="post" enctype="multipart/form-data">';




$x=$x.' <div class="form-group">';
$x=$x.'<label for="firstname">Firstname</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';

$x=$x.'<div class="form-group">';
$x=$x. '<label for="lastname">Last Name</label>';
$x=$x.'<div class="input-group">';
$x=$x.   '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Optional">';
$x=$x.  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
$x=$x. '</div>';
$x=$x.'</div>';


$x=$x.'<div class="form-group">';
$x=$x. '<label for="email">Email</label>';
$x=$x.'<div class="input-group" data-validate="email">';
$x=$x.'<input type="text" class="form-control" name="email" id="email" placeholder="Email" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.' <div class="form-group">';
$x=$x.'<label for="validate-phone">Validate Phone</label>';
$x=$x.'  <div class="input-group" data-validate="phone">';
$x=$x.'<input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.'<div class="form-group">';
$x=$x.'<label for="validate-select">Validate Select</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>';
$x=$x.'<option value="">Select an item</option>';
$x=$x.'<option value="item_1">Item 1</option>';
$x=$x.'<option value="item_2">Item 2</option>';
$x=$x.'<option value="item_3">Item 3</option>';
$x=$x.'</select>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';
$x=$x.'<div class="form-group">';
$x=$x.'<div class="input-group">';
$x=$x.'<label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />';
$x=$x.'</div>';
 $x=$x.'</div>';


$x=$x.'<button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>';
$x=$x.'<br>';
$x=$x.'<br><br>';
$x=$x.'</form>';
$x=$x.'</div>';
$x=$x.'</div>';