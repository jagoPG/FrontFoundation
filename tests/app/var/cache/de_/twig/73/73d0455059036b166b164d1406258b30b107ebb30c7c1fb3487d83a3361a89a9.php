<?php

/* node_modules/lodash/fp/last.js */
class __TwigTemplate_67e1da4b9336b87646b2cee5f97340873d33d375aab91c8de2768aed51ced817 extends Twig_Template
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
        $__internal_3f3c8c98e5778281b0813fd8565fa05d033810cf9d12ffcd6992733a18a35373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3c8c98e5778281b0813fd8565fa05d033810cf9d12ffcd6992733a18a35373->enter($__internal_3f3c8c98e5778281b0813fd8565fa05d033810cf9d12ffcd6992733a18a35373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/last.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('last', require('../last'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_3f3c8c98e5778281b0813fd8565fa05d033810cf9d12ffcd6992733a18a35373->leave($__internal_3f3c8c98e5778281b0813fd8565fa05d033810cf9d12ffcd6992733a18a35373_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('last', require('../last'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/last.js");
    }
}
