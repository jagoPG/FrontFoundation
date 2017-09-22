<?php

/* node_modules/es5-ext/object/safe-traverse.js */
class __TwigTemplate_2c2d8c76ec7481015d2e89a5048b257cde3b7d4ff9c33556e71a865511ebf476 extends Twig_Template
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
        $__internal_ef526578ec7daafc958e199b468d544b9e7ab1b6dfc3cd29cf275c8788b9d400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef526578ec7daafc958e199b468d544b9e7ab1b6dfc3cd29cf275c8788b9d400->enter($__internal_ef526578ec7daafc958e199b468d544b9e7ab1b6dfc3cd29cf275c8788b9d400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/safe-traverse.js"));

        // line 1
        echo "\"use strict\";

var value   = require(\"./valid-value\")
  , isValue = require(\"./is-value\");

module.exports = function (obj /*, …names*/) {
\tvar length, current = 1;
\tvalue(obj);
\tlength = arguments.length - 1;
\tif (!length) return obj;
\twhile (current < length) {
\t\tobj = obj[arguments[current++]];
\t\tif (!isValue(obj)) return undefined;
\t}
\treturn obj[arguments[current]];
};
";
        
        $__internal_ef526578ec7daafc958e199b468d544b9e7ab1b6dfc3cd29cf275c8788b9d400->leave($__internal_ef526578ec7daafc958e199b468d544b9e7ab1b6dfc3cd29cf275c8788b9d400_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/safe-traverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value   = require(\"./valid-value\")
  , isValue = require(\"./is-value\");

module.exports = function (obj /*, …names*/) {
\tvar length, current = 1;
\tvalue(obj);
\tlength = arguments.length - 1;
\tif (!length) return obj;
\twhile (current < length) {
\t\tobj = obj[arguments[current++]];
\t\tif (!isValue(obj)) return undefined;
\t}
\treturn obj[arguments[current]];
};
", "node_modules/es5-ext/object/safe-traverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/safe-traverse.js");
    }
}
