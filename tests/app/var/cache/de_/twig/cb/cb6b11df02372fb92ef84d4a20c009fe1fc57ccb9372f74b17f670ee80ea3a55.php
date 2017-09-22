<?php

/* node_modules/tape/test/require/a.js */
class __TwigTemplate_0f5fcf8bcb301f8e3df908876d6a08ab88019be8529fc1b390faefe0e0f8eb76 extends Twig_Template
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
        $__internal_e9b2129363752edda3c18dd6306d58041a5f2499f360c5c178e7ad909da000b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b2129363752edda3c18dd6306d58041a5f2499f360c5c178e7ad909da000b6->enter($__internal_e9b2129363752edda3c18dd6306d58041a5f2499f360c5c178e7ad909da000b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/require/a.js"));

        // line 1
        echo "var tape = require('../..');

tape.test('module-a', function(t) {
  t.plan(1)
  t.pass('loaded module a')
})

global.module_a = true";
        
        $__internal_e9b2129363752edda3c18dd6306d58041a5f2499f360c5c178e7ad909da000b6->leave($__internal_e9b2129363752edda3c18dd6306d58041a5f2499f360c5c178e7ad909da000b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/require/a.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../..');

tape.test('module-a', function(t) {
  t.plan(1)
  t.pass('loaded module a')
})

global.module_a = true", "node_modules/tape/test/require/a.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/require/a.js");
    }
}
