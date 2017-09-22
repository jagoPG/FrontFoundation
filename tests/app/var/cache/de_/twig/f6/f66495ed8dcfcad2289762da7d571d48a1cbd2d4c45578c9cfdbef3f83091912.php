<?php

/* node_modules/lodash/fp/defaultsDeepAll.js */
class __TwigTemplate_566ccfe207a09ebaf41d51fcc65ac5e51cc0fb8ee4146d0ab5e6a81b85a313d2 extends Twig_Template
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
        $__internal_161ecd77d5326df1fc8ef9688f4dbbf926ff68cd1f632a383e45287a0fc8fc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161ecd77d5326df1fc8ef9688f4dbbf926ff68cd1f632a383e45287a0fc8fc8f->enter($__internal_161ecd77d5326df1fc8ef9688f4dbbf926ff68cd1f632a383e45287a0fc8fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/defaultsDeepAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('defaultsDeepAll', require('../defaultsDeep'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_161ecd77d5326df1fc8ef9688f4dbbf926ff68cd1f632a383e45287a0fc8fc8f->leave($__internal_161ecd77d5326df1fc8ef9688f4dbbf926ff68cd1f632a383e45287a0fc8fc8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/defaultsDeepAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('defaultsDeepAll', require('../defaultsDeep'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/defaultsDeepAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/defaultsDeepAll.js");
    }
}
