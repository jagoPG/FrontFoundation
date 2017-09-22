<?php

/* node_modules/core-js/library/modules/es6.number.is-nan.js */
class __TwigTemplate_cab0d363fbd3c5d7b6a0df0ab50e27e8470f7e4c638e816d8dd0a50523076321 extends Twig_Template
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
        $__internal_b36727760847bf937316fe4bc0cc1e7fb571a77c69070db2e26de87fd7ec829c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36727760847bf937316fe4bc0cc1e7fb571a77c69070db2e26de87fd7ec829c->enter($__internal_b36727760847bf937316fe4bc0cc1e7fb571a77c69070db2e26de87fd7ec829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.number.is-nan.js"));

        // line 1
        echo "// 20.1.2.4 Number.isNaN(number)
var \$export = require('./_export');

\$export(\$export.S, 'Number', {
  isNaN: function isNaN(number) {
    // eslint-disable-next-line no-self-compare
    return number != number;
  }
});
";
        
        $__internal_b36727760847bf937316fe4bc0cc1e7fb571a77c69070db2e26de87fd7ec829c->leave($__internal_b36727760847bf937316fe4bc0cc1e7fb571a77c69070db2e26de87fd7ec829c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.number.is-nan.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.4 Number.isNaN(number)
var \$export = require('./_export');

\$export(\$export.S, 'Number', {
  isNaN: function isNaN(number) {
    // eslint-disable-next-line no-self-compare
    return number != number;
  }
});
", "node_modules/core-js/library/modules/es6.number.is-nan.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.number.is-nan.js");
    }
}
