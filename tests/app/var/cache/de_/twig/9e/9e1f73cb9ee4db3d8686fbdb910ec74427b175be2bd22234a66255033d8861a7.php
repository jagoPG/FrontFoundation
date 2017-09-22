<?php

/* node_modules/parsleyjs/src/extra/validator/comparison.js */
class __TwigTemplate_8786959b00e66f1498c62f7f435385d349fb38d88b2e0c01355c6ffd57ce148a extends Twig_Template
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
        $__internal_8d8822c0f3329a2da6eb0b9d561f45cb72b27f71da99d299d7eab88176e42272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8822c0f3329a2da6eb0b9d561f45cb72b27f71da99d299d7eab88176e42272->enter($__internal_8d8822c0f3329a2da6eb0b9d561f45cb72b27f71da99d299d7eab88176e42272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/extra/validator/comparison.js"));

        // line 1
        echo "// Load this after Parsley for additional comparison validators
// Note: comparing with a reference isn't well supported and not recommended.
import jQuery from 'jquery'; // Remove this line in ES3

// gt, gte, lt, lte, notequalto extra validators
var parseRequirement = function (requirement) {
  if (isNaN(+requirement))
    return parseFloat(jQuery(requirement).val());
  else
    return +requirement;
};

// Greater than validator
window.Parsley.addValidator('gt', {
  validateString: function (value, requirement) {
    return parseFloat(value) > parseRequirement(requirement);
  },
  priority: 32
});

// Greater than or equal to validator
window.Parsley.addValidator('gte', {
  validateString: function (value, requirement) {
    return parseFloat(value) >= parseRequirement(requirement);
  },
  priority: 32
});

// Less than validator
window.Parsley.addValidator('lt', {
  validateString: function (value, requirement) {
    return parseFloat(value) < parseRequirement(requirement);
  },
  priority: 32
});

// Less than or equal to validator
window.Parsley.addValidator('lte', {
  validateString: function (value, requirement) {
    return parseFloat(value) <= parseRequirement(requirement);
  },
  priority: 32
});
";
        
        $__internal_8d8822c0f3329a2da6eb0b9d561f45cb72b27f71da99d299d7eab88176e42272->leave($__internal_8d8822c0f3329a2da6eb0b9d561f45cb72b27f71da99d299d7eab88176e42272_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/extra/validator/comparison.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load this after Parsley for additional comparison validators
// Note: comparing with a reference isn't well supported and not recommended.
import jQuery from 'jquery'; // Remove this line in ES3

// gt, gte, lt, lte, notequalto extra validators
var parseRequirement = function (requirement) {
  if (isNaN(+requirement))
    return parseFloat(jQuery(requirement).val());
  else
    return +requirement;
};

// Greater than validator
window.Parsley.addValidator('gt', {
  validateString: function (value, requirement) {
    return parseFloat(value) > parseRequirement(requirement);
  },
  priority: 32
});

// Greater than or equal to validator
window.Parsley.addValidator('gte', {
  validateString: function (value, requirement) {
    return parseFloat(value) >= parseRequirement(requirement);
  },
  priority: 32
});

// Less than validator
window.Parsley.addValidator('lt', {
  validateString: function (value, requirement) {
    return parseFloat(value) < parseRequirement(requirement);
  },
  priority: 32
});

// Less than or equal to validator
window.Parsley.addValidator('lte', {
  validateString: function (value, requirement) {
    return parseFloat(value) <= parseRequirement(requirement);
  },
  priority: 32
});
", "node_modules/parsleyjs/src/extra/validator/comparison.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/extra/validator/comparison.js");
    }
}
