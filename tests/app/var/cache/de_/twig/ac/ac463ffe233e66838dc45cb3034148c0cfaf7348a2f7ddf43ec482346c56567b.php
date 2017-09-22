<?php

/* node_modules/core-js/library/modules/es6.string.trim.js */
class __TwigTemplate_b7c33cfc21e39c87f6291131dd817eeb975fa5d153d372982937fda9773c625a extends Twig_Template
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
        $__internal_620bc78477e5ad442269eae7b4bf36b652461eb04308aca0668f8c6e69957c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620bc78477e5ad442269eae7b4bf36b652461eb04308aca0668f8c6e69957c7e->enter($__internal_620bc78477e5ad442269eae7b4bf36b652461eb04308aca0668f8c6e69957c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.trim.js"));

        // line 1
        echo "'use strict';
// 21.1.3.25 String.prototype.trim()
require('./_string-trim')('trim', function (\$trim) {
  return function trim() {
    return \$trim(this, 3);
  };
});
";
        
        $__internal_620bc78477e5ad442269eae7b4bf36b652461eb04308aca0668f8c6e69957c7e->leave($__internal_620bc78477e5ad442269eae7b4bf36b652461eb04308aca0668f8c6e69957c7e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 21.1.3.25 String.prototype.trim()
require('./_string-trim')('trim', function (\$trim) {
  return function trim() {
    return \$trim(this, 3);
  };
});
", "node_modules/core-js/library/modules/es6.string.trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.trim.js");
    }
}
