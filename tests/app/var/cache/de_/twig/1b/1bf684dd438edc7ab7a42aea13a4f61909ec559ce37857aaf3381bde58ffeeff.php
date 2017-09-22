<?php

/* node_modules/es6-iterator/test/string.js */
class __TwigTemplate_d0a49e1f1ea41ff7f2835d3d93b1c8e5880a838e56dacd16e3b419e3bb033cf8 extends Twig_Template
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
        $__internal_d48a939415c8255bbc058f7c7c9c8050e8b39835fe96823c0687b43df6e8640f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48a939415c8255bbc058f7c7c9c8050e8b39835fe96823c0687b43df6e8640f->enter($__internal_d48a939415c8255bbc058f7c7c9c8050e8b39835fe96823c0687b43df6e8640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/string.js"));

        // line 1
        echo "'use strict';

var iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (T, a) {
\tvar it = new T('foobar');

\ta(it[iteratorSymbol](), it, \"@@iterator\");
\ta.deep(it.next(), { done: false, value: 'f' }, \"#1\");
\ta.deep(it.next(), { done: false, value: 'o' }, \"#2\");
\ta.deep(it.next(), { done: false, value: 'o' }, \"#3\");
\ta.deep(it.next(), { done: false, value: 'b' }, \"#4\");
\ta.deep(it.next(), { done: false, value: 'a' }, \"#5\");
\ta.deep(it.next(), { done: false, value: 'r' }, \"#6\");
\ta.deep(it.next(), { done: true, value: undefined }, \"End\");

\ta.h1(\"Outside of BMP\");
\tit = new T('r💩z');
\ta.deep(it.next(), { done: false, value: 'r' }, \"#1\");
\ta.deep(it.next(), { done: false, value: '💩' }, \"#2\");
\ta.deep(it.next(), { done: false, value: 'z' }, \"#3\");
\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
};
";
        
        $__internal_d48a939415c8255bbc058f7c7c9c8050e8b39835fe96823c0687b43df6e8640f->leave($__internal_d48a939415c8255bbc058f7c7c9c8050e8b39835fe96823c0687b43df6e8640f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (T, a) {
\tvar it = new T('foobar');

\ta(it[iteratorSymbol](), it, \"@@iterator\");
\ta.deep(it.next(), { done: false, value: 'f' }, \"#1\");
\ta.deep(it.next(), { done: false, value: 'o' }, \"#2\");
\ta.deep(it.next(), { done: false, value: 'o' }, \"#3\");
\ta.deep(it.next(), { done: false, value: 'b' }, \"#4\");
\ta.deep(it.next(), { done: false, value: 'a' }, \"#5\");
\ta.deep(it.next(), { done: false, value: 'r' }, \"#6\");
\ta.deep(it.next(), { done: true, value: undefined }, \"End\");

\ta.h1(\"Outside of BMP\");
\tit = new T('r💩z');
\ta.deep(it.next(), { done: false, value: 'r' }, \"#1\");
\ta.deep(it.next(), { done: false, value: '💩' }, \"#2\");
\ta.deep(it.next(), { done: false, value: 'z' }, \"#3\");
\ta.deep(it.next(), { done: true, value: undefined }, \"End\");
};
", "node_modules/es6-iterator/test/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/string.js");
    }
}
