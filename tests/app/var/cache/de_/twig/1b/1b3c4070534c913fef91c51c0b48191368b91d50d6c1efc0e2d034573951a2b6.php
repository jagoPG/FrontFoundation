<?php

/* node_modules/core-js/library/modules/es6.string.fontsize.js */
class __TwigTemplate_29f00209b9a5d1a1598937e89e9f3a9c4d9351a2d77a89de1f6a89b129283b3f extends Twig_Template
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
        $__internal_6bdb44248912a93f5f1df9fbc504b96f416c7599e40d00ee71661e7237ca9331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdb44248912a93f5f1df9fbc504b96f416c7599e40d00ee71661e7237ca9331->enter($__internal_6bdb44248912a93f5f1df9fbc504b96f416c7599e40d00ee71661e7237ca9331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.fontsize.js"));

        // line 1
        echo "'use strict';
// B.2.3.8 String.prototype.fontsize(size)
require('./_string-html')('fontsize', function (createHTML) {
  return function fontsize(size) {
    return createHTML(this, 'font', 'size', size);
  };
});
";
        
        $__internal_6bdb44248912a93f5f1df9fbc504b96f416c7599e40d00ee71661e7237ca9331->leave($__internal_6bdb44248912a93f5f1df9fbc504b96f416c7599e40d00ee71661e7237ca9331_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.fontsize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.8 String.prototype.fontsize(size)
require('./_string-html')('fontsize', function (createHTML) {
  return function fontsize(size) {
    return createHTML(this, 'font', 'size', size);
  };
});
", "node_modules/core-js/library/modules/es6.string.fontsize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.fontsize.js");
    }
}
