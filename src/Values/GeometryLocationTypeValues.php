<?php
/**
 * Copyright (c) 2018 - present
 * GoogleMapsApi - GeometryLocationTypeValues.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 31/8/2018
 * MIT license: https://github.com/biscolab/google-maps-php-sdk/blob/master/LICENSE
 */

namespace Biscolab\GoogleMaps\Values;

/**
 * Class GeometryLocationTypeValues
 * @package Biscolab\GoogleMaps\Values
 *
 * @see     https://developers.google.com/maps/documentation/geocoding/intro
 */
class GeometryLocationTypeValues {

	/**
	 * string: rooftop
	 */
	const ROOFTOP = 'ROOFTOP';

	/**
	 * string: range_interpolated
	 */
	const RANGE_INTERPOLATED = 'RANGE_INTERPOLATED';

	/**
	 * string: geometric_center
	 */
	const GEOMETRIC_CENTER = 'GEOMETRIC_CENTER';

	/**
	 * string: approximate
	 */
	const APPROXIMATE = 'APPROXIMATE';
}