<?php

/* node_modules/loose-envify/index.js */
class __TwigTemplate_969ed0e8348a1f783af2092e08c63255764fb8c8084497614233cea021016bac extends Twig_Template
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
        $__internal_f2372c91ba91f6f48469f3bcf471eb6ca8c5a1fe142eadd4e1ff0c1a48e89064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2372c91ba91f6f48469f3bcf471eb6ca8c5a1fe142eadd4e1ff0c1a48e89064->enter($__internal_f2372c91ba91f6f48469f3bcf471eb6ca8c5a1fe142eadd4e1ff0c1a48e89064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loose-envify/index.js"));

        // line 1
        echo "'use strict';

module.exports = require('./loose-envify')(process.env);
";
        
        $__internal_f2372c91ba91f6f48469f3bcf471eb6ca8c5a1fe142eadd4e1ff0c1a48e89064->leave($__internal_f2372c91ba91f6f48469f3bcf471eb6ca8c5a1fe142eadd4e1ff0c1a48e89064_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loose-envify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = require('./loose-envify')(process.env);
", "node_modules/loose-envify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loose-envify/index.js");
    }
}
