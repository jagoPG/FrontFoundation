<?php

/* node_modules/core-js/modules/es7.math.radians.js */
class __TwigTemplate_3a3bd941c5972529e412d5dda300f4e9f57ba68d9c69b8a6913ae4a2950d2687 extends Twig_Template
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
        $__internal_a8cc95536bbe64032c8b369bc54062588feb79ba5a6e8cb8243916eb35baed3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cc95536bbe64032c8b369bc54062588feb79ba5a6e8cb8243916eb35baed3b->enter($__internal_a8cc95536bbe64032c8b369bc54062588feb79ba5a6e8cb8243916eb35baed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.radians.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var DEG_PER_RAD = Math.PI / 180;

\$export(\$export.S, 'Math', {
  radians: function radians(degrees) {
    return degrees * DEG_PER_RAD;
  }
});
";
        
        $__internal_a8cc95536bbe64032c8b369bc54062588feb79ba5a6e8cb8243916eb35baed3b->leave($__internal_a8cc95536bbe64032c8b369bc54062588feb79ba5a6e8cb8243916eb35baed3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.radians.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var DEG_PER_RAD = Math.PI / 180;

\$export(\$export.S, 'Math', {
  radians: function radians(degrees) {
    return degrees * DEG_PER_RAD;
  }
});
", "node_modules/core-js/modules/es7.math.radians.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.radians.js");
    }
}
