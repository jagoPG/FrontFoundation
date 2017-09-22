<?php

/* node_modules/core-js/library/modules/es6.reflect.get-prototype-of.js */
class __TwigTemplate_62ec8881c4e559bd119a4a68e4f4b23076ef26066e1088229ddfdac5b38271b1 extends Twig_Template
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
        $__internal_44bd3b82c3aaf8d2e7d608ddb63ca2139cfed40f3249672542b5594617557d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bd3b82c3aaf8d2e7d608ddb63ca2139cfed40f3249672542b5594617557d9e->enter($__internal_44bd3b82c3aaf8d2e7d608ddb63ca2139cfed40f3249672542b5594617557d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.get-prototype-of.js"));

        // line 1
        echo "// 26.1.8 Reflect.getPrototypeOf(target)
var \$export = require('./_export');
var getProto = require('./_object-gpo');
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  getPrototypeOf: function getPrototypeOf(target) {
    return getProto(anObject(target));
  }
});
";
        
        $__internal_44bd3b82c3aaf8d2e7d608ddb63ca2139cfed40f3249672542b5594617557d9e->leave($__internal_44bd3b82c3aaf8d2e7d608ddb63ca2139cfed40f3249672542b5594617557d9e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.get-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.8 Reflect.getPrototypeOf(target)
var \$export = require('./_export');
var getProto = require('./_object-gpo');
var anObject = require('./_an-object');

\$export(\$export.S, 'Reflect', {
  getPrototypeOf: function getPrototypeOf(target) {
    return getProto(anObject(target));
  }
});
", "node_modules/core-js/library/modules/es6.reflect.get-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.get-prototype-of.js");
    }
}
