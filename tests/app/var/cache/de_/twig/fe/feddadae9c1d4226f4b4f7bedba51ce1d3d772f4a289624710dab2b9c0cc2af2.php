<?php

/* node_modules/core-js/library/fn/typed/array-buffer.js */
class __TwigTemplate_9bf2d43b7938b096bf568f025a32d7a0a7bf5c7d5c3d18f50e45b20488675d43 extends Twig_Template
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
        $__internal_712544ef68193730ddf1ec58ef2beb6008223ca4403214b597bb623f354f0718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712544ef68193730ddf1ec58ef2beb6008223ca4403214b597bb623f354f0718->enter($__internal_712544ef68193730ddf1ec58ef2beb6008223ca4403214b597bb623f354f0718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/typed/array-buffer.js"));

        // line 1
        echo "require('../../modules/es6.typed.array-buffer');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').ArrayBuffer;
";
        
        $__internal_712544ef68193730ddf1ec58ef2beb6008223ca4403214b597bb623f354f0718->leave($__internal_712544ef68193730ddf1ec58ef2beb6008223ca4403214b597bb623f354f0718_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/typed/array-buffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.array-buffer');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').ArrayBuffer;
", "node_modules/core-js/library/fn/typed/array-buffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/typed/array-buffer.js");
    }
}
