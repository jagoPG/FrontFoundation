<?php

/* node_modules/tape/test/nested-async-plan-noend.js */
class __TwigTemplate_1b87c3c2377432c59c778a090944612259a5cd1747288f46f0f6d5046b27a0af extends Twig_Template
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
        $__internal_fd42a75cc95e3d70d1dd1952f6ad243e8fd2a84ce0a6ad4de29c2e51b6bcc909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd42a75cc95e3d70d1dd1952f6ad243e8fd2a84ce0a6ad4de29c2e51b6bcc909->enter($__internal_fd42a75cc95e3d70d1dd1952f6ad243e8fd2a84ce0a6ad4de29c2e51b6bcc909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/nested-async-plan-noend.js"));

        // line 1
        echo "var test = require('../');

test('Harness async test support', function(t) {
  t.plan(3);

  t.ok(true, 'sync child A');

  t.test('sync child B', function(tt) {
    tt.plan(2);

    setTimeout(function(){
      tt.test('async grandchild A', function(ttt) {
        ttt.plan(1);
        ttt.ok(true);
      });
    }, 50);

    setTimeout(function() {
      tt.test('async grandchild B', function(ttt) {
        ttt.plan(1);
        ttt.ok(true);
      });
    }, 100);
  });

  setTimeout(function() {
    t.test('async child', function(tt) {
      tt.plan(2);
      tt.ok(true, 'sync grandchild in async child A');
      tt.test('sync grandchild in async child B', function(ttt) {
        ttt.plan(1);
        ttt.ok(true);
      });
    });
  }, 200);
});
";
        
        $__internal_fd42a75cc95e3d70d1dd1952f6ad243e8fd2a84ce0a6ad4de29c2e51b6bcc909->leave($__internal_fd42a75cc95e3d70d1dd1952f6ad243e8fd2a84ce0a6ad4de29c2e51b6bcc909_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/nested-async-plan-noend.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('Harness async test support', function(t) {
  t.plan(3);

  t.ok(true, 'sync child A');

  t.test('sync child B', function(tt) {
    tt.plan(2);

    setTimeout(function(){
      tt.test('async grandchild A', function(ttt) {
        ttt.plan(1);
        ttt.ok(true);
      });
    }, 50);

    setTimeout(function() {
      tt.test('async grandchild B', function(ttt) {
        ttt.plan(1);
        ttt.ok(true);
      });
    }, 100);
  });

  setTimeout(function() {
    t.test('async child', function(tt) {
      tt.plan(2);
      tt.ok(true, 'sync grandchild in async child A');
      tt.test('sync grandchild in async child B', function(ttt) {
        ttt.plan(1);
        ttt.ok(true);
      });
    });
  }, 200);
});
", "node_modules/tape/test/nested-async-plan-noend.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/nested-async-plan-noend.js");
    }
}
