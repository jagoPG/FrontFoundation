<?php

/* node_modules/es5-ext/object/is-empty.js */
class __TwigTemplate_80a02616a6732242e8fe3a030fd5c5f2ca5727b68ef8a1b8d89a55b76c11d8df extends Twig_Template
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
        $__internal_49bb914aa81facca56748cff73e3e7f82505702757e6773003c91cb3cf460f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bb914aa81facca56748cff73e3e7f82505702757e6773003c91cb3cf460f6d->enter($__internal_49bb914aa81facca56748cff73e3e7f82505702757e6773003c91cb3cf460f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-empty.js"));

        // line 1
        echo "\"use strict\";

var value                   = require(\"./valid-value\")
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (obj) {
\tvar i;
\tvalue(obj);
\tfor (i in obj) {
\t\t// Jslint: ignore
\t\tif (objPropertyIsEnumerable.call(obj, i)) return false;
\t}
\treturn true;
};
";
        
        $__internal_49bb914aa81facca56748cff73e3e7f82505702757e6773003c91cb3cf460f6d->leave($__internal_49bb914aa81facca56748cff73e3e7f82505702757e6773003c91cb3cf460f6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-empty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value                   = require(\"./valid-value\")
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (obj) {
\tvar i;
\tvalue(obj);
\tfor (i in obj) {
\t\t// Jslint: ignore
\t\tif (objPropertyIsEnumerable.call(obj, i)) return false;
\t}
\treturn true;
};
", "node_modules/es5-ext/object/is-empty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-empty.js");
    }
}
