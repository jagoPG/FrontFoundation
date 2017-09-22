<?php

/* node_modules/core-js/library/modules/core.number.iterator.js */
class __TwigTemplate_4bc0323049aff6f4c2a9be277180023722b865a3929f377f193723f506939a20 extends Twig_Template
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
        $__internal_da58c1181ea9b64bf9771de7c78d4be3fd95b7e54f62c4f5483cf622c85e786e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da58c1181ea9b64bf9771de7c78d4be3fd95b7e54f62c4f5483cf622c85e786e->enter($__internal_da58c1181ea9b64bf9771de7c78d4be3fd95b7e54f62c4f5483cf622c85e786e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.number.iterator.js"));

        // line 1
        echo "'use strict';
require('./_iter-define')(Number, 'Number', function (iterated) {
  this._l = +iterated;
  this._i = 0;
}, function () {
  var i = this._i++;
  var done = !(i < this._l);
  return { done: done, value: done ? undefined : i };
});
";
        
        $__internal_da58c1181ea9b64bf9771de7c78d4be3fd95b7e54f62c4f5483cf622c85e786e->leave($__internal_da58c1181ea9b64bf9771de7c78d4be3fd95b7e54f62c4f5483cf622c85e786e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.number.iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('./_iter-define')(Number, 'Number', function (iterated) {
  this._l = +iterated;
  this._i = 0;
}, function () {
  var i = this._i++;
  var done = !(i < this._l);
  return { done: done, value: done ? undefined : i };
});
", "node_modules/core-js/library/modules/core.number.iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.number.iterator.js");
    }
}
