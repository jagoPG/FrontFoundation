<?php

/* node_modules/core-js/library/modules/_an-object.js */
class __TwigTemplate_2a1c83b690cd6b15e11ff6f5e6244c6afd7570d45fcad84c8472e2738b068e48 extends Twig_Template
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
        $__internal_4abfcdc3fd6fff1e93b6ecbccd101a3c38c098a1eefa45103ed2ac2e75780c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abfcdc3fd6fff1e93b6ecbccd101a3c38c098a1eefa45103ed2ac2e75780c04->enter($__internal_4abfcdc3fd6fff1e93b6ecbccd101a3c38c098a1eefa45103ed2ac2e75780c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_an-object.js"));

        // line 1
        echo "var isObject = require('./_is-object');
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};
";
        
        $__internal_4abfcdc3fd6fff1e93b6ecbccd101a3c38c098a1eefa45103ed2ac2e75780c04->leave($__internal_4abfcdc3fd6fff1e93b6ecbccd101a3c38c098a1eefa45103ed2ac2e75780c04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_an-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};
", "node_modules/core-js/library/modules/_an-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_an-object.js");
    }
}
