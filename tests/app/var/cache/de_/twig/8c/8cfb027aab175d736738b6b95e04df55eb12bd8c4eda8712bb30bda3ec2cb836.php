<?php

/* node_modules/es5-ext/test/math/log2/index.js */
class __TwigTemplate_2de9ed37cbd63f88c375990ca556823ed63fa9e163a31888b686981c51b287b6 extends Twig_Template
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
        $__internal_823bbde0fb6cc591aa063e83543d786002a2d6076bd5062bc3a982bbe636b11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823bbde0fb6cc591aa063e83543d786002a2d6076bd5062bc3a982bbe636b11c->enter($__internal_823bbde0fb6cc591aa063e83543d786002a2d6076bd5062bc3a982bbe636b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log2/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_823bbde0fb6cc591aa063e83543d786002a2d6076bd5062bc3a982bbe636b11c->leave($__internal_823bbde0fb6cc591aa063e83543d786002a2d6076bd5062bc3a982bbe636b11c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log2/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/math/log2/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log2/index.js");
    }
}
