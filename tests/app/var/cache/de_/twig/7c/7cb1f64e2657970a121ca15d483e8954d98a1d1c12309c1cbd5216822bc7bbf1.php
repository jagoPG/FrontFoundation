<?php

/* node_modules/core-js/modules/es7.object.values.js */
class __TwigTemplate_d4fe29ca28418135ba58152970b032feb181e8fa1d69b1f0581f771318c92479 extends Twig_Template
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
        $__internal_8ef1cb65b830bc475a5ae219df0b7639a1d64d1264549ef4608e787cbb794fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef1cb65b830bc475a5ae219df0b7639a1d64d1264549ef4608e787cbb794fa8->enter($__internal_8ef1cb65b830bc475a5ae219df0b7639a1d64d1264549ef4608e787cbb794fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.values.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-object-values-entries
var \$export = require('./_export');
var \$values = require('./_object-to-array')(false);

\$export(\$export.S, 'Object', {
  values: function values(it) {
    return \$values(it);
  }
});
";
        
        $__internal_8ef1cb65b830bc475a5ae219df0b7639a1d64d1264549ef4608e787cbb794fa8->leave($__internal_8ef1cb65b830bc475a5ae219df0b7639a1d64d1264549ef4608e787cbb794fa8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-object-values-entries
var \$export = require('./_export');
var \$values = require('./_object-to-array')(false);

\$export(\$export.S, 'Object', {
  values: function values(it) {
    return \$values(it);
  }
});
", "node_modules/core-js/modules/es7.object.values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.values.js");
    }
}
