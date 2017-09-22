<?php

/* node_modules/elliptic/lib/elliptic.js */
class __TwigTemplate_fb93d073e4a9ddcd20242c28b42e8e353fbf7189ca3ec238bb9195275ab5411e extends Twig_Template
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
        $__internal_1bdf277f51ef81014318c72ee46e24c3d01280de4ab0fb9fbf3a31a5c4bdbf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdf277f51ef81014318c72ee46e24c3d01280de4ab0fb9fbf3a31a5c4bdbf37->enter($__internal_1bdf277f51ef81014318c72ee46e24c3d01280de4ab0fb9fbf3a31a5c4bdbf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/elliptic/lib/elliptic.js"));

        // line 1
        echo "'use strict';

var elliptic = exports;

elliptic.version = require('../package.json').version;
elliptic.utils = require('./elliptic/utils');
elliptic.rand = require('brorand');
elliptic.curve = require('./elliptic/curve');
elliptic.curves = require('./elliptic/curves');

// Protocols
elliptic.ec = require('./elliptic/ec');
elliptic.eddsa = require('./elliptic/eddsa');
";
        
        $__internal_1bdf277f51ef81014318c72ee46e24c3d01280de4ab0fb9fbf3a31a5c4bdbf37->leave($__internal_1bdf277f51ef81014318c72ee46e24c3d01280de4ab0fb9fbf3a31a5c4bdbf37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/elliptic/lib/elliptic.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var elliptic = exports;

elliptic.version = require('../package.json').version;
elliptic.utils = require('./elliptic/utils');
elliptic.rand = require('brorand');
elliptic.curve = require('./elliptic/curve');
elliptic.curves = require('./elliptic/curves');

// Protocols
elliptic.ec = require('./elliptic/ec');
elliptic.eddsa = require('./elliptic/eddsa');
", "node_modules/elliptic/lib/elliptic.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/elliptic/lib/elliptic.js");
    }
}
