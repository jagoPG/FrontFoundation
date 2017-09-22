<?php

/* node_modules/event-emitter/has-listeners.js */
class __TwigTemplate_9514edab323a178e4a61bb180268f45f3991e0d2fa0e6c44387a310056631567 extends Twig_Template
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
        $__internal_1f21cae26045a774332f23314686e01efab44a4b9dac4627fe5974f5045d8b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f21cae26045a774332f23314686e01efab44a4b9dac4627fe5974f5045d8b23->enter($__internal_1f21cae26045a774332f23314686e01efab44a4b9dac4627fe5974f5045d8b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/has-listeners.js"));

        // line 1
        echo "'use strict';

var isEmpty = require('es5-ext/object/is-empty')
  , value   = require('es5-ext/object/valid-value')

  , hasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (obj/*, type*/) {
\tvar type;
\tvalue(obj);
\ttype = arguments[1];
\tif (arguments.length > 1) {
\t\treturn hasOwnProperty.call(obj, '__ee__') && Boolean(obj.__ee__[type]);
\t}
\treturn obj.hasOwnProperty('__ee__') && !isEmpty(obj.__ee__);
};
";
        
        $__internal_1f21cae26045a774332f23314686e01efab44a4b9dac4627fe5974f5045d8b23->leave($__internal_1f21cae26045a774332f23314686e01efab44a4b9dac4627fe5974f5045d8b23_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/has-listeners.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isEmpty = require('es5-ext/object/is-empty')
  , value   = require('es5-ext/object/valid-value')

  , hasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (obj/*, type*/) {
\tvar type;
\tvalue(obj);
\ttype = arguments[1];
\tif (arguments.length > 1) {
\t\treturn hasOwnProperty.call(obj, '__ee__') && Boolean(obj.__ee__[type]);
\t}
\treturn obj.hasOwnProperty('__ee__') && !isEmpty(obj.__ee__);
};
", "node_modules/event-emitter/has-listeners.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/has-listeners.js");
    }
}
