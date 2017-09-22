<?php

/* node_modules/core-js/library/modules/es6.string.anchor.js */
class __TwigTemplate_132f57622dda37a4fbac1f87fa909872f3992b0426c3b59a7ab677b02f9d549a extends Twig_Template
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
        $__internal_30c84abdf641ee0bde590bd147338b637195d63ddaa59e4d6391f80fa571c6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c84abdf641ee0bde590bd147338b637195d63ddaa59e4d6391f80fa571c6d1->enter($__internal_30c84abdf641ee0bde590bd147338b637195d63ddaa59e4d6391f80fa571c6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.anchor.js"));

        // line 1
        echo "'use strict';
// B.2.3.2 String.prototype.anchor(name)
require('./_string-html')('anchor', function (createHTML) {
  return function anchor(name) {
    return createHTML(this, 'a', 'name', name);
  };
});
";
        
        $__internal_30c84abdf641ee0bde590bd147338b637195d63ddaa59e4d6391f80fa571c6d1->leave($__internal_30c84abdf641ee0bde590bd147338b637195d63ddaa59e4d6391f80fa571c6d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.anchor.js";
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
", "node_modules/core-js/library/modules/es6.string.anchor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.anchor.js");
    }
}
