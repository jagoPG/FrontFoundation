<?php

/* node_modules/lodash/fp/dropWhile.js */
class __TwigTemplate_12f6625ef2a132bc303c256b7792dd1f93ec6464bc93dd43a2369dbdb1c8a6c7 extends Twig_Template
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
        $__internal_51989bf6a89c655146f64c51b4100097a1f88035e6cd97c50b3fe647d78ba8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51989bf6a89c655146f64c51b4100097a1f88035e6cd97c50b3fe647d78ba8fd->enter($__internal_51989bf6a89c655146f64c51b4100097a1f88035e6cd97c50b3fe647d78ba8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/dropWhile.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('dropWhile', require('../dropWhile'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_51989bf6a89c655146f64c51b4100097a1f88035e6cd97c50b3fe647d78ba8fd->leave($__internal_51989bf6a89c655146f64c51b4100097a1f88035e6cd97c50b3fe647d78ba8fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/dropWhile.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('dropWhile', require('../dropWhile'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/dropWhile.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/dropWhile.js");
    }
}
