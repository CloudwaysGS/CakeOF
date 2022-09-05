<table class="table table-striped table-active table-bordered table-hover">
	<thead>
	<a href="register" type="button" class="btn btn-dark float-right m-3">+</a>

	<tr >
		<th scope="col">Prenom</th>
		<th scope="col">Nom</th>
		<th scope="col">Email</th>
		<th scope="col" class="text-center">Action</th>

	</tr>
	</thead>
	<tbody > 
            <?php foreach ($users as $user) :?>
	<tr>
		<td><?= $user['User']['prenom']?></td>
		<td><?= $user['User']['nom']?></td>
		<td><?= $user['User']['email']?></td>
		
		<td class="text-center">
            <?php echo $this->Html->link(
                'Editer',
                array('action' => 'edit', $user['User']['id']),
                array('class' => 'btn btn-info'));
		 ?>
            <?php echo $this->Html->link(
                'Supprimer',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Etes-vous sûr ?','class' => 'btn btn-danger'));
            ?>
		</td>
	</tr>
      <?php endforeach?>
	</tbody>
</table>