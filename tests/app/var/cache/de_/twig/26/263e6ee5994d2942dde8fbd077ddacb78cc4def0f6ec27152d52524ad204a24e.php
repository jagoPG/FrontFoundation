<?php

/* node_modules/core-js/modules/es6.math.hypot.js */
class __TwigTemplate_0e7a8c77c882732918c64d5b2158121ad985ec67f87303fd23bae55d7cf6c1c1 extends Twig_Template
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
        $__internal_9d0bac40131860b051919befd4b07284cd108567a6352d89e1304cd9721160b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0bac40131860b051919befd4b07284cd108567a6352d89e1304cd9721160b2->enter($__internal_9d0bac40131860b051919befd4b07284cd108567a6352d89e1304cd9721160b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.hypot.js"));

        // line 1
        echo "// 20.2.2.17 Math.hypot([value1[, value2[, … ]]])
var \$export = require('./_export');
var abs = Math.abs;

\$export(\$export.S, 'Math', {
  hypot: function hypot(value1, value2) { // eslint-disable-line no-unused-vars
    var sum = 0;
    var i = 0;
    var aLen = arguments.length;
    var larg = 0;
    var arg, div;
    while (i < aLen) {
      arg = abs(arguments[i++]);
      if (larg < arg) {
        div = larg / arg;
        sum = sum * div * div + 1;
        larg = arg;
      } else if (arg > 0) {
        div = arg / larg;
        sum += div * div;
      } else sum += arg;
    }
    return larg === Infinity ? Infinity : larg * Math.sqrt(sum);
  }
});
";
        
        $__internal_9d0bac40131860b051919befd4b07284cd108567a6352d89e1304cd9721160b2->leave($__internal_9d0bac40131860b051919befd4b07284cd108567a6352d89e1304cd9721160b2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.hypot.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.17 Math.hypot([value1[, value2[, … ]]])
var \$export = require('./_export');
var abs = Math.abs;

\$export(\$export.S, 'Math', {
  hypot: function hypot(value1, value2) { // eslint-disable-line no-unused-vars
    var sum = 0;
    var i = 0;
    var aLen = arguments.length;
    var larg = 0;
    var arg, div;
    while (i < aLen) {
      arg = abs(arguments[i++]);
      if (larg < arg) {
        div = larg / arg;
        sum = sum * div * div + 1;
        larg = arg;
      } else if (arg > 0) {
        div = arg / larg;
        sum += div * div;
      } else sum += arg;
    }
    return larg === Infinity ? Infinity : larg * Math.sqrt(sum);
  }
});
", "node_modules/core-js/modules/es6.math.hypot.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.hypot.js");
    }
}
