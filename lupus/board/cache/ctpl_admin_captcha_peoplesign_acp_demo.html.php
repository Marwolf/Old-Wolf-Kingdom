<?php if (!defined('IN_PHPBB')) exit; ?><dl>
	<dt><label for="captcha_preview"><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>:</label><br /><span><?php echo ((isset($this->_rootref['L_CAPTCHA_PREVIEW_EXPLAIN'])) ? $this->_rootref['L_CAPTCHA_PREVIEW_EXPLAIN'] : ((isset($user->lang['CAPTCHA_PREVIEW_EXPLAIN'])) ? $user->lang['CAPTCHA_PREVIEW_EXPLAIN'] : '{ CAPTCHA_PREVIEW_EXPLAIN }')); ?></span></dt>
	<dd><?php echo (isset($this->_rootref['CODE'])) ? $this->_rootref['CODE'] : ''; ?></dd>
</dl>