<?php

/* node_modules/builtin-modules/static.js */
class __TwigTemplate_809ddd53d0fc322a36cdba39e86cc54fd77b96ba98ab1652b8f5aa42d9a82996 extends Twig_Template
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
        $__internal_ce9c2f8e4e6461ff45515dd7aae794c556a9a2e09ae19531323a23c37e8338ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9c2f8e4e6461ff45515dd7aae794c556a9a2e09ae19531323a23c37e8338ed->enter($__internal_ce9c2f8e4e6461ff45515dd7aae794c556a9a2e09ae19531323a23c37e8338ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/builtin-modules/static.js"));

        // line 1
        echo "'use strict';
module.exports = require('./builtin-modules.json');
";
        
        $__internal_ce9c2f8e4e6461ff45515dd7aae794c556a9a2e09ae19531323a23c37e8338ed->leave($__internal_ce9c2f8e4e6461ff45515dd7aae794c556a9a2e09ae19531323a23c37e8338ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/builtin-modules/static.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = require('./builtin-modules.json');
", "node_modules/builtin-modules/static.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/builtin-modules/static.js");
    }
}
