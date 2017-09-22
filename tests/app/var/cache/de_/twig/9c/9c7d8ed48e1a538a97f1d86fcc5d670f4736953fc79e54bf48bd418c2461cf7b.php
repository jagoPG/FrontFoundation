<?php

/* node_modules/lodash/fp/pullAt.js */
class __TwigTemplate_f2b1932cd003e41282d99749e3ae9c8b3154ef9f52b06394edcf3ed1129f87a8 extends Twig_Template
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
        $__internal_092beeb10c01c78b7c099917a609ea5835de0606497aeec0c2c978aa04350538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092beeb10c01c78b7c099917a609ea5835de0606497aeec0c2c978aa04350538->enter($__internal_092beeb10c01c78b7c099917a609ea5835de0606497aeec0c2c978aa04350538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/pullAt.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('pullAt', require('../pullAt'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_092beeb10c01c78b7c099917a609ea5835de0606497aeec0c2c978aa04350538->leave($__internal_092beeb10c01c78b7c099917a609ea5835de0606497aeec0c2c978aa04350538_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/pullAt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('pullAt', require('../pullAt'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/pullAt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/pullAt.js");
    }
}
