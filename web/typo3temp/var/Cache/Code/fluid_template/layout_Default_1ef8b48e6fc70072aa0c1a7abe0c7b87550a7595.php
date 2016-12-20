<?php

class layout_Default_1ef8b48e6fc70072aa0c1a7abe0c7b87550a7595 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['section'] = 'headline';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['section'] = 'content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

<div class="t3js-drag-uploader" data-target-folder="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['folderIdentifier']) ? $renderingContext->getVariableProvider()['folderIdentifier'] : NULL, ENT_QUOTES);

$output0 .= '" data-progress-container="#typo3-filelist"
	 data-dropzone-trigger=".t3js-drag-uploader-trigger" data-dropzone-target=".t3js-module-body h1:first"
	 data-file-deny-pattern="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['fileDenyPattern']) ? $renderingContext->getVariableProvider()['fileDenyPattern'] : NULL, ENT_QUOTES);

$output0 .= '" data-max-file-size="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['maxFileSize']) ? $renderingContext->getVariableProvider()['maxFileSize'] : NULL, ENT_QUOTES);

$output0 .= '"
	></div>';

return $output0;
}


}
#2957790352    2854      