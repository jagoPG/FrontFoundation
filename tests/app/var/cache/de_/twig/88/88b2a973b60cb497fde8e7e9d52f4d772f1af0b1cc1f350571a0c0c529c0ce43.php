<?php

/* node_modules/core-js/modules/_global.js */
class __TwigTemplate_ade4203d4a67320646ef01546a702701aed80b6646cc9a9a4a5550ea54e79d64 extends Twig_Template
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
        $__internal_62a4c7ef410e155fbaafa5e7ba31712d6ad90cd7f8008b025c97fca92cbe116a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a4c7ef410e155fbaafa5e7ba31712d6ad90cd7f8008b025c97fca92cbe116a->enter($__internal_62a4c7ef410e155fbaafa5e7ba31712d6ad90cd7f8008b025c97fca92cbe116a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_global.js"));

        // line 1
        echo "// https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
var global = module.exports = typeof window != 'undefined' && window.Math == Math
  ? window : typeof self != 'undefined' && self.Math == Math ? self
  // eslint-disable-next-line no-new-func
  : Function('return this')();
if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef
";
        
        $__internal_62a4c7ef410e155fbaafa5e7ba31712d6ad90cd7f8008b025c97fca92cbe116a->leave($__internal_62a4c7ef410e155fbaafa5e7ba31712d6ad90cd7f8008b025c97fca92cbe116a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
var global = module.exports = typeof window != 'undefined' && window.Math == Math
  ? window : typeof self != 'undefined' && self.Math == Math ? self
  // eslint-disable-next-line no-new-func
  : Function('return this')();
if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef
", "node_modules/core-js/modules/_global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_global.js");
    }
}
