<?php

/* node_modules/es5-ext/reg-exp/valid-reg-exp.js */
class __TwigTemplate_6c40ae2d511bfd699d50819456d21cd91335e0d2d570c1517948be7c136fa929 extends Twig_Template
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
        $__internal_d957dc6c1b3266b5c42304b81465d934d9bd5f6c538c12301950dc0eda482ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d957dc6c1b3266b5c42304b81465d934d9bd5f6c538c12301950dc0eda482ab3->enter($__internal_d957dc6c1b3266b5c42304b81465d934d9bd5f6c538c12301950dc0eda482ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/valid-reg-exp.js"));

        // line 1
        echo "\"use strict\";

var isRegExp = require(\"./is-reg-exp\");

module.exports = function (value) {
\tif (!isRegExp(value)) throw new TypeError(value + \" is not a RegExp object\");
\treturn value;
};
";
        
        $__internal_d957dc6c1b3266b5c42304b81465d934d9bd5f6c538c12301950dc0eda482ab3->leave($__internal_d957dc6c1b3266b5c42304b81465d934d9bd5f6c538c12301950dc0eda482ab3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/valid-reg-exp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isRegExp = require(\"./is-reg-exp\");

module.exports = function (value) {
\tif (!isRegExp(value)) throw new TypeError(value + \" is not a RegExp object\");
\treturn value;
};
", "node_modules/es5-ext/reg-exp/valid-reg-exp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/valid-reg-exp.js");
    }
}
