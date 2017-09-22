<?php

/* node_modules/core-js/library/fn/symbol/key-for.js */
class __TwigTemplate_084e3165d9d2765003bc9eceae7f00f7b3580f9cf0b5fbd62899d5afb4b6cb1c extends Twig_Template
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
        $__internal_15513073ce0498a98fe89b6e75b338df676cb9030b7988cfe52f9f12b48b19ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15513073ce0498a98fe89b6e75b338df676cb9030b7988cfe52f9f12b48b19ee->enter($__internal_15513073ce0498a98fe89b6e75b338df676cb9030b7988cfe52f9f12b48b19ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/symbol/key-for.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol.keyFor;
";
        
        $__internal_15513073ce0498a98fe89b6e75b338df676cb9030b7988cfe52f9f12b48b19ee->leave($__internal_15513073ce0498a98fe89b6e75b338df676cb9030b7988cfe52f9f12b48b19ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/symbol/key-for.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol.keyFor;
", "node_modules/core-js/library/fn/symbol/key-for.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/symbol/key-for.js");
    }
}
