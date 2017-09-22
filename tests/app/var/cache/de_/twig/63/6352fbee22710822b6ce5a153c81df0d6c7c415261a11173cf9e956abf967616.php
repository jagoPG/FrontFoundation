<?php

/* node_modules/es5-ext/array/#/keys/index.js */
class __TwigTemplate_672abaf2beb274480a825f4d2824e3e4c5e7508082d6f2c9b6694dc012b74add extends Twig_Template
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
        $__internal_36777888db7fef9549318f89336f2d49d54e21749859e1c51fa13df148e53efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36777888db7fef9549318f89336f2d49d54e21749859e1c51fa13df148e53efd->enter($__internal_36777888db7fef9549318f89336f2d49d54e21749859e1c51fa13df148e53efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/keys/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.keys : require(\"./shim\");
";
        
        $__internal_36777888db7fef9549318f89336f2d49d54e21749859e1c51fa13df148e53efd->leave($__internal_36777888db7fef9549318f89336f2d49d54e21749859e1c51fa13df148e53efd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/keys/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.keys : require(\"./shim\");
", "node_modules/es5-ext/array/#/keys/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/keys/index.js");
    }
}
