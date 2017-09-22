<?php

/* node_modules/event-emitter/all-off.js */
class __TwigTemplate_5cb95c91414ebebadd0ab694167072ec2925b94e6e6a8aa8f7552300d653f9b3 extends Twig_Template
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
        $__internal_0b95e7b92277a2f8e22b330cac3e2f5e97813aaa510a997846a1237bdbd8905e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b95e7b92277a2f8e22b330cac3e2f5e97813aaa510a997846a1237bdbd8905e->enter($__internal_0b95e7b92277a2f8e22b330cac3e2f5e97813aaa510a997846a1237bdbd8905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/all-off.js"));

        // line 1
        echo "'use strict';

var value = require('es5-ext/object/valid-object')

  , hasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (emitter/*, type*/) {
\tvar type = arguments[1], data;

\tvalue(emitter);

\tif (type !== undefined) {
\t\tdata = hasOwnProperty.call(emitter, '__ee__') && emitter.__ee__;
\t\tif (!data) return;
\t\tif (data[type]) delete data[type];
\t\treturn;
\t}
\tif (hasOwnProperty.call(emitter, '__ee__')) delete emitter.__ee__;
};
";
        
        $__internal_0b95e7b92277a2f8e22b330cac3e2f5e97813aaa510a997846a1237bdbd8905e->leave($__internal_0b95e7b92277a2f8e22b330cac3e2f5e97813aaa510a997846a1237bdbd8905e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/all-off.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var value = require('es5-ext/object/valid-object')

  , hasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function (emitter/*, type*/) {
\tvar type = arguments[1], data;

\tvalue(emitter);

\tif (type !== undefined) {
\t\tdata = hasOwnProperty.call(emitter, '__ee__') && emitter.__ee__;
\t\tif (!data) return;
\t\tif (data[type]) delete data[type];
\t\treturn;
\t}
\tif (hasOwnProperty.call(emitter, '__ee__')) delete emitter.__ee__;
};
", "node_modules/event-emitter/all-off.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/all-off.js");
    }
}
