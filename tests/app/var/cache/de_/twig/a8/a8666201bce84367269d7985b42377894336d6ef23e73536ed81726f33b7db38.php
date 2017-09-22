<?php

/* node_modules/es5-ext/reg-exp/#/split/index.js */
class __TwigTemplate_ce6753d970b995132f2f68db3ded6c7cc7493b5d7adda6eb5ad1f5ccc560639a extends Twig_Template
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
        $__internal_e43e137cb028c8d0940a4692c30c0b9028f9d1fc5695808d001a8c9a367cd24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43e137cb028c8d0940a4692c30c0b9028f9d1fc5695808d001a8c9a367cd24e->enter($__internal_e43e137cb028c8d0940a4692c30c0b9028f9d1fc5695808d001a8c9a367cd24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/split/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.split
\t: require(\"./shim\");
";
        
        $__internal_e43e137cb028c8d0940a4692c30c0b9028f9d1fc5695808d001a8c9a367cd24e->leave($__internal_e43e137cb028c8d0940a4692c30c0b9028f9d1fc5695808d001a8c9a367cd24e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/split/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.split
\t: require(\"./shim\");
", "node_modules/es5-ext/reg-exp/#/split/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/split/index.js");
    }
}
