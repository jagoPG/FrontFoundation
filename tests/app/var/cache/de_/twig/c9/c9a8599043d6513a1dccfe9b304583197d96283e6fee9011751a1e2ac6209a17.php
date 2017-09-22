<?php

/* node_modules/core-js/library/modules/es7.string.trim-left.js */
class __TwigTemplate_0d937764c6d15d10bcaab0c284265041a7a9fdd8d3fee33f0ef963794e4124ad extends Twig_Template
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
        $__internal_8fe0329fddf2dbd470064018aac3b8eea93e4770494224051d583553c115a1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe0329fddf2dbd470064018aac3b8eea93e4770494224051d583553c115a1d2->enter($__internal_8fe0329fddf2dbd470064018aac3b8eea93e4770494224051d583553c115a1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.string.trim-left.js"));

        // line 1
        echo "'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimLeft', function (\$trim) {
  return function trimLeft() {
    return \$trim(this, 1);
  };
}, 'trimStart');
";
        
        $__internal_8fe0329fddf2dbd470064018aac3b8eea93e4770494224051d583553c115a1d2->leave($__internal_8fe0329fddf2dbd470064018aac3b8eea93e4770494224051d583553c115a1d2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.string.trim-left.js";
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
", "node_modules/core-js/library/modules/es7.string.trim-left.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.string.trim-left.js");
    }
}
