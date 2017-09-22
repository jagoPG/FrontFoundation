<?php

/* node_modules/uglify-js/bin/extract-props.js */
class __TwigTemplate_db72bd12d4e56c5b9b374c71cfb2cd43755736e59dfda7dcb207becf73a6c891 extends Twig_Template
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
        $__internal_f835f3b7a872c11ba54ae573adfc467b9558fb574360d3bccd5bb93f065c1318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f835f3b7a872c11ba54ae573adfc467b9558fb574360d3bccd5bb93f065c1318->enter($__internal_f835f3b7a872c11ba54ae573adfc467b9558fb574360d3bccd5bb93f065c1318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-js/bin/extract-props.js"));

        // line 1
        echo "#! /usr/bin/env node

\"use strict\";

var U2 = require(\"../tools/node\");
var fs = require(\"fs\");
var yargs = require(\"yargs\");
var ARGS = yargs
    .describe(\"o\", \"Output file\")
    .argv;
var files = ARGS._.slice();
var output = {
    vars: {},
    props: {}
};

if (ARGS.o) try {
    output = JSON.parse(fs.readFileSync(ARGS.o, \"utf8\"));
} catch(ex) {}

files.forEach(getProps);

if (ARGS.o) {
    fs.writeFileSync(ARGS.o, JSON.stringify(output, null, 2), \"utf8\");
} else {
    console.log(\"%s\", JSON.stringify(output, null, 2));
}

function getProps(filename) {
    var code = fs.readFileSync(filename, \"utf8\");
    var ast = U2.parse(code);

    ast.walk(new U2.TreeWalker(function(node){
        if (node instanceof U2.AST_ObjectKeyVal) {
            add(node.key);
        }
        else if (node instanceof U2.AST_ObjectProperty) {
            add(node.key.name);
        }
        else if (node instanceof U2.AST_Dot) {
            add(node.property);
        }
        else if (node instanceof U2.AST_Sub) {
            addStrings(node.property);
        }
    }));

    function addStrings(node) {
        var out = {};
        try {
            (function walk(node){
                node.walk(new U2.TreeWalker(function(node){
                    if (node instanceof U2.AST_Seq) {
                        walk(node.cdr);
                        return true;
                    }
                    if (node instanceof U2.AST_String) {
                        add(node.value);
                        return true;
                    }
                    if (node instanceof U2.AST_Conditional) {
                        walk(node.consequent);
                        walk(node.alternative);
                        return true;
                    }
                    throw out;
                }));
            })(node);
        } catch(ex) {
            if (ex !== out) throw ex;
        }
    }

    function add(name) {
        output.props[name] = true;
    }
}
";
        
        $__internal_f835f3b7a872c11ba54ae573adfc467b9558fb574360d3bccd5bb93f065c1318->leave($__internal_f835f3b7a872c11ba54ae573adfc467b9558fb574360d3bccd5bb93f065c1318_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-js/bin/extract-props.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#! /usr/bin/env node

\"use strict\";

var U2 = require(\"../tools/node\");
var fs = require(\"fs\");
var yargs = require(\"yargs\");
var ARGS = yargs
    .describe(\"o\", \"Output file\")
    .argv;
var files = ARGS._.slice();
var output = {
    vars: {},
    props: {}
};

if (ARGS.o) try {
    output = JSON.parse(fs.readFileSync(ARGS.o, \"utf8\"));
} catch(ex) {}

files.forEach(getProps);

if (ARGS.o) {
    fs.writeFileSync(ARGS.o, JSON.stringify(output, null, 2), \"utf8\");
} else {
    console.log(\"%s\", JSON.stringify(output, null, 2));
}

function getProps(filename) {
    var code = fs.readFileSync(filename, \"utf8\");
    var ast = U2.parse(code);

    ast.walk(new U2.TreeWalker(function(node){
        if (node instanceof U2.AST_ObjectKeyVal) {
            add(node.key);
        }
        else if (node instanceof U2.AST_ObjectProperty) {
            add(node.key.name);
        }
        else if (node instanceof U2.AST_Dot) {
            add(node.property);
        }
        else if (node instanceof U2.AST_Sub) {
            addStrings(node.property);
        }
    }));

    function addStrings(node) {
        var out = {};
        try {
            (function walk(node){
                node.walk(new U2.TreeWalker(function(node){
                    if (node instanceof U2.AST_Seq) {
                        walk(node.cdr);
                        return true;
                    }
                    if (node instanceof U2.AST_String) {
                        add(node.value);
                        return true;
                    }
                    if (node instanceof U2.AST_Conditional) {
                        walk(node.consequent);
                        walk(node.alternative);
                        return true;
                    }
                    throw out;
                }));
            })(node);
        } catch(ex) {
            if (ex !== out) throw ex;
        }
    }

    function add(name) {
        output.props[name] = true;
    }
}
", "node_modules/uglify-js/bin/extract-props.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-js/bin/extract-props.js");
    }
}
