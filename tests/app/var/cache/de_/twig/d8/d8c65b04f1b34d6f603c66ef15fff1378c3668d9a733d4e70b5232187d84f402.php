<?php

/* node_modules/core-js/library/modules/es7.math.clamp.js */
class __TwigTemplate_f0738c7f322f1b04d4e82e1109b706592d579082387f9bd02e4a359e50516609 extends Twig_Template
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
        $__internal_2bd322ff146180e6dfc57a5b94221d5146b1ae4cc7b947d2a8daf55ac43f0ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd322ff146180e6dfc57a5b94221d5146b1ae4cc7b947d2a8daf55ac43f0ee5->enter($__internal_2bd322ff146180e6dfc57a5b94221d5146b1ae4cc7b947d2a8daf55ac43f0ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.clamp.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clamp: function clamp(x, lower, upper) {
    return Math.min(upper, Math.max(lower, x));
  }
});
";
        
        $__internal_2bd322ff146180e6dfc57a5b94221d5146b1ae4cc7b947d2a8daf55ac43f0ee5->leave($__internal_2bd322ff146180e6dfc57a5b94221d5146b1ae4cc7b947d2a8daf55ac43f0ee5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.clamp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clamp: function clamp(x, lower, upper) {
    return Math.min(upper, Math.max(lower, x));
  }
});
", "node_modules/core-js/library/modules/es7.math.clamp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.clamp.js");
    }
}
