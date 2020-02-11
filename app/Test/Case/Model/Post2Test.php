<?php
App::uses('Post2', 'Model');

/**
 * Post2 Test Case
 */
class Post2Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post2 = ClassRegistry::init('Post2');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post2);

		parent::tearDown();
	}

}
