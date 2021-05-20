<?php

/**
 * ApplicationConfigBehavior is a behavior for the application.
 * It loads additional config paramenters that cannot be statically 
 * written in config/main
 */
class ApplicationConfigBehavior extends CBehavior
{
	/**
	 * Declares events and the event handler methods
	 * See yii documentation on behaviour
	 */
	public function events()
	{
		return array_merge(parent::events(), array(
			'onBeginRequest' => 'beginRequest',
		));
	}

	/**
	 * Load configuration that cannot be put in config/main
	 */
	public function beginRequest()
	{
		/*If you don't allow guest users to customize the language while visiting in the subdomain, remove the comment state here and edit the function actionsettings() in SiteController.php */
		// $test_main_url = explode('.', $_SERVER['HTTP_HOST']);
		!empty($test_main_url[2]) && Yii::app()->user->setState('applicationLanguage', $test_main_url[2]);

		$this->owner->user->getState('applicationLanguage') ?
			$this->owner->language = $this->owner->user->getState('applicationLanguage') :
			$this->owner->language = 'vi';
	}
}
