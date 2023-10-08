<?php

namespace tobimori\DreamForm\Fields;

use Kirby\Toolkit\V;

class EmailField extends Field
{
	public static function blueprint(): array
	{
		return [
			'title' => t('email-field'),
			'preview' => 'fields',
			'wysiwyg' => true,
			'icon' => 'email',
			'tabs' => [
				'field' => [
					'label' => t('field'),
					'fields' => [
						'key' => 'dreamform/fields/key',
						'label' => 'dreamform/fields/label',
						'placeholder' => 'dreamform/fields/placeholder',
					]
				],
				'validation' => [
					'label' => t('validation'),
					'fields' => [
						'required' => 'dreamform/fields/required',
						'errorMessage' => 'dreamform/fields/error-message',
					]
				]
			]
		];
	}

	public function validate(): true|string
	{
		if (
			$this->field()->required()->toBool()
			&& $this->value()->isEmpty()
			|| !V::email($this->value()->value())
		) {
			return $this->field()->errorMessage()->isNotEmpty() ? $this->field()->errorMessage()->value() : t("error-message-default");
		}

		return true;
	}
}