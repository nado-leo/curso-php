<?php 
	if ($exception) {
		$message = [
			'type' => 'erro',
			'message' => $exception->getMessage()
		];
	}

?>
<?php if($message): ?> 

	<div class="mx-3 alert alert-danger " role="alert">
		 <?= $message['message'] ?> 
		
	</div>
<?php endif ?>	 
