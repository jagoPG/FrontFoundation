<?php

/* node_modules/brorand/test/api-test.js */
class __TwigTemplate_16acd0ee571d2f4d1b1de13feb0fdb53497243273fdff70aa02417c54a267b2f extends Twig_Template
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
        $__internal_7acab08f70a432758998274c8f10d7e3f5344f828041ec0fd265e8f3920c5052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acab08f70a432758998274c8f10d7e3f5344f828041ec0fd265e8f3920c5052->enter($__internal_7acab08f70a432758998274c8f10d7e3f5344f828041ec0fd265e8f3920c5052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/brorand/test/api-test.js"));

        // line 1
        echo "var brorand = require('../');
var assert = require('assert');

describe('Brorand', function() {
  it('should generate random numbers', function() {
    assert.equal(brorand(100).length, 100);
  });
});
";
        
        $__internal_7acab08f70a432758998274c8f10d7e3f5344f828041ec0fd265e8f3920c5052->leave($__internal_7acab08f70a432758998274c8f10d7e3f5344f828041ec0fd265e8f3920c5052_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/brorand/test/api-test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var brorand = require('../');
var assert = require('assert');

describe('Brorand', function() {
  it('should generate random numbers', function() {
    assert.equal(brorand(100).length, 100);
  });
});
", "node_modules/brorand/test/api-test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/brorand/test/api-test.js");
    }
}
