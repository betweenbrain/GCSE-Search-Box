<?php defined('_JEXEC') or die;

/**
 * File       default.php
 * Created    5/8/13 12:05 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Copyright  Copyright (C) 2013 The Solomon R. Guggenheim Foundation. All Rights Reserved.
 */

?>
<form class="<?php echo $formClass ?>" action="<?php echo $formAction ?>">
	<input type="hidden" name="cx" value="<?php echo $cx ?>" />
	<input type="hidden" name="ie" value="UTF-8" />
	<input type="text" name="q" size="<?php echo $inputSize ?>" class="<?php echo $inputClass ?>" placeholder="<?php echo $placeholder ?>" />
	<?php if ($submitType == 'input') : ?>
		<input type="submit" name="sa" value="<?php echo $submitValue ?>" class="<?php echo $submitClass ?>" />
	<?php elseif ($submitType == 'anchor') : ?>
		<a href="#" class="<?php echo $submitClass ?>"><?php echo $submitValue ?></a>
	<?php endif ?>
</form>
