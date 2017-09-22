<?php

/* node_modules/querystring-es3/index.js */
class __TwigTemplate_787a268c58c6d8bea5220d18727beabe3ebbc173c67e92a9ad69f11e483d17ff extends Twig_Template
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
        $__internal_54757ea3e2931042a5aeaba343f401aa65facf74d8ddc30ce76ddbd83e1e0a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54757ea3e2931042a5aeaba343f401aa65facf74d8ddc30ce76ddbd83e1e0a4e->enter($__internal_54757ea3e2931042a5aeaba343f401aa65facf74d8ddc30ce76ddbd83e1e0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/querystring-es3/index.js"));

        // line 1
        echo "'use strict';

exports.decode = exports.parse = require('./decode');
exports.encode = exports.stringify = require('./encode');
";
        
        $__internal_54757ea3e2931042a5aeaba343f401aa65facf74d8ddc30ce76ddbd83e1e0a4e->leave($__internal_54757ea3e2931042a5aeaba343f401aa65facf74d8ddc30ce76ddbd83e1e0a4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/querystring-es3/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

exports.decode = exports.parse = require('./decode');
exports.encode = exports.stringify = require('./encode');
", "node_modules/querystring-es3/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/querystring-es3/index.js");
    }
}
