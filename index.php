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
				/* random client used */
			?>


			<article>

					<h1>News</h1>

					<div>

						<? foreach ($eventsData['events'] as $event) : ?>

						<div>

							<? if($event['hasImage']):?>
									<div class="js-load-img" data-width="400" data-height="480" data-src="<?=$event['imageUrl'];?>" data-alt="The 3 Crowns" data-class="scale-with-grid"></div>
							<? endif;?>

							<div>
								<h3><?= $event['event_name'];?></h3>
								<p>
									<?= $event['short_desc'];?><br>
									<?= $event['date'];?><br>
									<a href="more-news.php?event=<?= $event['event_id'];?>">read more</a>
								</p>
							</div>

						</div>

						<? endforeach; ?>

					</div>

			</article>
			<!-- /all news listed -->
		
	</body>
</html>