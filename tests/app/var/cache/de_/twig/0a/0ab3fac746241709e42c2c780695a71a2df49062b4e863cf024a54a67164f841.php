<?php

/* node_modules/es5-ext/array/#/last.js */
class __TwigTemplate_2129c50227474d4e4a8cebb29b0215a2d414ba485f25feedda8cfc195b85651c extends Twig_Template
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
        $__internal_3ec7eb8da26b3960ced2d6dd9ccd4e4f21c9738954e7e30c8dc6f6c128e47b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec7eb8da26b3960ced2d6dd9ccd4e4f21c9738954e7e30c8dc6f6c128e47b22->enter($__internal_3ec7eb8da26b3960ced2d6dd9ccd4e4f21c9738954e7e30c8dc6f6c128e47b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/last.js"));

        // line 1
        echo "\"use strict\";

var lastIndex = require(\"./last-index\");

module.exports = function () {
\tvar i;
\tif ((i = lastIndex.call(this)) !== null) return this[i];
\treturn undefined;
};
";
        
        $__internal_3ec7eb8da26b3960ced2d6dd9ccd4e4f21c9738954e7e30c8dc6f6c128e47b22->leave($__internal_3ec7eb8da26b3960ced2d6dd9ccd4e4f21c9738954e7e30c8dc6f6c128e47b22_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var lastIndex = require(\"./last-index\");

module.exports = function () {
\tvar i;
\tif ((i = lastIndex.call(this)) !== null) return this[i];
\treturn undefined;
};
", "node_modules/es5-ext/array/#/last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/last.js");
    }
}
