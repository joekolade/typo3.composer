<?php

class Language_action_ListTranslations_52c77f3ec0b4679ef76fc2d64ef26fbd37b3f643 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
$arguments1['key'] = 'header.translations';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '</h1>
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
	<table id="typo3-translation-list" class="table table-striped table-hover t3-datatable" data-language-count="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['subject'] = NULL;
$array10 = array (
);$arguments8['subject'] = $renderingContext->getVariableProvider()->getByPath('languages', $array10);
$renderChildrenClosure9 = $arguments8['subject'] ? function() use ($arguments8) { return $arguments8['subject']; } : $renderChildrenClosure9;
$output0 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '">
		<thead>
			<tr>
				<th><!-- Icon --></th>
				<th>';
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
$arguments11['key'] = 'table.extension';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext), ENT_QUOTES);

$output0 .= '</th>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
					<th title="';
$array17 = array (
);
$output16 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array17), ENT_QUOTES);

$output16 .= '">';
$array18 = array (
);
$output16 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array18), ENT_QUOTES);

$output16 .= '</th>
				';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$arguments13['each'] = isset($renderingContext->getVariableProvider()['languages']) ? $renderingContext->getVariableProvider()['languages'] : NULL;
$arguments13['as'] = 'language';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
			</tr>
		</thead>
		<tbody>
			<!-- Will be filled by JS -->
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
$output19 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['name'] = NULL;
$arguments20['name'] = 'Default';

$output19 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext), ENT_QUOTES);

$output19 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
	<h1>';
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
$arguments25['key'] = 'header.translations';

$output24 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext), ENT_QUOTES);

$output24 .= '</h1>
	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['name'] = NULL;
$arguments27['value'] = NULL;
$arguments27['property'] = NULL;
$arguments27['autofocus'] = NULL;
$arguments27['disabled'] = NULL;
$arguments27['maxlength'] = NULL;
$arguments27['readonly'] = NULL;
$arguments27['size'] = NULL;
$arguments27['placeholder'] = NULL;
$arguments27['pattern'] = NULL;
$arguments27['errorClass'] = 'f3-form-error';
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['required'] = false;
$arguments27['type'] = 'text';
$arguments27['name'] = 'typo3-language-searchfield';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['key'] = 'table.search';
$arguments27['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);
$arguments27['id'] = 'typo3-language-searchfield';
$array31 = array (
);$arguments27['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array31);
$arguments27['class'] = 'form-control t3js-language-searchfield';

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output24 .= '
		</div>
	</form>
	<table id="typo3-translation-list" class="table table-striped table-hover t3-datatable" data-language-count="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['subject'] = NULL;
$array34 = array (
);$arguments32['subject'] = $renderingContext->getVariableProvider()->getByPath('languages', $array34);
$renderChildrenClosure33 = $arguments32['subject'] ? function() use ($arguments32) { return $arguments32['subject']; } : $renderChildrenClosure33;
$output24 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output24 .= '">
		<thead>
			<tr>
				<th><!-- Icon --></th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['key'] = 'table.extension';

$output24 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext), ENT_QUOTES);

$output24 .= '</th>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
					<th title="';
$array41 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.label', $array41), ENT_QUOTES);

$output40 .= '">';
$array42 = array (
);
$output40 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('language.locale', $array42), ENT_QUOTES);

$output40 .= '</th>
				';
return $output40;
};
$arguments37 = array();
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$arguments37['each'] = isset($renderingContext->getVariableProvider()['languages']) ? $renderingContext->getVariableProvider()['languages'] : NULL;
$arguments37['as'] = 'language';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output24 .= '
			</tr>
		</thead>
		<tbody>
			<!-- Will be filled by JS -->
		</tbody>
	</table>
';
return $output24;
};
$arguments22 = array();
$arguments22['name'] = NULL;
$arguments22['name'] = 'content';

$output19 .= '';

$output19 .= '
';

return $output19;
}


}
#2961251942    12217     