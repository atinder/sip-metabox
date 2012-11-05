<?php
/*
Plugin Name: Sip Metabox Demo
Plugin URI: http://shopitpress.com
Author: atinder
Version: 1.0
*/

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

require_once dirname(__FILE__) . '/class.sip.metabox.php';

<<<<<<< HEAD:sip-metabox.php
class SipMetaBox_Test{
=======
class SipMetaBoxDemo{
>>>>>>> updated:sip-metabox.php

	private $_wrapper;
	private $meta_boxes = array();

	public function __construct(){
<<<<<<< HEAD:sip-metabox.php
		
		$this->config();
=======
		if ( is_admin() )
    	add_action( 'load-post.php',array($this, 'config' ));
   		add_action( 'load-post-new.php',array($this, 'config' ));
>>>>>>> updated:sip-metabox.php

	}
	public static function config(){

		$meta_boxes[] = array(
						'id' => 'sip_meta',
						'title' => 'Sip Metabox',
<<<<<<< HEAD:sip-metabox.php
						'page' => 'post',
=======
						'page' => 'page',
>>>>>>> updated:sip-metabox.php
						'context' => 'normal',
						'priority' => 'high',
						'fields' => array(
							array(
									'name' => 'Title',
									'id' => 'title',
									'type' => 'multicheck',
									'std' => 'two',
									'options' => array( 'one yea','two','three')
							),
							array(
									'name' => '2Title',
									'id' => '2title',
									'type' => 'textarea',
									'std' => 'sasdasf'
							),
							array(
									'name' => 'dfgTitle',
									'id' => 'aad',
									'type' => 'checkbox',
									'std' => '0'
							),
							array(
									'name' => 'dfg2Title',
									'id' => 'asdf',
									'type' => 'text',
									'std' => ''
							)
						)
			);

		$meta_boxes[] = array(
						'id' => 'sip_meta3',
						'title' => 'Sip Metabox',
						'page' => 'post',
						'context' => 'side',
						'priority' => 'high',
						'fields' => array(
							array(
									'name' => 'Title',
									'id' => 'title',
									'type' => 'radio',
									'std' => 'two',
									'options' => array( 'one yea','two','three')
							),
							array(
									'name' => '2Title',
									'id' => '2title',
									'type' => 'textarea',
									'std' => ''
							),
							array(
									'name' => 'dfgTitle',
									'id' => 'AAD',
									'type' => 'checkbox',
									'std' => ''
							),
							array(
									'name' => 'dfg2Title',
									'id' => 'asdf',
									'type' => 'text',
									'std' => ''
							)
						)
			);

		$meta_boxes[] = array(
						'id' => 'dfgsip_meta',
						'title' => 'Sip Metabox',
						'page' => 'post',
						'context' => 'normal',
						'priority' => 'high',
						'fields' => array(

							array(
									'name' => 'Title',
									'id' => 'title',
									'type' => 'text',
									'std' => 'two',
									'desc' => 'sosaashdga adgso dgaso',
									'options' => array( 'one yea','two','three')
								),
							
							)
						);
<<<<<<< HEAD:sip-metabox.php
		$root_path = plugins_url('', __FILE__);

		$this->_wrapper = new SipMetaBox($meta_boxes,$root_path);


	}
=======

		$root_path = plugins_url('', __FILE__);
>>>>>>> updated:sip-metabox.php

		$wrapper = new SipMetaBox($meta_boxes,$root_path);


<<<<<<< HEAD:sip-metabox.php
function call_class(){
	new SipMetaBox_Test();
	
=======
	}

>>>>>>> updated:sip-metabox.php
}
new SipMetaBoxDemo();
?>