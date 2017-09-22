<?php

/* node_modules/babel-runtime/helpers/_set.js */
class __TwigTemplate_ae5916a92012bc32b5b1250dd286657a0b52ff475795d916531fbdf4976f51cf extends Twig_Template
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
        $__internal_3fb51000ea53c47ac10f0a8f94555f44f26c8f41e43d887789fec7cbdfb7d0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb51000ea53c47ac10f0a8f94555f44f26c8f41e43d887789fec7cbdfb7d0e8->enter($__internal_3fb51000ea53c47ac10f0a8f94555f44f26c8f41e43d887789fec7cbdfb7d0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_set.js"));

        // line 1
        echo "module.exports = require(\"./set.js\");";
        
        $__internal_3fb51000ea53c47ac10f0a8f94555f44f26c8f41e43d887789fec7cbdfb7d0e8->leave($__internal_3fb51000ea53c47ac10f0a8f94555f44f26c8f41e43d887789fec7cbdfb7d0e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./set.js\");", "node_modules/babel-runtime/helpers/_set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_set.js");
    }
}
