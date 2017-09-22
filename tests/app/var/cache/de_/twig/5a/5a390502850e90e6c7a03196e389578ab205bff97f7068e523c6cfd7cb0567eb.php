<?php

/* node_modules/loader-utils/lib/parseQuery.js */
class __TwigTemplate_bdd427bc89ffa7e3be713aa0ceb7f66486d542081e9db2be05f557eddface010 extends Twig_Template
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
        $__internal_3872c4341489057f5efb46d9771b31bae6328e6e797470e2e0dac8386d8f98b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3872c4341489057f5efb46d9771b31bae6328e6e797470e2e0dac8386d8f98b0->enter($__internal_3872c4341489057f5efb46d9771b31bae6328e6e797470e2e0dac8386d8f98b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/parseQuery.js"));

        // line 1
        echo "\"use strict\";

const JSON5 = require(\"json5\");

const specialValues = {
\t\"null\": null,
\t\"true\": true,
\t\"false\": false
};

function parseQuery(query) {
\tif(query.substr(0, 1) !== \"?\") {
\t\tthrow new Error(\"A valid query string passed to parseQuery should begin with '?'\");
\t}
\tquery = query.substr(1);
\tif(!query) {
\t\treturn {};
\t}
\tif(query.substr(0, 1) === \"{\" && query.substr(-1) === \"}\") {
\t\treturn JSON5.parse(query);
\t}
\tconst queryArgs = query.split(/[,&]/g);
\tconst result = {};
\tqueryArgs.forEach(arg => {
\t\tconst idx = arg.indexOf(\"=\");
\t\tif(idx >= 0) {
\t\t\tlet name = arg.substr(0, idx);
\t\t\tlet value = decodeURIComponent(arg.substr(idx + 1));
\t\t\tif(specialValues.hasOwnProperty(value)) {
\t\t\t\tvalue = specialValues[value];
\t\t\t}
\t\t\tif(name.substr(-2) === \"[]\") {
\t\t\t\tname = decodeURIComponent(name.substr(0, name.length - 2));
\t\t\t\tif(!Array.isArray(result[name]))
\t\t\t\t\tresult[name] = [];
\t\t\t\tresult[name].push(value);
\t\t\t} else {
\t\t\t\tname = decodeURIComponent(name);
\t\t\t\tresult[name] = value;
\t\t\t}
\t\t} else {
\t\t\tif(arg.substr(0, 1) === \"-\") {
\t\t\t\tresult[decodeURIComponent(arg.substr(1))] = false;
\t\t\t} else if(arg.substr(0, 1) === \"+\") {
\t\t\t\tresult[decodeURIComponent(arg.substr(1))] = true;
\t\t\t} else {
\t\t\t\tresult[decodeURIComponent(arg)] = true;
\t\t\t}
\t\t}
\t});
\treturn result;
}

module.exports = parseQuery;
";
        
        $__internal_3872c4341489057f5efb46d9771b31bae6328e6e797470e2e0dac8386d8f98b0->leave($__internal_3872c4341489057f5efb46d9771b31bae6328e6e797470e2e0dac8386d8f98b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/parseQuery.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

const JSON5 = require(\"json5\");

const specialValues = {
\t\"null\": null,
\t\"true\": true,
\t\"false\": false
};

function parseQuery(query) {
\tif(query.substr(0, 1) !== \"?\") {
\t\tthrow new Error(\"A valid query string passed to parseQuery should begin with '?'\");
\t}
\tquery = query.substr(1);
\tif(!query) {
\t\treturn {};
\t}
\tif(query.substr(0, 1) === \"{\" && query.substr(-1) === \"}\") {
\t\treturn JSON5.parse(query);
\t}
\tconst queryArgs = query.split(/[,&]/g);
\tconst result = {};
\tqueryArgs.forEach(arg => {
\t\tconst idx = arg.indexOf(\"=\");
\t\tif(idx >= 0) {
\t\t\tlet name = arg.substr(0, idx);
\t\t\tlet value = decodeURIComponent(arg.substr(idx + 1));
\t\t\tif(specialValues.hasOwnProperty(value)) {
\t\t\t\tvalue = specialValues[value];
\t\t\t}
\t\t\tif(name.substr(-2) === \"[]\") {
\t\t\t\tname = decodeURIComponent(name.substr(0, name.length - 2));
\t\t\t\tif(!Array.isArray(result[name]))
\t\t\t\t\tresult[name] = [];
\t\t\t\tresult[name].push(value);
\t\t\t} else {
\t\t\t\tname = decodeURIComponent(name);
\t\t\t\tresult[name] = value;
\t\t\t}
\t\t} else {
\t\t\tif(arg.substr(0, 1) === \"-\") {
\t\t\t\tresult[decodeURIComponent(arg.substr(1))] = false;
\t\t\t} else if(arg.substr(0, 1) === \"+\") {
\t\t\t\tresult[decodeURIComponent(arg.substr(1))] = true;
\t\t\t} else {
\t\t\t\tresult[decodeURIComponent(arg)] = true;
\t\t\t}
\t\t}
\t});
\treturn result;
}

module.exports = parseQuery;
", "node_modules/loader-utils/lib/parseQuery.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/parseQuery.js");
    }
}
