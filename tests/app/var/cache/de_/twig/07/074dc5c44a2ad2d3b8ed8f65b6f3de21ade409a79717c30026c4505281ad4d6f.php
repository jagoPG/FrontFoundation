<?php

/* node_modules/parsleyjs/src/parsley/defaults.js */
class __TwigTemplate_52bab61f59c5de68cec3b43928158012d63ea5d6ef2b213f9e0d28f012ef2bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d97e828937100159cd0bbc9a20cbc8c02ff3f05391ee0da9123f3bf5f3627e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97e828937100159cd0bbc9a20cbc8c02ff3f05391ee0da9123f3bf5f3627e58->enter($__internal_d97e828937100159cd0bbc9a20cbc8c02ff3f05391ee0da9123f3bf5f3627e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/defaults.js"));

        // line 1
        echo "// All these options could be overriden and specified directly in DOM using
// `data-parsley-` default DOM-API
// eg: `inputs` can be set in DOM using `data-parsley-inputs=\"input, textarea\"`
// eg: `data-parsley-stop-on-first-failing-constraint=\"false\"`

var Defaults = {
  // ### General

  // Default data-namespace for DOM API
  namespace: 'data-parsley-',

  // Supported inputs by default
  inputs: 'input, textarea, select',

  // Excluded inputs by default
  excluded: 'input[type=button], input[type=submit], input[type=reset], input[type=hidden]',

  // Stop validating field on highest priority failing constraint
  priorityEnabled: true,

  // ### Field only

  // identifier used to group together inputs (e.g. radio buttons...)
  multiple: null,

  // identifier (or array of identifiers) used to validate only a select group of inputs
  group: null,

  // ### UI
  // Enable\\Disable error messages
  uiEnabled: true,

  // Key events threshold before validation
  validationThreshold: 3,

  // Focused field on form validation error. 'first'|'last'|'none'
  focus: 'first',

  // event(s) that will trigger validation before first failure. eg: `input`...
  trigger: false,

  // event(s) that will trigger validation after first failure.
  triggerAfterFailure: 'input',

  // Class that would be added on every failing validation Parsley field
  errorClass: 'parsley-error',

  // Same for success validation
  successClass: 'parsley-success',

  // Return the `\$element` that will receive these above success or error classes
  // Could also be (and given directly from DOM) a valid selector like `'#div'`
  classHandler: function (Field) {},

  // Return the `\$element` where errors will be appended
  // Could also be (and given directly from DOM) a valid selector like `'#div'`
  errorsContainer: function (Field) {},

  // ul elem that would receive errors' list
  errorsWrapper: '<ul class=\"parsley-errors-list\"></ul>',

  // li elem that would receive error message
  errorTemplate: '<li></li>'
};

export default Defaults;
";
        
        $__internal_d97e828937100159cd0bbc9a20cbc8c02ff3f05391ee0da9123f3bf5f3627e58->leave($__internal_d97e828937100159cd0bbc9a20cbc8c02ff3f05391ee0da9123f3bf5f3627e58_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/defaults.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// All these options could be overriden and specified directly in DOM using
// `data-parsley-` default DOM-API
// eg: `inputs` can be set in DOM using `data-parsley-inputs=\"input, textarea\"`
// eg: `data-parsley-stop-on-first-failing-constraint=\"false\"`

var Defaults = {
  // ### General

  // Default data-namespace for DOM API
  namespace: 'data-parsley-',

  // Supported inputs by default
  inputs: 'input, textarea, select',

  // Excluded inputs by default
  excluded: 'input[type=button], input[type=submit], input[type=reset], input[type=hidden]',

  // Stop validating field on highest priority failing constraint
  priorityEnabled: true,

  // ### Field only

  // identifier used to group together inputs (e.g. radio buttons...)
  multiple: null,

  // identifier (or array of identifiers) used to validate only a select group of inputs
  group: null,

  // ### UI
  // Enable\\Disable error messages
  uiEnabled: true,

  // Key events threshold before validation
  validationThreshold: 3,

  // Focused field on form validation error. 'first'|'last'|'none'
  focus: 'first',

  // event(s) that will trigger validation before first failure. eg: `input`...
  trigger: false,

  // event(s) that will trigger validation after first failure.
  triggerAfterFailure: 'input',

  // Class that would be added on every failing validation Parsley field
  errorClass: 'parsley-error',

  // Same for success validation
  successClass: 'parsley-success',

  // Return the `\$element` that will receive these above success or error classes
  // Could also be (and given directly from DOM) a valid selector like `'#div'`
  classHandler: function (Field) {},

  // Return the `\$element` where errors will be appended
  // Could also be (and given directly from DOM) a valid selector like `'#div'`
  errorsContainer: function (Field) {},

  // ul elem that would receive errors' list
  errorsWrapper: '<ul class=\"parsley-errors-list\"></ul>',

  // li elem that would receive error message
  errorTemplate: '<li></li>'
};

export default Defaults;
", "node_modules/parsleyjs/src/parsley/defaults.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/defaults.js");
    }
}
