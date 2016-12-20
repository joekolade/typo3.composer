<?php

class Standard_action_Index_5e8f21aba17dcfe302589a583feea538f81f51a5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="typo3-topbar-container" role="navigation" id="typo3-top-container">
	<div class="typo3-topbar-site">
		<a class="typo3-topbar-site-logo" href="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoLink']) ? $renderingContext->getVariableProvider()['logoLink'] : NULL, ENT_QUOTES);

$output0 .= '" target="_blank">
			<img src="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoUrl']) ? $renderingContext->getVariableProvider()['logoUrl'] : NULL, ENT_QUOTES);

$output0 .= '" width="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoWidth']) ? $renderingContext->getVariableProvider()['logoWidth'] : NULL, ENT_QUOTES);

$output0 .= '" height="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoHeight']) ? $renderingContext->getVariableProvider()['logoHeight'] : NULL, ENT_QUOTES);

$output0 .= '" title="TYPO3 Content Management System" alt="" />
		</a>
		<span class="typo3-topbar-site-name">';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['siteName']) ? $renderingContext->getVariableProvider()['siteName'] : NULL, ENT_QUOTES);

$output0 .= ' [';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['applicationVersion']) ? $renderingContext->getVariableProvider()['applicationVersion'] : NULL, ENT_QUOTES);

$output0 .= ']</span>
	</div>
	<div class="typo3-topbar-navigation" id="typo3-topbar-navigation">
		<ul class="typo3-topbar-navigation-items" data-typo3-role="typo3-module-menu">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['toolbar']) ? $renderingContext->getVariableProvider()['toolbar'] : NULL;
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output0 .= $renderChildrenClosure8();

$output0 .= '
		</ul>
	</div>
</div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['moduleMenu']) ? $renderingContext->getVariableProvider()['moduleMenu'] : NULL;
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output0 .= $renderChildrenClosure11();

$output0 .= '
';

return $output0;
}


}
#2957727981    3247      