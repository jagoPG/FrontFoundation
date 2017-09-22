<?php

/* node_modules/core-js/modules/_keyof.js */
class __TwigTemplate_2a2234920b0f640080ed55c0fa1402ca0546b187d670fbaad07ef36b9fcf4c06 extends Twig_Template
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
        $__internal_44774bc2053320bef661143bee194fe92b9441e8bbd3806541c4a16c86723c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44774bc2053320bef661143bee194fe92b9441e8bbd3806541c4a16c86723c7a->enter($__internal_44774bc2053320bef661143bee194fe92b9441e8bbd3806541c4a16c86723c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_keyof.js"));

        // line 1
        echo "var getKeys = require('./_object-keys');
var toIObject = require('./_to-iobject');
module.exports = function (object, el) {
  var O = toIObject(object);
  var keys = getKeys(O);
  var length = keys.length;
  var index = 0;
  var key;
  while (length > index) if (O[key = keys[index++]] === el) return key;
};
";
        
        $__internal_44774bc2053320bef661143bee194fe92b9441e8bbd3806541c4a16c86723c7a->leave($__internal_44774bc2053320bef661143bee194fe92b9441e8bbd3806541c4a16c86723c7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_keyof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getKeys = require('./_object-keys');
var toIObject = require('./_to-iobject');
module.exports = function (object, el) {
  var O = toIObject(object);
  var keys = getKeys(O);
  var length = keys.length;
  var index = 0;
  var key;
  while (length > index) if (O[key = keys[index++]] === el) return key;
};
", "node_modules/core-js/modules/_keyof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_keyof.js");
    }
}
