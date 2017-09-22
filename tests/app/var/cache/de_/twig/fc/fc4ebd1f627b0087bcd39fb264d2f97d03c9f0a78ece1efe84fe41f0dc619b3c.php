<?php

/* node_modules/es5-ext/object/ensure-natural-number.js */
class __TwigTemplate_85a690e802f5ab76054f5e9c0af2e84927e7d917fb7322ce40e87e1c73cd5fdd extends Twig_Template
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
        $__internal_4a64dbdc7f77319ea732fd042ca7f5210fd4586e46faa4e921dad11638e5d69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a64dbdc7f77319ea732fd042ca7f5210fd4586e46faa4e921dad11638e5d69c->enter($__internal_4a64dbdc7f77319ea732fd042ca7f5210fd4586e46faa4e921dad11638e5d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/ensure-natural-number.js"));

        // line 1
        echo "\"use strict\";

var isNatural = require(\"../number/is-natural\");

module.exports = function (arg) {
\tvar num = Number(arg);
\tif (!isNatural(num)) throw new TypeError(arg + \" is not a natural number\");
\treturn num;
};
";
        
        $__internal_4a64dbdc7f77319ea732fd042ca7f5210fd4586e46faa4e921dad11638e5d69c->leave($__internal_4a64dbdc7f77319ea732fd042ca7f5210fd4586e46faa4e921dad11638e5d69c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/ensure-natural-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isNatural = require(\"../number/is-natural\");

module.exports = function (arg) {
\tvar num = Number(arg);
\tif (!isNatural(num)) throw new TypeError(arg + \" is not a natural number\");
\treturn num;
};
", "node_modules/es5-ext/object/ensure-natural-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/ensure-natural-number.js");
    }
}
