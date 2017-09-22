<?php

/* node_modules/resolve/lib/core.js */
class __TwigTemplate_0a553b880f7718f497f2e9328c0624beca7081e8ea550a6b459e25512ba05bb4 extends Twig_Template
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
        $__internal_070d4bd11b7c2b71d295ee54200f78ad1f83decf45607d36a51ddf83a1b27fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070d4bd11b7c2b71d295ee54200f78ad1f83decf45607d36a51ddf83a1b27fba->enter($__internal_070d4bd11b7c2b71d295ee54200f78ad1f83decf45607d36a51ddf83a1b27fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/lib/core.js"));

        // line 1
        echo "var current = (process.versions && process.versions.node && process.versions.node.split('.')) || [];

function versionIncluded(version) {
    if (version === '*') return true;
    var versionParts = version.split('.');
    for (var i = 0; i < 3; ++i) {
        if ((current[i] || 0) >= (versionParts[i] || 0)) return true;
    }
    return false;
}

var data = require('./core.json');

var core = {};
for (var version in data) { // eslint-disable-line no-restricted-syntax
    if (Object.prototype.hasOwnProperty.call(data, version) && versionIncluded(version)) {
        for (var i = 0; i < data[version].length; ++i) {
            core[data[version][i]] = true;
        }
    }
}
module.exports = core;
";
        
        $__internal_070d4bd11b7c2b71d295ee54200f78ad1f83decf45607d36a51ddf83a1b27fba->leave($__internal_070d4bd11b7c2b71d295ee54200f78ad1f83decf45607d36a51ddf83a1b27fba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/lib/core.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var current = (process.versions && process.versions.node && process.versions.node.split('.')) || [];

function versionIncluded(version) {
    if (version === '*') return true;
    var versionParts = version.split('.');
    for (var i = 0; i < 3; ++i) {
        if ((current[i] || 0) >= (versionParts[i] || 0)) return true;
    }
    return false;
}

var data = require('./core.json');

var core = {};
for (var version in data) { // eslint-disable-line no-restricted-syntax
    if (Object.prototype.hasOwnProperty.call(data, version) && versionIncluded(version)) {
        for (var i = 0; i < data[version].length; ++i) {
            core[data[version][i]] = true;
        }
    }
}
module.exports = core;
", "node_modules/resolve/lib/core.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/lib/core.js");
    }
}
