CONTROL PANEL EVENTS FEED
===============================

Utilizes propellers control panel events tab to spit data out in an agreeable format!


How to use
===============================

Bung in your site ID

		$siteId = xxxx


Optional Requirements
===============================

Imager syntax is used in this package. It's now a part of the new FE template, so this code should be fairly strait forward to integrate.

https://github.com/BBC-News/Imager.js/

		<? if($event['hasImage']):?>
			<div>
				<div class="js-load-img" data-width="400" data-height="480" data-src="<?=$event['imageUrl'];?>" data-alt="my awesome website" data-class="scale-with-grid"></div>
			</div>
		<? endif;?>
		<!-- /imager for fast loading -->

You don't have to use it, but it does speed up the performance of the webpage. If you don't want to use this simply replace the syntax to your image file location:

		<? if($event['hasImage']):?>
			<div>
				<img src="<?=$event['imageUrl'];?>" alt="my not so awesome image which doesn't use imager">
			</div>
		<? endif;?>
		<!-- /event image -->

enjoy!