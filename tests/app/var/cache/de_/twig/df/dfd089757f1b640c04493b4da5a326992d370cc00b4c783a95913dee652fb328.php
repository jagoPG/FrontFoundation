<?php

/* node_modules/lodash/fp/toPlainObject.js */
class __TwigTemplate_bb2a2ca11a9976d98948b222d9ac4713c9a01db100340437ddf4a0d8acec39c9 extends Twig_Template
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
        $__internal_2ddf03e098eebe59ed14a85d2780bb3d1f17de81225ad293878a4dfadd59dc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddf03e098eebe59ed14a85d2780bb3d1f17de81225ad293878a4dfadd59dc70->enter($__internal_2ddf03e098eebe59ed14a85d2780bb3d1f17de81225ad293878a4dfadd59dc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toPlainObject.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toPlainObject', require('../toPlainObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_2ddf03e098eebe59ed14a85d2780bb3d1f17de81225ad293878a4dfadd59dc70->leave($__internal_2ddf03e098eebe59ed14a85d2780bb3d1f17de81225ad293878a4dfadd59dc70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toPlainObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toPlainObject', require('../toPlainObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toPlainObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toPlainObject.js");
    }
}
