<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.86491500 1367100979";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:75:"C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\Sazkari\tipy.latte";i:2;i:1366913912;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\Sazkari\tipy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '3pdvb3gf6t')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lbc2643d9467_menu')) { function _lbc2643d9467_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbac1139fd56_content')) { function _lbac1139fd56_content($_l, $_args) { extract($_args)
?>      <button type="button" onClick=parent.location='<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("Sazkari:tipuj"), ENT_NOQUOTES) ?>' class="btn">Tipni kolo</button>
  <fieldset>
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
      <legend>Tipy</legend>
      <div class="leftpanel">
<?php $iterations = 0; foreach ($ligy as $liga): ?>
            <a href="<?php echo htmlSpecialChars($_control->link("Sazkari:tipy", array($liga->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($liga->nazev, ENT_NOQUOTES) ?></a>
<?php $iterations++; endforeach ?>
      </div>
      <div class="tipy">
    <table>
        <thead>
        <tr>
            <th>Kolo</th>
            <th>Sport</th>
            <th>Domácí</th>
            <th>Hosté</th>
            <th>Datum</th>
            <th>Tip</th>
            <th colspan="2">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($zapasy as $zapas): ?>
            <tr>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->id_kola, ENT_NOQUOTES) ?></td>
                <td><?php if ($zapas->id_sportu == 0): ?>Fotbal<?php else: ?>Hokej<?php endif ?></td>
<?php $iterations = 0; foreach ($tymy as $tym): if ($tym->id == $zapas->id_domacich): ?>
                        <td><?php echo Nette\Templating\Helpers::escapeHtml($tym->nazev, ENT_NOQUOTES) ?></td>
<?php endif ;if ($tym->id == $zapas->id_hostu): ?>
                        <td><?php echo Nette\Templating\Helpers::escapeHtml($tym->nazev, ENT_NOQUOTES) ?></td>
<?php endif ;$iterations++; endforeach ?>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($zapas->datum, 'd.m.Y'), ENT_NOQUOTES) ?></td>
       
            </tr>
<?php $iterations++; endforeach ?>
        </tbody>
    </table>
      </div>
  </fieldset>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['menu']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 