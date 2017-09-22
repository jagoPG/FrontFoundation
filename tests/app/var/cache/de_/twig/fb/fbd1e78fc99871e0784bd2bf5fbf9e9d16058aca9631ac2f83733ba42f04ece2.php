<?php

/* node_modules/util/node_modules/inherits/test.js */
class __TwigTemplate_0d3e66bba41b30e1bb576b10beda824e0ba3c5e4b80a1414413eef791a807f16 extends Twig_Template
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
        $__internal_a9664a97a1ae866de1f4a09f3e0918299883c1363239bc5dff98b12c48f4f7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9664a97a1ae866de1f4a09f3e0918299883c1363239bc5dff98b12c48f4f7fe->enter($__internal_a9664a97a1ae866de1f4a09f3e0918299883c1363239bc5dff98b12c48f4f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/node_modules/inherits/test.js"));

        // line 1
        echo "var inherits = require('./inherits.js')
var assert = require('assert')

function test(c) {
  assert(c.constructor === Child)
  assert(c.constructor.super_ === Parent)
  assert(Object.getPrototypeOf(c) === Child.prototype)
  assert(Object.getPrototypeOf(Object.getPrototypeOf(c)) === Parent.prototype)
  assert(c instanceof Child)
  assert(c instanceof Parent)
}

function Child() {
  Parent.call(this)
  test(this)
}

function Parent() {}

inherits(Child, Parent)

var c = new Child
test(c)

console.log('ok')
";
        
        $__internal_a9664a97a1ae866de1f4a09f3e0918299883c1363239bc5dff98b12c48f4f7fe->leave($__internal_a9664a97a1ae866de1f4a09f3e0918299883c1363239bc5dff98b12c48f4f7fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/node_modules/inherits/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inherits = require('./inherits.js')
var assert = require('assert')

function test(c) {
  assert(c.constructor === Child)
  assert(c.constructor.super_ === Parent)
  assert(Object.getPrototypeOf(c) === Child.prototype)
  assert(Object.getPrototypeOf(Object.getPrototypeOf(c)) === Parent.prototype)
  assert(c instanceof Child)
  assert(c instanceof Parent)
}

function Child() {
  Parent.call(this)
  test(this)
}

function Parent() {}

inherits(Child, Parent)

var c = new Child
test(c)

console.log('ok')
", "node_modules/util/node_modules/inherits/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/node_modules/inherits/test.js");
    }
}
