<?php

use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	
	public function setUp()
	{
		$this->user = new \App\Models\User;
	}

	/** @test */

	public function that_we_can_get_the_first_name()
	{
		

		$this->user->setFirstName('Billy');

		$this->assertEquals($this->user->getFirstName(), 'Billy');
	}

	public function testThatWeCanGetTheLastName()
	{
		

		$this->user->setLastName('Garrett');

		$this->assertEquals($this->user->getLastName(), 'Garrett');
	}

	public function testFullNameIsReturned()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Billy');

		$user->setLastName('Garrett');

		$this->assertEquals($user->getFullName(), 'Billy Garrett');
	}

	public function testFirstAndLastNameAreTrimmed()
	{
		$user = new \App\Models\User;

		$user->setFirstName(' Billy   ');
		$user->setLastName('      Garrett');

		$this->assertEquals($user->getFirstName(), 'Billy');
		$this->assertEquals($user->getLastName(), 'Garrett');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;
		$user->setEmail('billy@gmail.com');

		$this->assertEquals($user->getEmail(), 'billy@gmail.com');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Billy');
		$user->setLastName('Garrett');
		$user->setEmail('billy@gmail.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);

		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Billy Garrett');
		$this->assertEquals($emailVariables['email'], 'billy@gmail.com');
	}
}