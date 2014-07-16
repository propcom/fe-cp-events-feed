<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Panel Events Feed</title>
</head>
	<body>

			<?
				$siteId = 1342;
				$showEmptyRows = false;
				$arr = array (
					'show' => 'upcoming'
				);
				require_once '/var/www/shared/calendarincludes/calendar.php';
				$eventsData = getEventsData($arr);

				if(isset($_GET['event'])) {

					$event_id = $_GET['event'];

				}
				/* random client used */
			?>

		<div>

				<?if(isset($event_id)) :?>

					<? foreach ($eventsData['events'] as $event) :?>
						<? if($event['event_id'] == $event_id):?>

						<div>
							<h3><?= $event['event_name'];?></h3>

							<? if($event['hasImage']):?>
								<div>
									<div class="js-load-img" data-width="400" data-height="480" data-src="<?=$event['imageUrl'];?>" data-alt="my awesome website" data-class="scale-with-grid"></div>
								</div>
							<? endif;?>
							<!-- /imager for fast loading -->

							<p><?= $event['event_desc'];?></p>

							<p><?= $event['date'];?></p>

							<a href="more-news.php">View all events</a>

						</div>

						<? else : continue; endif;?>
						<? endforeach;?>

				<? else :?>

		</div>
		<!-- /lists selected event ID -->

		<div>
			
				<? foreach ($eventsData['events'] as $event) : ?>
					
						<div>

							<h3><?= $event['event_name'];?></h3>

							<? if($event['hasImage']):?>
								<div>
									<div class="js-load-img" data-width="400" data-height="480" data-src="<?=$event['imageUrl'];?>" data-alt="my awesome website" data-class="scale-with-grid"></div>
								</div>
							<? endif;?>
							<!-- /imager for fast loading -->

							<p><?= $event['event_desc'];?></p>

							<p><?= $event['date'];?></p>

						</div>
					
				<? endforeach; ?>

		</div>
		<!-- /lists all events -->
		<? endif;?>

	</body>
</html>