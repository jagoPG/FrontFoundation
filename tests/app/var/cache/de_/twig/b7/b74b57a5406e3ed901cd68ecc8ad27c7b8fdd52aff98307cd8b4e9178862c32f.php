<?php

/* node_modules/ansi-regex/index.js */
class __TwigTemplate_4adc39bd811ce8c42eae1fb0a6c1d44e1f38405a56b64509fa8799b9d4626d2c extends Twig_Template
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
        $__internal_29b2cf9c50f964bc7afcb39be706d51937b496fa885e32fbf7b96ffbccba6e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b2cf9c50f964bc7afcb39be706d51937b496fa885e32fbf7b96ffbccba6e07->enter($__internal_29b2cf9c50f964bc7afcb39be706d51937b496fa885e32fbf7b96ffbccba6e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ansi-regex/index.js"));

        // line 1
        echo "'use strict';
module.exports = function () {
\treturn /[\\u001b\\u009b][[()#;?]*(?:[0-9]{1,4}(?:;[0-9]{0,4})*)?[0-9A-PRZcf-nqry=><]/g;
};
";
        
        $__internal_29b2cf9c50f964bc7afcb39be706d51937b496fa885e32fbf7b96ffbccba6e07->leave($__internal_29b2cf9c50f964bc7afcb39be706d51937b496fa885e32fbf7b96ffbccba6e07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ansi-regex/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function () {
\treturn /[\\u001b\\u009b][[()#;?]*(?:[0-9]{1,4}(?:;[0-9]{0,4})*)?[0-9A-PRZcf-nqry=><]/g;
};
", "node_modules/ansi-regex/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ansi-regex/index.js");
    }
}
