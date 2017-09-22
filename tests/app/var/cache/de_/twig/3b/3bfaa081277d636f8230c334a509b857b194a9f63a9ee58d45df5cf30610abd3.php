<?php

/* node_modules/core-js/modules/es7.object.entries.js */
class __TwigTemplate_2882aa2bf87779916c82517ed96d3edd2286981d18955d1de58315820561316e extends Twig_Template
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
        $__internal_f0fe22b42349f9dd0dfee95c6b49485deeac0e2bfbe4d8826cd598013be95669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fe22b42349f9dd0dfee95c6b49485deeac0e2bfbe4d8826cd598013be95669->enter($__internal_f0fe22b42349f9dd0dfee95c6b49485deeac0e2bfbe4d8826cd598013be95669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.entries.js"));

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
        
        $__internal_f0fe22b42349f9dd0dfee95c6b49485deeac0e2bfbe4d8826cd598013be95669->leave($__internal_f0fe22b42349f9dd0dfee95c6b49485deeac0e2bfbe4d8826cd598013be95669_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.entries.js";
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
", "node_modules/core-js/modules/es7.object.entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.entries.js");
    }
}
