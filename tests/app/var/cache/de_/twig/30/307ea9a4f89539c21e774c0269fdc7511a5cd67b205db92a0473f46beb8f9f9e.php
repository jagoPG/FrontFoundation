<?php

/* node_modules/core-js/library/modules/_to-iobject.js */
class __TwigTemplate_1c1f57e2c7b738c92d737a380d1445052ab853e861a24f652bc3177be6837951 extends Twig_Template
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
        $__internal_152150582b9b8bf509a228d0d759a4566113862ba8c664d0c17ab2669d42237d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152150582b9b8bf509a228d0d759a4566113862ba8c664d0c17ab2669d42237d->enter($__internal_152150582b9b8bf509a228d0d759a4566113862ba8c664d0c17ab2669d42237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-iobject.js"));

        // line 1
        echo "// to indexed object, toObject with fallback for non-array-like ES3 strings
var IObject = require('./_iobject');
var defined = require('./_defined');
module.exports = function (it) {
  return IObject(defined(it));
};
";
        
        $__internal_152150582b9b8bf509a228d0d759a4566113862ba8c664d0c17ab2669d42237d->leave($__internal_152150582b9b8bf509a228d0d759a4566113862ba8c664d0c17ab2669d42237d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-iobject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// to indexed object, toObject with fallback for non-array-like ES3 strings
var IObject = require('./_iobject');
var defined = require('./_defined');
module.exports = function (it) {
  return IObject(defined(it));
};
", "node_modules/core-js/library/modules/_to-iobject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-iobject.js");
    }
}
