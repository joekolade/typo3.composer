<?php

class List_action_Index_e730bd21b527a4956381558cac46825d4f56a038 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'installedExtensions';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['key'] = 'extensionList.search';
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$array10 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments6['class'] = 'form-control';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'extensionList.header.title.update';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext), ENT_QUOTES);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'extensionList.header.update';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th title="';
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
$arguments15['key'] = 'extensionList.header.title.activate';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'extensionList.header.activate';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'extensionList.header.extensionName';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['key'] = 'extensionList.header.extensionKey';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionVersion';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionState';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionActions';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
						<tr id="';
$array66 = array (
);
$output65 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array66), ENT_QUOTES);

$output65 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array70), ENT_QUOTES);
$array69['1'] = ' == -1';

$expression71 = function($context) {return (($context["node0"]) == -1);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['then'] = 'insecure';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array75), ENT_QUOTES);
$array74['1'] = ' == -2';

$expression76 = function($context) {return (($context["node0"]) == -2);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['then'] = 'outdated';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output65 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array80), ENT_QUOTES);

$expression81 = function($context) {return ($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['then'] = '';
$arguments77['else'] = 'inactive';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output65 .= '">
					';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
						<tr id="';
$array85 = array (
);
$output84 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array85), ENT_QUOTES);

$output84 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array89), ENT_QUOTES);

$expression90 = function($context) {return ($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['then'] = '';
$arguments86['else'] = 'inactive';

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output84 .= '">
					';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output62 .= '';

$output62 .= '
				';
return $output62;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array60);

$expression61 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
						<tr id="';
$array36 = array (
);
$output35 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array36), ENT_QUOTES);

$output35 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array40), ENT_QUOTES);
$array39['1'] = ' == -1';

$expression41 = function($context) {return (($context["node0"]) == -1);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['then'] = 'insecure';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array45), ENT_QUOTES);
$array44['1'] = ' == -2';

$expression46 = function($context) {return (($context["node0"]) == -2);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['then'] = 'outdated';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output35 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array50), ENT_QUOTES);

$expression51 = function($context) {return ($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['then'] = '';
$arguments47['else'] = 'inactive';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output35 .= '">
					';
return $output35;
};
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
						<tr id="';
$array53 = array (
);
$output52 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array53), ENT_QUOTES);

$output52 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array57), ENT_QUOTES);

$expression58 = function($context) {return ($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['then'] = '';
$arguments54['else'] = 'inactive';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output52 .= '">
					';
return $output52;
};

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['key'] = 'extensionList.updateDisabled';

$output125 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext), ENT_QUOTES);

$output125 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['identifier'] = NULL;
$arguments128['size'] = 'small';
$arguments128['overlay'] = NULL;
$arguments128['state'] = 'default';
$arguments128['alternativeMarkupIdentifier'] = NULL;
$arguments128['identifier'] = 'actions-system-extension-update';

$output125 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
								</span>
							';
return $output125;
};
$arguments123 = array();

$output122 .= '';

$output122 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['identifier'] = NULL;
$arguments145['size'] = 'small';
$arguments145['overlay'] = NULL;
$arguments145['state'] = 'default';
$arguments145['alternativeMarkupIdentifier'] = NULL;
$arguments145['identifier'] = 'actions-system-extension-update';

$output144 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
									';
return $output144;
};
$arguments133 = array();
$arguments133['action'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['controller'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['pluginName'] = NULL;
$arguments133['pageUid'] = NULL;
$arguments133['pageType'] = 0;
$arguments133['noCache'] = false;
$arguments133['noCacheHash'] = false;
$arguments133['section'] = '';
$arguments133['format'] = '';
$arguments133['linkAccessRestrictedPages'] = false;
$arguments133['additionalParams'] = array (
);
$arguments133['absolute'] = false;
$arguments133['addQueryString'] = false;
$arguments133['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments133['addQueryStringMethod'] = NULL;
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['action'] = 'updateCommentForUpdatableVersions';
$arguments133['class'] = 'btn btn-default';
// Rendering Array
$array135 = array();
$array135['data-action'] = 'update-extension';
$arguments133['additionalAttributes'] = $array135;
$arguments133['format'] = 'json';
$arguments133['controller'] = 'Download';
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array137);
$array138 = array (
);$array136['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array138);
$array139 = array (
);$array136['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array139);
$arguments133['arguments'] = $array136;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['htmlEscape'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array143);
$arguments140['arguments'] = $array142;
$arguments133['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
							';
return $output132;
};
$arguments130 = array();
$arguments130['if'] = NULL;

$output122 .= '';

$output122 .= '
						';
return $output122;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array120);
$array119['1'] = ' == \'excludeFromUpdates\'';

$expression121 = function($context) {return (($context["node0"]) == 'excludeFromUpdates');};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['key'] = 'extensionList.updateDisabled';

$output99 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext), ENT_QUOTES);

$output99 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['identifier'] = NULL;
$arguments102['size'] = 'small';
$arguments102['overlay'] = NULL;
$arguments102['state'] = 'default';
$arguments102['alternativeMarkupIdentifier'] = NULL;
$arguments102['identifier'] = 'actions-system-extension-update';

$output99 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output99 .= '
								</span>
							';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['identifier'] = NULL;
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$arguments117['identifier'] = 'actions-system-extension-update';

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
									';
return $output116;
};
$arguments105 = array();
$arguments105['action'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = 0;
$arguments105['noCache'] = false;
$arguments105['noCacheHash'] = false;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['linkAccessRestrictedPages'] = false;
$arguments105['additionalParams'] = array (
);
$arguments105['absolute'] = false;
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$arguments105['action'] = 'updateCommentForUpdatableVersions';
$arguments105['class'] = 'btn btn-default';
// Rendering Array
$array107 = array();
$array107['data-action'] = 'update-extension';
$arguments105['additionalAttributes'] = $array107;
$arguments105['format'] = 'json';
$arguments105['controller'] = 'Download';
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array109);
$array110 = array (
);$array108['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array110);
$array111 = array (
);$array108['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array111);
$arguments105['arguments'] = $array108;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array115);
$arguments112['arguments'] = $array114;
$arguments105['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
							';
return $output104;
};

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
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array94);

$expression95 = function($context) {return ($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output32 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array150);

$expression151 = function($context) {return ($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['then'] = 'active';
$arguments147['else'] = 'inactive';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output32 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['rel'] = NULL;
$arguments152['rev'] = NULL;
$arguments152['target'] = NULL;
$arguments152['extension'] = NULL;
$array154 = array (
);$arguments152['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array154);

$output32 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output32 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
						<img class="ext-icon" src="../';
$array161 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array161), ENT_QUOTES);
$array162 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array162), ENT_QUOTES);

$output160 .= '" alt="';
$array163 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array163), ENT_QUOTES);

$output160 .= '" />
					';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array158);

$expression159 = function($context) {return ($context["node0"]);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output32 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$array167 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array167), ENT_QUOTES);
};
$arguments164 = array();
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['name'] = NULL;
$arguments164['rel'] = NULL;
$arguments164['rev'] = NULL;
$arguments164['target'] = NULL;
$arguments164['extension'] = NULL;
$arguments164['forceConfiguration'] = true;
$arguments164['showDescription'] = false;
$array166 = array (
);$arguments164['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array166);
$arguments164['forceConfiguration'] = 0;
$arguments164['showDescription'] = 1;

$output32 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output32 .= '
				</td>
				<td>
					';
$array168 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array168), ENT_QUOTES);

$output32 .= '
				</td>
				<td>
					';
$array169 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.version', $array169), ENT_QUOTES);

$output32 .= '
				</td>
				<td>
					<span class="label label-';
$array170 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array170), ENT_QUOTES);

$output32 .= '">';
$array171 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array171), ENT_QUOTES);

$output32 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['identifier'] = NULL;
$arguments182['size'] = 'small';
$arguments182['overlay'] = NULL;
$arguments182['state'] = 'default';
$arguments182['alternativeMarkupIdentifier'] = NULL;
$arguments182['identifier'] = 'actions-system-extension-configure';

$output181 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
							';
return $output181;
};
$arguments176 = array();
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['class'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$arguments176['name'] = NULL;
$arguments176['rel'] = NULL;
$arguments176['rev'] = NULL;
$arguments176['target'] = NULL;
$arguments176['extension'] = NULL;
$arguments176['forceConfiguration'] = true;
$arguments176['showDescription'] = false;
$arguments176['class'] = 'btn btn-default';
$array178 = array (
);$arguments176['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array178);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['key'] = NULL;
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['htmlEscape'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['key'] = 'extensionList.configure';
$arguments176['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output175 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['name'] = NULL;
$arguments184['rel'] = NULL;
$arguments184['rev'] = NULL;
$arguments184['target'] = NULL;
$arguments184['extensionKey'] = NULL;
$arguments184['class'] = 'btn btn-default';
$array186 = array (
);$arguments184['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array186);

$output175 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output175 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['class'] = NULL;
$arguments187['dir'] = NULL;
$arguments187['id'] = NULL;
$arguments187['lang'] = NULL;
$arguments187['style'] = NULL;
$arguments187['title'] = NULL;
$arguments187['accesskey'] = NULL;
$arguments187['tabindex'] = NULL;
$arguments187['onclick'] = NULL;
$arguments187['name'] = NULL;
$arguments187['rel'] = NULL;
$arguments187['rev'] = NULL;
$arguments187['target'] = NULL;
$arguments187['extension'] = NULL;
$arguments187['class'] = 'btn btn-default';
$array189 = array (
);$arguments187['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array189);

$output175 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output175 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['identifier'] = NULL;
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$arguments197['identifier'] = 'actions-system-extension-download';

$output196 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
								';
return $output196;
};
$arguments190 = array();
$arguments190['action'] = NULL;
$arguments190['arguments'] = array (
);
$arguments190['controller'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['pluginName'] = NULL;
$arguments190['pageUid'] = NULL;
$arguments190['pageType'] = 0;
$arguments190['noCache'] = false;
$arguments190['noCacheHash'] = false;
$arguments190['section'] = '';
$arguments190['format'] = '';
$arguments190['linkAccessRestrictedPages'] = false;
$arguments190['additionalParams'] = array (
);
$arguments190['absolute'] = false;
$arguments190['addQueryString'] = false;
$arguments190['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments190['addQueryStringMethod'] = NULL;
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['name'] = NULL;
$arguments190['rel'] = NULL;
$arguments190['rev'] = NULL;
$arguments190['target'] = NULL;
$arguments190['action'] = 'downloadExtensionZip';
$arguments190['controller'] = 'Action';
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array193);
$arguments190['arguments'] = $array192;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['key'] = 'extensionList.downloadzip';
$arguments190['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output175 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['class'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['style'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$arguments199['name'] = NULL;
$arguments199['rel'] = NULL;
$arguments199['rev'] = NULL;
$arguments199['target'] = NULL;
$arguments199['extension'] = NULL;
$arguments199['class'] = 'btn btn-default';
$array201 = array (
);$arguments199['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array201);

$output175 .= TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output175 .= '
						';
return $output175;
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['extension'] = NULL;
$array174 = array (
);$arguments172['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array174);

$output32 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output32 .= '
					</div>
				</td>
				</tr>
			';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$arguments29['each'] = isset($renderingContext->getVariableProvider()['extensions']) ? $renderingContext->getVariableProvider()['extensions'] : NULL;
$arguments29['as'] = 'extension';
$arguments29['key'] = 'extensionKey';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output202 = '';
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string203 = '{namespace em=TYPO3\CMS\Extensionmanager\ViewHelpers}';
$array204 = array (
  0 => '{namespace em=TYPO3\\CMS\\Extensionmanager\\ViewHelpers}',
  1 => 'em',
  2 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
);

$output202 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string203, $array204);

$output202 .= '
';
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string205 = '{namespace core=TYPO3\CMS\Core\ViewHelpers}';
$array206 = array (
  0 => '{namespace core=TYPO3\\CMS\\Core\\ViewHelpers}',
  1 => 'core',
  2 => 'TYPO3\\CMS\\Core\\ViewHelpers',
);

$output202 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string205, $array206);

$output202 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['name'] = NULL;
$arguments207['name'] = 'main';

$output202 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext), ENT_QUOTES);

$output202 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['key'] = 'installedExtensions';

$output211 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext), ENT_QUOTES);

$output211 .= '</h1>
';
return $output211;
};
$arguments209 = array();
$arguments209['name'] = NULL;
$arguments209['name'] = 'headline';

$output202 .= '';

$output202 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['section'] = NULL;
$arguments217['partial'] = NULL;
$arguments217['delegate'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['optional'] = false;
$arguments217['default'] = NULL;
$arguments217['contentAs'] = NULL;
$arguments217['partial'] = 'List/UploadForm';

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['name'] = NULL;
$arguments219['value'] = NULL;
$arguments219['property'] = NULL;
$arguments219['autofocus'] = NULL;
$arguments219['disabled'] = NULL;
$arguments219['maxlength'] = NULL;
$arguments219['readonly'] = NULL;
$arguments219['size'] = NULL;
$arguments219['placeholder'] = NULL;
$arguments219['pattern'] = NULL;
$arguments219['errorClass'] = 'f3-form-error';
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['title'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['required'] = false;
$arguments219['type'] = 'text';
$arguments219['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['htmlEscape'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['key'] = 'extensionList.search';
$arguments219['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);
$arguments219['id'] = 'Tx_Extensionmanager_extensionkey';
$array223 = array (
);$arguments219['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array223);
$arguments219['class'] = 'form-control';

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output216 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['htmlEscape'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['key'] = 'extensionList.header.title.update';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext), ENT_QUOTES);

$output216 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['htmlEscape'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['key'] = 'extensionList.header.update';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['htmlEscape'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['key'] = 'extensionList.header.title.activate';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext), ENT_QUOTES);

$output216 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['htmlEscape'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['key'] = 'extensionList.header.activate';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['key'] = NULL;
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['htmlEscape'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$arguments232['key'] = 'extensionList.header.extensionName';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['htmlEscape'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['key'] = 'extensionList.header.extensionKey';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['htmlEscape'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['key'] = 'extensionList.header.extensionVersion';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['key'] = 'extensionList.header.extensionState';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['htmlEscape'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['key'] = 'extensionList.header.extensionActions';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext), ENT_QUOTES);

$output216 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
						<tr id="';
$array279 = array (
);
$output278 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array279), ENT_QUOTES);

$output278 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array283), ENT_QUOTES);
$array282['1'] = ' == -1';

$expression284 = function($context) {return (($context["node0"]) == -1);};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['then'] = 'insecure';

$output278 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array288), ENT_QUOTES);
$array287['1'] = ' == -2';

$expression289 = function($context) {return (($context["node0"]) == -2);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['then'] = 'outdated';

$output278 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output278 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$arguments290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array293), ENT_QUOTES);

$expression294 = function($context) {return ($context["node0"]);};
$arguments290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments290['then'] = '';
$arguments290['else'] = 'inactive';

$output278 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output278 .= '">
					';
return $output278;
};
$arguments276 = array();

$output275 .= '';

$output275 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
						<tr id="';
$array298 = array (
);
$output297 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array298), ENT_QUOTES);

$output297 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array302), ENT_QUOTES);

$expression303 = function($context) {return ($context["node0"]);};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['then'] = '';
$arguments299['else'] = 'inactive';

$output297 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output297 .= '">
					';
return $output297;
};
$arguments295 = array();
$arguments295['if'] = NULL;

$output275 .= '';

$output275 .= '
				';
return $output275;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array273);

$expression274 = function($context) {return ($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
						<tr id="';
$array249 = array (
);
$output248 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array249), ENT_QUOTES);

$output248 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array253), ENT_QUOTES);
$array252['1'] = ' == -1';

$expression254 = function($context) {return (($context["node0"]) == -1);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['then'] = 'insecure';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array258), ENT_QUOTES);
$array257['1'] = ' == -2';

$expression259 = function($context) {return (($context["node0"]) == -2);};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
$arguments255['then'] = 'outdated';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output248 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array263), ENT_QUOTES);

$expression264 = function($context) {return ($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['then'] = '';
$arguments260['else'] = 'inactive';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output248 .= '">
					';
return $output248;
};
$arguments246['__elseClosures'][] = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
						<tr id="';
$array266 = array (
);
$output265 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array266), ENT_QUOTES);

$output265 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array270), ENT_QUOTES);

$expression271 = function($context) {return ($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$arguments267['then'] = '';
$arguments267['else'] = 'inactive';

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output265 .= '">
					';
return $output265;
};

$output245 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['key'] = NULL;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['htmlEscape'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['key'] = 'extensionList.updateDisabled';

$output338 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext), ENT_QUOTES);

$output338 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['identifier'] = NULL;
$arguments341['size'] = 'small';
$arguments341['overlay'] = NULL;
$arguments341['state'] = 'default';
$arguments341['alternativeMarkupIdentifier'] = NULL;
$arguments341['identifier'] = 'actions-system-extension-update';

$output338 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output338 .= '
								</span>
							';
return $output338;
};
$arguments336 = array();

$output335 .= '';

$output335 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['identifier'] = NULL;
$arguments358['size'] = 'small';
$arguments358['overlay'] = NULL;
$arguments358['state'] = 'default';
$arguments358['alternativeMarkupIdentifier'] = NULL;
$arguments358['identifier'] = 'actions-system-extension-update';

$output357 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
									';
return $output357;
};
$arguments346 = array();
$arguments346['action'] = NULL;
$arguments346['arguments'] = array (
);
$arguments346['controller'] = NULL;
$arguments346['extensionName'] = NULL;
$arguments346['pluginName'] = NULL;
$arguments346['pageUid'] = NULL;
$arguments346['pageType'] = 0;
$arguments346['noCache'] = false;
$arguments346['noCacheHash'] = false;
$arguments346['section'] = '';
$arguments346['format'] = '';
$arguments346['linkAccessRestrictedPages'] = false;
$arguments346['additionalParams'] = array (
);
$arguments346['absolute'] = false;
$arguments346['addQueryString'] = false;
$arguments346['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments346['addQueryStringMethod'] = NULL;
$arguments346['additionalAttributes'] = NULL;
$arguments346['data'] = NULL;
$arguments346['class'] = NULL;
$arguments346['dir'] = NULL;
$arguments346['id'] = NULL;
$arguments346['lang'] = NULL;
$arguments346['style'] = NULL;
$arguments346['title'] = NULL;
$arguments346['accesskey'] = NULL;
$arguments346['tabindex'] = NULL;
$arguments346['onclick'] = NULL;
$arguments346['name'] = NULL;
$arguments346['rel'] = NULL;
$arguments346['rev'] = NULL;
$arguments346['target'] = NULL;
$arguments346['action'] = 'updateCommentForUpdatableVersions';
$arguments346['class'] = 'btn btn-default';
// Rendering Array
$array348 = array();
$array348['data-action'] = 'update-extension';
$arguments346['additionalAttributes'] = $array348;
$arguments346['format'] = 'json';
$arguments346['controller'] = 'Download';
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array350);
$array351 = array (
);$array349['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array351);
$array352 = array (
);$array349['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array352);
$arguments346['arguments'] = $array349;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['htmlEscape'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array356);
$arguments353['arguments'] = $array355;
$arguments346['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output345 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
							';
return $output345;
};
$arguments343 = array();
$arguments343['if'] = NULL;

$output335 .= '';

$output335 .= '
						';
return $output335;
};
$arguments310 = array();
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$arguments310['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array333);
$array332['1'] = ' == \'excludeFromUpdates\'';

$expression334 = function($context) {return (($context["node0"]) == 'excludeFromUpdates');};
$arguments310['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array332)
					),
					$renderingContext
				);
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['htmlEscape'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['key'] = 'extensionList.updateDisabled';

$output312 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext), ENT_QUOTES);

$output312 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['identifier'] = NULL;
$arguments315['size'] = 'small';
$arguments315['overlay'] = NULL;
$arguments315['state'] = 'default';
$arguments315['alternativeMarkupIdentifier'] = NULL;
$arguments315['identifier'] = 'actions-system-extension-update';

$output312 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output312 .= '
								</span>
							';
return $output312;
};
$arguments310['__elseClosures'][] = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['identifier'] = NULL;
$arguments330['size'] = 'small';
$arguments330['overlay'] = NULL;
$arguments330['state'] = 'default';
$arguments330['alternativeMarkupIdentifier'] = NULL;
$arguments330['identifier'] = 'actions-system-extension-update';

$output329 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output329 .= '
									';
return $output329;
};
$arguments318 = array();
$arguments318['action'] = NULL;
$arguments318['arguments'] = array (
);
$arguments318['controller'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['pluginName'] = NULL;
$arguments318['pageUid'] = NULL;
$arguments318['pageType'] = 0;
$arguments318['noCache'] = false;
$arguments318['noCacheHash'] = false;
$arguments318['section'] = '';
$arguments318['format'] = '';
$arguments318['linkAccessRestrictedPages'] = false;
$arguments318['additionalParams'] = array (
);
$arguments318['absolute'] = false;
$arguments318['addQueryString'] = false;
$arguments318['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments318['addQueryStringMethod'] = NULL;
$arguments318['additionalAttributes'] = NULL;
$arguments318['data'] = NULL;
$arguments318['class'] = NULL;
$arguments318['dir'] = NULL;
$arguments318['id'] = NULL;
$arguments318['lang'] = NULL;
$arguments318['style'] = NULL;
$arguments318['title'] = NULL;
$arguments318['accesskey'] = NULL;
$arguments318['tabindex'] = NULL;
$arguments318['onclick'] = NULL;
$arguments318['name'] = NULL;
$arguments318['rel'] = NULL;
$arguments318['rev'] = NULL;
$arguments318['target'] = NULL;
$arguments318['action'] = 'updateCommentForUpdatableVersions';
$arguments318['class'] = 'btn btn-default';
// Rendering Array
$array320 = array();
$array320['data-action'] = 'update-extension';
$arguments318['additionalAttributes'] = $array320;
$arguments318['format'] = 'json';
$arguments318['controller'] = 'Download';
// Rendering Array
$array321 = array();
$array322 = array (
);$array321['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array322);
$array323 = array (
);$array321['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array323);
$array324 = array (
);$array321['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array324);
$arguments318['arguments'] = $array321;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['htmlEscape'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array327 = array();
$array328 = array (
);$array327['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array328);
$arguments325['arguments'] = $array327;
$arguments318['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
							';
return $output317;
};

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
					';
return $output309;
};
$arguments304 = array();
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$arguments304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array307);

$expression308 = function($context) {return ($context["node0"]);};
$arguments304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments304['__thenClosure'] = $renderChildrenClosure305;

$output245 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output245 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['then'] = NULL;
$arguments360['else'] = NULL;
$arguments360['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array362 = array();
$array363 = array (
);$array362['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array363);

$expression364 = function($context) {return ($context["node0"]);};
$arguments360['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression364(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array362)
					),
					$renderingContext
				);
$arguments360['then'] = 'active';
$arguments360['else'] = 'inactive';

$output245 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output245 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['additionalAttributes'] = NULL;
$arguments365['data'] = NULL;
$arguments365['class'] = NULL;
$arguments365['dir'] = NULL;
$arguments365['id'] = NULL;
$arguments365['lang'] = NULL;
$arguments365['style'] = NULL;
$arguments365['title'] = NULL;
$arguments365['accesskey'] = NULL;
$arguments365['tabindex'] = NULL;
$arguments365['onclick'] = NULL;
$arguments365['name'] = NULL;
$arguments365['rel'] = NULL;
$arguments365['rev'] = NULL;
$arguments365['target'] = NULL;
$arguments365['extension'] = NULL;
$array367 = array (
);$arguments365['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array367);

$output245 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output245 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
						<img class="ext-icon" src="../';
$array374 = array (
);
$output373 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array374), ENT_QUOTES);
$array375 = array (
);
$output373 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array375), ENT_QUOTES);

$output373 .= '" alt="';
$array376 = array (
);
$output373 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array376), ENT_QUOTES);

$output373 .= '" />
					';
return $output373;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array371);

$expression372 = function($context) {return ($context["node0"]);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = $renderChildrenClosure369;

$output245 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output245 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$array380 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array380), ENT_QUOTES);
};
$arguments377 = array();
$arguments377['additionalAttributes'] = NULL;
$arguments377['data'] = NULL;
$arguments377['class'] = NULL;
$arguments377['dir'] = NULL;
$arguments377['id'] = NULL;
$arguments377['lang'] = NULL;
$arguments377['style'] = NULL;
$arguments377['title'] = NULL;
$arguments377['accesskey'] = NULL;
$arguments377['tabindex'] = NULL;
$arguments377['onclick'] = NULL;
$arguments377['name'] = NULL;
$arguments377['rel'] = NULL;
$arguments377['rev'] = NULL;
$arguments377['target'] = NULL;
$arguments377['extension'] = NULL;
$arguments377['forceConfiguration'] = true;
$arguments377['showDescription'] = false;
$array379 = array (
);$arguments377['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array379);
$arguments377['forceConfiguration'] = 0;
$arguments377['showDescription'] = 1;

$output245 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output245 .= '
				</td>
				<td>
					';
$array381 = array (
);
$output245 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array381), ENT_QUOTES);

$output245 .= '
				</td>
				<td>
					';
$array382 = array (
);
$output245 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.version', $array382), ENT_QUOTES);

$output245 .= '
				</td>
				<td>
					<span class="label label-';
$array383 = array (
);
$output245 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array383), ENT_QUOTES);

$output245 .= '">';
$array384 = array (
);
$output245 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array384), ENT_QUOTES);

$output245 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['identifier'] = NULL;
$arguments395['size'] = 'small';
$arguments395['overlay'] = NULL;
$arguments395['state'] = 'default';
$arguments395['alternativeMarkupIdentifier'] = NULL;
$arguments395['identifier'] = 'actions-system-extension-configure';

$output394 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output394 .= '
							';
return $output394;
};
$arguments389 = array();
$arguments389['additionalAttributes'] = NULL;
$arguments389['data'] = NULL;
$arguments389['class'] = NULL;
$arguments389['dir'] = NULL;
$arguments389['id'] = NULL;
$arguments389['lang'] = NULL;
$arguments389['style'] = NULL;
$arguments389['title'] = NULL;
$arguments389['accesskey'] = NULL;
$arguments389['tabindex'] = NULL;
$arguments389['onclick'] = NULL;
$arguments389['name'] = NULL;
$arguments389['rel'] = NULL;
$arguments389['rev'] = NULL;
$arguments389['target'] = NULL;
$arguments389['extension'] = NULL;
$arguments389['forceConfiguration'] = true;
$arguments389['showDescription'] = false;
$arguments389['class'] = 'btn btn-default';
$array391 = array (
);$arguments389['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array391);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['key'] = NULL;
$arguments392['id'] = NULL;
$arguments392['default'] = NULL;
$arguments392['htmlEscape'] = NULL;
$arguments392['arguments'] = NULL;
$arguments392['extensionName'] = NULL;
$arguments392['key'] = 'extensionList.configure';
$arguments389['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output388 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['additionalAttributes'] = NULL;
$arguments397['data'] = NULL;
$arguments397['class'] = NULL;
$arguments397['dir'] = NULL;
$arguments397['id'] = NULL;
$arguments397['lang'] = NULL;
$arguments397['style'] = NULL;
$arguments397['title'] = NULL;
$arguments397['accesskey'] = NULL;
$arguments397['tabindex'] = NULL;
$arguments397['onclick'] = NULL;
$arguments397['name'] = NULL;
$arguments397['rel'] = NULL;
$arguments397['rev'] = NULL;
$arguments397['target'] = NULL;
$arguments397['extensionKey'] = NULL;
$arguments397['class'] = 'btn btn-default';
$array399 = array (
);$arguments397['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array399);

$output388 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output388 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['class'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['title'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['name'] = NULL;
$arguments400['rel'] = NULL;
$arguments400['rev'] = NULL;
$arguments400['target'] = NULL;
$arguments400['extension'] = NULL;
$arguments400['class'] = 'btn btn-default';
$array402 = array (
);$arguments400['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array402);

$output388 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output388 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['identifier'] = NULL;
$arguments410['size'] = 'small';
$arguments410['overlay'] = NULL;
$arguments410['state'] = 'default';
$arguments410['alternativeMarkupIdentifier'] = NULL;
$arguments410['identifier'] = 'actions-system-extension-download';

$output409 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
								';
return $output409;
};
$arguments403 = array();
$arguments403['action'] = NULL;
$arguments403['arguments'] = array (
);
$arguments403['controller'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['pluginName'] = NULL;
$arguments403['pageUid'] = NULL;
$arguments403['pageType'] = 0;
$arguments403['noCache'] = false;
$arguments403['noCacheHash'] = false;
$arguments403['section'] = '';
$arguments403['format'] = '';
$arguments403['linkAccessRestrictedPages'] = false;
$arguments403['additionalParams'] = array (
);
$arguments403['absolute'] = false;
$arguments403['addQueryString'] = false;
$arguments403['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments403['addQueryStringMethod'] = NULL;
$arguments403['additionalAttributes'] = NULL;
$arguments403['data'] = NULL;
$arguments403['class'] = NULL;
$arguments403['dir'] = NULL;
$arguments403['id'] = NULL;
$arguments403['lang'] = NULL;
$arguments403['style'] = NULL;
$arguments403['title'] = NULL;
$arguments403['accesskey'] = NULL;
$arguments403['tabindex'] = NULL;
$arguments403['onclick'] = NULL;
$arguments403['name'] = NULL;
$arguments403['rel'] = NULL;
$arguments403['rev'] = NULL;
$arguments403['target'] = NULL;
$arguments403['action'] = 'downloadExtensionZip';
$arguments403['controller'] = 'Action';
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array406);
$arguments403['arguments'] = $array405;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['key'] = NULL;
$arguments407['id'] = NULL;
$arguments407['default'] = NULL;
$arguments407['htmlEscape'] = NULL;
$arguments407['arguments'] = NULL;
$arguments407['extensionName'] = NULL;
$arguments407['key'] = 'extensionList.downloadzip';
$arguments403['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output388 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$arguments412['class'] = NULL;
$arguments412['dir'] = NULL;
$arguments412['id'] = NULL;
$arguments412['lang'] = NULL;
$arguments412['style'] = NULL;
$arguments412['title'] = NULL;
$arguments412['accesskey'] = NULL;
$arguments412['tabindex'] = NULL;
$arguments412['onclick'] = NULL;
$arguments412['name'] = NULL;
$arguments412['rel'] = NULL;
$arguments412['rev'] = NULL;
$arguments412['target'] = NULL;
$arguments412['extension'] = NULL;
$arguments412['class'] = 'btn btn-default';
$array414 = array (
);$arguments412['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array414);

$output388 .= TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output388 .= '
						';
return $output388;
};
$arguments385 = array();
$arguments385['additionalAttributes'] = NULL;
$arguments385['data'] = NULL;
$arguments385['extension'] = NULL;
$array387 = array (
);$arguments385['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array387);

$output245 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output245 .= '
					</div>
				</td>
				</tr>
			';
return $output245;
};
$arguments242 = array();
$arguments242['each'] = NULL;
$arguments242['as'] = NULL;
$arguments242['key'] = NULL;
$arguments242['reverse'] = false;
$arguments242['iteration'] = NULL;
$arguments242['each'] = isset($renderingContext->getVariableProvider()['extensions']) ? $renderingContext->getVariableProvider()['extensions'] : NULL;
$arguments242['as'] = 'extension';
$arguments242['key'] = 'extensionKey';

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output216 .= '
		</tbody>
	</table>
	</div>
';
return $output216;
};
$arguments214 = array();
$arguments214['name'] = NULL;
$arguments214['name'] = 'content';

$output202 .= '';

return $output202;
}


}
#2957725069    102408    