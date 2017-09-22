<?php

/* node_modules/parsleyjs/test/unit/pubsub.js */
class __TwigTemplate_cd9097035bb0cf03796bb8029c4a925d55af911f908204c686168ed14ab6c0a2 extends Twig_Template
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
        $__internal_c365789fbb669a83a65402ab4afaef2bb06958e67ab86fc6f9ac40b7cb9a3ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c365789fbb669a83a65402ab4afaef2bb06958e67ab86fc6f9ac40b7cb9a3ee4->enter($__internal_c365789fbb669a83a65402ab4afaef2bb06958e67ab86fc6f9ac40b7cb9a3ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/unit/pubsub.js"));

        // line 1
        echo "import \$ from 'jquery';
import Parsley from '../../src/parsley';

describe('PubSub', () => {
  it('listen() without context', done => {
    expectWarning(() => {
      \$.listen('foo', (instance, arg) => {
        expect(arg).to.be('bar');
        done();
      });
    });
    \$.emit('foo', 'bar');
  });
  it('listen() with context', done => {
    var obj = {foo: bar => { return 'foo' + bar; }};
    \$.listen('foo', obj, function (instance, arg) {
      expect(this.foo(arg)).to.be('foobar');
      done();
    });
    \$.emit('foo', 'bar');
  });
  it('listenTo() Field', done => {
    \$('body').append('<input type=\"text\" id=\"element\" />');
    \$('body').append('<input type=\"text\" id=\"element2\" />');

    var instance = \$('#element').psly();

    \$.listenTo(instance, 'foo', parsleyInstance => {
      expect(parsleyInstance.__id__).to.be(instance.__id__);
      done();
    });

    \$.emit('foo', 'bar');
    \$.emit('foo', \$('#element2').psly());
    \$.emit('foo', instance);
  });
  it('listenTo() Form will listen to Form', done => {
    \$('body').append(
      '<form id=\"element\" data-parsley-trigger=\"change\">'                 +
        '<input id=\"field1\" type=\"text\" data-parsley-required=\"true\" />'  +
        '<div id=\"field2\"></div>'                                         +
        '<textarea id=\"field3\" data-parsley-notblank=\"true\"></textarea>'  +
      '</form>');

    \$.listenTo(\$('#element').psly(), 'foo', parsleyInstance => {
      expect(\$('#element').psly().__id__ === parsleyInstance.__id__);
      done();
    });

    \$.emit('foo', \$('#element').psly());
  });
  it('listenTo() Form will listen to its fields too', done => {
    \$('body').append(
      '<form id=\"element\" data-parsley-trigger=\"change\">'                 +
        '<input id=\"field1\" type=\"text\" data-parsley-required=\"true\" />'  +
        '<div id=\"field2\"></div>'                                         +
        '<textarea id=\"field3\" data-parsley-notblank=\"true\"></textarea>'  +
      '</form>');

    \$.listenTo(\$('#element').psly(), 'foo', instance => {
      done();
    });

    \$.emit('foo', \$('#field1').psly());
  });
  it('unsubscribeTo()', done => {
    \$('body').append('<input type=\"text\" id=\"element\" />');
    \$.listen('foo', () => { done(); });
    \$.listenTo(\$('#element').psly(), 'foo', () => { expect(true).to.be(false); });
    \$.unsubscribeTo(\$('#element').psly(), 'foo');
    \$.emit('foo', \$('#element').psly());
  });
  it('unsubscribe()', () => {
    var fn = () => { expect(true).to.be(false); };
    \$.listen('foo', fn);
    \$.unsubscribe('foo', fn);
    \$.emit('foo');
  });
  afterEach(() => {
    \$('#element, #element2').remove();

    \$.unsubscribeAll('foo');
  });
});
";
        
        $__internal_c365789fbb669a83a65402ab4afaef2bb06958e67ab86fc6f9ac40b7cb9a3ee4->leave($__internal_c365789fbb669a83a65402ab4afaef2bb06958e67ab86fc6f9ac40b7cb9a3ee4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/unit/pubsub.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';
import Parsley from '../../src/parsley';

describe('PubSub', () => {
  it('listen() without context', done => {
    expectWarning(() => {
      \$.listen('foo', (instance, arg) => {
        expect(arg).to.be('bar');
        done();
      });
    });
    \$.emit('foo', 'bar');
  });
  it('listen() with context', done => {
    var obj = {foo: bar => { return 'foo' + bar; }};
    \$.listen('foo', obj, function (instance, arg) {
      expect(this.foo(arg)).to.be('foobar');
      done();
    });
    \$.emit('foo', 'bar');
  });
  it('listenTo() Field', done => {
    \$('body').append('<input type=\"text\" id=\"element\" />');
    \$('body').append('<input type=\"text\" id=\"element2\" />');

    var instance = \$('#element').psly();

    \$.listenTo(instance, 'foo', parsleyInstance => {
      expect(parsleyInstance.__id__).to.be(instance.__id__);
      done();
    });

    \$.emit('foo', 'bar');
    \$.emit('foo', \$('#element2').psly());
    \$.emit('foo', instance);
  });
  it('listenTo() Form will listen to Form', done => {
    \$('body').append(
      '<form id=\"element\" data-parsley-trigger=\"change\">'                 +
        '<input id=\"field1\" type=\"text\" data-parsley-required=\"true\" />'  +
        '<div id=\"field2\"></div>'                                         +
        '<textarea id=\"field3\" data-parsley-notblank=\"true\"></textarea>'  +
      '</form>');

    \$.listenTo(\$('#element').psly(), 'foo', parsleyInstance => {
      expect(\$('#element').psly().__id__ === parsleyInstance.__id__);
      done();
    });

    \$.emit('foo', \$('#element').psly());
  });
  it('listenTo() Form will listen to its fields too', done => {
    \$('body').append(
      '<form id=\"element\" data-parsley-trigger=\"change\">'                 +
        '<input id=\"field1\" type=\"text\" data-parsley-required=\"true\" />'  +
        '<div id=\"field2\"></div>'                                         +
        '<textarea id=\"field3\" data-parsley-notblank=\"true\"></textarea>'  +
      '</form>');

    \$.listenTo(\$('#element').psly(), 'foo', instance => {
      done();
    });

    \$.emit('foo', \$('#field1').psly());
  });
  it('unsubscribeTo()', done => {
    \$('body').append('<input type=\"text\" id=\"element\" />');
    \$.listen('foo', () => { done(); });
    \$.listenTo(\$('#element').psly(), 'foo', () => { expect(true).to.be(false); });
    \$.unsubscribeTo(\$('#element').psly(), 'foo');
    \$.emit('foo', \$('#element').psly());
  });
  it('unsubscribe()', () => {
    var fn = () => { expect(true).to.be(false); };
    \$.listen('foo', fn);
    \$.unsubscribe('foo', fn);
    \$.emit('foo');
  });
  afterEach(() => {
    \$('#element, #element2').remove();

    \$.unsubscribeAll('foo');
  });
});
", "node_modules/parsleyjs/test/unit/pubsub.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/unit/pubsub.js");
    }
}
