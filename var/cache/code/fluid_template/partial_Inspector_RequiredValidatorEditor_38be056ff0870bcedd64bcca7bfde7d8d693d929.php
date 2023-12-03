<?php
class partial_Inspector_RequiredValidatorEditor_38be056ff0870bcedd64bcca7bfde7d8d693d929 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
    return '
<div class="form-editor">
    <div class="t3-form-control-group form-group" data-identifier="editorWrapper">
        <label class="form-label t3js-formengine-label" data-random-id data-random-id-attribute="for" data-random-id-number="1">
            <span data-template-property="label"></span>
        </label>
        <div class="form-check form-switch" data-identifier="inspectorEditorControlsWrapper">
            <input class="form-check-input" data-random-id data-random-id-attribute="id" data-random-id-number="1" type="checkbox" />
            <label class="form-check-label" data-random-id data-random-id-attribute="for" data-random-id-number="1"></label>
        </div>
    </div>
    <div class="t3-form-control-group form-group" data-template-property="validationErrorMessage">
        <label data-random-id data-random-id-attribute="for" data-random-id-number="2"><span data-template-property="validationErrorMessage-label"></span></label>
        <div class="formengine-field-item">
            <div data-template-property="validationErrorMessage-fieldExplanationText" class="form-description"></div>
            <div class="t3-form-controls form-control-wrap" data-identifier="inspectorEditorControlsWrapper">
                <input data-random-id data-random-id-attribute="id" data-random-id-number="2" type="text" value="" data-template-property="validationErrorMessage-propertyPath" class="form-control">
            </div>
        </div>
    </div>
</div>

';
}

}

#