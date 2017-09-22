<?php

/* node_modules/core-js/library/modules/es7.object.entries.js */
class __TwigTemplate_5a42044d6607bf8770adf4ac5eb9843f41e7f70ed05cdc614bc4da9b251eef9c extends Twig_Template
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
        $__internal_09432b76afda388aa46d8f2c1e6d5bdadc0e0a79f7949c697b08f0f018ab8493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09432b76afda388aa46d8f2c1e6d5bdadc0e0a79f7949c697b08f0f018ab8493->enter($__internal_09432b76afda388aa46d8f2c1e6d5bdadc0e0a79f7949c697b08f0f018ab8493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.entries.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-object-values-entries
var \$export = require('./_export');
var \$entries = require('./_object-to-array')(true);

\$export(\$export.S, 'Object', {
  entries: function entries(it) {
    return \$entries(it);
  }
});
";
        
        $__internal_09432b76afda388aa46d8f2c1e6d5bdadc0e0a79f7949c697b08f0f018ab8493->leave($__internal_09432b76afda388aa46d8f2c1e6d5bdadc0e0a79f7949c697b08f0f018ab8493_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.entries.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-object-values-entries
var \$export = require('./_export');
var \$entries = require('./_object-to-array')(true);

\$export(\$export.S, 'Object', {
  entries: function entries(it) {
    return \$entries(it);
  }
});
", "node_modules/core-js/library/modules/es7.object.entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.entries.js");
    }
}
