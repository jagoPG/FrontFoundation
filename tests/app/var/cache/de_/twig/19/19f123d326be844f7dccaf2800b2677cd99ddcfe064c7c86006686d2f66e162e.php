<?php

/* node_modules/es5-ext/math/hypot/is-implemented.js */
class __TwigTemplate_b9212e3ee297322787ca3480a313d069221ed282aabd475f098b93c3f368d27e extends Twig_Template
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
        $__internal_54b6f53695014952f54676a37b857f2c2cd1aa406dc25ce2a6c704c6851815a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b6f53695014952f54676a37b857f2c2cd1aa406dc25ce2a6c704c6851815a0->enter($__internal_54b6f53695014952f54676a37b857f2c2cd1aa406dc25ce2a6c704c6851815a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/hypot/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar hypot = Math.hypot;
\tif (typeof hypot !== \"function\") return false;
\treturn hypot(3, 4) === 5;
};
";
        
        $__internal_54b6f53695014952f54676a37b857f2c2cd1aa406dc25ce2a6c704c6851815a0->leave($__internal_54b6f53695014952f54676a37b857f2c2cd1aa406dc25ce2a6c704c6851815a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/hypot/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar hypot = Math.hypot;
\tif (typeof hypot !== \"function\") return false;
\treturn hypot(3, 4) === 5;
};
", "node_modules/es5-ext/math/hypot/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/hypot/is-implemented.js");
    }
}
