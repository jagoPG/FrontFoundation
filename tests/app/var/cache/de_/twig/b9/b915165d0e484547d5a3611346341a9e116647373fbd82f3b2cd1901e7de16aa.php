<?php

/* node_modules/core-js/library/fn/promise/try.js */
class __TwigTemplate_445ca66eb0c942fa78e1bce56145892192c60da91a6d725438e898d0ea135797 extends Twig_Template
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
        $__internal_2dbf88281ac0a508f01a8f751ab47868195986353bcb374399988c554934e254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbf88281ac0a508f01a8f751ab47868195986353bcb374399988c554934e254->enter($__internal_2dbf88281ac0a508f01a8f751ab47868195986353bcb374399988c554934e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/promise/try.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.try');
var \$Promise = require('../../modules/_core').Promise;
var \$try = \$Promise['try'];
module.exports = { 'try': function (callbackfn) {
  return \$try.call(typeof this === 'function' ? this : \$Promise, callbackfn);
} }['try'];
";
        
        $__internal_2dbf88281ac0a508f01a8f751ab47868195986353bcb374399988c554934e254->leave($__internal_2dbf88281ac0a508f01a8f751ab47868195986353bcb374399988c554934e254_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/promise/try.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.try');
var \$Promise = require('../../modules/_core').Promise;
var \$try = \$Promise['try'];
module.exports = { 'try': function (callbackfn) {
  return \$try.call(typeof this === 'function' ? this : \$Promise, callbackfn);
} }['try'];
", "node_modules/core-js/library/fn/promise/try.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/promise/try.js");
    }
}
