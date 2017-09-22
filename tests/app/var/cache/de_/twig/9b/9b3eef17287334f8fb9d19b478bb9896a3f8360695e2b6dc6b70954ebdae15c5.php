<?php

/* node_modules/lodash/fp/util.js */
class __TwigTemplate_628a598d725cdba749831b7ec8e84fc606974c8b3e417c6ffed6a78414c970f2 extends Twig_Template
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
        $__internal_45d5f6bad89fb6c694143616625277fbc5cb4e296718edecaa9991b11c4f79ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d5f6bad89fb6c694143616625277fbc5cb4e296718edecaa9991b11c4f79ff->enter($__internal_45d5f6bad89fb6c694143616625277fbc5cb4e296718edecaa9991b11c4f79ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/util.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../util'));
";
        
        $__internal_45d5f6bad89fb6c694143616625277fbc5cb4e296718edecaa9991b11c4f79ff->leave($__internal_45d5f6bad89fb6c694143616625277fbc5cb4e296718edecaa9991b11c4f79ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/util.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../util'));
", "node_modules/lodash/fp/util.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/util.js");
    }
}
