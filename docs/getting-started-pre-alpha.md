# Getting Started (Pre-Alpha)

1. Drag-and-drop the `kirby-dreamform` folder into your `site/plugins` folder.

2. Using your Finder, create a folder `forms` in your `content` folder.

3. Create a new file in the `forms` folder, e.g. `forms.txt` (Add the language suffix if using multi-lang)

4. Add the following content to the file:

```yaml
Uuid: forms
```

5. You should be able to open the forms page in the panel now.

6. Add a 'form' field to any blueprint you wat.

```yaml
fields:
	myForm:
		extends: dreamform/form
```

7. In your template, render the form using the default snippet:

```php
<?php snippet('dreamform/form', [
	'form' => $page->myForm()->toPage(),
	'row' => ["class" => "row"],
	'column' => ["class" => "column"],
	'button' => ["class" => 'button'],
	'input' => ["class" => 'input'],
	'error' => ["class" => 'error']
]); ?>
```

You can also add attributes to some elements for styling.

> **Make sure caching is disabled if you're sending the form via SSR.**

8. You can now submit the form and see the result in the panel.