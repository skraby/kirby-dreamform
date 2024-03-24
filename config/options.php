<?php

use Kirby\Cms\App;

return [
	'cache' => [
		'sessionless' => [
			'active' => true,
		]
	],
	'mode' => 'prg', // prg / api / htmx
	'multiStep' => true, // Enable multi-step forms
	'storeSubmissions' => true, // Store submissions in the content folder
	'debug' => fn () => App::instance()->option('debug'),
	'layouts' => [ // https://getkirby.com/docs/reference/panel/fields/layout#defining-your-own-layouts
		'1/1', '1/2, 1/2'
	],
	'page' => 'page://forms', // Slug or URI to the page where the forms are located
	'guards' => [
		'available' => ['honeypot', 'csrf'],
		'honeypot.fields' => ['website', 'email', 'name', 'url', 'birthdate', 'comment', 'summary', 'subject'],
	],
	'actions' => [
		'available' => true,
		'discord.webhook' => null, // Default webhook URL
		'mailchimp.apiKey' => null, // Mailchimp API key
	],
	'fields' => [
		'available' => true,
		'pages.query' => 'site.childrenAndDrafts.filterBy("intendedTemplate", "!=", "forms")', // Page query for the pages field type
		'fileUpload' => [
			'types' => [
				// JPEG, PNG, GIF, AVIF, WEBP
				'images' => ["image/jpeg", "image/png", "image/gif", "image/avif", "image/webp",],
				// MP3, OGG, OPUS, WAV, WEBM
				'audio' => ["audio/mpeg", "audio/ogg", "audio/opus", "audio/aac", "audio/wav", "audio/webm"],
				// AVI, MP4, MPEG, OGG, WEBM
				'video' => ["video/x-msvideo", "video/mp4", "video/mpeg", "video/ogg", "video/webm"],
				// PDF, DOC, XLS, PPT
				'documents' => ["application/pdf", "application/msword", "application/vnd.ms-excel", "application/vnd.ms-powerpoint"],
				// ZIP, RAR, TAR, 7Z
				'archives' => ["application/zip", "application/x-rar-compressed", "application/x-tar", "application/x-7z-compressed"]
			]
		]
	],
	'integrations' => [
		'gravatar' => true, // Get profile pictures for email fields from Gravatar
	]
];