<?php

/* node_modules/string.prototype.trim/shim.js */
class __TwigTemplate_36e2d81387d850f849fe7e36f6746afdd58b59f6b9d357e8300892087e2c317a extends Twig_Template
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
        $__internal_60260dd1fcb1e6d8a2ef0f189eba99959b4c4c1aa1efa5aee5ada33babc35983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60260dd1fcb1e6d8a2ef0f189eba99959b4c4c1aa1efa5aee5ada33babc35983->enter($__internal_60260dd1fcb1e6d8a2ef0f189eba99959b4c4c1aa1efa5aee5ada33babc35983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/shim.js"));

        // line 1
        echo "'use strict';

var define = require('define-properties');
var getPolyfill = require('./polyfill');

module.exports = function shimStringTrim() {
\tvar polyfill = getPolyfill();
\tdefine(String.prototype, { trim: polyfill }, { trim: function () { return String.prototype.trim !== polyfill; } });
\treturn polyfill;
};
";
        
        $__internal_60260dd1fcb1e6d8a2ef0f189eba99959b4c4c1aa1efa5aee5ada33babc35983->leave($__internal_60260dd1fcb1e6d8a2ef0f189eba99959b4c4c1aa1efa5aee5ada33babc35983_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var define = require('define-properties');
var getPolyfill = require('./polyfill');

module.exports = function shimStringTrim() {
\tvar polyfill = getPolyfill();
\tdefine(String.prototype, { trim: polyfill }, { trim: function () { return String.prototype.trim !== polyfill; } });
\treturn polyfill;
};
", "node_modules/string.prototype.trim/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/shim.js");
    }
}
