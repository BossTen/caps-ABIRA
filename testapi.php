<?php

		foreach (json_decode($api->fetch_colleges(),true) as $college) {
			echo $college['code'] . " " . $college['description'] . "<br>";
		}
?>