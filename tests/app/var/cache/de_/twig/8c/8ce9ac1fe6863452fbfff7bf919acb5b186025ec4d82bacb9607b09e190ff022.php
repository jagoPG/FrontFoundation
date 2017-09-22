<?php

/* node_modules/es5-ext/array/#/keys/shim.js */
class __TwigTemplate_73d8b7f207b47c83f816ff0f4aa41502ed5c9217aa973ccf3884c6cce9871eb3 extends Twig_Template
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
        $__internal_4184e0a6159c3fd9e7044667fcc3797b740dd5a7403e27597e96995b5de69d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4184e0a6159c3fd9e7044667fcc3797b740dd5a7403e27597e96995b5de69d7b->enter($__internal_4184e0a6159c3fd9e7044667fcc3797b740dd5a7403e27597e96995b5de69d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/keys/shim.js"));

        // line 1
        echo "\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\");
module.exports = function () {
 return new ArrayIterator(this, \"key\");
};
";
        
        $__internal_4184e0a6159c3fd9e7044667fcc3797b740dd5a7403e27597e96995b5de69d7b->leave($__internal_4184e0a6159c3fd9e7044667fcc3797b740dd5a7403e27597e96995b5de69d7b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/keys/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\");
module.exports = function () {
 return new ArrayIterator(this, \"key\");
};
", "node_modules/es5-ext/array/#/keys/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/keys/shim.js");
    }
}
