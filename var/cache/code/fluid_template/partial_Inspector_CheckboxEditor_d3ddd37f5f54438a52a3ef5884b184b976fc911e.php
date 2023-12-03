<?php
class partial_Inspector_CheckboxEditor_d3ddd37f5f54438a52a3ef5884b184b976fc911e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
        <label class="form-label t3js-formengine-label" data-random-id data-random-id-attribute="for" data-random-id-number="1">
            <span data-template-property="label"></span>
        </label>
        <div data-template-property="fieldExplanationText" class="form-description"></div>
        <div class="form-check form-switch" data-identifier="inspectorEditorControlsWrapper">
            <input class="form-check-input" data-random-id data-random-id-attribute="id" data-random-id-number="1" type="checkbox" />
            <label class="form-check-label" data-random-id data-random-id-attribute="for" data-random-id-number="1"></label>
        </div>
    </div>
</div>

';
}

}

#