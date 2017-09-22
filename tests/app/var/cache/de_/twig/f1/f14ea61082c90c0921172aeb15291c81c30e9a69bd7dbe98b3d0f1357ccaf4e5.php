<?php

/* node_modules/p-finally/index.js */
class __TwigTemplate_66adb2103ec0fc934ce1bab1f9408c593a4a708eee4a7d0988d4b08fae60be06 extends Twig_Template
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
        $__internal_e72e94ac071608789e64c3e646a0b323d748c8aa9ac6259fac0b1783e6baae32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72e94ac071608789e64c3e646a0b323d748c8aa9ac6259fac0b1783e6baae32->enter($__internal_e72e94ac071608789e64c3e646a0b323d748c8aa9ac6259fac0b1783e6baae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/p-finally/index.js"));

        // line 1
        echo "'use strict';
module.exports = (promise, onFinally) => {
\tonFinally = onFinally || (() => {});

\treturn promise.then(
\t\tval => new Promise(resolve => {
\t\t\tresolve(onFinally());
\t\t}).then(() => val),
\t\terr => new Promise(resolve => {
\t\t\tresolve(onFinally());
\t\t}).then(() => {
\t\t\tthrow err;
\t\t})
\t);
};
";
        
        $__internal_e72e94ac071608789e64c3e646a0b323d748c8aa9ac6259fac0b1783e6baae32->leave($__internal_e72e94ac071608789e64c3e646a0b323d748c8aa9ac6259fac0b1783e6baae32_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/p-finally/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = (promise, onFinally) => {
\tonFinally = onFinally || (() => {});

\treturn promise.then(
\t\tval => new Promise(resolve => {
\t\t\tresolve(onFinally());
\t\t}).then(() => val),
\t\terr => new Promise(resolve => {
\t\t\tresolve(onFinally());
\t\t}).then(() => {
\t\t\tthrow err;
\t\t})
\t);
};
", "node_modules/p-finally/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/p-finally/index.js");
    }
}
