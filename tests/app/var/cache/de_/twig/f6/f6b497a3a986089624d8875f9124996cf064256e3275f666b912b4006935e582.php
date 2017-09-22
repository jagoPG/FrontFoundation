<?php

/* node_modules/core-js/library/es7/error.js */
class __TwigTemplate_31673c60d4201274a46a6e788cefec241e8956db4ea476ecf426672c810bf3cb extends Twig_Template
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
        $__internal_ecbf185a768bcc20531adcb2d54a55bd9d7689c731f1b27c487ca55204ea1ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbf185a768bcc20531adcb2d54a55bd9d7689c731f1b27c487ca55204ea1ada->enter($__internal_ecbf185a768bcc20531adcb2d54a55bd9d7689c731f1b27c487ca55204ea1ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/error.js"));

        // line 1
        echo "require('../modules/es7.error.is-error');
module.exports = require('../modules/_core').Error;
";
        
        $__internal_ecbf185a768bcc20531adcb2d54a55bd9d7689c731f1b27c487ca55204ea1ada->leave($__internal_ecbf185a768bcc20531adcb2d54a55bd9d7689c731f1b27c487ca55204ea1ada_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.error.is-error');
module.exports = require('../modules/_core').Error;
", "node_modules/core-js/library/es7/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/error.js");
    }
}
