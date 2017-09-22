<?php

/* node_modules/event-emitter/emit-error.js */
class __TwigTemplate_42470dcba9074b236d7baf62afb1f6196301fc57d64e5038cd70b9cfdbce0578 extends Twig_Template
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
        $__internal_5d947bcec320fc114345130c9616a5a450891f68ab8236be5169a8922f69e2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d947bcec320fc114345130c9616a5a450891f68ab8236be5169a8922f69e2e7->enter($__internal_5d947bcec320fc114345130c9616a5a450891f68ab8236be5169a8922f69e2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/emit-error.js"));

        // line 1
        echo "'use strict';

var ensureError  = require('es5-ext/error/valid-error')
  , ensureObject = require('es5-ext/object/valid-object')

  , hasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (err) {
\t(ensureObject(this) && ensureError(err));
\tif (!hasOwnProperty.call(ensureObject(this), '__ee__')) throw err;
\tif (!this.__ee__.error) throw err;
\tthis.emit('error', err);
};
";
        
        $__internal_5d947bcec320fc114345130c9616a5a450891f68ab8236be5169a8922f69e2e7->leave($__internal_5d947bcec320fc114345130c9616a5a450891f68ab8236be5169a8922f69e2e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/emit-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ensureError  = require('es5-ext/error/valid-error')
  , ensureObject = require('es5-ext/object/valid-object')

  , hasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (err) {
\t(ensureObject(this) && ensureError(err));
\tif (!hasOwnProperty.call(ensureObject(this), '__ee__')) throw err;
\tif (!this.__ee__.error) throw err;
\tthis.emit('error', err);
};
", "node_modules/event-emitter/emit-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/emit-error.js");
    }
}
