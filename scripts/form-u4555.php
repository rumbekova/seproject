<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Форма DIANET MEDIA',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Недействительный закрытый ключ reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Недействительный ответ сервера reCAPTCHA 2.0.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'info@synergyuniversity.kz',
		'to' => 'info@synergyuniversity.kz'
	),
	'fields' => array(
		'custom_U4572' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Имя\' не может быть пустым.'
			)
		),
		'custom_U4562' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Сотовый телефон',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Сотовый телефон\' не может быть пустым.'
			)
		),
		'custom_U4576' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Пользовательский текст',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Пользовательский текст\' не может быть пустым.'
			)
		),
		'custom_U4566' => array(
			'order' => 4,
			'type' => 'checkbox',
			'label' => 'Подпись флажка',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Подпись флажка\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
