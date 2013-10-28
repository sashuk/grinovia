<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="block_news_item">
<?php foreach ($fields as $id => $field): ?>

    <?php if ($id == 'field_date_news') { 
		$date = date_parse($field->content);
		$month = array('ЯНВ', 'ФЕВ', 'МАР', 'АПР', 'МАЙ', 'ИЮН', 'ИЮЛ', 'АВГ', 'СЕН', 'ОКТ', 'НОЯ', 'ДЕК');
	?>
		<div class="block_news_datepick">
            <span class="month"><?php print $month[$date['month']]; ?></span>
            <span class="day"><?php print $date['day']; ?></span>
        </div>
	<?php } else if ($id == 'title') {?>
		<span class="block_news_title"><?php print $field->content; ?></span>
	<?php } else if ($id == 'body') {?>
		<div class="block_news_text"><?php print $field->content; ?></div>
	<?php } ?>
<?php endforeach; ?>
</div>



