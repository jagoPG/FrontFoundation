<?php

/* node_modules/delegates/test/index.js */
class __TwigTemplate_337f2461106b2b31d7b3725a7e44b70fdee66b3c303d8059ddcd06e219b6e2ff extends Twig_Template
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
        $__internal_1b781ba99524a43f7bbcc5946012a325c1f062718dd99d6b411ada8cd1473a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b781ba99524a43f7bbcc5946012a325c1f062718dd99d6b411ada8cd1473a62->enter($__internal_1b781ba99524a43f7bbcc5946012a325c1f062718dd99d6b411ada8cd1473a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/delegates/test/index.js"));

        // line 1
        echo "
var assert = require('assert');
var delegate = require('..');

describe('.method(name)', function(){
  it('should delegate methods', function(){
    var obj = {};

    obj.request = {
      foo: function(bar){
        assert(this == obj.request);
        return bar;
      }
    };

    delegate(obj, 'request').method('foo');

    obj.foo('something').should.equal('something');
  })
})

describe('.getter(name)', function(){
  it('should delegate getters', function(){
    var obj = {};

    obj.request = {
      get type() {
        return 'text/html';
      }
    }

    delegate(obj, 'request').getter('type');

    obj.type.should.equal('text/html');
  })
})

describe('.setter(name)', function(){
  it('should delegate setters', function(){
    var obj = {};

    obj.request = {
      get type() {
        return this._type.toUpperCase();
      },

      set type(val) {
        this._type = val;
      }
    }

    delegate(obj, 'request').setter('type');

    obj.type = 'hey';
    obj.request.type.should.equal('HEY');
  })
})

describe('.access(name)', function(){
  it('should delegate getters and setters', function(){
    var obj = {};

    obj.request = {
      get type() {
        return this._type.toUpperCase();
      },

      set type(val) {
        this._type = val;
      }
    }

    delegate(obj, 'request').access('type');

    obj.type = 'hey';
    obj.type.should.equal('HEY');
  })
})

describe('.fluent(name)', function () {
  it('should delegate in a fluent fashion', function () {
    var obj = {
      settings: {
        env: 'development'
      }
    };

    delegate(obj, 'settings').fluent('env');

    obj.env().should.equal('development');
    obj.env('production').should.equal(obj);
    obj.settings.env.should.equal('production');
  })
})
";
        
        $__internal_1b781ba99524a43f7bbcc5946012a325c1f062718dd99d6b411ada8cd1473a62->leave($__internal_1b781ba99524a43f7bbcc5946012a325c1f062718dd99d6b411ada8cd1473a62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/delegates/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
var assert = require('assert');
var delegate = require('..');

describe('.method(name)', function(){
  it('should delegate methods', function(){
    var obj = {};

    obj.request = {
      foo: function(bar){
        assert(this == obj.request);
        return bar;
      }
    };

    delegate(obj, 'request').method('foo');

    obj.foo('something').should.equal('something');
  })
})

describe('.getter(name)', function(){
  it('should delegate getters', function(){
    var obj = {};

    obj.request = {
      get type() {
        return 'text/html';
      }
    }

    delegate(obj, 'request').getter('type');

    obj.type.should.equal('text/html');
  })
})

describe('.setter(name)', function(){
  it('should delegate setters', function(){
    var obj = {};

    obj.request = {
      get type() {
        return this._type.toUpperCase();
      },

      set type(val) {
        this._type = val;
      }
    }

    delegate(obj, 'request').setter('type');

    obj.type = 'hey';
    obj.request.type.should.equal('HEY');
  })
})

describe('.access(name)', function(){
  it('should delegate getters and setters', function(){
    var obj = {};

    obj.request = {
      get type() {
        return this._type.toUpperCase();
      },

      set type(val) {
        this._type = val;
      }
    }

    delegate(obj, 'request').access('type');

    obj.type = 'hey';
    obj.type.should.equal('HEY');
  })
})

describe('.fluent(name)', function () {
  it('should delegate in a fluent fashion', function () {
    var obj = {
      settings: {
        env: 'development'
      }
    };

    delegate(obj, 'settings').fluent('env');

    obj.env().should.equal('development');
    obj.env('production').should.equal(obj);
    obj.settings.env.should.equal('production');
  })
})
", "node_modules/delegates/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/delegates/test/index.js");
    }
}
