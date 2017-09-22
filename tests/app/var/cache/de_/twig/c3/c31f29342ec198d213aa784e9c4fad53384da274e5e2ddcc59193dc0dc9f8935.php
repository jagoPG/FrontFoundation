<?php

/* node_modules/lodash/index.js */
class __TwigTemplate_bb88ee9bc15915e51449213420a4cd95eecbfb67aae68922c682efd3671c3a18 extends Twig_Template
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
        $__internal_3967fa69f4985dba78e602ec1c42fac298c518ec559b2c68c7b7c1520f7d874c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3967fa69f4985dba78e602ec1c42fac298c518ec559b2c68c7b7c1520f7d874c->enter($__internal_3967fa69f4985dba78e602ec1c42fac298c518ec559b2c68c7b7c1520f7d874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/index.js"));

        // line 1
        echo "module.exports = require('./lodash');";
        
        $__internal_3967fa69f4985dba78e602ec1c42fac298c518ec559b2c68c7b7c1520f7d874c->leave($__internal_3967fa69f4985dba78e602ec1c42fac298c518ec559b2c68c7b7c1520f7d874c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./lodash');", "node_modules/lodash/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/index.js");
    }
}
