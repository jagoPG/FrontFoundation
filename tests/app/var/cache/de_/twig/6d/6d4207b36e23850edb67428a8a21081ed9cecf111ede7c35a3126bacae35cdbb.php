<?php

/* node_modules/object-keys/test/index.js */
class __TwigTemplate_149c8fdcf83dac20be71703e1f70ef6eadb6a0dfc2dc3af9f65ad8e90fb38eed extends Twig_Template
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
        $__internal_34fe232b780c3933afdb06927ac7848a38ab2b6465ad0bbb338f08f0cacb632d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fe232b780c3933afdb06927ac7848a38ab2b6465ad0bbb338f08f0cacb632d->enter($__internal_34fe232b780c3933afdb06927ac7848a38ab2b6465ad0bbb338f08f0cacb632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-keys/test/index.js"));

        // line 1
        echo "'use strict';

require('./isArguments');

require('./shim');
";
        
        $__internal_34fe232b780c3933afdb06927ac7848a38ab2b6465ad0bbb338f08f0cacb632d->leave($__internal_34fe232b780c3933afdb06927ac7848a38ab2b6465ad0bbb338f08f0cacb632d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-keys/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

require('./isArguments');

require('./shim');
", "node_modules/object-keys/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-keys/test/index.js");
    }
}
