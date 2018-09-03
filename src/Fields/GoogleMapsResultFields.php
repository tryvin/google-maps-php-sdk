<?php
/**
 * Copyright (c) 2018 - present
 * GoogleMapsApi - GoogleMapsResultFields.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 31/8/2018
 * MIT license: https://github.com/biscolab/google-maps-php-sdk/blob/master/LICENSE
 */

namespace Biscolab\GoogleMaps\Fields;

/**
 * Class GoogleMapsResponseFields
 * @package Biscolab\GoogleMaps\Enum
 */
class GoogleMapsResultFields {

	/**
	 * string address_components
	 */
	const ADDRESS_COMPONENTS = 'address_components';

	/**
	 * string formatted_address
	 */
	const FORMATTED_ADDRESS = 'formatted_address';

	/**
	 * string geometry
	 */
	const GEOMETRY = 'geometry';

	/**
	 * string viewport
	 */
	const VIEWPORT = 'viewport';

	/**
	 * string place_id
	 */
	const PLACE_ID = 'place_id';

	/**
	 * string location_type
	 */
	const LOCATION_TYPE = 'location_type';

	/**
	 * string types
	 */
	const TYPES = 'types';

	/**
	 * string location
	 */
	const LOCATION = 'location';

}