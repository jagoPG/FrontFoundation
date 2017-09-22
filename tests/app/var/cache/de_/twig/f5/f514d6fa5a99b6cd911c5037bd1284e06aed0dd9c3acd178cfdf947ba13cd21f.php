<?php

/* node_modules/core-js/modules/es7.math.degrees.js */
class __TwigTemplate_367d0746c0aeb06dd6f9be24c89e267327095b2849d315de929e7f8568405bc8 extends Twig_Template
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
        $__internal_06d87cbdc9ed251f16608621ee103cc3f1341a64e813130aee44cfb14a75d734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d87cbdc9ed251f16608621ee103cc3f1341a64e813130aee44cfb14a75d734->enter($__internal_06d87cbdc9ed251f16608621ee103cc3f1341a64e813130aee44cfb14a75d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.degrees.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var RAD_PER_DEG = 180 / Math.PI;

\$export(\$export.S, 'Math', {
  degrees: function degrees(radians) {
    return radians * RAD_PER_DEG;
  }
});
";
        
        $__internal_06d87cbdc9ed251f16608621ee103cc3f1341a64e813130aee44cfb14a75d734->leave($__internal_06d87cbdc9ed251f16608621ee103cc3f1341a64e813130aee44cfb14a75d734_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.degrees.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var RAD_PER_DEG = 180 / Math.PI;

\$export(\$export.S, 'Math', {
  degrees: function degrees(radians) {
    return radians * RAD_PER_DEG;
  }
});
", "node_modules/core-js/modules/es7.math.degrees.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.degrees.js");
    }
}
