<?php

/* node_modules/fsevents/node_modules/ansi-regex/index.js */
class __TwigTemplate_1a7806d13af5097d2791c4842e7f75a9b376192c676933b67215b03f1fe07e4b extends Twig_Template
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
        $__internal_eeb872074a01b198e197d397ec5eb012683963f6184b61d6b780d8cfad1c8944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb872074a01b198e197d397ec5eb012683963f6184b61d6b780d8cfad1c8944->enter($__internal_eeb872074a01b198e197d397ec5eb012683963f6184b61d6b780d8cfad1c8944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ansi-regex/index.js"));

        // line 1
        echo "'use strict';
module.exports = function () {
\treturn /[\\u001b\\u009b][[()#;?]*(?:[0-9]{1,4}(?:;[0-9]{0,4})*)?[0-9A-PRZcf-nqry=><]/g;
};
";
        
        $__internal_eeb872074a01b198e197d397ec5eb012683963f6184b61d6b780d8cfad1c8944->leave($__internal_eeb872074a01b198e197d397ec5eb012683963f6184b61d6b780d8cfad1c8944_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ansi-regex/index.js";
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
", "node_modules/fsevents/node_modules/ansi-regex/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ansi-regex/index.js");
    }
}
