<?php

/* node_modules/core-js/modules/_to-iobject.js */
class __TwigTemplate_d25e5488b830782de366b5aeadb7d70bca00578e75f94fa0e847fb35bf5e01b9 extends Twig_Template
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
        $__internal_358a3fe583eb7cf3c5cf74eb28d4307ae471e992bbda055c8f1645be57023b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358a3fe583eb7cf3c5cf74eb28d4307ae471e992bbda055c8f1645be57023b39->enter($__internal_358a3fe583eb7cf3c5cf74eb28d4307ae471e992bbda055c8f1645be57023b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-iobject.js"));

        // line 1
        echo "// to indexed object, toObject with fallback for non-array-like ES3 strings
var IObject = require('./_iobject');
var defined = require('./_defined');
module.exports = function (it) {
  return IObject(defined(it));
};
";
        
        $__internal_358a3fe583eb7cf3c5cf74eb28d4307ae471e992bbda055c8f1645be57023b39->leave($__internal_358a3fe583eb7cf3c5cf74eb28d4307ae471e992bbda055c8f1645be57023b39_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-iobject.js";
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
", "node_modules/core-js/modules/_to-iobject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-iobject.js");
    }
}
