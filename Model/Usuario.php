<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 */
class Usuario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Required'
			)
		),
		'email' => array(
			'email' => array(
				'rule' => array('email', true),
				'message' => 'Invalid e-mail'
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Required'
			)
		)
	);
}
