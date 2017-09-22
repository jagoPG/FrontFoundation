<?php

/* node_modules/core-js/library/core/string.js */
class __TwigTemplate_e4140b16a54c15f3bed06329ea4354f788e8448721a2b8db71449487d709c5e1 extends Twig_Template
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
        $__internal_e916d5f7fe0c7bcf59e488c7a4ece0903aaaba9d9ed2f4bde6148bf6226b2e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e916d5f7fe0c7bcf59e488c7a4ece0903aaaba9d9ed2f4bde6148bf6226b2e0a->enter($__internal_e916d5f7fe0c7bcf59e488c7a4ece0903aaaba9d9ed2f4bde6148bf6226b2e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/string.js"));

        // line 1
        echo "require('../modules/core.string.escape-html');
require('../modules/core.string.unescape-html');
module.exports = require('../modules/_core').String;
";
        
        $__internal_e916d5f7fe0c7bcf59e488c7a4ece0903aaaba9d9ed2f4bde6148bf6226b2e0a->leave($__internal_e916d5f7fe0c7bcf59e488c7a4ece0903aaaba9d9ed2f4bde6148bf6226b2e0a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.string.escape-html');
require('../modules/core.string.unescape-html');
module.exports = require('../modules/_core').String;
", "node_modules/core-js/library/core/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/string.js");
    }
}
