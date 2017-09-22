<?php

/* node_modules/parsleyjs/test/setup/browserify.js */
class __TwigTemplate_3c7ff026f076b75261e99232fb32d1f4d2930f907c51b14385515213160a9525 extends Twig_Template
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
        $__internal_34e9608f42b5fa1f812b81d0e2f1be96b92c3f5811aa55aa23cac159ef194e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e9608f42b5fa1f812b81d0e2f1be96b92c3f5811aa55aa23cac159ef194e9a->enter($__internal_34e9608f42b5fa1f812b81d0e2f1be96b92c3f5811aa55aa23cac159ef194e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/setup/browserify.js"));

        // line 1
        echo "var config = require('../../package.json').babelBoilerplateOptions;

global.travis = false;
global.mocha.setup('bdd');
global.onload = function() {
  global.mocha.checkLeaks();
  global.mocha.globals(config.mochaGlobals);
  global.mocha.run();
  require('./setup')();
};
";
        
        $__internal_34e9608f42b5fa1f812b81d0e2f1be96b92c3f5811aa55aa23cac159ef194e9a->leave($__internal_34e9608f42b5fa1f812b81d0e2f1be96b92c3f5811aa55aa23cac159ef194e9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/setup/browserify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var config = require('../../package.json').babelBoilerplateOptions;

global.travis = false;
global.mocha.setup('bdd');
global.onload = function() {
  global.mocha.checkLeaks();
  global.mocha.globals(config.mochaGlobals);
  global.mocha.run();
  require('./setup')();
};
", "node_modules/parsleyjs/test/setup/browserify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/setup/browserify.js");
    }
}
