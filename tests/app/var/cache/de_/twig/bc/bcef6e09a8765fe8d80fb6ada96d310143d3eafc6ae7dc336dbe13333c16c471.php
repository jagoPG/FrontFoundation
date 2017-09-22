<?php

/* node_modules/es5-ext/string/#/repeat/index.js */
class __TwigTemplate_4d548045b58993cc7b1ba9f4d2bf3a6204cb7939a22677acb2b8891136d64b73 extends Twig_Template
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
        $__internal_d5960b11b77cfb37a42c84877497be416a77dda530011fb5f8c30f27fec64132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5960b11b77cfb37a42c84877497be416a77dda530011fb5f8c30f27fec64132->enter($__internal_d5960b11b77cfb37a42c84877497be416a77dda530011fb5f8c30f27fec64132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/repeat/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.repeat
\t: require(\"./shim\");
";
        
        $__internal_d5960b11b77cfb37a42c84877497be416a77dda530011fb5f8c30f27fec64132->leave($__internal_d5960b11b77cfb37a42c84877497be416a77dda530011fb5f8c30f27fec64132_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/repeat/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.repeat
\t: require(\"./shim\");
", "node_modules/es5-ext/string/#/repeat/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/repeat/index.js");
    }
}
