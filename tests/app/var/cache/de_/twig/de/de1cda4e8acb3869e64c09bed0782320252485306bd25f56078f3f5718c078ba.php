<?php

/* node_modules/regenerator-runtime/path.js */
class __TwigTemplate_332517e047c04a34db56b34bf4ffab212dd1cfb860df2b30461ff8d1f71df9a2 extends Twig_Template
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
        $__internal_309054ce20e2578f91d1516587d56e844b4bcd197034a98a4617dd0266f269b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309054ce20e2578f91d1516587d56e844b4bcd197034a98a4617dd0266f269b8->enter($__internal_309054ce20e2578f91d1516587d56e844b4bcd197034a98a4617dd0266f269b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-runtime/path.js"));

        // line 1
        echo "exports.path = require(\"path\").join(
  __dirname,
  \"runtime.js\"
);
";
        
        $__internal_309054ce20e2578f91d1516587d56e844b4bcd197034a98a4617dd0266f269b8->leave($__internal_309054ce20e2578f91d1516587d56e844b4bcd197034a98a4617dd0266f269b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-runtime/path.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.path = require(\"path\").join(
  __dirname,
  \"runtime.js\"
);
", "node_modules/regenerator-runtime/path.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-runtime/path.js");
    }
}
