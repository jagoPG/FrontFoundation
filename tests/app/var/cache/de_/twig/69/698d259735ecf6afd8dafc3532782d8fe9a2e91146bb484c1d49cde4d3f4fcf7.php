<?php

/* node_modules/resolve/index.js */
class __TwigTemplate_9fbb3f98b1440284b39189a3d1d8f61838b9cb3fe866d0f49f50553d0f5b193e extends Twig_Template
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
        $__internal_1d21b2e98787a1d925f6d51ced858b491d65439a8077facc1f4afeb37d6b7c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d21b2e98787a1d925f6d51ced858b491d65439a8077facc1f4afeb37d6b7c6a->enter($__internal_1d21b2e98787a1d925f6d51ced858b491d65439a8077facc1f4afeb37d6b7c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/index.js"));

        // line 1
        echo "var core = require('./lib/core');
var async = require('./lib/async');
async.core = core;
async.isCore = function isCore(x) { return core[x]; };
async.sync = require('./lib/sync');

exports = async;
module.exports = async;
";
        
        $__internal_1d21b2e98787a1d925f6d51ced858b491d65439a8077facc1f4afeb37d6b7c6a->leave($__internal_1d21b2e98787a1d925f6d51ced858b491d65439a8077facc1f4afeb37d6b7c6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('./lib/core');
var async = require('./lib/async');
async.core = core;
async.isCore = function isCore(x) { return core[x]; };
async.sync = require('./lib/sync');

exports = async;
module.exports = async;
", "node_modules/resolve/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/index.js");
    }
}
