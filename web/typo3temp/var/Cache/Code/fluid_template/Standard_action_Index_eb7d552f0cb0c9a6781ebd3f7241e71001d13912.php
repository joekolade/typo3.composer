<?php

class Standard_action_Index_eb7d552f0cb0c9a6781ebd3f7241e71001d13912 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string1 = '{namespace core = TYPO3\CMS\Core\ViewHelpers}';
$array2 = array (
  0 => '{namespace core = TYPO3\\CMS\\Core\\ViewHelpers}',
  1 => 'core',
  2 => 'TYPO3\\CMS\\Core\\ViewHelpers',
);

$output0 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string1, $array2);

$output0 .= '
<div class="scaffold t3js-scaffold scaffold-modulemenu-expanded">
	<div class="scaffold-topbar t3js-scaffold-topbar">

		<div class="topbar">
			<div class="topbar-header t3js-topbar-header">
				<button class="topbar-button topbar-button-modulemenu t3js-topbar-button-modulemenu">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['identifier'] = NULL;
$arguments3['size'] = 'small';
$arguments3['overlay'] = NULL;
$arguments3['state'] = 'default';
$arguments3['alternativeMarkupIdentifier'] = NULL;
$arguments3['identifier'] = 'actions-move-move';
$arguments3['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
				</button>
				<button class="topbar-button topbar-button-navigationcomponent t3js-topbar-button-navigationcomponent">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['identifier'] = NULL;
$arguments5['size'] = 'small';
$arguments5['overlay'] = NULL;
$arguments5['state'] = 'default';
$arguments5['alternativeMarkupIdentifier'] = NULL;
$arguments5['identifier'] = 'apps-pagetree-category-collapse-all';
$arguments5['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
				</button>
				<a href="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoLink']) ? $renderingContext->getVariableProvider()['logoLink'] : NULL, ENT_QUOTES);

$output0 .= '" class="topbar-header-site" target="_blank" title="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['siteName']) ? $renderingContext->getVariableProvider()['siteName'] : NULL, ENT_QUOTES);

$output0 .= ' - ';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['applicationVersion']) ? $renderingContext->getVariableProvider()['applicationVersion'] : NULL, ENT_QUOTES);

$output0 .= '">
					<span class="topbar-header-site-logo">
						<img src="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoUrl']) ? $renderingContext->getVariableProvider()['logoUrl'] : NULL, ENT_QUOTES);

$output0 .= '" width="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoWidth']) ? $renderingContext->getVariableProvider()['logoWidth'] : NULL, ENT_QUOTES);

$output0 .= '" height="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['logoHeight']) ? $renderingContext->getVariableProvider()['logoHeight'] : NULL, ENT_QUOTES);

$output0 .= '" title="TYPO3 Content Management System" alt="" />
					</span>
					<span class="topbar-header-site-title">
						<span class="topbar-header-site-name">';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['siteName']) ? $renderingContext->getVariableProvider()['siteName'] : NULL, ENT_QUOTES);

$output0 .= '</span>
						<span class="topbar-header-site-version">';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['applicationVersion']) ? $renderingContext->getVariableProvider()['applicationVersion'] : NULL, ENT_QUOTES);

$output0 .= '</span>
					</span>
				</a>
				<button class="topbar-button topbar-button-toolbar t3js-topbar-button-toolbar">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['identifier'] = NULL;
$arguments15['size'] = 'small';
$arguments15['overlay'] = NULL;
$arguments15['state'] = 'default';
$arguments15['alternativeMarkupIdentifier'] = NULL;
$arguments15['identifier'] = 'actions-system-extension-configure';
$arguments15['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
				</button>
				<button class="topbar-button topbar-button-search t3js-topbar-button-search">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['identifier'] = NULL;
$arguments17['size'] = 'small';
$arguments17['overlay'] = NULL;
$arguments17['state'] = 'default';
$arguments17['alternativeMarkupIdentifier'] = NULL;
$arguments17['identifier'] = 'actions-search';
$arguments17['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
				</button>
			</div>
		</div>

	</div>
	<div class="scaffold-modulemenu t3js-scaffold-modulemenu">
		<div class="modulemenu t3js-modulemenu">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['moduleMenu']) ? $renderingContext->getVariableProvider()['moduleMenu'] : NULL;
};
$arguments19 = array();
$arguments19['value'] = NULL;

$output0 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output0 .= '
		</div>
	</div>
	<div class="scaffold-toolbar t3js-scaffold-toolbar">
		<div class="toolbar t3js-topbar-toolbar">
			<ul class="toolbar-list" data-typo3-role="typo3-module-menu">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['toolbar']) ? $renderingContext->getVariableProvider()['toolbar'] : NULL;
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output0 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output0 .= '
			</ul>
		</div>
	</div>
	<div class="scaffold-content t3js-scaffold-content">
		<div class="scaffold-content-navigation t3js-scaffold-content-navigation">
			<div class="scaffold-content-navigation-component" data-component="typo3-navigationIframe">
				<iframe name="nav_frame" src="about:blank" id="typo3-navigationContainerIframe" class="scaffold-content-navigation-iframe t3js-scaffold-content-navigation-iframe"></iframe>
			</div>
		</div>
		<div class="scaffold-content-module t3js-scaffold-content-module">
			<iframe name="list_frame" id="typo3-contentIframe" class="scaffold-content-module-iframe t3js-scaffold-content-module-iframe"></iframe>
		</div>
		<div class="scaffold-content-overlay t3js-scaffold-content-overlay"></div>
	</div>
</div>
';

return $output0;
}


}
#2961266931    8336      