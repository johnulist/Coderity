<?php
App::uses('CoderityAppModel', 'Coderity.Model');

class Redirect extends CoderityAppModel {

	public $validate = array(
		'url' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'URL is required.'
			),
			'isUnique' => array(
				'rule'=> 'isUnique',
				'message' => 'This URL already exists.',
			)
		)
	);

	public function getRedirect($url = null) {
		if (!$url) {
			return false;
		}

		$redirect = $this->find('first', array('conditions' => array('Redirect.url LIKE ' => $url), 'fields' => 'redirect'));

		if (!$redirect) {
			return false;
		}

		if (empty($redirect['Redirect']['redirect'])) {
			return '/';
		}

		if (substr($redirect['Redirect']['redirect'], 0, 1) == '/') {
			return $redirect['Redirect']['redirect'];
		} elseif(substr($redirect['Redirect']['redirect'], 0, 7) == 'http://') {
			return $redirect['Redirect']['redirect'];
		} elseif(substr($redirect['Redirect']['redirect'], 0, 4) == 'www.') {
			return 'http://' . $redirect['Redirect']['redirect'];
		} else {
			return '/' . $redirect['Redirect']['redirect'];
		}
	}
}