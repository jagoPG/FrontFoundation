<?php

/* node_modules/core-js/modules/es6.date.to-primitive.js */
class __TwigTemplate_5e0fba3942c04758abd6ff62e9050aa0588871079b0f9508ab6473dad40fb9a3 extends Twig_Template
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
        $__internal_c9eff96e6e325a3414d69df0466f4d4b76bd5ad9bc027369cb746a14b90d2aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9eff96e6e325a3414d69df0466f4d4b76bd5ad9bc027369cb746a14b90d2aab->enter($__internal_c9eff96e6e325a3414d69df0466f4d4b76bd5ad9bc027369cb746a14b90d2aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.date.to-primitive.js"));

        // line 1
        echo "var TO_PRIMITIVE = require('./_wks')('toPrimitive');
var proto = Date.prototype;

if (!(TO_PRIMITIVE in proto)) require('./_hide')(proto, TO_PRIMITIVE, require('./_date-to-primitive'));
";
        
        $__internal_c9eff96e6e325a3414d69df0466f4d4b76bd5ad9bc027369cb746a14b90d2aab->leave($__internal_c9eff96e6e325a3414d69df0466f4d4b76bd5ad9bc027369cb746a14b90d2aab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.date.to-primitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var TO_PRIMITIVE = require('./_wks')('toPrimitive');
var proto = Date.prototype;

if (!(TO_PRIMITIVE in proto)) require('./_hide')(proto, TO_PRIMITIVE, require('./_date-to-primitive'));
", "node_modules/core-js/modules/es6.date.to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.date.to-primitive.js");
    }
}
