<?php

	if(! function_exists('pageTitle'))
	{
		function pageTitle(?string $title = null) : string 
		{
			if($title===null)
			{
				return config('app.name');

			}else 
			{
				return $title. ' | ' .config('app.name');

			}
		}
	} 



 ?>