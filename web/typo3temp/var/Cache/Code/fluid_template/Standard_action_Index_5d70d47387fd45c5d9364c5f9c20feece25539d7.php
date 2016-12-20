<?php

class Standard_action_Index_5d70d47387fd45c5d9364c5f9c20feece25539d7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<ul class="nav nav-modules" data-role="modulemenu" id="menu">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<li class="modulemenu-group expanded" id="';
$array7 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array7), ENT_QUOTES);

$output6 .= '" data-modulename="';
$array8 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array8), ENT_QUOTES);

$output6 .= '" data-navigationcomponentid="';
$array9 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.navigationComponentId', $array9), ENT_QUOTES);

$output6 .= '" data-navigationframescript="';
$array10 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.navigationFrameScript', $array10), ENT_QUOTES);

$output6 .= '" data-navigationframescriptparameters="';
$array11 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.navigationFrameScriptParameters', $array11), ENT_QUOTES);

$output6 .= '">
			<div class="modulemenu-group-header">
				<span class="modulemenu-icon modulemenu-group-icon">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('mainModule.icon', $array30);
};
$arguments28 = array();
$arguments28['value'] = NULL;

$output27 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output27 .= '
							';
return $output27;
};
$arguments25 = array();

$output24 .= '';

$output24 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['identifier'] = NULL;
$arguments34['size'] = 'small';
$arguments34['overlay'] = NULL;
$arguments34['state'] = 'default';
$arguments34['alternativeMarkupIdentifier'] = NULL;
$arguments34['identifier'] = 'actions-move-move';
$arguments34['size'] = 'default';
$arguments34['alternativeMarkupIdentifier'] = 'inline';

$output33 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
							';
return $output33;
};
$arguments31 = array();
$arguments31['if'] = NULL;

$output24 .= '';

$output24 .= '
						';
return $output24;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('mainModule.icon', $array22);

$expression23 = function($context) {return ($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('mainModule.icon', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output14 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output14 .= '
							';
return $output14;
};
$arguments12['__elseClosures'][] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['identifier'] = NULL;
$arguments19['size'] = 'small';
$arguments19['overlay'] = NULL;
$arguments19['state'] = 'default';
$arguments19['alternativeMarkupIdentifier'] = NULL;
$arguments19['identifier'] = 'actions-move-move';
$arguments19['size'] = 'default';
$arguments19['alternativeMarkupIdentifier'] = 'inline';

$output18 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
							';
return $output18;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
				</span>
				<span class="modulemenu-group-title">
					';
$array36 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.title', $array36), ENT_QUOTES);

$output6 .= ' <span class="caret"></span>
				</span>
			</div>
			<ul class="modulemenu-group-container">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
					<li id="';
$array41 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.name', $array41), ENT_QUOTES);

$output40 .= '" class="modulemenu-item t3js-mainmodule" data-modulename="';
$array42 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array42), ENT_QUOTES);

$output40 .= '" data-navigationcomponentid="';
$array43 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.navigationComponentId', $array43), ENT_QUOTES);

$output40 .= '" data-navigationframescript="';
$array44 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.navigationFrameScript', $array44), ENT_QUOTES);

$output40 .= '" data-navigationframescriptparameters="';
$array45 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.navigationFrameScriptParameters', $array45), ENT_QUOTES);

$output40 .= '">
						<a title="';
$array46 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.description', $array46), ENT_QUOTES);

$output40 .= '" href="';
$array47 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.link', $array47), ENT_QUOTES);

$output40 .= '" class="modulemenu-item-link">
							<span class="modulemenu-icon modulemenu-item-icon">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('subModule.icon', $array50);
};
$arguments48 = array();
$arguments48['value'] = NULL;

$output40 .= isset($arguments48['value']) ? $arguments48['value'] : $renderChildrenClosure49();

$output40 .= '
							</span>
							<span class="modulemenu-item-title">
								';
$array51 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.title', $array51), ENT_QUOTES);

$output40 .= '
							</span>
						</a>
					</li>
				';
return $output40;
};
$arguments37 = array();
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$array39 = array (
);$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('mainModule.children', $array39);
$arguments37['as'] = 'subModule';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output6 .= '
			</ul>
		</li>
	';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$arguments3['each'] = isset($renderingContext->getVariableProvider()['modules']) ? $renderingContext->getVariableProvider()['modules'] : NULL;
$arguments3['as'] = 'mainModule';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
</ul>
';

return $output0;
}


}
#2957725055    10528     