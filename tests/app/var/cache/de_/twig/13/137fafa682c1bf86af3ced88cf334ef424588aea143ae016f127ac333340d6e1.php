<?php

/* node_modules/core-js/fn/string/link.js */
class __TwigTemplate_6e05c3e28bbf39d2d330a8215e367f19467891bdcc86e517d222b1b62e398a6c extends Twig_Template
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
        $__internal_a6cd83d263031f2081cb5241cf38c7167ebcd5b8a72e9bc1d95945921a8f047c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cd83d263031f2081cb5241cf38c7167ebcd5b8a72e9bc1d95945921a8f047c->enter($__internal_a6cd83d263031f2081cb5241cf38c7167ebcd5b8a72e9bc1d95945921a8f047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/link.js"));

        // line 1
        echo "require('../../modules/es6.string.link');
module.exports = require('../../modules/_core').String.link;
";
        
        $__internal_a6cd83d263031f2081cb5241cf38c7167ebcd5b8a72e9bc1d95945921a8f047c->leave($__internal_a6cd83d263031f2081cb5241cf38c7167ebcd5b8a72e9bc1d95945921a8f047c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/link.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.link');
module.exports = require('../../modules/_core').String.link;
", "node_modules/core-js/fn/string/link.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/link.js");
    }
}
