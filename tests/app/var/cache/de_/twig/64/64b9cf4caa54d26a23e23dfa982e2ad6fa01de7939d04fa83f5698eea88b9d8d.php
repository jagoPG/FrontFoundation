<?php

/* node_modules/core-js/modules/es6.string.anchor.js */
class __TwigTemplate_1b784abcf43aba1d4cf1bd3277020c4c33ef290ee0ba119e8bcf9324ebab0b6e extends Twig_Template
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
        $__internal_7831a59be8886ad5ebdf19bedc0c17123c945c0ad78bc865f60bc429c82f765d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7831a59be8886ad5ebdf19bedc0c17123c945c0ad78bc865f60bc429c82f765d->enter($__internal_7831a59be8886ad5ebdf19bedc0c17123c945c0ad78bc865f60bc429c82f765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.anchor.js"));

        // line 1
        echo "'use strict';
// B.2.3.2 String.prototype.anchor(name)
require('./_string-html')('anchor', function (createHTML) {
  return function anchor(name) {
    return createHTML(this, 'a', 'name', name);
  };
});
";
        
        $__internal_7831a59be8886ad5ebdf19bedc0c17123c945c0ad78bc865f60bc429c82f765d->leave($__internal_7831a59be8886ad5ebdf19bedc0c17123c945c0ad78bc865f60bc429c82f765d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.anchor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.2 String.prototype.anchor(name)
require('./_string-html')('anchor', function (createHTML) {
  return function anchor(name) {
    return createHTML(this, 'a', 'name', name);
  };
});
", "node_modules/core-js/modules/es6.string.anchor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.anchor.js");
    }
}
