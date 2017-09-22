<?php

/* node_modules/gauge/process.js */
class __TwigTemplate_5b29238a74603ce31fa8d8245076ba80269ddf0724b217dd0015296d1eeb008d extends Twig_Template
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
        $__internal_8a53e22ba0e85581ea179a0a654e1d0eb44731c10794ce218821245750ea508e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a53e22ba0e85581ea179a0a654e1d0eb44731c10794ce218821245750ea508e->enter($__internal_8a53e22ba0e85581ea179a0a654e1d0eb44731c10794ce218821245750ea508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/process.js"));

        // line 1
        echo "'use strict'
// this exists so we can replace it during testing
module.exports = process
";
        
        $__internal_8a53e22ba0e85581ea179a0a654e1d0eb44731c10794ce218821245750ea508e->leave($__internal_8a53e22ba0e85581ea179a0a654e1d0eb44731c10794ce218821245750ea508e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/process.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
// this exists so we can replace it during testing
module.exports = process
", "node_modules/gauge/process.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/process.js");
    }
}
