<?php

class Standard_action_Index_888c13e327d7b7a890ee1fc485c00c4ecf0855e6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<ul class="nav nav-modules" data-typo3-role="typo3-module-menu" id="typo3-menu">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
		<li class="typo3-module-menu-group expanded" id="';
$array5 = array (
);
$output4 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array5), ENT_QUOTES);

$output4 .= '" data-modulename="';
$array6 = array (
);
$output4 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array6), ENT_QUOTES);

$output4 .= '" data-navigationcomponentid="';
$array7 = array (
);
$output4 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.navigationComponentId', $array7), ENT_QUOTES);

$output4 .= '" data-navigationframescript="';
$array8 = array (
);
$output4 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.navigationFrameScript', $array8), ENT_QUOTES);

$output4 .= '" data-navigationframescriptparameters="';
$array9 = array (
);
$output4 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.navigationFrameScriptParameters', $array9), ENT_QUOTES);

$output4 .= '">
			<div class="typo3-module-menu-group-header">
				<span class="typo3-app-icon typo3-module-menu-group-icon">
					<span>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('mainModule.icon', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output22 .= $renderChildrenClosure24();

$output22 .= '
							';
return $output22;
};
$arguments20 = array();

$output19 .= '';

$output19 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return '
								<span><i class="fa fa-bars"></i></span>
							';
};
$arguments26 = array();
$arguments26['if'] = NULL;

$output19 .= '';

$output19 .= '
						';
return $output19;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('mainModule.icon', $array17);

$expression18 = function($context) {return ($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('mainModule.icon', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output12 .= $renderChildrenClosure14();

$output12 .= '
							';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
								<span><i class="fa fa-bars"></i></span>
							';
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output4 .= '
					</span>
				</span>
				<span class="typo3-module-menu-group-title">
					';
$array28 = array (
);
$output4 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.title', $array28), ENT_QUOTES);

$output4 .= ' <span class="caret"></span>
				</span>
			</div>
			<ul class="typo3-module-menu-group-container">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
					<li id="';
$array33 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.name', $array33), ENT_QUOTES);

$output32 .= '" class="typo3-module-menu-item t3js-mainmodule" data-modulename="';
$array34 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('mainModule.name', $array34), ENT_QUOTES);

$output32 .= '" data-navigationcomponentid="';
$array35 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.navigationComponentId', $array35), ENT_QUOTES);

$output32 .= '" data-navigationframescript="';
$array36 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.navigationFrameScript', $array36), ENT_QUOTES);

$output32 .= '" data-navigationframescriptparameters="';
$array37 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.navigationFrameScriptParameters', $array37), ENT_QUOTES);

$output32 .= '">
						<a title="';
$array38 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.description', $array38), ENT_QUOTES);

$output32 .= '" href="';
$array39 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.link', $array39), ENT_QUOTES);

$output32 .= '" class="typo3-module-menu-item-link">
							<span class="typo3-app-icon typo3-module-menu-item-icon">
								<span>
									<span>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('subModule.icon', $array42);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output32 .= $renderChildrenClosure41();

$output32 .= '
									</span>
								</span>
							</span>
							<span class="typo3-module-menu-item-title">
								';
$array43 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('subModule.title', $array43), ENT_QUOTES);

$output32 .= '
							</span>
						</a>
					</li>
				';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('mainModule.children', $array31);
$arguments29['as'] = 'subModule';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output4 .= '
			</ul>
		</li>
	';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$arguments1['each'] = isset($renderingContext->getVariableProvider()['modules']) ? $renderingContext->getVariableProvider()['modules'] : NULL;
$arguments1['as'] = 'mainModule';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</ul>
';

return $output0;
}


}
#2957727981    8683      