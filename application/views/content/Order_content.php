<div class="uk-text-center">
<h2>Our Orders</h2>
<hr class="uk-grid-divider">
<div class=" uk-overflow-container">
<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
<thead>
	<tr>
		<th class="uk-text-center">Order_ID</th>
		<th class="uk-text-center">Name<big class="uk-text-danger uk-text-bold">*</big></th>
		<th class="uk-text-center">Email</th>
		<th class="uk-text-center">Number<big class="uk-text-danger uk-text-bold">*</big></th>
		<th class="uk-text-center">Number2</th>
		<th class="uk-text-center">Start<big class="uk-text-danger uk-text-bold">*</big></th>
		<th class="uk-text-center">End<big class="uk-text-danger uk-text-bold">*</big></th>
		<th class="uk-text-center">Address<big class="uk-text-danger uk-text-bold">*</big></th>
	</tr>
</thead>	



<?php 
if(empty($user_data)) {echo "<tr><td colspan='8'><div class='uk-alert uk-alert-warning uk-text-large uk-text-center'>No New Orders Available!</div></td></tr>";}
else{
	foreach($user_data as $row)
	{
		echo "<tr><td>".$row->UiD."</td><td>".$row->Name."</td><td>".$row->Email."</td><td>".$row->Number1."</td><td>".$row->Number2."</td><td>".$row->Time1."</td><td>".$row->Time2."</td><td>".$row->Address."</td><form method='post' action='".base_url()."orderdelete'><td><button id='DeleteBTN' name='DeleteBTN' class='uk-button uk-button-danger uk-button-small' type='submit' value='".$row->UiD."'>Delete</button></td></form></tr>";
	} 
  }
?>
</table>
</div>

</div><br>

<hr class="uk-grid-divider">
