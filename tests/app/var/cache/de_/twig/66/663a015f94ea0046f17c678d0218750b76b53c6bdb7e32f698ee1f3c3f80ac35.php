<?php

/* node_modules/core-js/modules/es6.number.is-safe-integer.js */
class __TwigTemplate_65fd58a349f7179a535ee9743d432e5dd425bf3e664f766122170f4842f27f03 extends Twig_Template
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
        $__internal_deea6a48200ea7b7c0517d31c364110157fdd529556ca50f2eebd0e6a17476fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deea6a48200ea7b7c0517d31c364110157fdd529556ca50f2eebd0e6a17476fd->enter($__internal_deea6a48200ea7b7c0517d31c364110157fdd529556ca50f2eebd0e6a17476fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.is-safe-integer.js"));

        // line 1
        echo "// 20.1.2.5 Number.isSafeInteger(number)
var \$export = require('./_export');
var isInteger = require('./_is-integer');
var abs = Math.abs;

\$export(\$export.S, 'Number', {
  isSafeInteger: function isSafeInteger(number) {
    return isInteger(number) && abs(number) <= 0x1fffffffffffff;
  }
});
";
        
        $__internal_deea6a48200ea7b7c0517d31c364110157fdd529556ca50f2eebd0e6a17476fd->leave($__internal_deea6a48200ea7b7c0517d31c364110157fdd529556ca50f2eebd0e6a17476fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.is-safe-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.5 Number.isSafeInteger(number)
var \$export = require('./_export');
var isInteger = require('./_is-integer');
var abs = Math.abs;

\$export(\$export.S, 'Number', {
  isSafeInteger: function isSafeInteger(number) {
    return isInteger(number) && abs(number) <= 0x1fffffffffffff;
  }
});
", "node_modules/core-js/modules/es6.number.is-safe-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.is-safe-integer.js");
    }
}
