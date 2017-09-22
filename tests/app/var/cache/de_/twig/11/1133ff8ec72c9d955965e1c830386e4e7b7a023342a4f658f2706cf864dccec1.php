<?php

/* node_modules/create-hmac/index.js */
class __TwigTemplate_4e0b67d6f7a3e03a2da8cdbe5b1a039ace6d01fb034fd31e50097c131c659a8c extends Twig_Template
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
        $__internal_cdd843fcefc32a7629f062d9be2c2f6c3047b46d202b5d92a17f88e5b7b0e52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd843fcefc32a7629f062d9be2c2f6c3047b46d202b5d92a17f88e5b7b0e52f->enter($__internal_cdd843fcefc32a7629f062d9be2c2f6c3047b46d202b5d92a17f88e5b7b0e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hmac/index.js"));

        // line 1
        echo "module.exports = require('crypto').createHmac
";
        
        $__internal_cdd843fcefc32a7629f062d9be2c2f6c3047b46d202b5d92a17f88e5b7b0e52f->leave($__internal_cdd843fcefc32a7629f062d9be2c2f6c3047b46d202b5d92a17f88e5b7b0e52f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hmac/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('crypto').createHmac
", "node_modules/create-hmac/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hmac/index.js");
    }
}
