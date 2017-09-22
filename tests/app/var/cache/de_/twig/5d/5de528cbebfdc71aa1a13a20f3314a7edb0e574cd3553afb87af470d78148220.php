<?php

/* node_modules/tape/example/static/build.sh */
class __TwigTemplate_ce3c885d8044d0fdb3144be1db19f88caada7bfbdb89ea9869507b974ea9e052 extends Twig_Template
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
        $__internal_cf0543e5cb4e1e8ea087c6e5330191adfc3c9a6a03e11f88ae7624b245910a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0543e5cb4e1e8ea087c6e5330191adfc3c9a6a03e11f88ae7624b245910a22->enter($__internal_cf0543e5cb4e1e8ea087c6e5330191adfc3c9a6a03e11f88ae7624b245910a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/static/build.sh"));

        // line 1
        echo "#!/bin/bash
browserify ../timing.js -o bundle.js
";
        
        $__internal_cf0543e5cb4e1e8ea087c6e5330191adfc3c9a6a03e11f88ae7624b245910a22->leave($__internal_cf0543e5cb4e1e8ea087c6e5330191adfc3c9a6a03e11f88ae7624b245910a22_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/static/build.sh";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/bin/bash
browserify ../timing.js -o bundle.js
", "node_modules/tape/example/static/build.sh", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/static/build.sh");
    }
}
