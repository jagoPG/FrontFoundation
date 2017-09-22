<?php

/* node_modules/core-js/library/fn/reflect/construct.js */
class __TwigTemplate_a0750208baddf67b2da0488343119fe1e5eb9d11e363cd5d23f0a1118dd48148 extends Twig_Template
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
        $__internal_c96dd4405c541507d615ccd0418ac4dc7680e187758d822de237538c313deb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96dd4405c541507d615ccd0418ac4dc7680e187758d822de237538c313deb06->enter($__internal_c96dd4405c541507d615ccd0418ac4dc7680e187758d822de237538c313deb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/construct.js"));

        // line 1
        echo "require('../../modules/es6.reflect.construct');
module.exports = require('../../modules/_core').Reflect.construct;
";
        
        $__internal_c96dd4405c541507d615ccd0418ac4dc7680e187758d822de237538c313deb06->leave($__internal_c96dd4405c541507d615ccd0418ac4dc7680e187758d822de237538c313deb06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/construct.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.construct');
module.exports = require('../../modules/_core').Reflect.construct;
", "node_modules/core-js/library/fn/reflect/construct.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/construct.js");
    }
}
