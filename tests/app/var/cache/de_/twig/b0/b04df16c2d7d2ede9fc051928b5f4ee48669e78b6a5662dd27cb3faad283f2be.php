<?php

/* node_modules/es5-ext/object/key-of.js */
class __TwigTemplate_d0b4347770bb3dfe3c7d61945957929afe4de588a06f9dfea5deecfe75e88e33 extends Twig_Template
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
        $__internal_b0b93e5beb11f265c305ef9c1133822edafa29024e3df8d049c5424708408430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b93e5beb11f265c305ef9c1133822edafa29024e3df8d049c5424708408430->enter($__internal_b0b93e5beb11f265c305ef9c1133822edafa29024e3df8d049c5424708408430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/key-of.js"));

        // line 1
        echo "\"use strict\";

var eq   = require(\"./eq\")
  , some = require(\"./some\");

module.exports = function (obj, searchValue) {
\tvar result;
\treturn some(obj, function (value, name) {
\t\tif (eq(value, searchValue)) {
\t\t\tresult = name;
\t\t\treturn true;
\t\t}
\t\treturn false;
\t})
\t\t? result
\t\t: null;
};
";
        
        $__internal_b0b93e5beb11f265c305ef9c1133822edafa29024e3df8d049c5424708408430->leave($__internal_b0b93e5beb11f265c305ef9c1133822edafa29024e3df8d049c5424708408430_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/key-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var eq   = require(\"./eq\")
  , some = require(\"./some\");

module.exports = function (obj, searchValue) {
\tvar result;
\treturn some(obj, function (value, name) {
\t\tif (eq(value, searchValue)) {
\t\t\tresult = name;
\t\t\treturn true;
\t\t}
\t\treturn false;
\t})
\t\t? result
\t\t: null;
};
", "node_modules/es5-ext/object/key-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/key-of.js");
    }
}
