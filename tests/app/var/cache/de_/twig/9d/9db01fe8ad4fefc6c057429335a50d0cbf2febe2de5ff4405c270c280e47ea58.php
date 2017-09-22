<?php

/* node_modules/core-js/fn/string/virtual/ends-with.js */
class __TwigTemplate_33ef3e9aebd2fef5d6296a4359fe8486905b5072ed7d8d0ca88908bef98e7c97 extends Twig_Template
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
        $__internal_9940f1d08afd9b9ed970f42938141fdee544b034c45165ec9310b5abfc71e3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9940f1d08afd9b9ed970f42938141fdee544b034c45165ec9310b5abfc71e3cb->enter($__internal_9940f1d08afd9b9ed970f42938141fdee544b034c45165ec9310b5abfc71e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/ends-with.js"));

        // line 1
        echo "require('../../../modules/es6.string.ends-with');
module.exports = require('../../../modules/_entry-virtual')('String').endsWith;
";
        
        $__internal_9940f1d08afd9b9ed970f42938141fdee544b034c45165ec9310b5abfc71e3cb->leave($__internal_9940f1d08afd9b9ed970f42938141fdee544b034c45165ec9310b5abfc71e3cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/ends-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.ends-with');
module.exports = require('../../../modules/_entry-virtual')('String').endsWith;
", "node_modules/core-js/fn/string/virtual/ends-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/ends-with.js");
    }
}
