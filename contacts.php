<?php 
	require 'header.php';
?>

<!-- Start Contacts Content Header -->
<div class="content-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="content-header__title">контакт</h1>
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</div>
<!-- End Contacts Content Header -->

<!-- Start Map -->
<div class="map-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="map">

					<div class="map-large visible-lg visible-md hidden-sm hidden-xs">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ZtFOwmgYpI5K6rGG9Ze_KkPIKAczNBUv&amp;width=100%&amp;height=646&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>
					</div>

					<div class="map-small hidden-lg hidden-md visible-sm visible-xs">
						<a href="https://yandex.ua/maps/?um=constructor:ZtFOwmgYpI5K6rGG9Ze_KkPIKAczNBUv&amp;source=constructorLink" title="Просмотреть карту"></a>
					</div>

					<div class="map-description">
						<div class="map-description__name">киноцех</div>
						
						<div class="map-description__adress">
							Москва, метро Водный стадион,<br>
							Коровинское шоссе 34 к 2
						</div>
						
						<div class="map-description__mail"><a href="mailto:mail@cinemadepartment.ru">mail@cinemadepartment.ru</a></div>

						<div class="map-description__phone">Тел: +7 965 149-47-38</div>

					</div>
				</div>
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</div>
<!-- End Map -->

<?php 	
	require 'footer.php';
?>