<?php

/* node_modules/lodash/fp/reduceRight.js */
class __TwigTemplate_e851bf184fe8aabe586c9dc62c94848a954b30bff5d7a4bd8ead7c6a0779615b extends Twig_Template
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
        $__internal_320a1703e0c0c44bf62c9882f7e34455210eeae9f3c8966ca31fb168cb1a5622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320a1703e0c0c44bf62c9882f7e34455210eeae9f3c8966ca31fb168cb1a5622->enter($__internal_320a1703e0c0c44bf62c9882f7e34455210eeae9f3c8966ca31fb168cb1a5622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/reduceRight.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('reduceRight', require('../reduceRight'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_320a1703e0c0c44bf62c9882f7e34455210eeae9f3c8966ca31fb168cb1a5622->leave($__internal_320a1703e0c0c44bf62c9882f7e34455210eeae9f3c8966ca31fb168cb1a5622_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/reduceRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('reduceRight', require('../reduceRight'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/reduceRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/reduceRight.js");
    }
}
