<?php

/* node_modules/glob-parent/test.js */
class __TwigTemplate_7e39ca74d6addda2c30117464d78242f8524e2c987c3774945bbca51577f4dc9 extends Twig_Template
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
        $__internal_5fb146b66e0bddae84362aa58a7f2c256a9ddcd6617d5168018ec62bcb2961c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb146b66e0bddae84362aa58a7f2c256a9ddcd6617d5168018ec62bcb2961c0->enter($__internal_5fb146b66e0bddae84362aa58a7f2c256a9ddcd6617d5168018ec62bcb2961c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/glob-parent/test.js"));

        // line 1
        echo "'use strict';

var gp = require('./');
var assert = require('assert');

describe('glob-parent', function() {
  it('should strip glob magic to return parent path', function() {
    assert.equal(gp('path/to/*.js'), 'path/to');
    assert.equal(gp('/root/path/to/*.js'), '/root/path/to');
    assert.equal(gp('/*.js'), '/');
    assert.equal(gp('*.js'), '.');
    assert.equal(gp('**/*.js'), '.');
    assert.equal(gp('path/{to,from}'), 'path');
    assert.equal(gp('path/!(to|from)'), 'path');
    assert.equal(gp('path/?(to|from)'), 'path');
    assert.equal(gp('path/+(to|from)'), 'path');
    assert.equal(gp('path/*(to|from)'), 'path');
    assert.equal(gp('path/@(to|from)'), 'path');
    assert.equal(gp('path/**/*'), 'path');
    assert.equal(gp('path/**/subdir/foo.*'), 'path');
  });

  it('should return parent dirname from non-glob paths', function() {
    assert.equal(gp('path/foo/bar.js'), 'path/foo');
    assert.equal(gp('path/foo/'), 'path/foo');
    assert.equal(gp('path/foo'), 'path');
  });
});
";
        
        $__internal_5fb146b66e0bddae84362aa58a7f2c256a9ddcd6617d5168018ec62bcb2961c0->leave($__internal_5fb146b66e0bddae84362aa58a7f2c256a9ddcd6617d5168018ec62bcb2961c0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/glob-parent/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var gp = require('./');
var assert = require('assert');

describe('glob-parent', function() {
  it('should strip glob magic to return parent path', function() {
    assert.equal(gp('path/to/*.js'), 'path/to');
    assert.equal(gp('/root/path/to/*.js'), '/root/path/to');
    assert.equal(gp('/*.js'), '/');
    assert.equal(gp('*.js'), '.');
    assert.equal(gp('**/*.js'), '.');
    assert.equal(gp('path/{to,from}'), 'path');
    assert.equal(gp('path/!(to|from)'), 'path');
    assert.equal(gp('path/?(to|from)'), 'path');
    assert.equal(gp('path/+(to|from)'), 'path');
    assert.equal(gp('path/*(to|from)'), 'path');
    assert.equal(gp('path/@(to|from)'), 'path');
    assert.equal(gp('path/**/*'), 'path');
    assert.equal(gp('path/**/subdir/foo.*'), 'path');
  });

  it('should return parent dirname from non-glob paths', function() {
    assert.equal(gp('path/foo/bar.js'), 'path/foo');
    assert.equal(gp('path/foo/'), 'path/foo');
    assert.equal(gp('path/foo'), 'path');
  });
});
", "node_modules/glob-parent/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/glob-parent/test.js");
    }
}
