<?php

/* node_modules/es5-ext/math/sign/index.js */
class __TwigTemplate_b91ad3b1d43b023f60eea9e66cdfe4a50e99b1edc6684cfa6042839aaca36536 extends Twig_Template
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
        $__internal_082151ac4a403c3166dd301708084f4df2d566461e45a0244f54dbafd3b73cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082151ac4a403c3166dd301708084f4df2d566461e45a0244f54dbafd3b73cd2->enter($__internal_082151ac4a403c3166dd301708084f4df2d566461e45a0244f54dbafd3b73cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sign/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.sign
\t: require(\"./shim\");
";
        
        $__internal_082151ac4a403c3166dd301708084f4df2d566461e45a0244f54dbafd3b73cd2->leave($__internal_082151ac4a403c3166dd301708084f4df2d566461e45a0244f54dbafd3b73cd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sign/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.sign
\t: require(\"./shim\");
", "node_modules/es5-ext/math/sign/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sign/index.js");
    }
}
