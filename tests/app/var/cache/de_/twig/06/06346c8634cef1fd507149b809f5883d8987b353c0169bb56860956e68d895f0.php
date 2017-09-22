<?php

/* node_modules/es5-ext/number/#/pad.js */
class __TwigTemplate_bb106099c4bfab79bb4eb217b6d1afb58e9fd8180bfc82001bc4a7474dd9f0cf extends Twig_Template
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
        $__internal_1c765c49acfc37907bc7d5218e4ed18a894ff1539805a6115230970a2621b803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c765c49acfc37907bc7d5218e4ed18a894ff1539805a6115230970a2621b803->enter($__internal_1c765c49acfc37907bc7d5218e4ed18a894ff1539805a6115230970a2621b803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/#/pad.js"));

        // line 1
        echo "\"use strict\";

var pad      = require(\"../../string/#/pad\")
  , toPosInt = require(\"../to-pos-integer\")

  , toFixed = Number.prototype.toFixed;

module.exports = function (length/*, precision*/) {
\tvar precision;
\tlength = toPosInt(length);
\tprecision = toPosInt(arguments[1]);

\treturn pad.call(precision ? toFixed.call(this, precision) : this,
\t\t\"0\", length + (precision ? 1 + precision : 0));
};
";
        
        $__internal_1c765c49acfc37907bc7d5218e4ed18a894ff1539805a6115230970a2621b803->leave($__internal_1c765c49acfc37907bc7d5218e4ed18a894ff1539805a6115230970a2621b803_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/#/pad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var pad      = require(\"../../string/#/pad\")
  , toPosInt = require(\"../to-pos-integer\")

  , toFixed = Number.prototype.toFixed;

module.exports = function (length/*, precision*/) {
\tvar precision;
\tlength = toPosInt(length);
\tprecision = toPosInt(arguments[1]);

\treturn pad.call(precision ? toFixed.call(this, precision) : this,
\t\t\"0\", length + (precision ? 1 + precision : 0));
};
", "node_modules/es5-ext/number/#/pad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/#/pad.js");
    }
}
