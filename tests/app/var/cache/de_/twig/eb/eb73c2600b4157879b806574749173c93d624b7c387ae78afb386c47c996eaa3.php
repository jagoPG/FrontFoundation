<?php

/* node_modules/core-js/library/web/index.js */
class __TwigTemplate_60308553ccc5df8dd302de17aa9486a4c3f1e007f2ee0093373b418519211745 extends Twig_Template
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
        $__internal_351700edbd8104c639aec52298b270029de70fb8e9dd7cec027e432b70b106c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351700edbd8104c639aec52298b270029de70fb8e9dd7cec027e432b70b106c4->enter($__internal_351700edbd8104c639aec52298b270029de70fb8e9dd7cec027e432b70b106c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/web/index.js"));

        // line 1
        echo "require('../modules/web.timers');
require('../modules/web.immediate');
require('../modules/web.dom.iterable');
module.exports = require('../modules/_core');
";
        
        $__internal_351700edbd8104c639aec52298b270029de70fb8e9dd7cec027e432b70b106c4->leave($__internal_351700edbd8104c639aec52298b270029de70fb8e9dd7cec027e432b70b106c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/web/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
require('../modules/web.immediate');
require('../modules/web.dom.iterable');
module.exports = require('../modules/_core');
", "node_modules/core-js/library/web/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/web/index.js");
    }
}
