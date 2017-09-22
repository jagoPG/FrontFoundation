<?php

/* node_modules/core-js/modules/es7.string.trim-right.js */
class __TwigTemplate_e081187243540766f15cd81939f98fd21dc00b29e268ed735d1c1590d154c02b extends Twig_Template
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
        $__internal_307e130dfff65f56c893eaf3d96388464beb8ebe1a7799168025c0abe890e536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307e130dfff65f56c893eaf3d96388464beb8ebe1a7799168025c0abe890e536->enter($__internal_307e130dfff65f56c893eaf3d96388464beb8ebe1a7799168025c0abe890e536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.string.trim-right.js"));

        // line 1
        echo "'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimRight', function (\$trim) {
  return function trimRight() {
    return \$trim(this, 2);
  };
}, 'trimEnd');
";
        
        $__internal_307e130dfff65f56c893eaf3d96388464beb8ebe1a7799168025c0abe890e536->leave($__internal_307e130dfff65f56c893eaf3d96388464beb8ebe1a7799168025c0abe890e536_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.string.trim-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimRight', function (\$trim) {
  return function trimRight() {
    return \$trim(this, 2);
  };
}, 'trimEnd');
", "node_modules/core-js/modules/es7.string.trim-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.string.trim-right.js");
    }
}
