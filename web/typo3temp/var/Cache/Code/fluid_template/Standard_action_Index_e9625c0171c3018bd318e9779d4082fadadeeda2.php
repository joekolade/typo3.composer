<?php

class Standard_action_Index_e9625c0171c3018bd318e9779d4082fadadeeda2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'configuration';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '</h1>

<h2>';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['label']) ? $renderingContext->getVariableProvider()['label'] : NULL, ENT_QUOTES);

$output0 .= '</h2>

<div id="lowlevel-config">
	<div class="form-group">
		<label for="lowlevel-search">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['key'] = 'enterSearchPhrase';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext), ENT_QUOTES);

$output0 .= '
		</label>
		<input class="form-control" type="search" id="lowlevel-search" name="search_field" value="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['search_field']) ? $renderingContext->getVariableProvider()['search_field'] : NULL, ENT_QUOTES);

$output0 .= '" />
	</div>
	<div class="form-group">
		<div class="checkbox">
			<label for="checkRegexsearch">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['checkbox_checkRegexsearch']) ? $renderingContext->getVariableProvider()['checkbox_checkRegexsearch'] : NULL;
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output0 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output0 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['key'] = 'useRegExp';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext), ENT_QUOTES);

$output0 .= '
			</label>
		</div>
	</div>
	<div class="form-group">
		<input class="btn btn-default" type="submit" name="search" id="search" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['key'] = 'search';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext), ENT_QUOTES);

$output0 .= '"/>
	</div>
</div>

<div class="nowrap">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['tree']) ? $renderingContext->getVariableProvider()['tree'] : NULL;
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output0 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output0 .= '
</div>
';

return $output0;
}


}
#2957790330    4995      