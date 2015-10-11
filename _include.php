<?php

// Rename this file to "include.php" to enable it.

/**
 * @return string
 */
function __get_custom_data_full_path()
{
	return '';
	return '/var/external-rainloop-data-folder/'; // custom data folder path
}

/**
 * @return string
 */
function __get_additional_configuration_name()
{
	return __DIR__ .'/rainloop/v/0.0.0/app/configs/application.ini';
}
