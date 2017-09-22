<?php

/* node_modules/core-js/web/index.js */
class __TwigTemplate_8b68bbe5a24a7647cfe61c3b0a5ecdf6349c609cf8e0cda53b378c0b775ac36b extends Twig_Template
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
        $__internal_dcb509879bee8095cf980a54a1d062cd87939bdcc0b79eae29e0453957636b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb509879bee8095cf980a54a1d062cd87939bdcc0b79eae29e0453957636b3d->enter($__internal_dcb509879bee8095cf980a54a1d062cd87939bdcc0b79eae29e0453957636b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/web/index.js"));

        // line 1
        echo "require('../modules/web.timers');
require('../modules/web.immediate');
require('../modules/web.dom.iterable');
module.exports = require('../modules/_core');
";
        
        $__internal_dcb509879bee8095cf980a54a1d062cd87939bdcc0b79eae29e0453957636b3d->leave($__internal_dcb509879bee8095cf980a54a1d062cd87939bdcc0b79eae29e0453957636b3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/web/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
require('../modules/web.immediate');
require('../modules/web.dom.iterable');
module.exports = require('../modules/_core');
", "node_modules/core-js/web/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/web/index.js");
    }
}
