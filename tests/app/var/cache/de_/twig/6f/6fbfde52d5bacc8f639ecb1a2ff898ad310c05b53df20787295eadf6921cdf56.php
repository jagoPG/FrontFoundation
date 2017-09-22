<?php

/* node_modules/es-to-primitive/helpers/isPrimitive.js */
class __TwigTemplate_d63949f116093acdb71406992241e1020df2c4a7542f34a7d35ae483713444fd extends Twig_Template
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
        $__internal_b71a33e5bd70aa8c113864680e2c4b770e1e706b622c03df618165ab573d8979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71a33e5bd70aa8c113864680e2c4b770e1e706b622c03df618165ab573d8979->enter($__internal_b71a33e5bd70aa8c113864680e2c4b770e1e706b622c03df618165ab573d8979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/helpers/isPrimitive.js"));

        // line 1
        echo "module.exports = function isPrimitive(value) {
\treturn value === null || (typeof value !== 'function' && typeof value !== 'object');
};
";
        
        $__internal_b71a33e5bd70aa8c113864680e2c4b770e1e706b622c03df618165ab573d8979->leave($__internal_b71a33e5bd70aa8c113864680e2c4b770e1e706b622c03df618165ab573d8979_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/helpers/isPrimitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function isPrimitive(value) {
\treturn value === null || (typeof value !== 'function' && typeof value !== 'object');
};
", "node_modules/es-to-primitive/helpers/isPrimitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/helpers/isPrimitive.js");
    }
}
