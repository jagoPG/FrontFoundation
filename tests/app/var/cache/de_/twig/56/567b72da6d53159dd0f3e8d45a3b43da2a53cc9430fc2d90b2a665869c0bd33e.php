<?php

/* node_modules/babel-types/lib/definitions/init.js */
class __TwigTemplate_fe11fbe0fc065e10fa9eca1c6a006e7807ff17e9554f55fa3f18e9950d42db62 extends Twig_Template
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
        $__internal_cd21923ab8e97a65732add3c32431bcfff24b428aa6e483bec08221ed62c1fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd21923ab8e97a65732add3c32431bcfff24b428aa6e483bec08221ed62c1fc1->enter($__internal_cd21923ab8e97a65732add3c32431bcfff24b428aa6e483bec08221ed62c1fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/definitions/init.js"));

        // line 1
        echo "\"use strict\";

require(\"./index\");

require(\"./core\");

require(\"./es2015\");

require(\"./flow\");

require(\"./jsx\");

require(\"./misc\");

require(\"./experimental\");";
        
        $__internal_cd21923ab8e97a65732add3c32431bcfff24b428aa6e483bec08221ed62c1fc1->leave($__internal_cd21923ab8e97a65732add3c32431bcfff24b428aa6e483bec08221ed62c1fc1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/definitions/init.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

require(\"./index\");

require(\"./core\");

require(\"./es2015\");

require(\"./flow\");

require(\"./jsx\");

require(\"./misc\");

require(\"./experimental\");", "node_modules/babel-types/lib/definitions/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/definitions/init.js");
    }
}
