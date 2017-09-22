<?php

/* node_modules/core-js/library/modules/_iobject.js */
class __TwigTemplate_0e58b5883a2c789987e594c866aa9d383b2642a783aca304cff4e5c8dff4f9ef extends Twig_Template
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
        $__internal_29f065dca95ce8dfe4e7ba48db976a5656371f5629c5fd0dacfca78db6fcc9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f065dca95ce8dfe4e7ba48db976a5656371f5629c5fd0dacfca78db6fcc9fa->enter($__internal_29f065dca95ce8dfe4e7ba48db976a5656371f5629c5fd0dacfca78db6fcc9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_iobject.js"));

        // line 1
        echo "// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = require('./_cof');
// eslint-disable-next-line no-prototype-builtins
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};
";
        
        $__internal_29f065dca95ce8dfe4e7ba48db976a5656371f5629c5fd0dacfca78db6fcc9fa->leave($__internal_29f065dca95ce8dfe4e7ba48db976a5656371f5629c5fd0dacfca78db6fcc9fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_iobject.js";
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
", "node_modules/core-js/library/modules/_iobject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_iobject.js");
    }
}
