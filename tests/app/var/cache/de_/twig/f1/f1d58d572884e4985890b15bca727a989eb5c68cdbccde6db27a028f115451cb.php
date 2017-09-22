<?php

/* node_modules/es5-ext/array/#/concat/index.js */
class __TwigTemplate_918cb71a49998b49c55bc3c8cb42ae5a9940c7a372e4d4b927397887773e81b2 extends Twig_Template
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
        $__internal_da5b448f94cb2f215bdb9886d1bd2cc2e2e56f6610a6aabcbf0fa57e51b48472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5b448f94cb2f215bdb9886d1bd2cc2e2e56f6610a6aabcbf0fa57e51b48472->enter($__internal_da5b448f94cb2f215bdb9886d1bd2cc2e2e56f6610a6aabcbf0fa57e51b48472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/concat/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.concat : require(\"./shim\");
";
        
        $__internal_da5b448f94cb2f215bdb9886d1bd2cc2e2e56f6610a6aabcbf0fa57e51b48472->leave($__internal_da5b448f94cb2f215bdb9886d1bd2cc2e2e56f6610a6aabcbf0fa57e51b48472_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/concat/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.concat : require(\"./shim\");
", "node_modules/es5-ext/array/#/concat/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/concat/index.js");
    }
}
