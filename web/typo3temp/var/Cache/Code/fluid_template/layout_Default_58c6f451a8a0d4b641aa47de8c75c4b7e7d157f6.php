<?php

class layout_Default_58c6f451a8a0d4b641aa47de8c75c4b7e7d157f6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div
	class="typo3-fullDoc typo3-module-lang"
	data-list-translations-uri="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['action'] = 'getTranslations';
$arguments1['format'] = 'json';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '"
	data-update-language-uri="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['action'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['controller'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['pageType'] = 0;
$arguments3['noCache'] = false;
$arguments3['noCacheHash'] = false;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['linkAccessRestrictedPages'] = false;
$arguments3['additionalParams'] = array (
);
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = NULL;
$arguments3['action'] = 'updateLanguage';
$arguments3['format'] = 'json';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output0 .= '"
	data-update-translation-uri="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['linkAccessRestrictedPages'] = false;
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['addQueryStringMethod'] = NULL;
$arguments5['action'] = 'updateTranslation';
$arguments5['format'] = 'json';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext), ENT_QUOTES);

$output0 .= '"
	data-activate-language-uri="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['action'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['controller'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['pluginName'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['linkAccessRestrictedPages'] = false;
$arguments7['additionalParams'] = array (
);
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = NULL;
$arguments7['action'] = 'activateLanguage';
$arguments7['format'] = 'json';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext), ENT_QUOTES);

$output0 .= '"
	data-deactivate-language-uri="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['action'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['controller'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['pageType'] = 0;
$arguments9['noCache'] = false;
$arguments9['noCacheHash'] = false;
$arguments9['section'] = '';
$arguments9['format'] = '';
$arguments9['linkAccessRestrictedPages'] = false;
$arguments9['additionalParams'] = array (
);
$arguments9['absolute'] = false;
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['addQueryStringMethod'] = NULL;
$arguments9['action'] = 'deactivateLanguage';
$arguments9['format'] = 'json';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext), ENT_QUOTES);

$output0 .= '"
	data-prefix="tx_lang_tools_langlanguage"
>

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['partial'] = 'Icons';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#2957790309    7741      