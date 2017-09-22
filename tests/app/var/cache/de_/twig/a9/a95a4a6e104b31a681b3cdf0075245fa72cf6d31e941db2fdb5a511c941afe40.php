<?php

/* node_modules/lodash/fp/invokeMap.js */
class __TwigTemplate_0371f085da42e330e01ac84cc9c4043a9a031213bb8959fd731b8ff763203a86 extends Twig_Template
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
        $__internal_c39dc367f538b51c39cb0b74585ee86ccf5caf0ef6ded9fc4c0c2e419086678c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39dc367f538b51c39cb0b74585ee86ccf5caf0ef6ded9fc4c0c2e419086678c->enter($__internal_c39dc367f538b51c39cb0b74585ee86ccf5caf0ef6ded9fc4c0c2e419086678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/invokeMap.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('invokeMap', require('../invokeMap'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c39dc367f538b51c39cb0b74585ee86ccf5caf0ef6ded9fc4c0c2e419086678c->leave($__internal_c39dc367f538b51c39cb0b74585ee86ccf5caf0ef6ded9fc4c0c2e419086678c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/invokeMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('invokeMap', require('../invokeMap'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/invokeMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/invokeMap.js");
    }
}
