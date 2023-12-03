<?php
class FormFrontend_action_form_000f060c520ef2af172a640195e812711e29b45e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<div class="form-container form-identifier-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.formDefinition.identifier')]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'page' => $renderingContext->getVariableProvider()->getByPath('form.currentPage'),
];

$arguments9 = [
'section' => NULL,
'partial' => $renderingContext->getVariableProvider()->getByPath('form.currentPage.templateName'),
'delegate' => NULL,
'arguments' => $array11,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            <div class="form-actions">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$array14 = [
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
];

$arguments12 = [
'section' => NULL,
'partial' => 'Form/Navigation',
'delegate' => NULL,
'arguments' => $array14,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output8 .= '
            </div>
        ';
return $output8;
};

$array6 = [
'0' => 1,
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'action' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.controllerAction'),
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => $renderingContext->getVariableProvider()->getByPath('form'),
'pageType' => 0,
'noCache' => false,
'section' => $renderingContext->getVariableProvider()->getByPath('form.identifier'),
'format' => '',
'additionalParams' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.additionalParams'),
'absolute' => false,
'addQueryString' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.addQueryString'),
'argumentsToBeExcludedFromQueryString' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.argumentsToBeExcludedFromQueryString'),
'fieldNamePrefix' => NULL,
'actionUri' => NULL,
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'requestToken' => NULL,
'signingType' => NULL,
'enctype' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpEnctype'),
'method' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpMethod'),
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => NULL,
'novalidate' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
'class' => NULL,
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('form.identifier'),
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output3 .= TYPO3\CMS\Form\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};

$arguments1 = [
'renderable' => $renderingContext->getVariableProvider()->getByPath('form'),
];

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>

';

    return $output0;
}

}

#