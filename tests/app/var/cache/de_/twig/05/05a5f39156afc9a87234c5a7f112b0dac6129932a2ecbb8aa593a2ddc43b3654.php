<?php

/* node_modules/lodash/_reEvaluate.js */
class __TwigTemplate_a9d0bd1d3b51e2aa082f32c6b85a1b954daa32596621b3c1e011f3e0c95b079c extends Twig_Template
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
        $__internal_e9f0be58812ab324e84310a86f0dfcaad02717648a056a84ac310d5a0df4c342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f0be58812ab324e84310a86f0dfcaad02717648a056a84ac310d5a0df4c342->enter($__internal_e9f0be58812ab324e84310a86f0dfcaad02717648a056a84ac310d5a0df4c342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_reEvaluate.js"));

        // line 1
        echo "/** Used to match template delimiters. */
var reEvaluate = /<%([\\s\\S]+?)%>/g;

module.exports = reEvaluate;
";
        
        $__internal_e9f0be58812ab324e84310a86f0dfcaad02717648a056a84ac310d5a0df4c342->leave($__internal_e9f0be58812ab324e84310a86f0dfcaad02717648a056a84ac310d5a0df4c342_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_reEvaluate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match template delimiters. */
var reEvaluate = /<%([\\s\\S]+?)%>/g;

module.exports = reEvaluate;
", "node_modules/lodash/_reEvaluate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_reEvaluate.js");
    }
}
