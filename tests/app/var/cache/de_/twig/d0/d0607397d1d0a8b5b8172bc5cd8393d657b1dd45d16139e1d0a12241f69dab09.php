<?php

/* node_modules/es5-ext/test/math/asinh/implement.js */
class __TwigTemplate_3e9b99ca39014c8f27f0d8924679bbeef861e208589aba6a7f58c2492be72b03 extends Twig_Template
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
        $__internal_8148a589fc144405ac1e07627c86f2868a0aabf60dada514454a1a93c0bd4200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8148a589fc144405ac1e07627c86f2868a0aabf60dada514454a1a93c0bd4200->enter($__internal_8148a589fc144405ac1e07627c86f2868a0aabf60dada514454a1a93c0bd4200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/asinh/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/asinh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_8148a589fc144405ac1e07627c86f2868a0aabf60dada514454a1a93c0bd4200->leave($__internal_8148a589fc144405ac1e07627c86f2868a0aabf60dada514454a1a93c0bd4200_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/asinh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/asinh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/asinh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/asinh/implement.js");
    }
}
