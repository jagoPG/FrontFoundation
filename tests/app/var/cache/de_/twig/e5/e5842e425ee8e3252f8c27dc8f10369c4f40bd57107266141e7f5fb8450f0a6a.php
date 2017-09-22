<?php

/* node_modules/core-js/index.js */
class __TwigTemplate_2f2b81f17b2ac43a54f8ee990c51ad6e08d23b5bd49e4c0f2ada29694095d7cd extends Twig_Template
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
        $__internal_1cebbf425c5cc4017fa6a73587d415c75b5b003313048a7ac842f65e2e4e1680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cebbf425c5cc4017fa6a73587d415c75b5b003313048a7ac842f65e2e4e1680->enter($__internal_1cebbf425c5cc4017fa6a73587d415c75b5b003313048a7ac842f65e2e4e1680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/index.js"));

        // line 1
        echo "require('./shim');
require('./modules/core.dict');
require('./modules/core.get-iterator-method');
require('./modules/core.get-iterator');
require('./modules/core.is-iterable');
require('./modules/core.delay');
require('./modules/core.function.part');
require('./modules/core.object.is-object');
require('./modules/core.object.classof');
require('./modules/core.object.define');
require('./modules/core.object.make');
require('./modules/core.number.iterator');
require('./modules/core.regexp.escape');
require('./modules/core.string.escape-html');
require('./modules/core.string.unescape-html');
module.exports = require('./modules/_core');
";
        
        $__internal_1cebbf425c5cc4017fa6a73587d415c75b5b003313048a7ac842f65e2e4e1680->leave($__internal_1cebbf425c5cc4017fa6a73587d415c75b5b003313048a7ac842f65e2e4e1680_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./shim');
require('./modules/core.dict');
require('./modules/core.get-iterator-method');
require('./modules/core.get-iterator');
require('./modules/core.is-iterable');
require('./modules/core.delay');
require('./modules/core.function.part');
require('./modules/core.object.is-object');
require('./modules/core.object.classof');
require('./modules/core.object.define');
require('./modules/core.object.make');
require('./modules/core.number.iterator');
require('./modules/core.regexp.escape');
require('./modules/core.string.escape-html');
require('./modules/core.string.unescape-html');
module.exports = require('./modules/_core');
", "node_modules/core-js/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/index.js");
    }
}
