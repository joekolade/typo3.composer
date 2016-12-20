<?php

class partial_DocHeader_4ae4a60aa3ff75f5c148e79f05086f8828ca4457 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="module-loading-indicator"></div>
<div class="module-docheader t3js-module-docheader">
	<div class="module-docheader-bar module-docheader-bar-navigation t3js-module-docheader-bar t3js-module-docheader-bar-navigation">
		<div class="module-docheader-bar-column-left">
			<div class="form-inline">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
					<div class="form-group form-group-sm">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array8);
$arguments5['arguments'] = $array7;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
					</div>
				';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$arguments1['each'] = isset($renderingContext->getVariableProvider()['docHeader']['menus']) ? $renderingContext->getVariableProvider()['docHeader']['menus'] : NULL;
$arguments1['as'] = 'menu';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			</div>
		</div>
		<div class="module-docheader-bar-column-right">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
				<span class="typo3-docheader-pagePath">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'LLL:EXT:lang/locallang_core.xlf:labels.path';

$output14 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output14 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
  0 => 'array',
  1 => 'array',
  2 => 'getter',
);return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;

$output14 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output14 .= '</span> ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
  0 => 'array',
  1 => 'array',
  2 => 'getter',
);return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformation', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output14 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output14 .= '
			';
return $output14;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
  0 => 'array',
  1 => 'array',
  2 => 'getter',
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformation', $array12);

$expression13 = function($context) {return ($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="module-docheader-bar module-docheader-bar-buttons t3js-module-docheader-bar t3js-module-docheader-bar-buttons">
		<div class="module-docheader-bar-column-left">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['partial'] = 'ButtonBar';
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.left', $array26);
$arguments23['arguments'] = $array25;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
		</div>
		<div class="module-docheader-bar-column-right">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['partial'] = 'ButtonBar';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.right', $array30);
$arguments27['arguments'] = $array29;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>';

return $output0;
}


}
#2961266933    7470      