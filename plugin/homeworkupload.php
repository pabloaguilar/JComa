<?php
/**
* @version		0.1
* @package		JComa
* @copyright	Copyright (C) 2005 - 2009 Open Source Matters, Inc. All rights reserved.
* @license		GNU General Public License 3, see LICENSE.txt
*/
 
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.plugin.plugin');
 
//The Content plugin HomeworkUpload
class plgContentHomeworkUpload extends JPlugin
{
	/**
	* Plugin that allows students to upload homework
	*/
  public function onAfterDisplayContent( &$article, &$params, $page=0 )
  {
		if ( !$this->params->get( 'enabled', 1 ) ) {
			return '';
		}
    
    //$lang = JFactory::getLanguage();
    //$lang->load('plg_content_simpleattachment', JPATH_ADMINISTRATOR);
    //echo $JText::_('PLG_CONTENT_EXAMPLE_LINKNAME');
    
		//$db = JFactory::getDBO();
		//$document	= &JFactory::getDocument();
    // this->params->get(param name, default)
    return '<span class="homeworkupload">'
          .'<form method="" action="" enctype="multipart/form-data" method="post">'
          .'<input type="file" name="homework"></input>'
          .'<input type="submit" value="Upload"></input>'
          .'</form></span>';
  }
}