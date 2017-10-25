<?php
class ElitrackCMS_Elitrack_Model_Field_Comment extends Mage_Core_Model_Config_Data
{
    public function getCommentText()
    {
    	$url=Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB);
    	$img='<img src="'.$url.'/media/elitrack/logo.png">';
       return $img;
    }
}