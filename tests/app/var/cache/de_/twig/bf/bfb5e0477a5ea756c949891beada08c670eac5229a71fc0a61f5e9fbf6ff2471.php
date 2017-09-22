<?php

/* node_modules/core-js/modules/es6.object.to-string.js */
class __TwigTemplate_aae7b3c80cad71bbcf49208c020bf9f2a04d55b93e8a08dd24258b7122d63076 extends Twig_Template
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
        $__internal_f9ca0c8db793f08bdf11148d89fc263baa542899d66e01da8daa1ab90bdc0e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ca0c8db793f08bdf11148d89fc263baa542899d66e01da8daa1ab90bdc0e4d->enter($__internal_f9ca0c8db793f08bdf11148d89fc263baa542899d66e01da8daa1ab90bdc0e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.to-string.js"));

        // line 1
        echo "'use strict';
// 19.1.3.6 Object.prototype.toString()
var classof = require('./_classof');
var test = {};
test[require('./_wks')('toStringTag')] = 'z';
if (test + '' != '[object z]') {
  require('./_redefine')(Object.prototype, 'toString', function toString() {
    return '[object ' + classof(this) + ']';
  }, true);
}
";
        
        $__internal_f9ca0c8db793f08bdf11148d89fc263baa542899d66e01da8daa1ab90bdc0e4d->leave($__internal_f9ca0c8db793f08bdf11148d89fc263baa542899d66e01da8daa1ab90bdc0e4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 19.1.3.6 Object.prototype.toString()
var classof = require('./_classof');
var test = {};
test[require('./_wks')('toStringTag')] = 'z';
if (test + '' != '[object z]') {
  require('./_redefine')(Object.prototype, 'toString', function toString() {
    return '[object ' + classof(this) + ']';
  }, true);
}
", "node_modules/core-js/modules/es6.object.to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.to-string.js");
    }
}
