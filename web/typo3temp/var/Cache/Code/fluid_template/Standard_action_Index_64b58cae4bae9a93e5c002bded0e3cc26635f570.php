<?php

class Standard_action_Index_64b58cae4bae9a93e5c002bded0e3cc26635f570 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['message']) ? $renderingContext->getVariableProvider()['message'] : NULL;
};
$arguments6 = array();
$arguments6['value'] = NULL;

$output5 .= isset($arguments6['value']) ? $arguments6['value'] : $renderChildrenClosure7();

$output5 .= '
';
return $output5;
};
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['message'] = NULL;
$arguments1['state'] = -2;
$arguments1['iconName'] = NULL;
$arguments1['disableIcon'] = false;
$arguments1['title'] = isset($renderingContext->getVariableProvider()['title']) ? $renderingContext->getVariableProvider()['title'] : NULL;
$arguments1['state'] = isset($renderingContext->getVariableProvider()['state']) ? $renderingContext->getVariableProvider()['state'] : NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#2957790262    2075      