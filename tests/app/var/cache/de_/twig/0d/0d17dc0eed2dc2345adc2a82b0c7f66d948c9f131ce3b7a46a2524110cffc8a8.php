<?php

/* node_modules/core-js/library/core/dict.js */
class __TwigTemplate_aa27fea1e2bd32b8477a463f4081b0f2ea436ae40a1d0a64f723ba960e9034c3 extends Twig_Template
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
        $__internal_41b67694cbb9ae297f64f25fa8207ba1d94864c9847256730c46945f1d824082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b67694cbb9ae297f64f25fa8207ba1d94864c9847256730c46945f1d824082->enter($__internal_41b67694cbb9ae297f64f25fa8207ba1d94864c9847256730c46945f1d824082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/dict.js"));

        // line 1
        echo "require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
";
        
        $__internal_41b67694cbb9ae297f64f25fa8207ba1d94864c9847256730c46945f1d824082->leave($__internal_41b67694cbb9ae297f64f25fa8207ba1d94864c9847256730c46945f1d824082_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/dict.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
", "node_modules/core-js/library/core/dict.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/dict.js");
    }
}
