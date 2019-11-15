<div class="container clearfix">
	<h2 class="border-bottom mb-3">All Sites</h2>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Title</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  	$cards = Cards::newInstance()->getAll();
	  	foreach ($cards as $card) { ?>
		    <tr>
		      <th scope="row"><?php echo $card['id']; ?></th>
		      <td><?php echo $card['title']; ?></td>
		      <td><a href="index.php?action=edit&id=<?php echo $card['id']; ?>">Edit</a> | <a href="action.php?deleteCard=<?php echo $card['id']; ?>">Delete</a></td>
		    </tr>
		<?php } ?>
	   
	  </tbody>
	</table>
</div>