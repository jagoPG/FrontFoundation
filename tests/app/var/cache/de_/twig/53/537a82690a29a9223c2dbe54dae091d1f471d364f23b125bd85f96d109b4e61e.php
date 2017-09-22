<?php

/* node_modules/core-js/modules/_iobject.js */
class __TwigTemplate_36a6bd9e71f64dc2a660620fd9c131c8bf3b7549fd6567abe17be7cbec37c1d3 extends Twig_Template
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
        $__internal_aa6671873d80fbb93ec8bbb357a8ef3dd87dd5d4475d5fa1bf7be4401215b57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6671873d80fbb93ec8bbb357a8ef3dd87dd5d4475d5fa1bf7be4401215b57e->enter($__internal_aa6671873d80fbb93ec8bbb357a8ef3dd87dd5d4475d5fa1bf7be4401215b57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_iobject.js"));

        // line 1
        echo "// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = require('./_cof');
// eslint-disable-next-line no-prototype-builtins
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};
";
        
        $__internal_aa6671873d80fbb93ec8bbb357a8ef3dd87dd5d4475d5fa1bf7be4401215b57e->leave($__internal_aa6671873d80fbb93ec8bbb357a8ef3dd87dd5d4475d5fa1bf7be4401215b57e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_iobject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = require('./_cof');
// eslint-disable-next-line no-prototype-builtins
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};
", "node_modules/core-js/modules/_iobject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_iobject.js");
    }
}
