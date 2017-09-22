<?php

/* node_modules/es-abstract/helpers/isFinite.js */
class __TwigTemplate_9fccd4c037a214944945504921c72ca4d46dd361de286f1ff99aaa349b3d804d extends Twig_Template
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
        $__internal_278643d0f5131d506ea8aae4ec36f6ae8abaca1dbd1f90f1d84c0236f036990a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278643d0f5131d506ea8aae4ec36f6ae8abaca1dbd1f90f1d84c0236f036990a->enter($__internal_278643d0f5131d506ea8aae4ec36f6ae8abaca1dbd1f90f1d84c0236f036990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/helpers/isFinite.js"));

        // line 1
        echo "var \$isNaN = Number.isNaN || function (a) { return a !== a; };

module.exports = Number.isFinite || function (x) { return typeof x === 'number' && !\$isNaN(x) && x !== Infinity && x !== -Infinity; };
";
        
        $__internal_278643d0f5131d506ea8aae4ec36f6ae8abaca1dbd1f90f1d84c0236f036990a->leave($__internal_278643d0f5131d506ea8aae4ec36f6ae8abaca1dbd1f90f1d84c0236f036990a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/helpers/isFinite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$isNaN = Number.isNaN || function (a) { return a !== a; };

module.exports = Number.isFinite || function (x) { return typeof x === 'number' && !\$isNaN(x) && x !== Infinity && x !== -Infinity; };
", "node_modules/es-abstract/helpers/isFinite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/helpers/isFinite.js");
    }
}
