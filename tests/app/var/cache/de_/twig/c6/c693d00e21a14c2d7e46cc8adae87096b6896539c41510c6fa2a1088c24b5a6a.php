<?php

/* node_modules/core-js/library/modules/es6.string.fontcolor.js */
class __TwigTemplate_7ed9b65e50e33d9513e0408ff98681ebebb28b80daad40ed0774b09ae2fc996f extends Twig_Template
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
        $__internal_852d20d6e68359093142398c2518acc786f403df8cf46d539500455ab86ba82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852d20d6e68359093142398c2518acc786f403df8cf46d539500455ab86ba82b->enter($__internal_852d20d6e68359093142398c2518acc786f403df8cf46d539500455ab86ba82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.fontcolor.js"));

        // line 1
        echo "'use strict';
// B.2.3.7 String.prototype.fontcolor(color)
require('./_string-html')('fontcolor', function (createHTML) {
  return function fontcolor(color) {
    return createHTML(this, 'font', 'color', color);
  };
});
";
        
        $__internal_852d20d6e68359093142398c2518acc786f403df8cf46d539500455ab86ba82b->leave($__internal_852d20d6e68359093142398c2518acc786f403df8cf46d539500455ab86ba82b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.fontcolor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.7 String.prototype.fontcolor(color)
require('./_string-html')('fontcolor', function (createHTML) {
  return function fontcolor(color) {
    return createHTML(this, 'font', 'color', color);
  };
});
", "node_modules/core-js/library/modules/es6.string.fontcolor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.fontcolor.js");
    }
}
