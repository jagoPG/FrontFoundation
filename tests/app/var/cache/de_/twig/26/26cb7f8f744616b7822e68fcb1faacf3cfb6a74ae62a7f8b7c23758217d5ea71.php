<?php

/* node_modules/core-js/modules/_set-collection-of.js */
class __TwigTemplate_ce43e3d67591b0ed36e63900e25e89eec543149c7ee82af845bb94861a218eb3 extends Twig_Template
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
        $__internal_9abe7edd399b78244a61d50b6a96ca83cc18b583b8ccdb19e96f231a05893c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abe7edd399b78244a61d50b6a96ca83cc18b583b8ccdb19e96f231a05893c15->enter($__internal_9abe7edd399b78244a61d50b6a96ca83cc18b583b8ccdb19e96f231a05893c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_set-collection-of.js"));

        // line 1
        echo "'use strict';
// https://tc39.github.io/proposal-setmap-offrom/
var \$export = require('./_export');

module.exports = function (COLLECTION) {
  \$export(\$export.S, COLLECTION, { of: function of() {
    var length = arguments.length;
    var A = Array(length);
    while (length--) A[length] = arguments[length];
    return new this(A);
  } });
};
";
        
        $__internal_9abe7edd399b78244a61d50b6a96ca83cc18b583b8ccdb19e96f231a05893c15->leave($__internal_9abe7edd399b78244a61d50b6a96ca83cc18b583b8ccdb19e96f231a05893c15_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_set-collection-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://tc39.github.io/proposal-setmap-offrom/
var \$export = require('./_export');

module.exports = function (COLLECTION) {
  \$export(\$export.S, COLLECTION, { of: function of() {
    var length = arguments.length;
    var A = Array(length);
    while (length--) A[length] = arguments[length];
    return new this(A);
  } });
};
", "node_modules/core-js/modules/_set-collection-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_set-collection-of.js");
    }
}
