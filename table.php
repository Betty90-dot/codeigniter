//viewtable.php
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<thead>
		<th>Id</th>
		<th>first name</th>
		<th>last name</th>
		<th>user name</th>
		<th>password</th>
		<th>mobile</th>
		<th>email</th>
		<th colspan="2">ACTION</th>
		


	</thead>


	<?php
	if($n->num_rows()>0)
	{
		foreach($n->result() as $row)
		{
			?>
			<tr>
				<td><?php echo $row->id; ?></td>
		

		
				<td><?php echo $row->fname; ?></td>
	

	
				<td><?php echo $row->lname; ?></td>

				<td><?php echo $row->uname; ?></td>
		

		
				<td><?php echo $row->password; ?></td>
	

	
				<td><?php echo $row->mobile; ?></td>

				<td><?php echo $row->email; ?></td>
				<?php

				if($row->status==0)
				{
				?>
					<td><a href="<?php echo base_url();?>main/approvef">approve</a></td>
					<td><a href="<?php echo base_url();?>main/rejectf">reject</a></td>
					<?php
				}
				elseif($row->status==1)
				{
					?>
					<td>approved</td>
					<td><a href="<?php echo base_url();?>main/rejectf">reject</a></td>
				<?php
				}
				else
				{
					?>
					<td>rejected</td>
					<td><a href="<?php echo base_url();?>main/approvef">approve</a></td>

				<?php
				}
			}
		}

		else
		{

		?>
		<td> data not found</td>
		<?php
		}
		?>
</body>
</html>


























































































































































































		
		