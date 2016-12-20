<?php

class Standard_action_Index_67d77fa69feab534dbfba4e3aaf2db2d642d3914 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['pageTitle']) ? $renderingContext->getVariableProvider()['pageTitle'] : NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '</h1>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
		';

$output13 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['infoBoxMessage']) ? $renderingContext->getVariableProvider()['infoBoxMessage'] : NULL, ENT_QUOTES);

$output13 .= '
	';
return $output13;
};
$arguments10 = array();
$arguments10['title'] = NULL;
$arguments10['message'] = NULL;
$arguments10['state'] = -2;
$arguments10['iconName'] = NULL;
$arguments10['disableIcon'] = false;
$arguments10['title'] = isset($renderingContext->getVariableProvider()['infoBoxMessageTitle']) ? $renderingContext->getVariableProvider()['infoBoxMessageTitle'] : NULL;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
';
return $output9;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array6['0'] = isset($renderingContext->getVariableProvider()['infoBoxMessage']) ? $renderingContext->getVariableProvider()['infoBoxMessage'] : NULL;

$expression8 = function($context) {return ($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

<div class="typo3-TCEforms">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['childHtml']) ? $renderingContext->getVariableProvider()['childHtml'] : NULL;
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output0 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output0 .= '
	<div class="help-block text-right">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['icon']) ? $renderingContext->getVariableProvider()['icon'] : NULL;
};
$arguments18 = array();
$arguments18['value'] = NULL;

$output0 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output0 .= '
		<strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['tableTitle']) ? $renderingContext->getVariableProvider()['tableTitle'] : NULL;
};
$arguments21 = array();
$arguments21['value'] = NULL;

$output0 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output0 .= '</strong> ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['newOrUid']) ? $renderingContext->getVariableProvider()['newOrUid'] : NULL;
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output0 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#2957790336    5133      