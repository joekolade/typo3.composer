<?php

class Standard_action_Index_9bdd02bdb20de89ab9817e6432b3aa3aa8d28f18 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Page
 */
public function section_fb06270f7c212baabc8749ffc36e49dc8f321548(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <span class="text-nowrap" title="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.titleAttribute', $array1), ENT_QUOTES);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['table'] = NULL;
$arguments2['row'] = NULL;
$arguments2['size'] = 'small';
$arguments2['alternativeMarkupIdentifier'] = NULL;
$arguments2['table'] = 'pages';
$array4 = array (
);$arguments2['row'] = $renderingContext->getVariableProvider()->getByPath('page.record', $array4);

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$array5 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.title', $array5), ENT_QUOTES);

$output0 .= '<br />
    </span>
';

return $output0;
}
/**
 * section FormLine
 */
public function section_a479c5fabf5531581f0d03ced8ac36a55f3a5f1a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
    <div class="form-section" id="form-line-';
$array7 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array7), ENT_QUOTES);

$output6 .= '">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="page_new_';
$array8 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array8), ENT_QUOTES);

$output6 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$output11 = '';
$array12 = array (
);
$output11 .= $renderingContext->getVariableProvider()->getByPath('line.llprefix', $array12);

$output11 .= 'wiz_newPages_page';
$arguments9['key'] = $output11;

$output6 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext), ENT_QUOTES);

$output6 .= ' ';
$array13 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.label', $array13), ENT_QUOTES);

$output6 .= ':
                </label>
                <div class="form-control-wrap">
                    <input class="form-control" type="text" id="page_new_';
$array14 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array14), ENT_QUOTES);

$output6 .= '" name="data[pages][NEW';
$array15 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array15), ENT_QUOTES);

$output6 .= '][title]" />
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['key'] = NULL;
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['key'] = 'LLL:EXT:lang/locallang_general.xlf:LGL.type';

$output6 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext), ENT_QUOTES);

$output6 .= '
                </label>
                <div class="form-control-wrap">
                    <div class="input-group">
                        <div id="page_new_icon_';
$array18 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array18), ENT_QUOTES);

$output6 .= '" class="input-group-addon input-group-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['table'] = NULL;
$arguments19['row'] = NULL;
$arguments19['size'] = 'small';
$arguments19['alternativeMarkupIdentifier'] = NULL;
$arguments19['table'] = 'pages';
// Rendering Array
$array21 = array();
$array21['id'] = 0;
$arguments19['row'] = $array21;

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '
                        </div>
                        <select class="form-control form-control-adapt t3js-wizardcrpages-select-doktype" name="data[pages][NEW';
$array22 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array22), ENT_QUOTES);

$output6 .= '][doktype]" data-target="#page_new_icon_';
$array23 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array23), ENT_QUOTES);

$output6 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                                <optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$array30 = array (
);$arguments28['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('group', $array30), ENT_QUOTES);

$output27 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext), ENT_QUOTES);

$output27 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                        <option data-icon=\'';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['identifier'] = NULL;
$arguments35['size'] = 'small';
$arguments35['overlay'] = NULL;
$arguments35['state'] = 'default';
$arguments35['alternativeMarkupIdentifier'] = NULL;
$array37 = array (
);$arguments35['identifier'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.2', $array37), ENT_QUOTES);

$output34 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '\' value="';
$array38 = array (
);
$output34 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.1', $array38), ENT_QUOTES);

$output34 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$array41 = array (
);$arguments39['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.0', $array41), ENT_QUOTES);

$output34 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext), ENT_QUOTES);

$output34 .= '</option>
                                    ';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('typegroup', $array33);
$arguments31['as'] = 'type';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output27 .= '
                                </optgroup>
                            ';
return $output27;
};
$arguments24 = array();
$arguments24['each'] = NULL;
$arguments24['as'] = NULL;
$arguments24['key'] = NULL;
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$array26 = array (
);$arguments24['each'] = $renderingContext->getVariableProvider()->getByPath('line.typeselect', $array26);
$arguments24['as'] = 'typegroup';
$arguments24['key'] = 'group';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output6 .= '
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
';

return $output6;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output42 = '';
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string43 = '{namespace core=TYPO3\CMS\Core\ViewHelpers}';
$array44 = array (
  0 => '{namespace core=TYPO3\\CMS\\Core\\ViewHelpers}',
  1 => 'core',
  2 => 'TYPO3\\CMS\\Core\\ViewHelpers',
);

$output42 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string43, $array44);

$output42 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['pageTitle'] = '';
$arguments45['loadExtJs'] = false;
$arguments45['loadExtJsTheme'] = true;
$arguments45['enableExtJsDebug'] = false;
$arguments45['loadJQuery'] = false;
$arguments45['includeCssFiles'] = NULL;
$arguments45['includeJsFiles'] = NULL;
$arguments45['addJsInlineLabels'] = NULL;
$arguments45['includeRequireJsModules'] = NULL;
$arguments45['jQueryNamespace'] = NULL;
$arguments45['loadJQuery'] = 'true';
// Rendering Array
$array47 = array();
$array47['0'] = 'TYPO3/CMS/WizardCrpages/WizardCreatePages';
$arguments45['includeRequireJsModules'] = $array47;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext), ENT_QUOTES);

$output42 .= '
<h1>';
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
$output50 = '';

$output50 .= isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;

$output50 .= 'wiz_crMany';
$arguments48['key'] = $output50;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext), ENT_QUOTES);

$output42 .= '</h1>
<div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
            <div class="form-group">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$output111 = '';

$output111 .= isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;

$output111 .= 'wiz_newPages_currentMenu';
$arguments109['key'] = $output111;

$output108 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext), ENT_QUOTES);

$output108 .= '</h4>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['section'] = NULL;
$arguments117['partial'] = NULL;
$arguments117['delegate'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['optional'] = false;
$arguments117['default'] = NULL;
$arguments117['contentAs'] = NULL;
$arguments117['section'] = 'Page';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array120);
$arguments117['arguments'] = $array119;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
                ';
return $output116;
};
$arguments113 = array();
$arguments113['each'] = NULL;
$arguments113['as'] = NULL;
$arguments113['key'] = NULL;
$arguments113['reverse'] = false;
$arguments113['iteration'] = NULL;
$array115 = array (
);$arguments113['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array115);
$arguments113['as'] = 'page';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output108 .= '
            </div>
        ';
return $output108;
};
$arguments106 = array();

$output105 .= '';

$output105 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
            <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$output126 = '';

$output126 .= isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;

$output126 .= 'wiz_newPages';
$arguments124['key'] = $output126;

$output123 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext), ENT_QUOTES);

$output123 .= ':</h4>
            <div class="form-group t3js-wizardcrpages-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['section'] = 'FormLine';
// Rendering Array
$array130 = array();
// Rendering Array
$array131 = array();
$array131['index'] = 0;
$array131['label'] = 1;
$array131['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array131['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array130['line'] = $array131;
$arguments128['arguments'] = $array130;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['section'] = 'FormLine';
// Rendering Array
$array136 = array();
// Rendering Array
$array137 = array();
$array137['index'] = 1;
$array137['label'] = 2;
$array137['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array137['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array136['line'] = $array137;
$arguments134['arguments'] = $array136;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['section'] = NULL;
$arguments140['partial'] = NULL;
$arguments140['delegate'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['optional'] = false;
$arguments140['default'] = NULL;
$arguments140['contentAs'] = NULL;
$arguments140['section'] = 'FormLine';
// Rendering Array
$array142 = array();
// Rendering Array
$array143 = array();
$array143['index'] = 2;
$array143['label'] = 3;
$array143['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array143['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array142['line'] = $array143;
$arguments140['arguments'] = $array142;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['section'] = NULL;
$arguments146['partial'] = NULL;
$arguments146['delegate'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['optional'] = false;
$arguments146['default'] = NULL;
$arguments146['contentAs'] = NULL;
$arguments146['section'] = 'FormLine';
// Rendering Array
$array148 = array();
// Rendering Array
$array149 = array();
$array149['index'] = 3;
$array149['label'] = 4;
$array149['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array149['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array148['line'] = $array149;
$arguments146['arguments'] = $array148;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['section'] = NULL;
$arguments152['partial'] = NULL;
$arguments152['delegate'] = NULL;
$arguments152['arguments'] = array (
);
$arguments152['optional'] = false;
$arguments152['default'] = NULL;
$arguments152['contentAs'] = NULL;
$arguments152['section'] = 'FormLine';
// Rendering Array
$array154 = array();
// Rendering Array
$array155 = array();
$array155['index'] = 4;
$array155['label'] = 5;
$array155['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array155['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array154['line'] = $array155;
$arguments152['arguments'] = $array154;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output123 .= '
            </div>
        ';
return $output123;
};
$arguments121 = array();
$arguments121['if'] = NULL;

$output105 .= '';

$output105 .= '
    ';
return $output105;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('pages', $array103);

$expression104 = function($context) {return ($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
            <div class="form-group">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$output57 = '';

$output57 .= isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;

$output57 .= 'wiz_newPages_currentMenu';
$arguments55['key'] = $output57;

$output54 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext), ENT_QUOTES);

$output54 .= '</h4>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['section'] = NULL;
$arguments63['partial'] = NULL;
$arguments63['delegate'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$arguments63['default'] = NULL;
$arguments63['contentAs'] = NULL;
$arguments63['section'] = 'Page';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array66);
$arguments63['arguments'] = $array65;

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                ';
return $output62;
};
$arguments59 = array();
$arguments59['each'] = NULL;
$arguments59['as'] = NULL;
$arguments59['key'] = NULL;
$arguments59['reverse'] = false;
$arguments59['iteration'] = NULL;
$array61 = array (
);$arguments59['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array61);
$arguments59['as'] = 'page';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output54 .= '
            </div>
        ';
return $output54;
};
$arguments52['__elseClosures'][] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
            <h4>';
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
$output70 = '';

$output70 .= isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;

$output70 .= 'wiz_newPages';
$arguments68['key'] = $output70;

$output67 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext), ENT_QUOTES);

$output67 .= ':</h4>
            <div class="form-group t3js-wizardcrpages-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['section'] = 'FormLine';
// Rendering Array
$array74 = array();
// Rendering Array
$array75 = array();
$array75['index'] = 0;
$array75['label'] = 1;
$array75['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array75['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array74['line'] = $array75;
$arguments72['arguments'] = $array74;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['section'] = 'FormLine';
// Rendering Array
$array80 = array();
// Rendering Array
$array81 = array();
$array81['index'] = 1;
$array81['label'] = 2;
$array81['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array81['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array80['line'] = $array81;
$arguments78['arguments'] = $array80;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['section'] = 'FormLine';
// Rendering Array
$array86 = array();
// Rendering Array
$array87 = array();
$array87['index'] = 2;
$array87['label'] = 3;
$array87['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array87['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array86['line'] = $array87;
$arguments84['arguments'] = $array86;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['section'] = 'FormLine';
// Rendering Array
$array92 = array();
// Rendering Array
$array93 = array();
$array93['index'] = 3;
$array93['label'] = 4;
$array93['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array93['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array92['line'] = $array93;
$arguments90['arguments'] = $array92;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['section'] = 'FormLine';
// Rendering Array
$array98 = array();
// Rendering Array
$array99 = array();
$array99['index'] = 4;
$array99['label'] = 5;
$array99['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array99['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array98['line'] = $array99;
$arguments96['arguments'] = $array98;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output67 .= '
            </div>
        ';
return $output67;
};

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output42 .= '
    <div class="form-group">
        <input class="btn btn-default t3js-wizardcrpages-createnewfields" type="button" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['htmlEscape'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$output160 = '';

$output160 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL, ENT_QUOTES);

$output160 .= 'wiz_newPages_addMoreLines';
$arguments158['key'] = $output160;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext), ENT_QUOTES);

$output42 .= '" />
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label for="createInListEnd">
                <input type="checkbox" name="createInListEnd" id="createInListEnd" value="1" />
                ';
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
$output164 = '';

$output164 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL, ENT_QUOTES);

$output164 .= 'wiz_newPages_listEnd';
$arguments162['key'] = $output164;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext), ENT_QUOTES);

$output42 .= '
            </label>
        </div>
        <div class="checkbox">
            <label for="hidePages">
                <input type="checkbox" name="hidePages" id="hidePages" value="1" />
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['htmlEscape'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$output168 = '';

$output168 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL, ENT_QUOTES);

$output168 .= 'wiz_newPages_hidePages';
$arguments166['key'] = $output168;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext), ENT_QUOTES);

$output42 .= '
            </label>
        </div>
        <div class="checkbox">
            <label for="hidePagesInMenus">
                <input type="checkbox" name="hidePagesInMenus" id="hidePagesInMenus" value="1" />
                ';
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
$output172 = '';

$output172 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL, ENT_QUOTES);

$output172 .= 'wiz_newPages_hidePagesInMenus';
$arguments170['key'] = $output172;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext), ENT_QUOTES);

$output42 .= '
            </label>
        </div>
    </div>
    <div class="form-group">
        <input class="btn btn-default" type="submit" name="create" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$output176 = '';

$output176 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL, ENT_QUOTES);

$output176 .= 'wiz_newPages_lCreate';
$arguments174['key'] = $output176;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext), ENT_QUOTES);

$output42 .= '" />
        <input class="btn btn-default" type="reset" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$output180 = '';

$output180 .= htmlspecialchars(isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL, ENT_QUOTES);

$output180 .= 'wiz_newPages_lReset';
$arguments178['key'] = $output180;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext), ENT_QUOTES);

$output42 .= '" />
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
        <span class="btn btn-default btn-sm">';

$output184 .= isset($renderingContext->getVariableProvider()['cshItem']) ? $renderingContext->getVariableProvider()['cshItem'] : NULL;

$output184 .= '</span>
    ';
return $output184;
};
$arguments182 = array();
$arguments182['value'] = NULL;

$output42 .= isset($arguments182['value']) ? $arguments182['value'] : $renderChildrenClosure183();

$output42 .= '
</div>

<script type="text/javascript">
    var tpl = `';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['section'] = NULL;
$arguments186['partial'] = NULL;
$arguments186['delegate'] = NULL;
$arguments186['arguments'] = array (
);
$arguments186['optional'] = false;
$arguments186['default'] = NULL;
$arguments186['contentAs'] = NULL;
$arguments186['section'] = 'FormLine';
// Rendering Array
$array188 = array();
// Rendering Array
$array189 = array();
$array189['index'] = '[0]';
$array189['label'] = '[1]';
$array189['llprefix'] = isset($renderingContext->getVariableProvider()['LLPrefix']) ? $renderingContext->getVariableProvider()['LLPrefix'] : NULL;
$array189['typeselect'] = isset($renderingContext->getVariableProvider()['typeSelect']) ? $renderingContext->getVariableProvider()['typeSelect'] : NULL;
$array188['line'] = $array189;
$arguments186['arguments'] = $array188;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output42 .= '`, i, line, div, bg, label;
</script>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
    <span class="text-nowrap" title="';
$array195 = array (
);
$output194 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.titleAttribute', $array195), ENT_QUOTES);

$output194 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['table'] = NULL;
$arguments196['row'] = NULL;
$arguments196['size'] = 'small';
$arguments196['alternativeMarkupIdentifier'] = NULL;
$arguments196['table'] = 'pages';
$array198 = array (
);$arguments196['row'] = $renderingContext->getVariableProvider()->getByPath('page.record', $array198);

$output194 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);
$array199 = array (
);
$output194 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.title', $array199), ENT_QUOTES);

$output194 .= '<br />
    </span>
';
return $output194;
};
$arguments192 = array();
$arguments192['name'] = NULL;
$arguments192['name'] = 'Page';

$output42 .= '';

$output42 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
    <div class="form-section" id="form-line-';
$array203 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array203), ENT_QUOTES);

$output202 .= '">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="page_new_';
$array204 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array204), ENT_QUOTES);

$output202 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['key'] = NULL;
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['htmlEscape'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$output207 = '';
$array208 = array (
);
$output207 .= $renderingContext->getVariableProvider()->getByPath('line.llprefix', $array208);

$output207 .= 'wiz_newPages_page';
$arguments205['key'] = $output207;

$output202 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext), ENT_QUOTES);

$output202 .= ' ';
$array209 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.label', $array209), ENT_QUOTES);

$output202 .= ':
                </label>
                <div class="form-control-wrap">
                    <input class="form-control" type="text" id="page_new_';
$array210 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array210), ENT_QUOTES);

$output202 .= '" name="data[pages][NEW';
$array211 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array211), ENT_QUOTES);

$output202 .= '][title]" />
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label>
                    ';
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
$arguments212['key'] = 'LLL:EXT:lang/locallang_general.xlf:LGL.type';

$output202 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext), ENT_QUOTES);

$output202 .= '
                </label>
                <div class="form-control-wrap">
                    <div class="input-group">
                        <div id="page_new_icon_';
$array214 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array214), ENT_QUOTES);

$output202 .= '" class="input-group-addon input-group-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['table'] = NULL;
$arguments215['row'] = NULL;
$arguments215['size'] = 'small';
$arguments215['alternativeMarkupIdentifier'] = NULL;
$arguments215['table'] = 'pages';
// Rendering Array
$array217 = array();
$array217['id'] = 0;
$arguments215['row'] = $array217;

$output202 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output202 .= '
                        </div>
                        <select class="form-control form-control-adapt t3js-wizardcrpages-select-doktype" name="data[pages][NEW';
$array218 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array218), ENT_QUOTES);

$output202 .= '][doktype]" data-target="#page_new_icon_';
$array219 = array (
);
$output202 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array219), ENT_QUOTES);

$output202 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                <optgroup label="';
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
$array226 = array (
);$arguments224['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('group', $array226), ENT_QUOTES);

$output223 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext), ENT_QUOTES);

$output223 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                                        <option data-icon=\'';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['identifier'] = NULL;
$arguments231['size'] = 'small';
$arguments231['overlay'] = NULL;
$arguments231['state'] = 'default';
$arguments231['alternativeMarkupIdentifier'] = NULL;
$array233 = array (
);$arguments231['identifier'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.2', $array233), ENT_QUOTES);

$output230 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '\' value="';
$array234 = array (
);
$output230 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.1', $array234), ENT_QUOTES);

$output230 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$array237 = array (
);$arguments235['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.0', $array237), ENT_QUOTES);

$output230 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext), ENT_QUOTES);

$output230 .= '</option>
                                    ';
return $output230;
};
$arguments227 = array();
$arguments227['each'] = NULL;
$arguments227['as'] = NULL;
$arguments227['key'] = NULL;
$arguments227['reverse'] = false;
$arguments227['iteration'] = NULL;
$array229 = array (
);$arguments227['each'] = $renderingContext->getVariableProvider()->getByPath('typegroup', $array229);
$arguments227['as'] = 'type';

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output223 .= '
                                </optgroup>
                            ';
return $output223;
};
$arguments220 = array();
$arguments220['each'] = NULL;
$arguments220['as'] = NULL;
$arguments220['key'] = NULL;
$arguments220['reverse'] = false;
$arguments220['iteration'] = NULL;
$array222 = array (
);$arguments220['each'] = $renderingContext->getVariableProvider()->getByPath('line.typeselect', $array222);
$arguments220['as'] = 'typegroup';
$arguments220['key'] = 'group';

$output202 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output202 .= '
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
';
return $output202;
};
$arguments200 = array();
$arguments200['name'] = NULL;
$arguments200['name'] = 'FormLine';

$output42 .= '';

$output42 .= '
';

return $output42;
}


}
#2957790334    50468     