<?php

/* node_modules/core-js/library/modules/_validate-collection.js */
class __TwigTemplate_7ca169be7dfcf91a2de46378012686878c2c8647b77c0a4198ab2a1bc86887db extends Twig_Template
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
        $__internal_cd36f11739700f958e4c3607f19e49916383443e82c2d17d275957d3d694b42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd36f11739700f958e4c3607f19e49916383443e82c2d17d275957d3d694b42a->enter($__internal_cd36f11739700f958e4c3607f19e49916383443e82c2d17d275957d3d694b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_validate-collection.js"));

        // line 1
        echo "var isObject = require('./_is-object');
module.exports = function (it, TYPE) {
  if (!isObject(it) || it._t !== TYPE) throw TypeError('Incompatible receiver, ' + TYPE + ' required!');
  return it;
};
";
        
        $__internal_cd36f11739700f958e4c3607f19e49916383443e82c2d17d275957d3d694b42a->leave($__internal_cd36f11739700f958e4c3607f19e49916383443e82c2d17d275957d3d694b42a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_validate-collection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
module.exports = function (it, TYPE) {
  if (!isObject(it) || it._t !== TYPE) throw TypeError('Incompatible receiver, ' + TYPE + ' required!');
  return it;
};
", "node_modules/core-js/library/modules/_validate-collection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_validate-collection.js");
    }
}
