<?php

/* node_modules/elliptic/lib/elliptic/curve/index.js */
class __TwigTemplate_d132a508353934653cb00d84abbad26f3f8ceb78842bcaf8062cd7d5b4c27ce8 extends Twig_Template
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
        $__internal_64c7be310a577e17a8ff001ddc12f2196fae81c0965fb1d2a4903489309816c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c7be310a577e17a8ff001ddc12f2196fae81c0965fb1d2a4903489309816c5->enter($__internal_64c7be310a577e17a8ff001ddc12f2196fae81c0965fb1d2a4903489309816c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/elliptic/lib/elliptic/curve/index.js"));

        // line 1
        echo "'use strict';

var curve = exports;

curve.base = require('./base');
curve.short = require('./short');
curve.mont = require('./mont');
curve.edwards = require('./edwards');
";
        
        $__internal_64c7be310a577e17a8ff001ddc12f2196fae81c0965fb1d2a4903489309816c5->leave($__internal_64c7be310a577e17a8ff001ddc12f2196fae81c0965fb1d2a4903489309816c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/elliptic/lib/elliptic/curve/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var curve = exports;

curve.base = require('./base');
curve.short = require('./short');
curve.mont = require('./mont');
curve.edwards = require('./edwards');
", "node_modules/elliptic/lib/elliptic/curve/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/elliptic/lib/elliptic/curve/index.js");
    }
}
