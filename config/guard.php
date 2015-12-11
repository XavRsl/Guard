<?php

return [
	"Guard" => [
		"name" => [
			"validate_it" => "required|max:255",
			"fake_it" => "name",
			"render_it" => "inputs.text",
			"hide_it" => false,
			"fill_it" => true,
		],
		"description" => [
			"validate_it" => "required|max:255",
			"fake_it" => "name",
			"render_it" => "inputs.text",
			"hide_it" => false,
			"fill_it" => false,
		],
		"secret" => [
			"validate_it" => "required|max:255",
			"fake_it" => "name",
			"render_it" => "inputs.text",
			"hide_it" => true,
			"fill_it" => true,
		]
	]
];