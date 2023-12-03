<?php
class partial_Inspector_PropertyGridEditor_eaa6593ad6fcb576d01a073908b624e807a64df7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
<div class="form-editor">
    <div class="t3-form-control-group form-group property-grid">
        <label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="label"></span></label>
        <div class="formengine-field-item">
            <div data-template-property="fieldExplanationText" class="form-description"></div>
            <div data-editor="new-property-grid" data-template-property="newPropertyPath" class="form-control-wrap">
                <table class="table table-hover" data-identifier="propertyGridContainer">
                    <thead>
                        <tr data-identifier="headerRow">
                            <th></th>
                            <th data-identifier="column" data-column="label"></th>
                            <th data-identifier="column" data-column="value"></th>
                            <th data-identifier="column" data-column="selected"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-identifier="rowItem">
                            <td><span class="sort-row-field" data-identifier="sortRow">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'identifier' => 'actions-move-move',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</span></td>
                            <td data-identifier="column" data-column="label"><input type="text" class="form-control" value="" data-identifier="label" /></td>
                            <td data-identifier="column" data-column="value"><input type="text" class="form-control" value="" data-identifier="value" /></td>
                            <td data-identifier="column" data-column="selected">
                                <span class="form-check form-check-type-toggle">
                                    <input class="form-check-input t3js-multi-record-selection-check" data-identifier="selectValue" type="checkbox" />
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-default" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.inspector.editor.grid.remove',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '" data-identifier="deleteRow">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-identifier="addRowItem">
                            <td>
                                <div class="btn-group" role="group">
                                    <button data-random-id data-random-id-attribute="id" data-random-id-number="1" class="btn btn-default" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formEditor.inspector.editor.grid.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '" data-identifier="addRow">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'identifier' => 'actions-plus',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                                    </button>
                                </div>
                            </td>
                            <td data-identifier="column" data-column="label"></td>
                            <td data-identifier="column" data-column="value"></td>
                            <td data-identifier="column" data-column="selected"></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div data-editor="property-grid" data-template-property="propertyPath" class="t3-form-grid"></div>
        <span data-template-property="validationErrors"></span>
    </div>
</div>

';

    return $output0;
}

}

#