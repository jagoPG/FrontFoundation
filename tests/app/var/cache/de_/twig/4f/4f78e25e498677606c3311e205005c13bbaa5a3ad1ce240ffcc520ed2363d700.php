<?php

/* node_modules/core-js/modules/es7.string.trim-left.js */
class __TwigTemplate_7e9478ba2ad53b5597473657b67b23573fdeb592101bfbae2a87b8465d0ac415 extends Twig_Template
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
        $__internal_42c7e31ce296931757f2e8c3d450f9bb2b8ed00d2ce699292b780b9e64b33ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c7e31ce296931757f2e8c3d450f9bb2b8ed00d2ce699292b780b9e64b33ba3->enter($__internal_42c7e31ce296931757f2e8c3d450f9bb2b8ed00d2ce699292b780b9e64b33ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.string.trim-left.js"));

        // line 1
        echo "'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimLeft', function (\$trim) {
  return function trimLeft() {
    return \$trim(this, 1);
  };
}, 'trimStart');
";
        
        $__internal_42c7e31ce296931757f2e8c3d450f9bb2b8ed00d2ce699292b780b9e64b33ba3->leave($__internal_42c7e31ce296931757f2e8c3d450f9bb2b8ed00d2ce699292b780b9e64b33ba3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.string.trim-left.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimLeft', function (\$trim) {
  return function trimLeft() {
    return \$trim(this, 1);
  };
}, 'trimStart');
", "node_modules/core-js/modules/es7.string.trim-left.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.string.trim-left.js");
    }
}
