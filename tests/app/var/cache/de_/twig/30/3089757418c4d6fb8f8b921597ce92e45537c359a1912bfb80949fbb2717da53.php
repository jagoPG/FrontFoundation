<?php

/* node_modules/core-js/library/modules/_an-instance.js */
class __TwigTemplate_b9dd68f08b9533483aa524f329d75ae4bd2046639594ac2e47bdbfe0e9cee21e extends Twig_Template
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
        $__internal_0009106399c4441b6f59b1925cd33aacbb3988a185ce7ad8e9e885984c8e194b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0009106399c4441b6f59b1925cd33aacbb3988a185ce7ad8e9e885984c8e194b->enter($__internal_0009106399c4441b6f59b1925cd33aacbb3988a185ce7ad8e9e885984c8e194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_an-instance.js"));

        // line 1
        echo "module.exports = function (it, Constructor, name, forbiddenField) {
  if (!(it instanceof Constructor) || (forbiddenField !== undefined && forbiddenField in it)) {
    throw TypeError(name + ': incorrect invocation!');
  } return it;
};
";
        
        $__internal_0009106399c4441b6f59b1925cd33aacbb3988a185ce7ad8e9e885984c8e194b->leave($__internal_0009106399c4441b6f59b1925cd33aacbb3988a185ce7ad8e9e885984c8e194b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_an-instance.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (it, Constructor, name, forbiddenField) {
  if (!(it instanceof Constructor) || (forbiddenField !== undefined && forbiddenField in it)) {
    throw TypeError(name + ': incorrect invocation!');
  } return it;
};
", "node_modules/core-js/library/modules/_an-instance.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_an-instance.js");
    }
}
