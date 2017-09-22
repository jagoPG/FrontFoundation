<?php

/* node_modules/core-js/library/fn/array/unshift.js */
class __TwigTemplate_bc7590824def081c11869618ef3bcd5ba55c38b2395fb3ee5556893961013479 extends Twig_Template
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
        $__internal_2ecb21d2e0b4feb0050cb3a05e8e3cbbd6054736229b2e140a4fc211c967b3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecb21d2e0b4feb0050cb3a05e8e3cbbd6054736229b2e140a4fc211c967b3ab->enter($__internal_2ecb21d2e0b4feb0050cb3a05e8e3cbbd6054736229b2e140a4fc211c967b3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/unshift.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.unshift, arguments);
};
";
        
        $__internal_2ecb21d2e0b4feb0050cb3a05e8e3cbbd6054736229b2e140a4fc211c967b3ab->leave($__internal_2ecb21d2e0b4feb0050cb3a05e8e3cbbd6054736229b2e140a4fc211c967b3ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/unshift.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.unshift, arguments);
};
", "node_modules/core-js/library/fn/array/unshift.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/unshift.js");
    }
}
