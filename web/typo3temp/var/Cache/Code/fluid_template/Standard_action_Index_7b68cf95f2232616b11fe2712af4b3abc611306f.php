<?php

class Standard_action_Index_7b68cf95f2232616b11fe2712af4b3abc611306f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<form action="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['moduleName']) ? $renderingContext->getVariableProvider()['moduleName'] : NULL, ENT_QUOTES);

$output0 .= '" method="post" id="PageFunctionsController">
    <input type="hidden" name="id" value="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['id']) ? $renderingContext->getVariableProvider()['id'] : NULL, ENT_QUOTES);

$output0 .= '" />
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
        <div>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['versionSelector']) ? $renderingContext->getVariableProvider()['versionSelector'] : NULL;
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output8 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output8 .= '</div>
    ';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array5['0'] = isset($renderingContext->getVariableProvider()['versionSelector']) ? $renderingContext->getVariableProvider()['versionSelector'] : NULL;

$expression7 = function($context) {return ($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['functionMenuModuleContent']) ? $renderingContext->getVariableProvider()['functionMenuModuleContent'] : NULL;
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output0 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output0 .= '
</form>
';

return $output0;
}


}
#2957790334    3328      