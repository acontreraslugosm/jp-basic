<div class="main-menu">
		<div class="container">
				<nav class="navbar navbar-default">
						<div class="container-fluid">
								<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand" href="#"><?php _e( 'Menu', TEXT_DOMAIN ) ?></a>
								</div>
								<?php
								$defaults = array(
										'theme_location' => 'main-menu',
										'container_id' => 'main-menu',
										'container_class' => 'collapse navbar-collapse',
										'menu_class' => 'menu nav navbar-nav',
								);
								wp_nav_menu( $defaults );
								?>
						</div>
				</nav>
		</div>
</div>