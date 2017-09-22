<?php

/* node_modules/lodash/fp/assignWith.js */
class __TwigTemplate_234bb76ccc79b3d88222993bdfbdd5e8315637704b5d389ad6f2daf392e2315e extends Twig_Template
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
        $__internal_50d93a9427aa09de480bceac835932c1f1369702b62608a770cdc65884b072ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d93a9427aa09de480bceac835932c1f1369702b62608a770cdc65884b072ac->enter($__internal_50d93a9427aa09de480bceac835932c1f1369702b62608a770cdc65884b072ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignWith', require('../assignWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_50d93a9427aa09de480bceac835932c1f1369702b62608a770cdc65884b072ac->leave($__internal_50d93a9427aa09de480bceac835932c1f1369702b62608a770cdc65884b072ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignWith', require('../assignWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignWith.js");
    }
}
