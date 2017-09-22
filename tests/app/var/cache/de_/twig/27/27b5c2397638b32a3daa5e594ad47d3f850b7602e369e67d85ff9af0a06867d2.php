<?php

/* node_modules/has/test/index.js */
class __TwigTemplate_7cc9bfb601185bf9e2fb30849624b3c564d5073ea0bf7ab75a2ea19f289be855 extends Twig_Template
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
        $__internal_0fb29e261286e3f645eecfefc991a0d70ffaa31673b5b30825751bce5f8573d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb29e261286e3f645eecfefc991a0d70ffaa31673b5b30825751bce5f8573d9->enter($__internal_0fb29e261286e3f645eecfefc991a0d70ffaa31673b5b30825751bce5f8573d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has/test/index.js"));

        // line 1
        echo "global.expect = require('chai').expect;
var has = require('../src');


describe('has', function() {
  it('works!', function() {
    expect(has({}, 'hasOwnProperty')).to.be.false;
    expect(has(Object.prototype, 'hasOwnProperty')).to.be.true;
  });
});
";
        
        $__internal_0fb29e261286e3f645eecfefc991a0d70ffaa31673b5b30825751bce5f8573d9->leave($__internal_0fb29e261286e3f645eecfefc991a0d70ffaa31673b5b30825751bce5f8573d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("global.expect = require('chai').expect;
var has = require('../src');


describe('has', function() {
  it('works!', function() {
    expect(has({}, 'hasOwnProperty')).to.be.false;
    expect(has(Object.prototype, 'hasOwnProperty')).to.be.true;
  });
});
", "node_modules/has/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has/test/index.js");
    }
}
