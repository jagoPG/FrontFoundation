<?php

/* node_modules/core-js/library/web/timers.js */
class __TwigTemplate_210200400a5f8aa6e965c720cb019cc8b8a7f001b7c005b55f9a854abf9b3e81 extends Twig_Template
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
        $__internal_81cde81aa6b09ffbadd177b0478029fece2ad7f9b9641e424163e955c54af53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cde81aa6b09ffbadd177b0478029fece2ad7f9b9641e424163e955c54af53b->enter($__internal_81cde81aa6b09ffbadd177b0478029fece2ad7f9b9641e424163e955c54af53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/web/timers.js"));

        // line 1
        echo "require('../modules/web.timers');
module.exports = require('../modules/_core');
";
        
        $__internal_81cde81aa6b09ffbadd177b0478029fece2ad7f9b9641e424163e955c54af53b->leave($__internal_81cde81aa6b09ffbadd177b0478029fece2ad7f9b9641e424163e955c54af53b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/web/timers.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
module.exports = require('../modules/_core');
", "node_modules/core-js/library/web/timers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/web/timers.js");
    }
}
