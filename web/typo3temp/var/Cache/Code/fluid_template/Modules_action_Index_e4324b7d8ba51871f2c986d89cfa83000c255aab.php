<?php

class Modules_action_Index_e4324b7d8ba51871f2c986d89cfa83000c255aab extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<div class="container-small">
		';
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
$arguments1['partial'] = 'Logo';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:introtext2';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext), ENT_QUOTES);

$output0 .= '
		</p>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['warningMessages']) ? $renderingContext->getVariableProvider()['warningMessages'] : NULL;
};
$arguments15 = array();
$arguments15['value'] = NULL;
return isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();
};
$arguments12 = array();
$arguments12['title'] = NULL;
$arguments12['message'] = NULL;
$arguments12['state'] = -2;
$arguments12['iconName'] = NULL;
$arguments12['disableIcon'] = false;
$arguments12['title'] = isset($renderingContext->getVariableProvider()['warningTitle']) ? $renderingContext->getVariableProvider()['warningTitle'] : NULL;
$arguments12['state'] = 2;

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
		';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array8['0'] = isset($renderingContext->getVariableProvider()['warningMessages']) ? $renderingContext->getVariableProvider()['warningMessages'] : NULL;

$expression10 = function($context) {return ($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
					<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$array36 = array (
);$arguments34['key'] = $renderingContext->getVariableProvider()->getByPath('mainModule.label', $array36);

$output33 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext), ENT_QUOTES);

$output33 .= '</h2>
				';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('mainModule.label', $array31);

$expression32 = function($context) {return ($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
				<div class="row">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
						<div class="col-xs-12 col-sm-6">
							<a
								href="#"
								onclick="top.goToModule(\'';
$array41 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array41), ENT_QUOTES);

$output40 .= '_';
$array42 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.name', $array42), ENT_QUOTES);

$output40 .= '\'); return false;"
								title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array46);

$expression47 = function($context) {return ($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$array50 = array (
);$arguments48['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array50);
$arguments43['then'] = htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext), ENT_QUOTES);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output40 .= '"
								class="panel panel-default t3js-equalheight"
							>
								<div class="panel-body">
									<div class="media">
										<div class="media-left">
											<span class="media-object" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array54);

$expression55 = function($context) {return ($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$array58 = array (
);$arguments56['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array58);
$arguments51['then'] = htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext), ENT_QUOTES);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output40 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['identifier'] = NULL;
$arguments59['size'] = 'small';
$arguments59['overlay'] = NULL;
$arguments59['state'] = 'default';
$arguments59['alternativeMarkupIdentifier'] = NULL;
$array61 = array (
);$arguments59['identifier'] = $renderingContext->getVariableProvider()->getByPath('subModule.iconIdentifier', $array61);
$arguments59['size'] = 'default';

$output40 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output40 .= '
											</span>
										</div>
										<div class="media-body">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
												<h3 class="h4 media-heading">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$array70 = array (
);$arguments68['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array70);

$output67 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext), ENT_QUOTES);

$output67 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
														<br><small class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['htmlEscape'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$array79 = array (
);$arguments77['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array79);

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext), ENT_QUOTES);

$output76 .= '</small><br>
													';
return $output76;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array74);

$expression75 = function($context) {return ($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output67 .= '
												</h3>
											';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array65);

$expression66 = function($context) {return ($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output40 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$array90 = array (
);$arguments88['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.longDescription', $array90);
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
};
$arguments86 = array();
$arguments86['value'] = NULL;

$output85 .= isset($arguments86['value']) ? $arguments86['value'] : $renderChildrenClosure87();

$output85 .= '
											';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.longDescription', $array83);

$expression84 = function($context) {return ($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output40 .= '
										</div>
									</div>
								</div>
							</a>
						</div>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return '
								</div><div class="row">
							';
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('subModuleIterator.isLast', $array100);
$array99['1'] = ' == 0';

$expression101 = function($context) {return (($context["node0"]) == 0);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = $renderChildrenClosure98;

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
						';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('subModuleIterator.isEven', $array94);

$expression95 = function($context) {return ($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output40 .= '
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
);$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('mainModule.subModules', $array39);
$arguments37['as'] = 'subModule';
$arguments37['iteration'] = 'subModuleIterator';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output27 .= '
				</div>
			';
return $output27;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('mainModule.subModules', $array25);

$expression26 = function($context) {return ($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
		';
return $output21;
};
$arguments18 = array();
$arguments18['each'] = NULL;
$arguments18['as'] = NULL;
$arguments18['key'] = NULL;
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$arguments18['each'] = isset($renderingContext->getVariableProvider()['modules']) ? $renderingContext->getVariableProvider()['modules'] : NULL;
$arguments18['as'] = 'mainModule';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
		<p><em class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:endText';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext), ENT_QUOTES);

$output0 .= '</em></p>
		<p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['copyRightNotice']) ? $renderingContext->getVariableProvider()['copyRightNotice'] : NULL;
};
$arguments104 = array();
$arguments104['value'] = NULL;

$output0 .= isset($arguments104['value']) ? $arguments104['value'] : $renderChildrenClosure105();

$output0 .= '</p>
	</div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output107 = '';
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string108 = '{namespace core = TYPO3\CMS\Core\ViewHelpers}';
$array109 = array (
  0 => '{namespace core = TYPO3\\CMS\\Core\\ViewHelpers}',
  1 => 'core',
  2 => 'TYPO3\\CMS\\Core\\ViewHelpers',
);

$output107 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string108, $array109);

$output107 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['name'] = NULL;
$arguments110['name'] = 'Default';

$output107 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext), ENT_QUOTES);

$output107 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '

	<div class="container-small">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['partial'] = 'Logo';
$arguments115['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:introtext2';

$output114 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext), ENT_QUOTES);

$output114 .= '
		</p>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['warningMessages']) ? $renderingContext->getVariableProvider()['warningMessages'] : NULL;
};
$arguments129 = array();
$arguments129['value'] = NULL;
return isset($arguments129['value']) ? $arguments129['value'] : $renderChildrenClosure130();
};
$arguments126 = array();
$arguments126['title'] = NULL;
$arguments126['message'] = NULL;
$arguments126['state'] = -2;
$arguments126['iconName'] = NULL;
$arguments126['disableIcon'] = false;
$arguments126['title'] = isset($renderingContext->getVariableProvider()['warningTitle']) ? $renderingContext->getVariableProvider()['warningTitle'] : NULL;
$arguments126['state'] = 2;

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
		';
return $output125;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array122['0'] = isset($renderingContext->getVariableProvider()['warningMessages']) ? $renderingContext->getVariableProvider()['warningMessages'] : NULL;

$expression124 = function($context) {return ($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output114 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
					<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['htmlEscape'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$array150 = array (
);$arguments148['key'] = $renderingContext->getVariableProvider()->getByPath('mainModule.label', $array150);

$output147 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext), ENT_QUOTES);

$output147 .= '</h2>
				';
return $output147;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('mainModule.label', $array145);

$expression146 = function($context) {return ($context["node0"]);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['__thenClosure'] = $renderChildrenClosure143;

$output141 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
				<div class="row">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
						<div class="col-xs-12 col-sm-6">
							<a
								href="#"
								onclick="top.goToModule(\'';
$array155 = array (
);
$output154 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array155), ENT_QUOTES);

$output154 .= '_';
$array156 = array (
);
$output154 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.name', $array156), ENT_QUOTES);

$output154 .= '\'); return false;"
								title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array160);

$expression161 = function($context) {return ($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$array164 = array (
);$arguments162['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array164);
$arguments157['then'] = htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext), ENT_QUOTES);

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output154 .= '"
								class="panel panel-default t3js-equalheight"
							>
								<div class="panel-body">
									<div class="media">
										<div class="media-left">
											<span class="media-object" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array168);

$expression169 = function($context) {return ($context["node0"]);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['key'] = NULL;
$arguments170['id'] = NULL;
$arguments170['default'] = NULL;
$arguments170['htmlEscape'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['extensionName'] = NULL;
$array172 = array (
);$arguments170['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array172);
$arguments165['then'] = htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext), ENT_QUOTES);

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output154 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['identifier'] = NULL;
$arguments173['size'] = 'small';
$arguments173['overlay'] = NULL;
$arguments173['state'] = 'default';
$arguments173['alternativeMarkupIdentifier'] = NULL;
$array175 = array (
);$arguments173['identifier'] = $renderingContext->getVariableProvider()->getByPath('subModule.iconIdentifier', $array175);
$arguments173['size'] = 'default';

$output154 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output154 .= '
											</span>
										</div>
										<div class="media-body">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
												<h3 class="h4 media-heading">
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['htmlEscape'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$array184 = array (
);$arguments182['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array184);

$output181 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext), ENT_QUOTES);

$output181 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
														<br><small class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$array193 = array (
);$arguments191['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array193);

$output190 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext), ENT_QUOTES);

$output190 .= '</small><br>
													';
return $output190;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.shortDescription', $array188);

$expression189 = function($context) {return ($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$arguments185['__thenClosure'] = $renderChildrenClosure186;

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output181 .= '
												</h3>
											';
return $output181;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.label', $array179);

$expression180 = function($context) {return ($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output154 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['htmlEscape'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$array204 = array (
);$arguments202['key'] = $renderingContext->getVariableProvider()->getByPath('subModule.longDescription', $array204);
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);
};
$arguments200 = array();
$arguments200['value'] = NULL;

$output199 .= isset($arguments200['value']) ? $arguments200['value'] : $renderChildrenClosure201();

$output199 .= '
											';
return $output199;
};
$arguments194 = array();
$arguments194['then'] = NULL;
$arguments194['else'] = NULL;
$arguments194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['0'] = $renderingContext->getVariableProvider()->getByPath('subModule.longDescription', $array197);

$expression198 = function($context) {return ($context["node0"]);};
$arguments194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
$arguments194['__thenClosure'] = $renderChildrenClosure195;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output154 .= '
										</div>
									</div>
								</div>
							</a>
						</div>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return '
								</div><div class="row">
							';
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('subModuleIterator.isLast', $array214);
$array213['1'] = ' == 0';

$expression215 = function($context) {return (($context["node0"]) == 0);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = $renderChildrenClosure212;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
						';
return $output210;
};
$arguments205 = array();
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$arguments205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['0'] = $renderingContext->getVariableProvider()->getByPath('subModuleIterator.isEven', $array208);

$expression209 = function($context) {return ($context["node0"]);};
$arguments205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$arguments205['__thenClosure'] = $renderChildrenClosure206;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output154 .= '
					';
return $output154;
};
$arguments151 = array();
$arguments151['each'] = NULL;
$arguments151['as'] = NULL;
$arguments151['key'] = NULL;
$arguments151['reverse'] = false;
$arguments151['iteration'] = NULL;
$array153 = array (
);$arguments151['each'] = $renderingContext->getVariableProvider()->getByPath('mainModule.subModules', $array153);
$arguments151['as'] = 'subModule';
$arguments151['iteration'] = 'subModuleIterator';

$output141 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output141 .= '
				</div>
			';
return $output141;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('mainModule.subModules', $array139);

$expression140 = function($context) {return ($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = $renderChildrenClosure137;

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
		';
return $output135;
};
$arguments132 = array();
$arguments132['each'] = NULL;
$arguments132['as'] = NULL;
$arguments132['key'] = NULL;
$arguments132['reverse'] = false;
$arguments132['iteration'] = NULL;
$arguments132['each'] = isset($renderingContext->getVariableProvider()['modules']) ? $renderingContext->getVariableProvider()['modules'] : NULL;
$arguments132['as'] = 'mainModule';

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output114 .= '
		<p><em class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['htmlEscape'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:endText';

$output114 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext), ENT_QUOTES);

$output114 .= '</em></p>
		<p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['copyRightNotice']) ? $renderingContext->getVariableProvider()['copyRightNotice'] : NULL;
};
$arguments218 = array();
$arguments218['value'] = NULL;

$output114 .= isset($arguments218['value']) ? $arguments218['value'] : $renderChildrenClosure219();

$output114 .= '</p>
	</div>

';
return $output114;
};
$arguments112 = array();
$arguments112['name'] = NULL;
$arguments112['name'] = 'Content';

$output107 .= '';

$output107 .= '
';

return $output107;
}


}
#2961266932    45737     