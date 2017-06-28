<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Lista - Marvel</title>
    <meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
		<div class="container">
			<div class="row">
				<br/>
				<?php
					for ($i = 1; $i <= $paginacao; $i++)
					{
						if($pagina_atual == $i || $pagina_atual == null)
						{
							echo '<a class="btn btn-danger dropdown-toggle" href="/marvel/index.php/welcome/index/'.$i.'">'.$i.'</a>';
						}else{
							echo '<a class="btn btn-warning dropdown-toggle" href="/marvel/index.php/welcome/index/'.$i.'">'.$i.'</a>';
						
						}
					}
				?>
				<br/>
				<br/>
				<?php
					foreach($resultado as $resultados)
					{
				?>
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">
							<?=$resultados->title;?>
						</h3>
					</div>
					<div class="panel-body"> 
						<div class="col-md-2">
							<img width="100%" src="<?=$resultados->thumbnail->path;?>.<?=$resultados->thumbnail->extension;?>">
						</div>
						<div class="col-md-10">
							<?=$resultados->description;?>
							<br/>
							<?php
								foreach($resultados->urls as $urls)
								{
									echo "<a target='_BLANK' href='{$urls->url}'><span class='label label-success'>{$urls->type}</span></a>";
								}
							?>
						</div>
					</div>
				</div>
				<?php
					}
					for ($i = 1; $i <= $paginacao; $i++)
					{
						if($pagina_atual == $i || $pagina_atual == null)
						{
							echo '<a class="btn btn-danger dropdown-toggle" href="/marvel/index.php/welcome/index/'.$i.'">'.$i.'</a>';
						}else{
							echo '<a class="btn btn-warning dropdown-toggle" href="/marvel/index.php/welcome/index/'.$i.'">'.$i.'</a>';
						
						}
					}
				?>
				<br/>
				<br/>
				
			</div>
		</div>
  </body>
</html>