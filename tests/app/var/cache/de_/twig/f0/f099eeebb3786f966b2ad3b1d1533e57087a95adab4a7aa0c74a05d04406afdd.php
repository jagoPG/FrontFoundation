<?php

/* node_modules/es5-ext/string/#/pad.js */
class __TwigTemplate_bccca3d8c12edd876a0bc2eeca911529ccf6345c40fd5655140ec77fee45ffa1 extends Twig_Template
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
        $__internal_72421a62282396e13b9ec1405b134997b15f1577317942a01a12c3d160a54ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72421a62282396e13b9ec1405b134997b15f1577317942a01a12c3d160a54ba3->enter($__internal_72421a62282396e13b9ec1405b134997b15f1577317942a01a12c3d160a54ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/pad.js"));

        // line 1
        echo "\"use strict\";

var toInteger = require(\"../../number/to-integer\")
  , value     = require(\"../../object/valid-value\")
  , repeat    = require(\"./repeat\")

  , abs = Math.abs, max = Math.max;

module.exports = function (fill/*, length*/) {
\tvar self = String(value(this))
\t  , sLength = self.length
\t  , length = arguments[1];

\tlength = isNaN(length) ? 1 : toInteger(length);
\tfill = repeat.call(String(fill), abs(length));
\tif (length >= 0) return fill.slice(0, max(0, length - sLength)) + self;
\treturn self + ((sLength + length) >= 0 ? \"\" : fill.slice(length + sLength));
};
";
        
        $__internal_72421a62282396e13b9ec1405b134997b15f1577317942a01a12c3d160a54ba3->leave($__internal_72421a62282396e13b9ec1405b134997b15f1577317942a01a12c3d160a54ba3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/pad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toInteger = require(\"../../number/to-integer\")
  , value     = require(\"../../object/valid-value\")
  , repeat    = require(\"./repeat\")

  , abs = Math.abs, max = Math.max;

module.exports = function (fill/*, length*/) {
\tvar self = String(value(this))
\t  , sLength = self.length
\t  , length = arguments[1];

\tlength = isNaN(length) ? 1 : toInteger(length);
\tfill = repeat.call(String(fill), abs(length));
\tif (length >= 0) return fill.slice(0, max(0, length - sLength)) + self;
\treturn self + ((sLength + length) >= 0 ? \"\" : fill.slice(length + sLength));
};
", "node_modules/es5-ext/string/#/pad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/pad.js");
    }
}
