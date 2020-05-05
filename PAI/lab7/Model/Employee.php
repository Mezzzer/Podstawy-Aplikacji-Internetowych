<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
    var $validate = array('nazwisko' => array('rule' => 'notBlank'), 'etat' => array('rule' => 'notBlank'),  
    'placa_pod' => array(
        'rule0' => array(
            'rule' =>array('comparison','>=',0),
            'message' => 'Placa_pod must be greater than 0',
        ),
        'rule2000' => array(
            'rule' =>array('comparison','<=',2000),
            'message' => 'Placa_pod must be less than 2000',
        )
    )
    );
}
