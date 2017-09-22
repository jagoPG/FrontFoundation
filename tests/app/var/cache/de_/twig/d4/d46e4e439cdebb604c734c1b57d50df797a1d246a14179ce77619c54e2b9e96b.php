<?php

/* node_modules/core-js/es7/global.js */
class __TwigTemplate_277437d837b92cb21ddb1e5d542443e17f17ea7a21578bac99b0db1ce00fdc48 extends Twig_Template
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
        $__internal_d7473f2af586b56740d71e7d766938e94e398cb323913b833d9204dee7fdadd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7473f2af586b56740d71e7d766938e94e398cb323913b833d9204dee7fdadd3->enter($__internal_d7473f2af586b56740d71e7d766938e94e398cb323913b833d9204dee7fdadd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/global.js"));

        // line 1
        echo "require('../modules/es7.global');
module.exports = require('../modules/_core').global;
";
        
        $__internal_d7473f2af586b56740d71e7d766938e94e398cb323913b833d9204dee7fdadd3->leave($__internal_d7473f2af586b56740d71e7d766938e94e398cb323913b833d9204dee7fdadd3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.global');
module.exports = require('../modules/_core').global;
", "node_modules/core-js/es7/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/global.js");
    }
}
