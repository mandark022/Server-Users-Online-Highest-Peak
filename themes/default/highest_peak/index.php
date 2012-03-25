<h2>Server Highest Peak</h2>
<?php if($hp): ?>
<table class="horizontal-table" width="100%">  
<?php foreach($hp as $peak): ?>
<tr>
	<th style="width:30%;">Server Highest Peak:</th>
	<td><?php echo $peak->num_users; ?></td>
</tr>
<tr>
	<th style="width:30%;">Date:</th>
	<td><?php echo $peak->peak_date; ?></td>
</tr>
<?php endforeach;?>
</table>
<?php endif; ?>
<?php if(!$hp): ?>
	<i>No Server Highest Peak Found</i>
<?php endif; ?>
