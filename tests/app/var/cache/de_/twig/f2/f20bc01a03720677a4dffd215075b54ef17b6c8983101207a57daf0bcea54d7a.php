<?php

/* node_modules/asynckit/index.js */
class __TwigTemplate_cd35ceab7b4c2c02ce8d30c299f6816c3df98399f2710f3f037308bf0ca8df63 extends Twig_Template
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
        $__internal_43422f617b977743b3514e5095f1f64c7364182716f8b0110ce2d22bdf147bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43422f617b977743b3514e5095f1f64c7364182716f8b0110ce2d22bdf147bd2->enter($__internal_43422f617b977743b3514e5095f1f64c7364182716f8b0110ce2d22bdf147bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/index.js"));

        // line 1
        echo "module.exports =
{
  parallel      : require('./parallel.js'),
  serial        : require('./serial.js'),
  serialOrdered : require('./serialOrdered.js')
};
";
        
        $__internal_43422f617b977743b3514e5095f1f64c7364182716f8b0110ce2d22bdf147bd2->leave($__internal_43422f617b977743b3514e5095f1f64c7364182716f8b0110ce2d22bdf147bd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports =
{
  parallel      : require('./parallel.js'),
  serial        : require('./serial.js'),
  serialOrdered : require('./serialOrdered.js')
};
", "node_modules/asynckit/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/index.js");
    }
}
