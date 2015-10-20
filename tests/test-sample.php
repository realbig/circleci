<?php

class SampleTest extends WP_UnitTestCase {

	function test_sample() {

		$number = get_option( 'someopionthatdoesntexist', 301 );
		$this->assertEquals( 301, $number );
	}
}

