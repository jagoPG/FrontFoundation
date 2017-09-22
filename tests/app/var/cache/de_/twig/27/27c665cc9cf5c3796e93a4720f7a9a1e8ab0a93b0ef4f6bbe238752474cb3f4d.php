<?php

/* node_modules/indexof/Makefile */
class __TwigTemplate_70716bb3ee8766274a5d30bb766529da1a2249b1e64f30849ec2aeada0b4d227 extends Twig_Template
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
        $__internal_bf77b8b76ba85d7e9fc12498fbcae0ed88e3c30007c88889c1b64448d7fbfbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf77b8b76ba85d7e9fc12498fbcae0ed88e3c30007c88889c1b64448d7fbfbd5->enter($__internal_bf77b8b76ba85d7e9fc12498fbcae0ed88e3c30007c88889c1b64448d7fbfbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/indexof/Makefile"));

        // line 1
        echo "
build: components index.js
\t@component build

components:
\t@Component install

clean:
\trm -fr build components template.js

.PHONY: clean
";
        
        $__internal_bf77b8b76ba85d7e9fc12498fbcae0ed88e3c30007c88889c1b64448d7fbfbd5->leave($__internal_bf77b8b76ba85d7e9fc12498fbcae0ed88e3c30007c88889c1b64448d7fbfbd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/indexof/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
build: components index.js
\t@component build

components:
\t@Component install

clean:
\trm -fr build components template.js

.PHONY: clean
", "node_modules/indexof/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/indexof/Makefile");
    }
}
