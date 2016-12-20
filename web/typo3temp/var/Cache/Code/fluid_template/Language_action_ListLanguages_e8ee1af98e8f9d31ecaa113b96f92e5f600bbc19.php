<?php

class Language_action_ListLanguages_e8ee1af98e8f9d31ecaa113b96f92e5f600bbc19 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>
		';
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
$arguments1['key'] = 'header.languages';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '
	</h1>
	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['name'] = NULL;
$arguments3['value'] = NULL;
$arguments3['property'] = NULL;
$arguments3['autofocus'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['maxlength'] = NULL;
$arguments3['readonly'] = NULL;
$arguments3['size'] = NULL;
$arguments3['placeholder'] = NULL;
$arguments3['pattern'] = NULL;
$arguments3['errorClass'] = 'f3-form-error';
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['required'] = false;
$arguments3['type'] = 'text';
$arguments3['name'] = 'typo3-language-searchfield';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['key'] = 'table.search';
$arguments3['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);
$arguments3['id'] = 'typo3-language-searchfield';
$array7 = array (
);$arguments3['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array7);
$arguments3['class'] = 'form-control t3js-language-searchfield';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
		</div>
	</form>
	<br />
	<table id="typo3-language-list" class="table table-striped table-hover t3-datatable">
		<thead>
		<tr>
			<th title="';
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
$arguments8['key'] = 'table.ad.title';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext), ENT_QUOTES);

$output0 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['key'] = 'table.ad';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext), ENT_QUOTES);

$output0 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['key'] = 'table.language';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext), ENT_QUOTES);

$output0 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['key'] = 'table.locale';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext), ENT_QUOTES);

$output0 .= '
			</th>
			<th>
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
$arguments16['key'] = 'table.date';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext), ENT_QUOTES);

$output0 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['key'] = 'table.actions';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext), ENT_QUOTES);

$output0 .= '
			</th>
		</tr>
		</thead>
		<tbody>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
			<tr id="language-';
$array24 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array24), ENT_QUOTES);

$output23 .= '" data-locale="';
$array25 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array25), ENT_QUOTES);

$output23 .= '"
				class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('language.selected', $array29);

$expression30 = function($context) {return ($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = 'enabled';
$arguments26['else'] = 'disabled';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array34);

$expression35 = function($context) {return ($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['then'] = 'even';
$arguments31['else'] = 'odd';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output23 .= '"
				role="row">
				<td>
					<a class="btn btn-default deactivateLanguageLink" data-action="deactivateLanguage"
					   data-locale="';
$array36 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array36), ENT_QUOTES);

$output23 .= '" data-language="';
$array37 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array37), ENT_QUOTES);

$output23 .= '"
					   data-selected="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('language.selected', $array41);

$expression42 = function($context) {return ($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['then'] = 'true';
$arguments38['else'] = 'false';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output23 .= '"><span
						title="Deactivate" class="t3-icon fa fa-minus-square"> </span></a>
					<a class="btn btn-default activateLanguageLink" data-action="activateLanguage"
					   data-locale="';
$array43 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array43), ENT_QUOTES);

$output23 .= '" data-language="';
$array44 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array44), ENT_QUOTES);

$output23 .= '"
					   data-selected="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('language.selected', $array48);

$expression49 = function($context) {return ($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['then'] = 'true';
$arguments45['else'] = 'false';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output23 .= '"><span
						title="Activate" class="t3-icon fa fa-plus-circle"> </span></a>
				</td>
				<td class="sorting_1">';
$array50 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array50), ENT_QUOTES);

$output23 .= '</td>
				<td>';
$array51 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array51), ENT_QUOTES);

$output23 .= '</td>
				<td class="lastUpdate">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['date'] = NULL;
$arguments52['format'] = '';
$arguments52['base'] = NULL;
$array54 = array (
);$arguments52['date'] = $renderingContext->getVariableProvider()->getByPath('language.lastUpdate', $array54);
$arguments52['format'] = 'Y-m-d H:i';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext), ENT_QUOTES);

$output23 .= '
				</td>
				<td class="actions">
					<a class="btn btn-default updateLanguageLink" data-action="updateLanguage"
					   data-locale="';
$array55 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array55), ENT_QUOTES);

$output23 .= '" data-language="';
$array56 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array56), ENT_QUOTES);

$output23 .= '" data-selected="true"><span
						title="Download" class="t3-icon fa fa-download"> </span></a>

					<div class="progressBar">
						<div class="progress">
							<div class="progress-text"></div>
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
								 aria-valuemax="100" style="width: 0;"></div>
						</div>
					</div>
				</td>
			</tr>
		';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$arguments20['each'] = isset($renderingContext->getVariableProvider()['languages']) ? $renderingContext->getVariableProvider()['languages'] : NULL;
$arguments20['as'] = 'language';
$arguments20['iteration'] = 'iterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
		</tbody>
	</table>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output57 = '';
// Rendering TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode node
$string58 = '{namespace core=TYPO3\CMS\Core\ViewHelpers}';
$array59 = array (
  0 => '{namespace core=TYPO3\\CMS\\Core\\ViewHelpers}',
  1 => 'core',
  2 => 'TYPO3\\CMS\\Core\\ViewHelpers',
);

$output57 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\Expression\LegacyNamespaceExpressionNode::evaluateExpression($renderingContext, $string58, $array59);

$output57 .= '
<?xml version="1.0" encoding="UTF-8" ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
      xmlns:f="http://xsd.helmut-hummel.de/ns/TYPO3/CMS/Fluid/ViewHelpers">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['name'] = NULL;
$arguments60['name'] = 'Default';

$output57 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext), ENT_QUOTES);

$output57 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['key'] = 'header.languages';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext), ENT_QUOTES);

$output64 .= '
	</h1>
	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['name'] = NULL;
$arguments67['value'] = NULL;
$arguments67['property'] = NULL;
$arguments67['autofocus'] = NULL;
$arguments67['disabled'] = NULL;
$arguments67['maxlength'] = NULL;
$arguments67['readonly'] = NULL;
$arguments67['size'] = NULL;
$arguments67['placeholder'] = NULL;
$arguments67['pattern'] = NULL;
$arguments67['errorClass'] = 'f3-form-error';
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['required'] = false;
$arguments67['type'] = 'text';
$arguments67['name'] = 'typo3-language-searchfield';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['htmlEscape'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['key'] = 'table.search';
$arguments67['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
$arguments67['id'] = 'typo3-language-searchfield';
$array71 = array (
);$arguments67['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array71);
$arguments67['class'] = 'form-control t3js-language-searchfield';

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output64 .= '
		</div>
	</form>
	<br />
	<table id="typo3-language-list" class="table table-striped table-hover t3-datatable">
		<thead>
		<tr>
			<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['htmlEscape'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['key'] = 'table.ad.title';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext), ENT_QUOTES);

$output64 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['htmlEscape'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['key'] = 'table.ad';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext), ENT_QUOTES);

$output64 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['htmlEscape'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['key'] = 'table.language';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext), ENT_QUOTES);

$output64 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['htmlEscape'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['key'] = 'table.locale';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext), ENT_QUOTES);

$output64 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['key'] = 'table.date';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext), ENT_QUOTES);

$output64 .= '
			</th>
			<th>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['key'] = 'table.actions';

$output64 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext), ENT_QUOTES);

$output64 .= '
			</th>
		</tr>
		</thead>
		<tbody>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
			<tr id="language-';
$array88 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array88), ENT_QUOTES);

$output87 .= '" data-locale="';
$array89 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array89), ENT_QUOTES);

$output87 .= '"
				class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('language.selected', $array93);

$expression94 = function($context) {return ($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['then'] = 'enabled';
$arguments90['else'] = 'disabled';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output87 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array98);

$expression99 = function($context) {return ($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['then'] = 'even';
$arguments95['else'] = 'odd';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output87 .= '"
				role="row">
				<td>
					<a class="btn btn-default deactivateLanguageLink" data-action="deactivateLanguage"
					   data-locale="';
$array100 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array100), ENT_QUOTES);

$output87 .= '" data-language="';
$array101 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array101), ENT_QUOTES);

$output87 .= '"
					   data-selected="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('language.selected', $array105);

$expression106 = function($context) {return ($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['then'] = 'true';
$arguments102['else'] = 'false';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output87 .= '"><span
						title="Deactivate" class="t3-icon fa fa-minus-square"> </span></a>
					<a class="btn btn-default activateLanguageLink" data-action="activateLanguage"
					   data-locale="';
$array107 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array107), ENT_QUOTES);

$output87 .= '" data-language="';
$array108 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array108), ENT_QUOTES);

$output87 .= '"
					   data-selected="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('language.selected', $array112);

$expression113 = function($context) {return ($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['then'] = 'true';
$arguments109['else'] = 'false';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output87 .= '"><span
						title="Activate" class="t3-icon fa fa-plus-circle"> </span></a>
				</td>
				<td class="sorting_1">';
$array114 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array114), ENT_QUOTES);

$output87 .= '</td>
				<td>';
$array115 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array115), ENT_QUOTES);

$output87 .= '</td>
				<td class="lastUpdate">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['date'] = NULL;
$arguments116['format'] = '';
$arguments116['base'] = NULL;
$array118 = array (
);$arguments116['date'] = $renderingContext->getVariableProvider()->getByPath('language.lastUpdate', $array118);
$arguments116['format'] = 'Y-m-d H:i';

$output87 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext), ENT_QUOTES);

$output87 .= '
				</td>
				<td class="actions">
					<a class="btn btn-default updateLanguageLink" data-action="updateLanguage"
					   data-locale="';
$array119 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array119), ENT_QUOTES);

$output87 .= '" data-language="';
$array120 = array (
);
$output87 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array120), ENT_QUOTES);

$output87 .= '" data-selected="true"><span
						title="Download" class="t3-icon fa fa-download"> </span></a>

					<div class="progressBar">
						<div class="progress">
							<div class="progress-text"></div>
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
								 aria-valuemax="100" style="width: 0;"></div>
						</div>
					</div>
				</td>
			</tr>
		';
return $output87;
};
$arguments84 = array();
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$arguments84['each'] = isset($renderingContext->getVariableProvider()['languages']) ? $renderingContext->getVariableProvider()['languages'] : NULL;
$arguments84['as'] = 'language';
$arguments84['iteration'] = 'iterator';

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output64 .= '
		</tbody>
	</table>
';
return $output64;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['name'] = 'content';

$output57 .= '';

$output57 .= '

</html>
';

return $output57;
}


}
#2957790309    31931     