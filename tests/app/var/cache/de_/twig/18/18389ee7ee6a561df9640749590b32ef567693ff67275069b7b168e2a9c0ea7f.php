<?php

/* node_modules/lodash/fp/flatMapDeep.js */
class __TwigTemplate_3a125dd64709f54de43d17baf30318964e7cf7cf1ecf125bef2f74e3f28f99f9 extends Twig_Template
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
        $__internal_c18ef6497f278ec4f63239f132ac7eb8209669ca91488d635d223b8fb75afbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18ef6497f278ec4f63239f132ac7eb8209669ca91488d635d223b8fb75afbdf->enter($__internal_c18ef6497f278ec4f63239f132ac7eb8209669ca91488d635d223b8fb75afbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/flatMapDeep.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('flatMapDeep', require('../flatMapDeep'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c18ef6497f278ec4f63239f132ac7eb8209669ca91488d635d223b8fb75afbdf->leave($__internal_c18ef6497f278ec4f63239f132ac7eb8209669ca91488d635d223b8fb75afbdf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/flatMapDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('flatMapDeep', require('../flatMapDeep'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/flatMapDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/flatMapDeep.js");
    }
}
