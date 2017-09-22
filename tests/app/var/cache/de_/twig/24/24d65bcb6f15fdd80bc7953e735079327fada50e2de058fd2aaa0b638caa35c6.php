<?php

/* node_modules/fsevents/node_modules/sntp/Makefile */
class __TwigTemplate_364c4e20bd980ab85b5e86ba84b7efbd14fd76405cb0358cc021d4091a865b51 extends Twig_Template
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
        $__internal_f112241fc8dd343128e50f91bdfac419c9b3fbb586620c53081572cb61783fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f112241fc8dd343128e50f91bdfac419c9b3fbb586620c53081572cb61783fe8->enter($__internal_f112241fc8dd343128e50f91bdfac419c9b3fbb586620c53081572cb61783fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sntp/Makefile"));

        // line 1
        echo "test:
\t@node node_modules/lab/bin/lab
test-cov: 
\t@node node_modules/lab/bin/lab -t 100 -m 3000
test-cov-html:
\t@node node_modules/lab/bin/lab -r html -o coverage.html

.PHONY: test test-cov test-cov-html

";
        
        $__internal_f112241fc8dd343128e50f91bdfac419c9b3fbb586620c53081572cb61783fe8->leave($__internal_f112241fc8dd343128e50f91bdfac419c9b3fbb586620c53081572cb61783fe8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sntp/Makefile";
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

", "node_modules/fsevents/node_modules/sntp/Makefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sntp/Makefile");
    }
}
