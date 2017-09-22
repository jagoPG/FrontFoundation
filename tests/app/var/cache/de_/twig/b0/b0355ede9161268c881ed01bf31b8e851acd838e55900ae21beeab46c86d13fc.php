<?php

/* node_modules/jsonify/README.markdown */
class __TwigTemplate_c542114eb6e92fe21af97c8c41576304604843e0ddfc08dd0ac140e0d59529bd extends Twig_Template
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
        $__internal_8bfb42148adce971050596afc3e6cd0c50938113184aa24e5b04055c6b93cd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfb42148adce971050596afc3e6cd0c50938113184aa24e5b04055c6b93cd3c->enter($__internal_8bfb42148adce971050596afc3e6cd0c50938113184aa24e5b04055c6b93cd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsonify/README.markdown"));

        // line 1
        echo "jsonify
=======

This module provides Douglas Crockford's JSON implementation without modifying
any globals.

`stringify` and `parse` are merely exported without respect to whether or not a
global `JSON` object exists.

methods
=======

var json = require('jsonify');

json.parse(source, reviver)
---------------------------

Return a new javascript object from a parse of the `source` string.

If a `reviver` function is specified, walk the structure passing each name/value
pair to `reviver.call(parent, key, value)` to transform the `value` before
parsing it.

json.stringify(value, replacer, space)
--------------------------------------

Return a string representation for `value`.

If `replacer` is specified, walk the structure passing each name/value pair to
`replacer.call(parent, key, value)` to transform the `value` before stringifying
it.

If `space` is a number, indent the result by that many spaces.
If `space` is a string, use `space` as the indentation.
";
        
        $__internal_8bfb42148adce971050596afc3e6cd0c50938113184aa24e5b04055c6b93cd3c->leave($__internal_8bfb42148adce971050596afc3e6cd0c50938113184aa24e5b04055c6b93cd3c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsonify/README.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("jsonify
=======

This module provides Douglas Crockford's JSON implementation without modifying
any globals.

`stringify` and `parse` are merely exported without respect to whether or not a
global `JSON` object exists.

methods
=======

var json = require('jsonify');

json.parse(source, reviver)
---------------------------

Return a new javascript object from a parse of the `source` string.

If a `reviver` function is specified, walk the structure passing each name/value
pair to `reviver.call(parent, key, value)` to transform the `value` before
parsing it.

json.stringify(value, replacer, space)
--------------------------------------

Return a string representation for `value`.

If `replacer` is specified, walk the structure passing each name/value pair to
`replacer.call(parent, key, value)` to transform the `value` before stringifying
it.

If `space` is a number, indent the result by that many spaces.
If `space` is a string, use `space` as the indentation.
", "node_modules/jsonify/README.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsonify/README.markdown");
    }
}
