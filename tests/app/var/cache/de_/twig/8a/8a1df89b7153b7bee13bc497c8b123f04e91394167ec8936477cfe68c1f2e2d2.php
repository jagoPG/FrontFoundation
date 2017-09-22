<?php

/* node_modules/sntp/Makefile */
class __TwigTemplate_a0fb1f4e3e89e2e3384183ccdaa8914a3f9f0f83a22121184000abdf1f8de605 extends Twig_Template
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
        $__internal_ac419d494497d70efe591a5da448799291d2744d0c426e7649ee7fec87e5b0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac419d494497d70efe591a5da448799291d2744d0c426e7649ee7fec87e5b0dc->enter($__internal_ac419d494497d70efe591a5da448799291d2744d0c426e7649ee7fec87e5b0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sntp/Makefile"));

        // line 1
        echo "test:
\t@node node_modules/lab/bin/lab
test-cov: 
\t@node node_modules/lab/bin/lab -t 100 -m 3000
test-cov-html:
\t@node node_modules/lab/bin/lab -r html -o coverage.html

.PHONY: test test-cov test-cov-html

";
        
        $__internal_ac419d494497d70efe591a5da448799291d2744d0c426e7649ee7fec87e5b0dc->leave($__internal_ac419d494497d70efe591a5da448799291d2744d0c426e7649ee7fec87e5b0dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sntp/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("test:
\t@node node_modules/lab/bin/lab
test-cov: 
\t@node node_modules/lab/bin/lab -t 100 -m 3000
test-cov-html:
\t@node node_modules/lab/bin/lab -r html -o coverage.html

.PHONY: test test-cov test-cov-html

", "node_modules/sntp/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sntp/Makefile");
    }
}
