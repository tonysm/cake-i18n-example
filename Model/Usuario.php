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
				'message' => 'Campo obrigatório'
			)
		),
		'email' => array(
			'email' => array(
				'rule' => array('email', true),
				'message' => 'E-mail inválido'
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório'
			)
		)
	);
}
