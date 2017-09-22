<?php

/* node_modules/miller-rabin/test/api-test.js */
class __TwigTemplate_e3bc526836d00222fda3f1467d77dbe718dd573f34e96557beb48483f3f56aea extends Twig_Template
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
        $__internal_ca5b19059dec23cc2ffaf1777a5c9c564c39ea999f96a3c81f2d344c9b1fa698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5b19059dec23cc2ffaf1777a5c9c564c39ea999f96a3c81f2d344c9b1fa698->enter($__internal_ca5b19059dec23cc2ffaf1777a5c9c564c39ea999f96a3c81f2d344c9b1fa698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/miller-rabin/test/api-test.js"));

        // line 1
        echo "var assert = require('assert');
var mr = require('../').create();
var bn = require('bn.js');

describe('Miller-Rabin', function() {
  it('should test number for primality', function() {
    assert(!mr.test(new bn(221)));
    assert(mr.test(new bn(257)));

    var p = new bn('dba8191813fe8f51eaae1de70213aafede8f323f95f32cff' +
                   '8b64ebada275cfb18a446a0150e5fdaee246244c5f002ce0' +
                   'aca97584be1745f2dd1eea2849c52aac8c4b5fb78a1c4da7' +
                   '052774338d3310a6e020c46168cb1f94014e9312511cc4fb' +
                   '79d695bb732449f0e015745b86bfa371dc6ca7386e9c7309' +
                   '5549c2e4b8002873', 16);
    assert(mr.test(p));
  });
});
";
        
        $__internal_ca5b19059dec23cc2ffaf1777a5c9c564c39ea999f96a3c81f2d344c9b1fa698->leave($__internal_ca5b19059dec23cc2ffaf1777a5c9c564c39ea999f96a3c81f2d344c9b1fa698_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/miller-rabin/test/api-test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assert = require('assert');
var mr = require('../').create();
var bn = require('bn.js');

describe('Miller-Rabin', function() {
  it('should test number for primality', function() {
    assert(!mr.test(new bn(221)));
    assert(mr.test(new bn(257)));

    var p = new bn('dba8191813fe8f51eaae1de70213aafede8f323f95f32cff' +
                   '8b64ebada275cfb18a446a0150e5fdaee246244c5f002ce0' +
                   'aca97584be1745f2dd1eea2849c52aac8c4b5fb78a1c4da7' +
                   '052774338d3310a6e020c46168cb1f94014e9312511cc4fb' +
                   '79d695bb732449f0e015745b86bfa371dc6ca7386e9c7309' +
                   '5549c2e4b8002873', 16);
    assert(mr.test(p));
  });
});
", "node_modules/miller-rabin/test/api-test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/miller-rabin/test/api-test.js");
    }
}
