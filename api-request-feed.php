<?php
	$clintGuid = 'AC268FD6-4B5F-424D-AF15-035D271632FE';
	$resourceType = 'Events';

	$url = 'http://services.trainingjacket.com/'.$resourceType.'/Get/'.$clintGuid;
		$response = wp_remote_get($url);
		$body = wp_remote_retrieve_body( $response );
		$json = json_decode($body);

	foreach($json as $obj)	{ ?>

	<div class="widget">
		<p class="event-title"><strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>events?id=<?php echo $obj->eventID;?>"><?php echo $obj->eventName; ?></a></strong></p>
		<p class="event-date"><strong><?php echo $obj->dateEndDate; ?></strong></p>

		<p><?php echo  substr($obj->eventDetails,0,120); ?>... <a href="<?php echo esc_url( home_url( '/' ) ); ?>events?id=<?php echo $obj->eventID;?>">Learn More &rarr;</a></p>
	</div>

<?php } ?>
