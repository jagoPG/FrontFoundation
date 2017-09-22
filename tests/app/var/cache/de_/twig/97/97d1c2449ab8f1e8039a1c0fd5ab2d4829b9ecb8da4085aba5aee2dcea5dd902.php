<?php

/* node_modules/des.js/test/fixtures.js */
class __TwigTemplate_9b51179ee651017ece76b6b4249f8815b07fbcc49bd8370878c1259e94bc6c9f extends Twig_Template
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
        $__internal_be004ccf79e1340e1e672e223a9d7b0f6f7001c3fd4d28f5f61dc97a3331cecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be004ccf79e1340e1e672e223a9d7b0f6f7001c3fd4d28f5f61dc97a3331cecf->enter($__internal_be004ccf79e1340e1e672e223a9d7b0f6f7001c3fd4d28f5f61dc97a3331cecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/des.js/test/fixtures.js"));

        // line 1
        echo "'use strict';

exports.bin = function bin(str) {
  return parseInt(str.replace(/[^01]/g, ''), 2);
}
";
        
        $__internal_be004ccf79e1340e1e672e223a9d7b0f6f7001c3fd4d28f5f61dc97a3331cecf->leave($__internal_be004ccf79e1340e1e672e223a9d7b0f6f7001c3fd4d28f5f61dc97a3331cecf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/des.js/test/fixtures.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

exports.bin = function bin(str) {
  return parseInt(str.replace(/[^01]/g, ''), 2);
}
", "node_modules/des.js/test/fixtures.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/des.js/test/fixtures.js");
    }
}
