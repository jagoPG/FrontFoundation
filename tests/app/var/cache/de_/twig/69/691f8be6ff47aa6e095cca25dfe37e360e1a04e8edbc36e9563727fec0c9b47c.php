<?php

/* node_modules/is-function/test.js */
class __TwigTemplate_c69182cad8ae06e6bcd517ec08627884483d72b3f8c9e1be44d0ac336ecc66d9 extends Twig_Template
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
        $__internal_915792cbabda3a0b304c3e091fed92bbc934cadc8df8f331bcb696b598dd38e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915792cbabda3a0b304c3e091fed92bbc934cadc8df8f331bcb696b598dd38e3->enter($__internal_915792cbabda3a0b304c3e091fed92bbc934cadc8df8f331bcb696b598dd38e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-function/test.js"));

        // line 1
        echo "var test = require('tape')
var isFunction = require('./index.js')

test('isFunction', function (t) {
    t.ok(!isFunction(), 'undefined is not a function')
    t.ok(!isFunction(null), 'null is not a function')
    t.ok(!isFunction(''), 'string is not a function')
    t.ok(!isFunction(/a/), 'regex is not a function')
    t.ok(!isFunction(true), 'true is not a function')
    t.ok(!isFunction(false), 'false is not a function')
    t.ok(!isFunction(NaN), 'NaN is not a function')
    t.ok(!isFunction(42), '42 is not a function')
    t.ok(isFunction(function () {}), 'function is a function')
    t.ok(isFunction(setTimeout), 'setTimeout is a function')
    t.end()
})

if (typeof window !== 'undefined') {
    test('browser quirks', function (t) {
        t.plan(2)
        
        t.ok(isFunction(window.alert), 'alert is a function')

        window.testRegExpFromIframe = function (regexp) {
            t.ok(!isFunction(regexp))
        }
        
        var iframe = document.createElement('iframe')
        document.body.appendChild(iframe)
        
        iframe.contentWindow.document.write([
            \"<html><body><script type=\\\"text/javascript\\\">\",
            \"parent.testRegExpFromIframe(/a/)\",
            \"</script></body></html>\"
        ].join(\"\\n\"));
    })
}
";
        
        $__internal_915792cbabda3a0b304c3e091fed92bbc934cadc8df8f331bcb696b598dd38e3->leave($__internal_915792cbabda3a0b304c3e091fed92bbc934cadc8df8f331bcb696b598dd38e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-function/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var isFunction = require('./index.js')

test('isFunction', function (t) {
    t.ok(!isFunction(), 'undefined is not a function')
    t.ok(!isFunction(null), 'null is not a function')
    t.ok(!isFunction(''), 'string is not a function')
    t.ok(!isFunction(/a/), 'regex is not a function')
    t.ok(!isFunction(true), 'true is not a function')
    t.ok(!isFunction(false), 'false is not a function')
    t.ok(!isFunction(NaN), 'NaN is not a function')
    t.ok(!isFunction(42), '42 is not a function')
    t.ok(isFunction(function () {}), 'function is a function')
    t.ok(isFunction(setTimeout), 'setTimeout is a function')
    t.end()
})

if (typeof window !== 'undefined') {
    test('browser quirks', function (t) {
        t.plan(2)
        
        t.ok(isFunction(window.alert), 'alert is a function')

        window.testRegExpFromIframe = function (regexp) {
            t.ok(!isFunction(regexp))
        }
        
        var iframe = document.createElement('iframe')
        document.body.appendChild(iframe)
        
        iframe.contentWindow.document.write([
            \"<html><body><script type=\\\"text/javascript\\\">\",
            \"parent.testRegExpFromIframe(/a/)\",
            \"</script></body></html>\"
        ].join(\"\\n\"));
    })
}
", "node_modules/is-function/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-function/test.js");
    }
}
