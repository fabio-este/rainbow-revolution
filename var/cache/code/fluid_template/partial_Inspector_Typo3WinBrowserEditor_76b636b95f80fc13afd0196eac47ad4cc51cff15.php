<?php
class partial_Inspector_Typo3WinBrowserEditor_76b636b95f80fc13afd0196eac47ad4cc51cff15 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
            <div class="t3-form-controls form-control-wrap" data-identifier="inspectorEditorControlsWrapper">
                <input data-random-id data-random-id-attribute="id" data-random-id-number="1" type="text" value="" data-template-property="propertyPath" class="form-control" data-insert-target="">
                <div class="form-text">
                    <a href="#" data-template-property="onclick" class="btn btn-default">
                        <span class="t3js-icon icon icon-size-small icon-state-default icon-mimetypes-x-content-text" data-identifier="mimetypes-x-content-text" aria-hidden="true">
                            <span class="icon-markup" data-template-property="image"></span>
                        </span> <span data-template-property="buttonLabel"></span>
                    </a>
                </div>
                <span data-template-property="validationErrors"></span>
            </div>
        </div>
    </div>
</div>

';
}

}

#