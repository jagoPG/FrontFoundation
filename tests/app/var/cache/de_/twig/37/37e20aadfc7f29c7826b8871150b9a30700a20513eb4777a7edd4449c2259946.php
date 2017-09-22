<?php

/* node_modules/core-js/fn/object/define-property.js */
class __TwigTemplate_800241974178a471eaaa9ba13801b01718e146ce1f4fa57e2360a45e2823aee7 extends Twig_Template
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
        $__internal_ad07826627f076c12f388b51d1b1b1f621f853dec19c6e4e25b55ca5435abf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad07826627f076c12f388b51d1b1b1f621f853dec19c6e4e25b55ca5435abf40->enter($__internal_ad07826627f076c12f388b51d1b1b1f621f853dec19c6e4e25b55ca5435abf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/define-property.js"));

        // line 1
        echo "require('../../modules/es6.object.define-property');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperty(it, key, desc) {
  return \$Object.defineProperty(it, key, desc);
};
";
        
        $__internal_ad07826627f076c12f388b51d1b1b1f621f853dec19c6e4e25b55ca5435abf40->leave($__internal_ad07826627f076c12f388b51d1b1b1f621f853dec19c6e4e25b55ca5435abf40_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/define-property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.define-property');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperty(it, key, desc) {
  return \$Object.defineProperty(it, key, desc);
};
", "node_modules/core-js/fn/object/define-property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/define-property.js");
    }
}
