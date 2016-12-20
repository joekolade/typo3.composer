<?php

class Standard_action_Index_e338eb6feabc57e19f90df6bbb078bca983db3e4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<ul class="dropdown-list" data-count="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['count']) ? $renderingContext->getVariableProvider()['count'] : NULL, ENT_QUOTES);

$output0 .= '" data-severityclass="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['severityBadgeClass']) ? $renderingContext->getVariableProvider()['severityBadgeClass'] : NULL, ENT_QUOTES);

$output0 .= '">
	<li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['key'] = 'systemmessage.header';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output0 .= '</li>
	<li id="systeminformation_installtool" class="dropdown-intro typo3-module-menu-item submodule mod-system_extinstall" data-modulename="system_extinstall">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'systemmessage.intro';
// Rendering Array
$array9 = array();
$array9['0'] = isset($renderingContext->getVariableProvider()['installToolUrl']) ? $renderingContext->getVariableProvider()['installToolUrl'] : NULL;
$arguments7['arguments'] = $array9;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= $renderChildrenClosure6();

$output0 .= '
	</li>
	<li>
		<dl class="dl-horizontal">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
				<dt title="';
$array15 = array (
);
$output14 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.title', $array15), ENT_QUOTES);

$output14 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.icon', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output14 .= $renderChildrenClosure17();

$output14 .= ' ';
$array19 = array (
);
$output14 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.title', $array19), ENT_QUOTES);

$output14 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
						<span class="text-';
$array34 = array (
);
$output33 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.status', $array34), ENT_QUOTES);

$output33 .= '">';
$array35 = array (
);
$output33 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.value', $array35), ENT_QUOTES);

$output33 .= '</span>
					';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
						';
$array39 = array (
);
$output38 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.value', $array39), ENT_QUOTES);

$output38 .= '
					';
return $output38;
};
$arguments36 = array();
$arguments36['if'] = NULL;

$output30 .= '';

$output30 .= '
				';
return $output30;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('info.status', $array28);

$expression29 = function($context) {return ($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
						<span class="text-';
$array23 = array (
);
$output22 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.status', $array23), ENT_QUOTES);

$output22 .= '">';
$array24 = array (
);
$output22 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.value', $array24), ENT_QUOTES);

$output22 .= '</span>
					';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
						';
$array26 = array (
);
$output25 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.value', $array26), ENT_QUOTES);

$output25 .= '
					';
return $output25;
};

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output14 .= '</dd>
			';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$arguments11['each'] = isset($renderingContext->getVariableProvider()['systemInformation']) ? $renderingContext->getVariableProvider()['systemInformation'] : NULL;
$arguments11['as'] = 'info';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
		</dl>
	</li>
	<li class="divider"></li>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
						<li id="systeminformation_';
$array123 = array (
);
$output122 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array123), ENT_QUOTES);

$output122 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
$array124 = array (
);
$output122 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array124), ENT_QUOTES);

$output122 .= '" data-modulename="';
$array125 = array (
);
$output122 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array125), ENT_QUOTES);

$output122 .= '">
							<span class="text-';
$array126 = array (
);
$output122 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array126), ENT_QUOTES);

$output122 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;

$output122 .= $renderChildrenClosure128();

$output122 .= '</span>
						</li>
					';
return $output122;
};
$arguments120 = array();

$output119 .= '';

$output119 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
						<li>
							<span class="text-';
$array133 = array (
);
$output132 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array133), ENT_QUOTES);

$output132 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$array136 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array136);
};
$arguments134 = array();
$arguments134['value'] = NULL;

$output132 .= $renderChildrenClosure135();

$output132 .= '</span>
						</li>
					';
return $output132;
};
$arguments130 = array();
$arguments130['if'] = NULL;

$output119 .= '';

$output119 .= '
				';
return $output119;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array117);

$expression118 = function($context) {return ($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
						<li id="systeminformation_';
$array104 = array (
);
$output103 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array104), ENT_QUOTES);

$output103 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
$array105 = array (
);
$output103 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array105), ENT_QUOTES);

$output103 .= '" data-modulename="';
$array106 = array (
);
$output103 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array106), ENT_QUOTES);

$output103 .= '">
							<span class="text-';
$array107 = array (
);
$output103 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array107), ENT_QUOTES);

$output103 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array110);
};
$arguments108 = array();
$arguments108['value'] = NULL;

$output103 .= $renderChildrenClosure109();

$output103 .= '</span>
						</li>
					';
return $output103;
};
$arguments101['__elseClosures'][] = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
						<li>
							<span class="text-';
$array112 = array (
);
$output111 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array112), ENT_QUOTES);

$output111 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array115 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array115);
};
$arguments113 = array();
$arguments113['value'] = NULL;

$output111 .= $renderChildrenClosure114();

$output111 .= '</span>
						</li>
					';
return $output111;
};

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
			';
return $output100;
};
$arguments97 = array();
$arguments97['each'] = NULL;
$arguments97['as'] = NULL;
$arguments97['key'] = NULL;
$arguments97['reverse'] = false;
$arguments97['iteration'] = NULL;
$arguments97['each'] = isset($renderingContext->getVariableProvider()['messages']) ? $renderingContext->getVariableProvider()['messages'] : NULL;
$arguments97['as'] = 'message';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
		';
return $output96;
};
$arguments94 = array();

$output93 .= '';

$output93 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
			<li><span class="text-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['htmlEscape'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['key'] = 'systemmessage.allgood';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext), ENT_QUOTES);
};
$arguments140 = array();
$arguments140['value'] = NULL;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '</span></li>
		';
return $output139;
};
$arguments137 = array();
$arguments137['if'] = NULL;

$output93 .= '';

$output93 .= '
	';
return $output93;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['messages']) ? $renderingContext->getVariableProvider()['messages'] : NULL;
};
$arguments89 = array();
$arguments89['subject'] = NULL;
$array88['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments89, isset($arguments89['subject']) ? function() use ($arguments89) { return $arguments89['subject']; } : $renderChildrenClosure90, $renderingContext);
$array88['1'] = ' > 0';

$expression92 = function($context) {return (($context["node0"]) > 0);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
						<li id="systeminformation_';
$array69 = array (
);
$output68 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array69), ENT_QUOTES);

$output68 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
$array70 = array (
);
$output68 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array70), ENT_QUOTES);

$output68 .= '" data-modulename="';
$array71 = array (
);
$output68 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array71), ENT_QUOTES);

$output68 .= '">
							<span class="text-';
$array72 = array (
);
$output68 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array72), ENT_QUOTES);

$output68 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array75);
};
$arguments73 = array();
$arguments73['value'] = NULL;

$output68 .= $renderChildrenClosure74();

$output68 .= '</span>
						</li>
					';
return $output68;
};
$arguments66 = array();

$output65 .= '';

$output65 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
						<li>
							<span class="text-';
$array79 = array (
);
$output78 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array79), ENT_QUOTES);

$output78 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$array82 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array82);
};
$arguments80 = array();
$arguments80['value'] = NULL;

$output78 .= $renderChildrenClosure81();

$output78 .= '</span>
						</li>
					';
return $output78;
};
$arguments76 = array();
$arguments76['if'] = NULL;

$output65 .= '';

$output65 .= '
				';
return $output65;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array63);

$expression64 = function($context) {return ($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
						<li id="systeminformation_';
$array50 = array (
);
$output49 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array50), ENT_QUOTES);

$output49 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
$array51 = array (
);
$output49 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array51), ENT_QUOTES);

$output49 .= '" data-modulename="';
$array52 = array (
);
$output49 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array52), ENT_QUOTES);

$output49 .= '">
							<span class="text-';
$array53 = array (
);
$output49 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array53), ENT_QUOTES);

$output49 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array56);
};
$arguments54 = array();
$arguments54['value'] = NULL;

$output49 .= $renderChildrenClosure55();

$output49 .= '</span>
						</li>
					';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
						<li>
							<span class="text-';
$array58 = array (
);
$output57 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array58), ENT_QUOTES);

$output57 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$array61 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array61);
};
$arguments59 = array();
$arguments59['value'] = NULL;

$output57 .= $renderChildrenClosure60();

$output57 .= '</span>
						</li>
					';
return $output57;
};

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
			';
return $output46;
};
$arguments43 = array();
$arguments43['each'] = NULL;
$arguments43['as'] = NULL;
$arguments43['key'] = NULL;
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$arguments43['each'] = isset($renderingContext->getVariableProvider()['messages']) ? $renderingContext->getVariableProvider()['messages'] : NULL;
$arguments43['as'] = 'message';

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
		';
return $output42;
};
$arguments40['__elseClosures'][] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
			<li><span class="text-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['htmlEscape'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['key'] = 'systemmessage.allgood';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext), ENT_QUOTES);
};
$arguments84 = array();
$arguments84['value'] = NULL;

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '</span></li>
		';
return $output83;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
</ul>
';

return $output0;
}


}
#2957727981    24122     