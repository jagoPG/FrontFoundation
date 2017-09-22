<?php

/* node_modules/lodash/fp/init.js */
class __TwigTemplate_937c06d393f7b0837d500902f1ef843f2bf56b4847154165f0f6fb5f3185fe6b extends Twig_Template
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
        $__internal_3ca09689fdabba890112f0cda4706aee0009d587db7c1f0c98df6ab0e00900c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca09689fdabba890112f0cda4706aee0009d587db7c1f0c98df6ab0e00900c9->enter($__internal_3ca09689fdabba890112f0cda4706aee0009d587db7c1f0c98df6ab0e00900c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/init.js"));

        // line 1
        echo "module.exports = require('./initial');
";
        
        $__internal_3ca09689fdabba890112f0cda4706aee0009d587db7c1f0c98df6ab0e00900c9->leave($__internal_3ca09689fdabba890112f0cda4706aee0009d587db7c1f0c98df6ab0e00900c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/init.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./initial');
", "node_modules/lodash/fp/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/init.js");
    }
}
