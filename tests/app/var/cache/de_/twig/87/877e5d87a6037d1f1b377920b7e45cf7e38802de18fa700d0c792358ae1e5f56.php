<?php

/* node_modules/querystring/test/common-index.js */
class __TwigTemplate_c544859ad3714f249b80318c16e885cf67f264c747b02c056f2e426a9bc54954 extends Twig_Template
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
        $__internal_4b015c9321bd6380fc969c046ab83a0c7f709b5784ec27c5855003cdbfd4e785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b015c9321bd6380fc969c046ab83a0c7f709b5784ec27c5855003cdbfd4e785->enter($__internal_4b015c9321bd6380fc969c046ab83a0c7f709b5784ec27c5855003cdbfd4e785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/querystring/test/common-index.js"));

        // line 1
        echo "\"use strict\";

require(\"test\").run(require(\"./index\"))";
        
        $__internal_4b015c9321bd6380fc969c046ab83a0c7f709b5784ec27c5855003cdbfd4e785->leave($__internal_4b015c9321bd6380fc969c046ab83a0c7f709b5784ec27c5855003cdbfd4e785_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/querystring/test/common-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

require(\"test\").run(require(\"./index\"))", "node_modules/querystring/test/common-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/querystring/test/common-index.js");
    }
}
