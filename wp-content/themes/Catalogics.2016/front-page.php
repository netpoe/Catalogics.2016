<?php get_header(); ?>

	<main class="site-content" role="main">
			
		<section class="hero-unit bg-primary">
			<div class="overlay flex-column-center text-center text-white">
				<div class="container">
					<h1>E-Commerce, bien.</h1>
					<h3>Incrementa la rotación de tu inventario.</h3>
					<p>Déjanos ayudarte a planificar y lanzar una tienda en línea.</p>
					<nav class="mt-42 mr-ch-14">
						<a href="#call-to-action" class="btn btn-white btn-outline medium">Solicita una cotización</a>
					</nav>
				</div>
			</div>
		</section>

		<section class="section bg-white">
			<div class="container">
				<div class="text-center">
					<h2>Expande tus puntos de venta</h2>
					<p>Catalogics colabora contigo para que promuevas y vendas tus productos en línea.</p>
					<div class="mt-21">
						<h5>Servicios</h5>
						<span class="icon-chevron-down animated infinite bounce ad-24 block"></span>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-primary" id="servicios">
			<div class="container">
				<div class="row services-block">
					<div class="col-sm-7 left">
						<div class="text-white">
							<h6 class="uppercase">Servicios</h6>
					    <h2 class="mb-35">Fotografía de producto</h2>
					    <h5>Nuestro equipo te ayuda a crear <br><strong>fotografías profesionales de tus productos</strong>.</h5>
					    <p>Acudimos a tu local, fábrica o almacén y dejamos tus productos listos para brillar en internet.</p>
					    <nav class="mt-42 mr-ch-14">
								<a href="#call-to-action" class="btn btn-white btn-outline medium">Solicita una cotización</a>
							</nav>
					  </div>
					</div>
					<div class="col-sm-5 right hidden-md-down">
						<div class="img-slide-container">
							<img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/services_photos.png" alt="Fotografía de producto">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-primary">
			<div class="container">
				<div class="row services-block">
					<div class="col-sm-5 left hidden-md-down">
						<div class="img-slide-container">
							<img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/services_cart.png" alt="Fotografía de producto">
						</div>
					</div>
					<div class="col-sm-7 right">
						<div class="text-white">
							<h6 class="uppercase">Servicios</h6>
					    <h2 class="mb-35">Catálogo en línea y carrito de compra</h2>
					    <h5><strong>Accede al mercado nacional y extranjero</strong> <br>promoviendo tus productos en línea.</h5>
					    <p>Con tus fotografías listas, dejamos todo listo para que subas tu inventario a la web con herramientas fáciles de usar.</p>
					    <nav class="mt-42 mr-ch-14">
								<a href="#" class="btn btn-white btn-outline medium">Conoce a 1 Night Stand</a>
							</nav>
							<small>Un caso de éxito</small>
					  </div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-primary">
			<div class="container">
				<div class="row services-block">
					<div class="col-sm-7 left">
						<div class="text-white">
							<h6 class="uppercase">Servicios</h6>
					    <h2 class="mb-35">Estrategia logística</h2>
					    <h5>Diseñamos un proceso de <strong>recolección, distribución y post-venta</strong><br>a la medida de tu negocio.</h5>
					    <p>Incrementa tu tasa de retención de clientes y proveedores con un plan de logística que encaje con tus necesidades.</p>
					    <nav class="mt-42 mr-ch-14">
								<a href="#call-to-action" class="btn btn-white btn-outline medium">Solicita una cotización</a>
							</nav>
					  </div>
					</div>
					<div class="col-sm-5 right hidden-md-down">
						<div class="img-slide-container">
							<img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/services_logistics.png" alt="Fotografía de producto">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section bg-white flex-column-center minhp-100">
			<div class="container-sm">
				<div class="text-center">
					<h2>Solicita una cotización</h2>
					<p>Déjanos ayudarte a planificar y lanzar una tienda en línea.</p>
				</div>
				<div class="form-container">
					<?php echo do_shortcode( '[contact-form-7 id="6" title="Cotizaciones"]' ); ?>
					<!-- <form>
						<fieldset class="form-group">
							<label for="name">Nombre</label>
							<input name="name" type="text" class="form-control input-lg" required placeholder="Nombre Apellido">
						</fieldset>
						<fieldset class="form-group">
							<label for="email">Correo electrónico</label>
							<input name="email" type="email" class="form-control input-lg" required placeholder="mail@mail.com">
						</fieldset>
						<fieldset class="form-group">
							<label for="number">Teléfono (opcional)</label>
							<input name="number" type="text" class="form-control input-lg" placeholder="(55) 5123-61-47">
						</fieldset>
						<fieldset class="form-group">
							<label for="message">Cuéntanos un poco sobre tu negocio</label>
							<textarea name="message" rows="3" class="form-control" required placeholder="Qué productos manejas?"></textarea>
						</fieldset>
						<fieldset class="form-group">
							<button type="submit" class="btn btn-lg btn-primary form-control">Enviar</button>
						</fieldset>
					</form> -->
				</div>
			</div>
		</section>
		<footer class="footer text-white" id="call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-center-sm-down">
						<div><a href="<?php home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/logo_Catalogics.white.png" alt="Catalogics México"></a></div>
					</div>
					<div class="col-sm-6 text-right-sm-up text-center-sm-down">
						<p>Catálogos Inteligentes de Productos y Servicios S.A. de C.V.</p>
					</div>
				</div>
			</div>
		</footer>

	</main>

<?php get_footer(); ?>











