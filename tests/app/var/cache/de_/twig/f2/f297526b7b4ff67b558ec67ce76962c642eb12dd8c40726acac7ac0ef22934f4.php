<?php

/* node_modules/lodash/fp/assignInAll.js */
class __TwigTemplate_ab5fba1cfa304d7f6c91ba1da35569c359e91a44c85658b1982d2250800af62a extends Twig_Template
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
        $__internal_84a297288c8c0c2211d2cdb3162e136902487669cd3e8fc953dd9c360f05239c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a297288c8c0c2211d2cdb3162e136902487669cd3e8fc953dd9c360f05239c->enter($__internal_84a297288c8c0c2211d2cdb3162e136902487669cd3e8fc953dd9c360f05239c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignInAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignInAll', require('../assignIn'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_84a297288c8c0c2211d2cdb3162e136902487669cd3e8fc953dd9c360f05239c->leave($__internal_84a297288c8c0c2211d2cdb3162e136902487669cd3e8fc953dd9c360f05239c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignInAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignInAll', require('../assignIn'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignInAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignInAll.js");
    }
}
