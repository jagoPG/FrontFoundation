<?php

/* node_modules/es5-ext/test/object/assign/index.js */
class __TwigTemplate_c9314f0d4a046531efbccb0550c83af9e4d778ac4b4a2a0a84d97d419a8a454a extends Twig_Template
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
        $__internal_32aa84cf63875eb094588a54fd27447e02d664f9337cd5940b34bdc19e5d24ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32aa84cf63875eb094588a54fd27447e02d664f9337cd5940b34bdc19e5d24ff->enter($__internal_32aa84cf63875eb094588a54fd27447e02d664f9337cd5940b34bdc19e5d24ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/assign/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_32aa84cf63875eb094588a54fd27447e02d664f9337cd5940b34bdc19e5d24ff->leave($__internal_32aa84cf63875eb094588a54fd27447e02d664f9337cd5940b34bdc19e5d24ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/assign/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/object/assign/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/assign/index.js");
    }
}
