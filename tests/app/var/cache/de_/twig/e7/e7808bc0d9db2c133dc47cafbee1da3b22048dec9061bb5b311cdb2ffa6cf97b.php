<?php

/* node_modules/core-js/library/stage/3.js */
class __TwigTemplate_7c2c64b0fe515310e7c5a79ae1a0d35b7c4214bf8119f911e574125f7cf500ba extends Twig_Template
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
        $__internal_f8fe1a82afd794df29cf8f6f68db9fb5e3a9c7d3d60b1ac2e829bd7016883702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fe1a82afd794df29cf8f6f68db9fb5e3a9c7d3d60b1ac2e829bd7016883702->enter($__internal_f8fe1a82afd794df29cf8f6f68db9fb5e3a9c7d3d60b1ac2e829bd7016883702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/stage/3.js"));

        // line 1
        echo "require('../modules/es7.global');
require('../modules/es7.system.global');
require('../modules/es7.promise.finally');
module.exports = require('./4');
";
        
        $__internal_f8fe1a82afd794df29cf8f6f68db9fb5e3a9c7d3d60b1ac2e829bd7016883702->leave($__internal_f8fe1a82afd794df29cf8f6f68db9fb5e3a9c7d3d60b1ac2e829bd7016883702_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/stage/3.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.global');
require('../modules/es7.system.global');
require('../modules/es7.promise.finally');
module.exports = require('./4');
", "node_modules/core-js/library/stage/3.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/stage/3.js");
    }
}
