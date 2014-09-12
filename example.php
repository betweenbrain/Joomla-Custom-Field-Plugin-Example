<?php defined('_JEXEC') or die;

/**
 * File       example.php
 * Created    9/12/14 4:46 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

class plgContentExample extends JPlugin
{

	/**
	 * Load the language file on instantiation.
	 * Note this is only available in Joomla 3.1 and higher.
	 * If you want to support 3.0 series you must override the constructor
	 *
	 * @var boolean
	 * @since 3.1
	 */

	protected $autoloadLanguage = true;

	function onContentPrepareForm($form, $data)
	{
		$app    = JFactory::getApplication();
		$option = $app->input->get('option');

		switch ($option)
		{

			case 'com_contact':
				if ($app->isAdmin())
				{
					JForm::addFormPath(__DIR__ . '/forms');
					$form->loadFile('contact', false);
				}

				return true;

		}

		return true;
	}

}
