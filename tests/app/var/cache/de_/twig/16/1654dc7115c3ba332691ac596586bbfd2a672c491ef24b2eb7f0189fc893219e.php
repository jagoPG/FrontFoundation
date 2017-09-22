<?php

/* node_modules/lodash/fp/trimStart.js */
class __TwigTemplate_00c989ca33f5c7a7d23ee231729e6f9642489ae506a87eb7140bf458f9e3361f extends Twig_Template
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
        $__internal_0d62ef143575e78c20c2db66be5134fab955c9abcde18cd496c791cad970747d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d62ef143575e78c20c2db66be5134fab955c9abcde18cd496c791cad970747d->enter($__internal_0d62ef143575e78c20c2db66be5134fab955c9abcde18cd496c791cad970747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/trimStart.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('trimStart', require('../trimStart'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0d62ef143575e78c20c2db66be5134fab955c9abcde18cd496c791cad970747d->leave($__internal_0d62ef143575e78c20c2db66be5134fab955c9abcde18cd496c791cad970747d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/trimStart.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('trimStart', require('../trimStart'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/trimStart.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/trimStart.js");
    }
}
