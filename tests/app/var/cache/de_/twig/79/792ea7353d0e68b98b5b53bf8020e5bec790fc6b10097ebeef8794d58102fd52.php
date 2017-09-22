<?php

/* node_modules/glob-parent/index.js */
class __TwigTemplate_1f0ecb90d628c1ca57a7186820033d7920f3437f729d307ebf33ac73b1402b52 extends Twig_Template
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
        $__internal_a83738413848d32c142b2da015317d4346b3e717a2a37310e932b8e83ff531b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83738413848d32c142b2da015317d4346b3e717a2a37310e932b8e83ff531b5->enter($__internal_a83738413848d32c142b2da015317d4346b3e717a2a37310e932b8e83ff531b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/glob-parent/index.js"));

        // line 1
        echo "'use strict';

var path = require('path');
var isglob = require('is-glob');

module.exports = function globParent(str) {
\tstr += 'a'; // preserves full path in case of trailing path separator
\tdo {str = path.dirname(str)} while (isglob(str));
\treturn str;
};
";
        
        $__internal_a83738413848d32c142b2da015317d4346b3e717a2a37310e932b8e83ff531b5->leave($__internal_a83738413848d32c142b2da015317d4346b3e717a2a37310e932b8e83ff531b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/glob-parent/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var path = require('path');
var isglob = require('is-glob');

module.exports = function globParent(str) {
\tstr += 'a'; // preserves full path in case of trailing path separator
\tdo {str = path.dirname(str)} while (isglob(str));
\treturn str;
};
", "node_modules/glob-parent/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/glob-parent/index.js");
    }
}
