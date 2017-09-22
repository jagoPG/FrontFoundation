<?php

/* node_modules/lodash/_getPrototype.js */
class __TwigTemplate_b6977c56f335fe7fa53b7febc144e829a37c845b40ffd2b8ddd69699b2086914 extends Twig_Template
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
        $__internal_fdd8733ea161c6a78944486d65da07783de6082d9b81ff06b2086542a428bdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd8733ea161c6a78944486d65da07783de6082d9b81ff06b2086542a428bdac->enter($__internal_fdd8733ea161c6a78944486d65da07783de6082d9b81ff06b2086542a428bdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getPrototype.js"));

        // line 1
        echo "var overArg = require('./_overArg');

/** Built-in value references. */
var getPrototype = overArg(Object.getPrototypeOf, Object);

module.exports = getPrototype;
";
        
        $__internal_fdd8733ea161c6a78944486d65da07783de6082d9b81ff06b2086542a428bdac->leave($__internal_fdd8733ea161c6a78944486d65da07783de6082d9b81ff06b2086542a428bdac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getPrototype.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var overArg = require('./_overArg');

/** Built-in value references. */
var getPrototype = overArg(Object.getPrototypeOf, Object);

module.exports = getPrototype;
", "node_modules/lodash/_getPrototype.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getPrototype.js");
    }
}
