<?php function danger($type, $title, $text)
{
	?>
	<div class="container is-fluid">
		<div class="columns">
			<div class="column is-6 is-offset-3">
				<section class="section">
					<div class="notification is-<?php echo "$type"; ?>">
						<header>
							<h1 class="title">
								<?php echo $title?>
							</h1>
						</header>
						<div class='card-content'>
							<div class='content'>
								<?php echo $text?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php
}
