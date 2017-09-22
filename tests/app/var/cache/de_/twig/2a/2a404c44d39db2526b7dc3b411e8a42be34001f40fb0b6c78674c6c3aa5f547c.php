<?php

/* node_modules/execa/lib/errname.js */
class __TwigTemplate_fb17dc0527cff4cc4f89399d4decb868d2df4aadc481caa5b7489dd95552f58f extends Twig_Template
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
        $__internal_d9f0d4fc60ec7f1daeefc57969b977d4fd882f47d076f9d8922503cfbd018053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f0d4fc60ec7f1daeefc57969b977d4fd882f47d076f9d8922503cfbd018053->enter($__internal_d9f0d4fc60ec7f1daeefc57969b977d4fd882f47d076f9d8922503cfbd018053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/execa/lib/errname.js"));

        // line 1
        echo "'use strict';
// The Node team wants to deprecate `process.bind(...)`.
//   https://github.com/nodejs/node/pull/2768
//
// However, we need the 'uv' binding for errname support.
// This is a defensive wrapper around it so `execa` will not fail entirely if it stops working someday.
//
// If this ever stops working. See: https://github.com/sindresorhus/execa/issues/31#issuecomment-215939939 for another possible solution.
let uv;

try {
\tuv = process.binding('uv');

\tif (typeof uv.errname !== 'function') {
\t\tthrow new TypeError('uv.errname is not a function');
\t}
} catch (err) {
\tconsole.error('execa/lib/errname: unable to establish process.binding(\\'uv\\')', err);
\tuv = null;
}

function errname(uv, code) {
\tif (uv) {
\t\treturn uv.errname(code);
\t}

\tif (!(code < 0)) {
\t\tthrow new Error('err >= 0');
\t}

\treturn `Unknown system error \${code}`;
}

module.exports = code => errname(uv, code);

// Used for testing the fallback behavior
module.exports.__test__ = errname;
";
        
        $__internal_d9f0d4fc60ec7f1daeefc57969b977d4fd882f47d076f9d8922503cfbd018053->leave($__internal_d9f0d4fc60ec7f1daeefc57969b977d4fd882f47d076f9d8922503cfbd018053_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/execa/lib/errname.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// The Node team wants to deprecate `process.bind(...)`.
//   https://github.com/nodejs/node/pull/2768
//
// However, we need the 'uv' binding for errname support.
// This is a defensive wrapper around it so `execa` will not fail entirely if it stops working someday.
//
// If this ever stops working. See: https://github.com/sindresorhus/execa/issues/31#issuecomment-215939939 for another possible solution.
let uv;

try {
\tuv = process.binding('uv');

\tif (typeof uv.errname !== 'function') {
\t\tthrow new TypeError('uv.errname is not a function');
\t}
} catch (err) {
\tconsole.error('execa/lib/errname: unable to establish process.binding(\\'uv\\')', err);
\tuv = null;
}

function errname(uv, code) {
\tif (uv) {
\t\treturn uv.errname(code);
\t}

\tif (!(code < 0)) {
\t\tthrow new Error('err >= 0');
\t}

\treturn `Unknown system error \${code}`;
}

module.exports = code => errname(uv, code);

// Used for testing the fallback behavior
module.exports.__test__ = errname;
", "node_modules/execa/lib/errname.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/execa/lib/errname.js");
    }
}
