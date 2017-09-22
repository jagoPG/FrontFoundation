<?php

/* node_modules/es5-ext/test/object/find-key.js */
class __TwigTemplate_425d0d9dc69ac249f3c598f7047665642c7b7504fce9f8cc59da9eb5256ca51e extends Twig_Template
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
        $__internal_83347c176a8ad17fea48935fd14295ee72e2a27d35862f5175afc188ff81b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83347c176a8ad17fea48935fd14295ee72e2a27d35862f5175afc188ff81b64e->enter($__internal_83347c176a8ad17fea48935fd14295ee72e2a27d35862f5175afc188ff81b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/find-key.js"));

        // line 1
        echo "\"use strict\";

var o = { 1: 1, 2: 2, 3: 3 };

module.exports = function (t, a) {
\tvar o2 = {}, i = 0;
\tt(o, function (value, name) {
\t\to2[name] = value;
\t\treturn false;
\t});
\ta(JSON.stringify(o2), JSON.stringify(o), \"Iterates\");

\ta(t(o, function () {
\t\t++i;
\t\treturn true;
\t}), \"1\", \"Finds\");
\ta(i, 1, \"Stops iteration after condition is met\");

\ta(t(o, function () {
\t\treturn false;
\t}), undefined, \"Fails\");

};
";
        
        $__internal_83347c176a8ad17fea48935fd14295ee72e2a27d35862f5175afc188ff81b64e->leave($__internal_83347c176a8ad17fea48935fd14295ee72e2a27d35862f5175afc188ff81b64e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/find-key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = { 1: 1, 2: 2, 3: 3 };

module.exports = function (t, a) {
\tvar o2 = {}, i = 0;
\tt(o, function (value, name) {
\t\to2[name] = value;
\t\treturn false;
\t});
\ta(JSON.stringify(o2), JSON.stringify(o), \"Iterates\");

\ta(t(o, function () {
\t\t++i;
\t\treturn true;
\t}), \"1\", \"Finds\");
\ta(i, 1, \"Stops iteration after condition is met\");

\ta(t(o, function () {
\t\treturn false;
\t}), undefined, \"Fails\");

};
", "node_modules/es5-ext/test/object/find-key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/find-key.js");
    }
}
