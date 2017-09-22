<?php

/* node_modules/is-binary-path/index.js */
class __TwigTemplate_523dee7103d973bbfb44fcf2e4651cc6d9d2529cfd80576ca0b690211b987c77 extends Twig_Template
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
        $__internal_6d795817370ddf2b00460128ec21f2313efcee9e0c2f2ccde7a107ff014011e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d795817370ddf2b00460128ec21f2313efcee9e0c2f2ccde7a107ff014011e8->enter($__internal_6d795817370ddf2b00460128ec21f2313efcee9e0c2f2ccde7a107ff014011e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-binary-path/index.js"));

        // line 1
        echo "'use strict';
var path = require('path');
var binaryExtensions = require('binary-extensions');
var exts = Object.create(null);

binaryExtensions.forEach(function (el) {
\texts[el] = true;
});

module.exports = function (filepath) {
\treturn path.extname(filepath).slice(1).toLowerCase() in exts;
};
";
        
        $__internal_6d795817370ddf2b00460128ec21f2313efcee9e0c2f2ccde7a107ff014011e8->leave($__internal_6d795817370ddf2b00460128ec21f2313efcee9e0c2f2ccde7a107ff014011e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-binary-path/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var path = require('path');
var binaryExtensions = require('binary-extensions');
var exts = Object.create(null);

binaryExtensions.forEach(function (el) {
\texts[el] = true;
});

module.exports = function (filepath) {
\treturn path.extname(filepath).slice(1).toLowerCase() in exts;
};
", "node_modules/is-binary-path/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-binary-path/index.js");
    }
}
