<?php

/* node_modules/es5-ext/array/#/binary-search.js */
class __TwigTemplate_cdf0a981c87f9a916cc7596b70a37d1c66dc177423a3a062d3e2525a28ea3dd7 extends Twig_Template
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
        $__internal_752f0a7f2c1ba687a727433b64925c79b87f7e8719241f867c0720ff75ec2413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752f0a7f2c1ba687a727433b64925c79b87f7e8719241f867c0720ff75ec2413->enter($__internal_752f0a7f2c1ba687a727433b64925c79b87f7e8719241f867c0720ff75ec2413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/binary-search.js"));

        // line 1
        echo "\"use strict\";

var toPosInt = require(\"../../number/to-pos-integer\")
  , callable = require(\"../../object/valid-callable\")
  , value    = require(\"../../object/valid-value\")

  , floor    = Math.floor;

module.exports = function (compareFn) {
\tvar length, low, high, middle;

\tvalue(this);
\tcallable(compareFn);

\tlength = toPosInt(this.length);
\tlow = 0;
\thigh = length - 1;

\twhile (low <= high) {
\t\tmiddle = floor((low + high) / 2);
\t\tif (compareFn(this[middle]) < 0) high = middle - 1;
\t\telse low = middle + 1;
\t}

\tif (high < 0) return 0;
\tif (high >= length) return length - 1;
\treturn high;
};
";
        
        $__internal_752f0a7f2c1ba687a727433b64925c79b87f7e8719241f867c0720ff75ec2413->leave($__internal_752f0a7f2c1ba687a727433b64925c79b87f7e8719241f867c0720ff75ec2413_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/binary-search.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt = require(\"../../number/to-pos-integer\")
  , callable = require(\"../../object/valid-callable\")
  , value    = require(\"../../object/valid-value\")

  , floor    = Math.floor;

module.exports = function (compareFn) {
\tvar length, low, high, middle;

\tvalue(this);
\tcallable(compareFn);

\tlength = toPosInt(this.length);
\tlow = 0;
\thigh = length - 1;

\twhile (low <= high) {
\t\tmiddle = floor((low + high) / 2);
\t\tif (compareFn(this[middle]) < 0) high = middle - 1;
\t\telse low = middle + 1;
\t}

\tif (high < 0) return 0;
\tif (high >= length) return length - 1;
\treturn high;
};
", "node_modules/es5-ext/array/#/binary-search.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/binary-search.js");
    }
}
