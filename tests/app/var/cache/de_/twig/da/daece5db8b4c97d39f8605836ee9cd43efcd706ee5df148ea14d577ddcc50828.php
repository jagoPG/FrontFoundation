<?php

/* node_modules/es5-ext/math/atanh/index.js */
class __TwigTemplate_df82019623960e030118aa86b1ca7e2af1b7d70025d1889133ba3a598c0128b9 extends Twig_Template
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
        $__internal_6cefb7bff0f8e77438b07b813d899d911338d7b13f257606872e4e47d059709b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cefb7bff0f8e77438b07b813d899d911338d7b13f257606872e4e47d059709b->enter($__internal_6cefb7bff0f8e77438b07b813d899d911338d7b13f257606872e4e47d059709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/atanh/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.atanh
\t: require(\"./shim\");
";
        
        $__internal_6cefb7bff0f8e77438b07b813d899d911338d7b13f257606872e4e47d059709b->leave($__internal_6cefb7bff0f8e77438b07b813d899d911338d7b13f257606872e4e47d059709b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/atanh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.atanh
\t: require(\"./shim\");
", "node_modules/es5-ext/math/atanh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/atanh/index.js");
    }
}
