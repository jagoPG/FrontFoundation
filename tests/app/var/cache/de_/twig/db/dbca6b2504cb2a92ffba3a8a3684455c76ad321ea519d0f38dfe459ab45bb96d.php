<?php

/* node_modules/lodash/fp/uniqueId.js */
class __TwigTemplate_5dadd89ed83cfdc6ba47ccfbd207f875b72c088b9f9b18150ec6efad408a9dd8 extends Twig_Template
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
        $__internal_3ab07bd2225c2a2a5355324c75c36f21c3e0e17768be2e722624f3146bcc6d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab07bd2225c2a2a5355324c75c36f21c3e0e17768be2e722624f3146bcc6d78->enter($__internal_3ab07bd2225c2a2a5355324c75c36f21c3e0e17768be2e722624f3146bcc6d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/uniqueId.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('uniqueId', require('../uniqueId'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_3ab07bd2225c2a2a5355324c75c36f21c3e0e17768be2e722624f3146bcc6d78->leave($__internal_3ab07bd2225c2a2a5355324c75c36f21c3e0e17768be2e722624f3146bcc6d78_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/uniqueId.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('uniqueId', require('../uniqueId'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/uniqueId.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/uniqueId.js");
    }
}
