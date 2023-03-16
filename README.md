# Placeholder

Simple library to use placeholder in your layout file and then inject content from other file.

So, I needed a way to write my code in my view files and yet make them appear after the js files have been loaded, say jQuery. So, I created this simple library.

This can also help in writing navigation bar in another file and then having it appear in the layout where you like it.

## Usage

You can capture content to be displayed in the following way

```php
<?php
use Coffee\Placeholder\PlaceholderManager;
?>
<?php PlaceholderManager::captureStart('to-end'); ?>
YOUR CONTENT HERE
<?php PlaceholderManager::captureEnd('to-end'); ?>
```

Here, the parameter provided to captureStart and captureEnd `to-end` is the key of your content. You need this key to access the content 
in your layout file.
You can render the content of a key using the following code

```php
<?= PlaceholderManager::getContent('to-end'); ?>
```

This will render all the content that have been captured under the key `to-end` . If no content have been captured, it will not render anything.


You can find an example in the Example directory
