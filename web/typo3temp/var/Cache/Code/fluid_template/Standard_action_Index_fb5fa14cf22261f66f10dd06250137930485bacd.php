<?php

class Standard_action_Index_fb5fa14cf22261f66f10dd06250137930485bacd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<span class="systeminformationtoolbaritem-container t3js-systeminformation-container" data-count="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['count']) ? $renderingContext->getVariableProvider()['count'] : NULL, ENT_QUOTES);

$output0 .= '" data-severityclass="';

$output0 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['severityBadgeClass']) ? $renderingContext->getVariableProvider()['severityBadgeClass'] : NULL, ENT_QUOTES);

$output0 .= '"></span>

<h3 class="dropdown-headline">
	';
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

$output0 .= '
</h3>
<p class="dropdown-text typo3-module-menu-item submodule mod-system_extinstall" data-modulename="system_extinstall">
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

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
</p>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
	<hr>
	<div class="dropdown-table">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
			<div class="dropdown-table-row">
				<div class="dropdown-table-column dropdown-table-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.icon', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;

$output20 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output20 .= '</div>
				<div class="dropdown-table-column dropdown-table-title">';
$array24 = array (
);
$output20 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.title', $array24), ENT_QUOTES);

$output20 .= '</div>
				<div class="dropdown-table-column dropdown-table-value ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('info.status', $array28);

$expression29 = function($context) {return ($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$output30 = '';

$output30 .= 'text-';
$array31 = array (
);
$output30 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.status', $array31), ENT_QUOTES);
$arguments25['then'] = $output30;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output20 .= '">';
$array32 = array (
);
$output20 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.value', $array32), ENT_QUOTES);

$output20 .= '</div>
			</div>
		';
return $output20;
};
$arguments17 = array();
$arguments17['each'] = NULL;
$arguments17['as'] = NULL;
$arguments17['key'] = NULL;
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$arguments17['each'] = isset($renderingContext->getVariableProvider()['systemInformation']) ? $renderingContext->getVariableProvider()['systemInformation'] : NULL;
$arguments17['as'] = 'info';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
	</div>
';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = isset($renderingContext->getVariableProvider()['systemInformation']) ? $renderingContext->getVariableProvider()['systemInformation'] : NULL;

$expression15 = function($context) {return ($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '

<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
					<p id="systeminformation_';
$array116 = array (
);
$output115 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array116), ENT_QUOTES);

$output115 .= '" class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array117 = array (
);
$output115 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array117), ENT_QUOTES);

$output115 .= '" data-modulename="';
$array118 = array (
);
$output115 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array118), ENT_QUOTES);

$output115 .= '">
						<span class="text-';
$array119 = array (
);
$output115 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array119), ENT_QUOTES);

$output115 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array122);
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output115 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output115 .= '</span>
					</p>
				';
return $output115;
};
$arguments113 = array();

$output112 .= '';

$output112 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
					<p class="dropdown-text text-';
$array126 = array (
);
$output125 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array126), ENT_QUOTES);

$output125 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;

$output125 .= isset($arguments127['value']) ? $arguments127['value'] : $renderChildrenClosure128();

$output125 .= '
					</p>
				';
return $output125;
};
$arguments123 = array();
$arguments123['if'] = NULL;

$output112 .= '';

$output112 .= '
			';
return $output112;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array110);

$expression111 = function($context) {return ($context["node0"]);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
					<p id="systeminformation_';
$array97 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array97), ENT_QUOTES);

$output96 .= '" class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array98 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array98), ENT_QUOTES);

$output96 .= '" data-modulename="';
$array99 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array99), ENT_QUOTES);

$output96 .= '">
						<span class="text-';
$array100 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array100), ENT_QUOTES);

$output96 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output96 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output96 .= '</span>
					</p>
				';
return $output96;
};
$arguments94['__elseClosures'][] = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
					<p class="dropdown-text text-';
$array105 = array (
);
$output104 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array105), ENT_QUOTES);

$output104 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output104 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output104 .= '
					</p>
				';
return $output104;
};

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
		';
return $output93;
};
$arguments90 = array();
$arguments90['each'] = NULL;
$arguments90['as'] = NULL;
$arguments90['key'] = NULL;
$arguments90['reverse'] = false;
$arguments90['iteration'] = NULL;
$arguments90['each'] = isset($renderingContext->getVariableProvider()['messages']) ? $renderingContext->getVariableProvider()['messages'] : NULL;
$arguments90['as'] = 'message';

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
	';
return $output89;
};
$arguments87 = array();

$output86 .= '';

$output86 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
		<p class="dropdown-text text-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['key'] = 'systemmessage.allgood';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext), ENT_QUOTES);
};
$arguments133 = array();
$arguments133['value'] = NULL;

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '</p>
	';
return $output132;
};
$arguments130 = array();
$arguments130['if'] = NULL;

$output86 .= '';

$output86 .= '
';
return $output86;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return isset($renderingContext->getVariableProvider()['messages']) ? $renderingContext->getVariableProvider()['messages'] : NULL;
};
$arguments82 = array();
$arguments82['subject'] = NULL;
$renderChildrenClosure83 = $arguments82['subject'] ? function() use ($arguments82) { return $arguments82['subject']; } : $renderChildrenClosure83;$array81['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
$array81['1'] = ' > 0';

$expression85 = function($context) {return (($context["node0"]) > 0);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
					<p id="systeminformation_';
$array62 = array (
);
$output61 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array62), ENT_QUOTES);

$output61 .= '" class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array63 = array (
);
$output61 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array63), ENT_QUOTES);

$output61 .= '" data-modulename="';
$array64 = array (
);
$output61 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array64), ENT_QUOTES);

$output61 .= '">
						<span class="text-';
$array65 = array (
);
$output61 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array65), ENT_QUOTES);

$output61 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$array68 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array68);
};
$arguments66 = array();
$arguments66['value'] = NULL;

$output61 .= isset($arguments66['value']) ? $arguments66['value'] : $renderChildrenClosure67();

$output61 .= '</span>
					</p>
				';
return $output61;
};
$arguments59 = array();

$output58 .= '';

$output58 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
					<p class="dropdown-text text-';
$array72 = array (
);
$output71 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array72), ENT_QUOTES);

$output71 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array75);
};
$arguments73 = array();
$arguments73['value'] = NULL;

$output71 .= isset($arguments73['value']) ? $arguments73['value'] : $renderChildrenClosure74();

$output71 .= '
					</p>
				';
return $output71;
};
$arguments69 = array();
$arguments69['if'] = NULL;

$output58 .= '';

$output58 .= '
			';
return $output58;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array56);

$expression57 = function($context) {return ($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
					<p id="systeminformation_';
$array43 = array (
);
$output42 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array43), ENT_QUOTES);

$output42 .= '" class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array44 = array (
);
$output42 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array44), ENT_QUOTES);

$output42 .= '" data-modulename="';
$array45 = array (
);
$output42 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array45), ENT_QUOTES);

$output42 .= '">
						<span class="text-';
$array46 = array (
);
$output42 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array46), ENT_QUOTES);

$output42 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;

$output42 .= isset($arguments47['value']) ? $arguments47['value'] : $renderChildrenClosure48();

$output42 .= '</span>
					</p>
				';
return $output42;
};
$arguments40['__elseClosures'][] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
					<p class="dropdown-text text-';
$array51 = array (
);
$output50 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array51), ENT_QUOTES);

$output50 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output50 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output50 .= '
					</p>
				';
return $output50;
};

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
		';
return $output39;
};
$arguments36 = array();
$arguments36['each'] = NULL;
$arguments36['as'] = NULL;
$arguments36['key'] = NULL;
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$arguments36['each'] = isset($renderingContext->getVariableProvider()['messages']) ? $renderingContext->getVariableProvider()['messages'] : NULL;
$arguments36['as'] = 'message';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
	';
return $output35;
};
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
		<p class="dropdown-text text-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['key'] = 'systemmessage.allgood';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext), ENT_QUOTES);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '</p>
	';
return $output76;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#2961266931    24181     