<?php

/* node_modules/parsleyjs/test/setup/dom_leak_check.js */
class __TwigTemplate_70453db15009c17583f749f64b0dc3f2860672ccf674cf825b0f395e1f7f0956 extends Twig_Template
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
        $__internal_65600d40ad122ab46873c8648cac84290ae23e18d46d18e73aeab1d463c273da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65600d40ad122ab46873c8648cac84290ae23e18d46d18e73aeab1d463c273da->enter($__internal_65600d40ad122ab46873c8648cac84290ae23e18d46d18e73aeab1d463c273da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/setup/dom_leak_check.js"));

        // line 1
        echo "import \$ from 'jquery';

afterEach(function() {
  expect(\$('form input').length).to.be(0);
});

window.\$ = \$; // Export for testing purposes...
";
        
        $__internal_65600d40ad122ab46873c8648cac84290ae23e18d46d18e73aeab1d463c273da->leave($__internal_65600d40ad122ab46873c8648cac84290ae23e18d46d18e73aeab1d463c273da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/setup/dom_leak_check.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';

afterEach(function() {
  expect(\$('form input').length).to.be(0);
});

window.\$ = \$; // Export for testing purposes...
", "node_modules/parsleyjs/test/setup/dom_leak_check.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/setup/dom_leak_check.js");
    }
}
