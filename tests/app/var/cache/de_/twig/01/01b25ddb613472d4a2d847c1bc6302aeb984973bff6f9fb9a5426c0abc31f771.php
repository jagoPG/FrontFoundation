<?php

/* node_modules/core-js/modules/es6.object.keys.js */
class __TwigTemplate_583332f3e32c0a01269038a2bc07a393e87bffea54eb6ba42e963da9b50696b1 extends Twig_Template
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
        $__internal_73ee792cf00e0cc3377770c51a2e44c385a24ca2f3b486beb89e66ca5ff13347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ee792cf00e0cc3377770c51a2e44c385a24ca2f3b486beb89e66ca5ff13347->enter($__internal_73ee792cf00e0cc3377770c51a2e44c385a24ca2f3b486beb89e66ca5ff13347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.keys.js"));

        // line 1
        echo "// 19.1.2.14 Object.keys(O)
var toObject = require('./_to-object');
var \$keys = require('./_object-keys');

require('./_object-sap')('keys', function () {
  return function keys(it) {
    return \$keys(toObject(it));
  };
});
";
        
        $__internal_73ee792cf00e0cc3377770c51a2e44c385a24ca2f3b486beb89e66ca5ff13347->leave($__internal_73ee792cf00e0cc3377770c51a2e44c385a24ca2f3b486beb89e66ca5ff13347_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.14 Object.keys(O)
var toObject = require('./_to-object');
var \$keys = require('./_object-keys');

require('./_object-sap')('keys', function () {
  return function keys(it) {
    return \$keys(toObject(it));
  };
});
", "node_modules/core-js/modules/es6.object.keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.keys.js");
    }
}
