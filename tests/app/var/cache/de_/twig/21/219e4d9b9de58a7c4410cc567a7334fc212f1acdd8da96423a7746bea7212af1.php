<?php

/* node_modules/execa/lib/stdio.js */
class __TwigTemplate_1aa63c485bd8df1a32e9410ca4b405d309e14ee39306ed77d67a56c1ed10cb15 extends Twig_Template
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
        $__internal_267b299423d2a08f9fa682ca582ab3ed5b92cc5dd4161a27b150c4fc56562582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267b299423d2a08f9fa682ca582ab3ed5b92cc5dd4161a27b150c4fc56562582->enter($__internal_267b299423d2a08f9fa682ca582ab3ed5b92cc5dd4161a27b150c4fc56562582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/execa/lib/stdio.js"));

        // line 1
        echo "'use strict';
const alias = ['stdin', 'stdout', 'stderr'];

const hasAlias = opts => alias.some(x => Boolean(opts[x]));

module.exports = opts => {
\tif (!opts) {
\t\treturn null;
\t}

\tif (opts.stdio && hasAlias(opts)) {
\t\tthrow new Error(`It's not possible to provide \\`stdio\\` in combination with one of \${alias.map(x => `\\`\${x}\\``).join(', ')}`);
\t}

\tif (typeof opts.stdio === 'string') {
\t\treturn opts.stdio;
\t}

\tconst stdio = opts.stdio || [];

\tif (!Array.isArray(stdio)) {
\t\tthrow new TypeError(`Expected \\`stdio\\` to be of type \\`string\\` or \\`Array\\`, got \\`\${typeof stdio}\\``);
\t}

\tconst result = [];
\tconst len = Math.max(stdio.length, alias.length);

\tfor (let i = 0; i < len; i++) {
\t\tlet value = null;

\t\tif (stdio[i] !== undefined) {
\t\t\tvalue = stdio[i];
\t\t} else if (opts[alias[i]] !== undefined) {
\t\t\tvalue = opts[alias[i]];
\t\t}

\t\tresult[i] = value;
\t}

\treturn result;
};
";
        
        $__internal_267b299423d2a08f9fa682ca582ab3ed5b92cc5dd4161a27b150c4fc56562582->leave($__internal_267b299423d2a08f9fa682ca582ab3ed5b92cc5dd4161a27b150c4fc56562582_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/execa/lib/stdio.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const alias = ['stdin', 'stdout', 'stderr'];

const hasAlias = opts => alias.some(x => Boolean(opts[x]));

module.exports = opts => {
\tif (!opts) {
\t\treturn null;
\t}

\tif (opts.stdio && hasAlias(opts)) {
\t\tthrow new Error(`It's not possible to provide \\`stdio\\` in combination with one of \${alias.map(x => `\\`\${x}\\``).join(', ')}`);
\t}

\tif (typeof opts.stdio === 'string') {
\t\treturn opts.stdio;
\t}

\tconst stdio = opts.stdio || [];

\tif (!Array.isArray(stdio)) {
\t\tthrow new TypeError(`Expected \\`stdio\\` to be of type \\`string\\` or \\`Array\\`, got \\`\${typeof stdio}\\``);
\t}

\tconst result = [];
\tconst len = Math.max(stdio.length, alias.length);

\tfor (let i = 0; i < len; i++) {
\t\tlet value = null;

\t\tif (stdio[i] !== undefined) {
\t\t\tvalue = stdio[i];
\t\t} else if (opts[alias[i]] !== undefined) {
\t\t\tvalue = opts[alias[i]];
\t\t}

\t\tresult[i] = value;
\t}

\treturn result;
};
", "node_modules/execa/lib/stdio.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/execa/lib/stdio.js");
    }
}
