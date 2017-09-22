<?php

/* node_modules/core-js/modules/es6.math.imul.js */
class __TwigTemplate_a5bd3a60c12bf452cd8a9222cb0b0f793b1910d260ecd3480758179f2a580642 extends Twig_Template
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
        $__internal_563102d315468a2d17b07d9fb41d6bdb32e439ed19a3739235f1e63e8da5c87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563102d315468a2d17b07d9fb41d6bdb32e439ed19a3739235f1e63e8da5c87a->enter($__internal_563102d315468a2d17b07d9fb41d6bdb32e439ed19a3739235f1e63e8da5c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.imul.js"));

        // line 1
        echo "// 20.2.2.18 Math.imul(x, y)
var \$export = require('./_export');
var \$imul = Math.imul;

// some WebKit versions fails with big numbers, some has wrong arity
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  return \$imul(0xffffffff, 5) != -5 || \$imul.length != 2;
}), 'Math', {
  imul: function imul(x, y) {
    var UINT16 = 0xffff;
    var xn = +x;
    var yn = +y;
    var xl = UINT16 & xn;
    var yl = UINT16 & yn;
    return 0 | xl * yl + ((UINT16 & xn >>> 16) * yl + xl * (UINT16 & yn >>> 16) << 16 >>> 0);
  }
});
";
        
        $__internal_563102d315468a2d17b07d9fb41d6bdb32e439ed19a3739235f1e63e8da5c87a->leave($__internal_563102d315468a2d17b07d9fb41d6bdb32e439ed19a3739235f1e63e8da5c87a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.imul.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.18 Math.imul(x, y)
var \$export = require('./_export');
var \$imul = Math.imul;

// some WebKit versions fails with big numbers, some has wrong arity
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  return \$imul(0xffffffff, 5) != -5 || \$imul.length != 2;
}), 'Math', {
  imul: function imul(x, y) {
    var UINT16 = 0xffff;
    var xn = +x;
    var yn = +y;
    var xl = UINT16 & xn;
    var yl = UINT16 & yn;
    return 0 | xl * yl + ((UINT16 & xn >>> 16) * yl + xl * (UINT16 & yn >>> 16) << 16 >>> 0);
  }
});
", "node_modules/core-js/modules/es6.math.imul.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.imul.js");
    }
}
