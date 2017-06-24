<!DOCTYPE html>
<html>
	<head>
		<title>My Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="debutSite.css">
	</head>
	<body>
		<nav>
			<ul>
				<li class="menu-contact"><a href="contact.html">Contact</a></li>
				<li class="menu-html">
					<a href="html.html">HTML</a>
					<ul class="submenu">
						<li><a href="#">First</a></li>
						<li><a href="#">Second</a></li>
						<li><a href="#">Third</a></li>
					</ul>
				</li>
				<li class="menu-css">
					<a href="css.css">CSS</a>
					<ul class="submenu">
						<li><a href="#">First</a></li>
						<li><a href="#">Second</a></li>
					</ul>
				</li>
				<li class="menu-javascript">
					<a href="javascript.html">Projets</a>
					<ul class="submenu">
						<li><a href="https://github.com/PLMartin/Sudoku">Sudoku Resolver</a></li>
						<li><a href="#">Second</a></li>
						<li><a href="#">Third</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<section>
			<aside>
				<h1> Mon Barre </h1>
				<ul>

				</ul>
			</aside>
		
		<!-- <script type="text/javascript" src="test.js"/> -->
			<?php
				if(date('H')>17)
					echo '<h1>Bonsoir<\h1>';
				else
					echo '<h1>Bonjour<\h1>';
			?>
			<article>
				<h1>Mon article</h1>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
				</p>
			</article>
			<article>
				<h1>Mon deuxième article</h1>
				<p>Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.

				Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet. </p>
			</article>
		</section>
	</body>

	<footer>
		<ul>
			bla
		</ul>
	</footer>

</html>
