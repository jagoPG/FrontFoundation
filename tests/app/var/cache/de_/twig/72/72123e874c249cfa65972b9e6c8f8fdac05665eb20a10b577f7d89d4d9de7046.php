<?php

/* node_modules/core-js/library/modules/_global.js */
class __TwigTemplate_9c0847e0eac6cecb0157ed2db9529df7f1b2a0dc8d2b418e3fb7f45fb76e4169 extends Twig_Template
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
        $__internal_507ab041884462ac7f03bb2969af66ae979f419c0958d4a1b0606afb767ec167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507ab041884462ac7f03bb2969af66ae979f419c0958d4a1b0606afb767ec167->enter($__internal_507ab041884462ac7f03bb2969af66ae979f419c0958d4a1b0606afb767ec167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_global.js"));

        // line 1
        echo "// https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
var global = module.exports = typeof window != 'undefined' && window.Math == Math
  ? window : typeof self != 'undefined' && self.Math == Math ? self
  // eslint-disable-next-line no-new-func
  : Function('return this')();
if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef
";
        
        $__internal_507ab041884462ac7f03bb2969af66ae979f419c0958d4a1b0606afb767ec167->leave($__internal_507ab041884462ac7f03bb2969af66ae979f419c0958d4a1b0606afb767ec167_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_global.js";
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
", "node_modules/core-js/library/modules/_global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_global.js");
    }
}
