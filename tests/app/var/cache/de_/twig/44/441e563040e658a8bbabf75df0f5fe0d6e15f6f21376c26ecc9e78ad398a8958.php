<?php

/* node_modules/readable-stream/passthrough.js */
class __TwigTemplate_26d5a76e32f529ed7655669b2828f1c048cd536da8a80190e09fb067ab752ddd extends Twig_Template
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
        $__internal_87d50d4783ca2a42430c4e861ed48456d8236f6025a05f8e0c2caa6187ff45ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d50d4783ca2a42430c4e861ed48456d8236f6025a05f8e0c2caa6187ff45ef->enter($__internal_87d50d4783ca2a42430c4e861ed48456d8236f6025a05f8e0c2caa6187ff45ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/passthrough.js"));

        // line 1
        echo "module.exports = require('./readable').PassThrough
";
        
        $__internal_87d50d4783ca2a42430c4e861ed48456d8236f6025a05f8e0c2caa6187ff45ef->leave($__internal_87d50d4783ca2a42430c4e861ed48456d8236f6025a05f8e0c2caa6187ff45ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/passthrough.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./readable').PassThrough
", "node_modules/readable-stream/passthrough.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/passthrough.js");
    }
}
