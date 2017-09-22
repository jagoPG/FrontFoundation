<?php

/* node_modules/core-js/modules/es6.string.fontsize.js */
class __TwigTemplate_d2574e74e5a85ee8961fb275f7c867868e4d462b1aed72b69d4dab864bfe6673 extends Twig_Template
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
        $__internal_35b46dd15fb1a00dd7ec0dbe7585fb9e0039f7748209e6e0a7773d8c64eee6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b46dd15fb1a00dd7ec0dbe7585fb9e0039f7748209e6e0a7773d8c64eee6b9->enter($__internal_35b46dd15fb1a00dd7ec0dbe7585fb9e0039f7748209e6e0a7773d8c64eee6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.fontsize.js"));

        // line 1
        echo "'use strict';
// B.2.3.8 String.prototype.fontsize(size)
require('./_string-html')('fontsize', function (createHTML) {
  return function fontsize(size) {
    return createHTML(this, 'font', 'size', size);
  };
});
";
        
        $__internal_35b46dd15fb1a00dd7ec0dbe7585fb9e0039f7748209e6e0a7773d8c64eee6b9->leave($__internal_35b46dd15fb1a00dd7ec0dbe7585fb9e0039f7748209e6e0a7773d8c64eee6b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.fontsize.js";
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
", "node_modules/core-js/modules/es6.string.fontsize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.fontsize.js");
    }
}
