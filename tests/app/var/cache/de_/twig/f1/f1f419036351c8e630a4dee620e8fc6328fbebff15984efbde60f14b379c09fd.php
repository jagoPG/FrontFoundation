<?php

/* node_modules/setprototypeof/index.js */
class __TwigTemplate_07b5dc22a07fa602f27a9842b53c53b55cbab5ce338fd8f0b267e9bd99e5e683 extends Twig_Template
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
        $__internal_5a73a8d44119d165c8e6935ebb3528f54820cf28ab45b7a59226e5de2465229c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a73a8d44119d165c8e6935ebb3528f54820cf28ab45b7a59226e5de2465229c->enter($__internal_5a73a8d44119d165c8e6935ebb3528f54820cf28ab45b7a59226e5de2465229c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/setprototypeof/index.js"));

        // line 1
        echo "module.exports = Object.setPrototypeOf || ({__proto__:[]} instanceof Array ? setProtoOf : mixinProperties);

function setProtoOf(obj, proto) {
\tobj.__proto__ = proto;
\treturn obj;
}

function mixinProperties(obj, proto) {
\tfor (var prop in proto) {
\t\tif (!obj.hasOwnProperty(prop)) {
\t\t\tobj[prop] = proto[prop];
\t\t}
\t}
\treturn obj;
}
";
        
        $__internal_5a73a8d44119d165c8e6935ebb3528f54820cf28ab45b7a59226e5de2465229c->leave($__internal_5a73a8d44119d165c8e6935ebb3528f54820cf28ab45b7a59226e5de2465229c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/setprototypeof/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = Object.setPrototypeOf || ({__proto__:[]} instanceof Array ? setProtoOf : mixinProperties);

function setProtoOf(obj, proto) {
\tobj.__proto__ = proto;
\treturn obj;
}

function mixinProperties(obj, proto) {
\tfor (var prop in proto) {
\t\tif (!obj.hasOwnProperty(prop)) {
\t\t\tobj[prop] = proto[prop];
\t\t}
\t}
\treturn obj;
}
", "node_modules/setprototypeof/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/setprototypeof/index.js");
    }
}
