<?php

class layout_main_5b65c79a19d36a17eb393f6b83c1cc3abe6b1dda extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string1 = '{namespace em=TYPO3\CMS\Extensionmanager\ViewHelpers}';
$array2 = array (
  0 => '{namespace em=TYPO3\\CMS\\Extensionmanager\\ViewHelpers}',
  1 => 'em',
  2 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
);

$output0 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string1, $array2);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['pageTitle'] = '';
$arguments3['loadExtJs'] = false;
$arguments3['loadExtJsTheme'] = true;
$arguments3['enableExtJsDebug'] = false;
$arguments3['loadJQuery'] = false;
$arguments3['includeCssFiles'] = NULL;
$arguments3['includeJsFiles'] = NULL;
$arguments3['addJsInlineLabels'] = NULL;
$arguments3['includeRequireJsModules'] = NULL;
$arguments3['jQueryNamespace'] = NULL;
$arguments3['loadJQuery'] = 'true';
$arguments3['jQueryNamespace'] = 'none';
// Rendering Array
$array5 = array();
$array5['0'] = 'TYPO3/CMS/Extensionmanager/Main';
$arguments3['includeRequireJsModules'] = $array5;

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['triggers'] = array (
);
$arguments6['triggers'] = isset($renderingContext->getVariableProvider()['triggers']) ? $renderingContext->getVariableProvider()['triggers'] : NULL;

$output0 .= htmlspecialchars(TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext), ENT_QUOTES);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['section'] = 'headline';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['section'] = 'content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#2957725069    4209      