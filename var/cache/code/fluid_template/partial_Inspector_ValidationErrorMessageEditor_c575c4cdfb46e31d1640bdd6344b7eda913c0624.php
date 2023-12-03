<?php
class partial_Inspector_ValidationErrorMessageEditor_c575c4cdfb46e31d1640bdd6344b7eda913c0624 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
    <div class="t3-form-control-group form-group">
        <label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="label"></span></label>
        <div class="formengine-field-item">
            <div data-template-property="fieldExplanationText" class="form-description"></div>
            <div class="input-group form-control-wrap" data-identifier="inspectorEditorControlsGroup">
                <div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
                    <input data-random-id data-random-id-attribute="id" data-random-id-number="1" type="text" value="" data-template-property="propertyPath" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>

';
}

}

#