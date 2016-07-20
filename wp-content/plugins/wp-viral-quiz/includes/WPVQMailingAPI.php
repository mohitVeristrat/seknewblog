<?php

class WPVQMailingAPI
{

	private $service;
	private $apiWrapper;
	private $meta;
	private $playerData;

	function __construct($service, $meta, $playerData)
	{
		$this->service 		=  $service;
		$this->meta 		=  $meta;
		$this->playerData 	=  $playerData;

		$this->syncPlayer();
	}

	/**
	 * Sync the player with the choosen provider
	 * @return [type] [description]
	 */
	private function syncPlayer()
	{
		// Mailing API
		require_once 'vendor/autoload.php';

		if ($this->service == 'mailchimp') {
			$this->syncPlayerMailchimp();	
		}
	}

	/**
	 * Sync a player on Mailchimp
	 * @return [type] [description]
	 */
	private function syncPlayerMailchimp()
	{
		if (!isset($this->meta['mailchimp']['apiKey']) || $this->meta['mailchimp']['apiKey'] == '' ||
			!isset($this->meta['mailchimp']['listId']) || $this->meta['mailchimp']['listId'] == '') {
			echo 'Error: need more mailchimp parameters.';
			return;
		}

		// Mailchimp Field Name
		$firstNameField  = isset($this->meta['mailchimp']['firstNameField']) ? $this->meta['mailchimp']['firstNameField']:'FNAME';
		$resultField 	 = isset($this->meta['mailchimp']['resultField']) ? $this->meta['mailchimp']['resultField']:'RESULT';

		// Connect to mailchimp
		try 
		{
			$mc = new Mailchimp\Mailchimp($this->meta['mailchimp']['apiKey']);	
		} 
		catch (Exception $e) 
		{
			echo "Can't connect to MC.";
			return;
		}

		// Post to add member
		try 
		{
			$jsonReturn = $mc->post("lists/{$this->meta['mailchimp']['listId']}/members", array(
				'email_address' => $this->playerData['email'],
				'status' 		=> 'subscribed',
				'merge_fields' 	=> array(
					$firstNameField => $this->playerData['nickname'],
					$resultField 	=> $this->playerData['result']
				),
			));	
		} 
		catch (Exception $e) 
		{
			echo "Can't add to MC.";
			return;
		}
		

		$jsonReturn = json_decode($jsonReturn);
		echo $jsonReturn->id;
	}
}

?>