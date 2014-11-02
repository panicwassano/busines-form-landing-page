<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	/**
	 * A basic form submit test
	 *
	 * @return void
	 */
	public function testSubmitClaimForm()
	{
		$crawler = $this->client->request('GET', '/');
		$form    = $crawler->filter('.header_form_submit')->form();
		$crawler = $this->client->submit($form, array('name' => 'Азат', 'phone' => '555333444'));

		$this->assertRedirectedTo('/');
	}

}
