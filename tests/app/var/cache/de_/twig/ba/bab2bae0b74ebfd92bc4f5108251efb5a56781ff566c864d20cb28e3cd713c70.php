<?php

/* node_modules/object-inspect/test/element.js */
class __TwigTemplate_c6360e8e5c989867f0fc7e813b372b4c783b32d4857a4c920d6defab6002e48c extends Twig_Template
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
        $__internal_f664732d92aef4d6a09f6c4cec0cbabef6d7a967fbf244216bc729a784248195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f664732d92aef4d6a09f6c4cec0cbabef6d7a967fbf244216bc729a784248195->enter($__internal_f664732d92aef4d6a09f6c4cec0cbabef6d7a967fbf244216bc729a784248195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/element.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('element', function (t) {
    t.plan(1);
    var elem = {
        nodeName: 'div',
        attributes: [ { name: 'class', value: 'row' } ],
        getAttribute: function (key) {},
        childNodes: []
    };
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div class=\"row\"></div>, 3 ]');
});
    
test('element no attr', function (t) {
    t.plan(1);
    var elem = {
        nodeName: 'div',
        getAttribute: function (key) {},
        childNodes: []
    };
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div></div>, 3 ]');
});

test('element with contents', function (t) {
    t.plan(1);
    var elem = {
        nodeName: 'div',
        getAttribute: function (key) {},
        childNodes: [ { nodeName: 'b' } ]
    };
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div>...</div>, 3 ]');
});

test('element instance', function (t) {
    t.plan(1);
    var h = global.HTMLElement;
    global.HTMLElement = function (name, attr) {
        this.nodeName = name;
        this.attributes = attr;
    };
    global.HTMLElement.prototype.getAttribute = function () {};
    
    var elem = new(global.HTMLElement)('div', []);
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div></div>, 3 ]');
    global.HTMLElement = h;
});
";
        
        $__internal_f664732d92aef4d6a09f6c4cec0cbabef6d7a967fbf244216bc729a784248195->leave($__internal_f664732d92aef4d6a09f6c4cec0cbabef6d7a967fbf244216bc729a784248195_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/element.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('element', function (t) {
    t.plan(1);
    var elem = {
        nodeName: 'div',
        attributes: [ { name: 'class', value: 'row' } ],
        getAttribute: function (key) {},
        childNodes: []
    };
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div class=\"row\"></div>, 3 ]');
});
    
test('element no attr', function (t) {
    t.plan(1);
    var elem = {
        nodeName: 'div',
        getAttribute: function (key) {},
        childNodes: []
    };
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div></div>, 3 ]');
});

test('element with contents', function (t) {
    t.plan(1);
    var elem = {
        nodeName: 'div',
        getAttribute: function (key) {},
        childNodes: [ { nodeName: 'b' } ]
    };
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div>...</div>, 3 ]');
});

test('element instance', function (t) {
    t.plan(1);
    var h = global.HTMLElement;
    global.HTMLElement = function (name, attr) {
        this.nodeName = name;
        this.attributes = attr;
    };
    global.HTMLElement.prototype.getAttribute = function () {};
    
    var elem = new(global.HTMLElement)('div', []);
    var obj = [ 1, elem, 3 ];
    t.deepEqual(inspect(obj), '[ 1, <div></div>, 3 ]');
    global.HTMLElement = h;
});
", "node_modules/object-inspect/test/element.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/element.js");
    }
}
