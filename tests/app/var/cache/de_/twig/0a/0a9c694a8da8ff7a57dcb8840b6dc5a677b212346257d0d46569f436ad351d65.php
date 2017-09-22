<?php

/* node_modules/lodash/_nativeCreate.js */
class __TwigTemplate_6d272e7abb12233bd1db9f50856c654d9a9332f0a052304db95e47d4b4b50a81 extends Twig_Template
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
        $__internal_e05f9364ffc76639cd783a7411c5bc215455b213a3deb686ce243f7baa835f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05f9364ffc76639cd783a7411c5bc215455b213a3deb686ce243f7baa835f8e->enter($__internal_e05f9364ffc76639cd783a7411c5bc215455b213a3deb686ce243f7baa835f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_nativeCreate.js"));

        // line 1
        echo "var getNative = require('./_getNative');

/* Built-in method references that are verified to be native. */
var nativeCreate = getNative(Object, 'create');

module.exports = nativeCreate;
";
        
        $__internal_e05f9364ffc76639cd783a7411c5bc215455b213a3deb686ce243f7baa835f8e->leave($__internal_e05f9364ffc76639cd783a7411c5bc215455b213a3deb686ce243f7baa835f8e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_nativeCreate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getNative = require('./_getNative');

/* Built-in method references that are verified to be native. */
var nativeCreate = getNative(Object, 'create');

module.exports = nativeCreate;
", "node_modules/lodash/_nativeCreate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_nativeCreate.js");
    }
}
