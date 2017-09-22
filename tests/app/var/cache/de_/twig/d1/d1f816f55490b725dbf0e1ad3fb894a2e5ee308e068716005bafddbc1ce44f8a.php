<?php

/* node_modules/ansi-styles/index.js */
class __TwigTemplate_afa40003620985599d2fad3db9e8ab12a65b0c0ccb8850ff383bd1bc93e3955c extends Twig_Template
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
        $__internal_c3cb43f7f95e9cfb002a3bffde466adfc9d207e7e8c11cf1d17513cbb16d9991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cb43f7f95e9cfb002a3bffde466adfc9d207e7e8c11cf1d17513cbb16d9991->enter($__internal_c3cb43f7f95e9cfb002a3bffde466adfc9d207e7e8c11cf1d17513cbb16d9991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ansi-styles/index.js"));

        // line 1
        echo "'use strict';

function assembleStyles () {
\tvar styles = {
\t\tmodifiers: {
\t\t\treset: [0, 0],
\t\t\tbold: [1, 22], // 21 isn't widely supported and 22 does the same thing
\t\t\tdim: [2, 22],
\t\t\titalic: [3, 23],
\t\t\tunderline: [4, 24],
\t\t\tinverse: [7, 27],
\t\t\thidden: [8, 28],
\t\t\tstrikethrough: [9, 29]
\t\t},
\t\tcolors: {
\t\t\tblack: [30, 39],
\t\t\tred: [31, 39],
\t\t\tgreen: [32, 39],
\t\t\tyellow: [33, 39],
\t\t\tblue: [34, 39],
\t\t\tmagenta: [35, 39],
\t\t\tcyan: [36, 39],
\t\t\twhite: [37, 39],
\t\t\tgray: [90, 39]
\t\t},
\t\tbgColors: {
\t\t\tbgBlack: [40, 49],
\t\t\tbgRed: [41, 49],
\t\t\tbgGreen: [42, 49],
\t\t\tbgYellow: [43, 49],
\t\t\tbgBlue: [44, 49],
\t\t\tbgMagenta: [45, 49],
\t\t\tbgCyan: [46, 49],
\t\t\tbgWhite: [47, 49]
\t\t}
\t};

\t// fix humans
\tstyles.colors.grey = styles.colors.gray;

\tObject.keys(styles).forEach(function (groupName) {
\t\tvar group = styles[groupName];

\t\tObject.keys(group).forEach(function (styleName) {
\t\t\tvar style = group[styleName];

\t\t\tstyles[styleName] = group[styleName] = {
\t\t\t\topen: '\\u001b[' + style[0] + 'm',
\t\t\t\tclose: '\\u001b[' + style[1] + 'm'
\t\t\t};
\t\t});

\t\tObject.defineProperty(styles, groupName, {
\t\t\tvalue: group,
\t\t\tenumerable: false
\t\t});
\t});

\treturn styles;
}

Object.defineProperty(module, 'exports', {
\tenumerable: true,
\tget: assembleStyles
});
";
        
        $__internal_c3cb43f7f95e9cfb002a3bffde466adfc9d207e7e8c11cf1d17513cbb16d9991->leave($__internal_c3cb43f7f95e9cfb002a3bffde466adfc9d207e7e8c11cf1d17513cbb16d9991_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ansi-styles/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

function assembleStyles () {
\tvar styles = {
\t\tmodifiers: {
\t\t\treset: [0, 0],
\t\t\tbold: [1, 22], // 21 isn't widely supported and 22 does the same thing
\t\t\tdim: [2, 22],
\t\t\titalic: [3, 23],
\t\t\tunderline: [4, 24],
\t\t\tinverse: [7, 27],
\t\t\thidden: [8, 28],
\t\t\tstrikethrough: [9, 29]
\t\t},
\t\tcolors: {
\t\t\tblack: [30, 39],
\t\t\tred: [31, 39],
\t\t\tgreen: [32, 39],
\t\t\tyellow: [33, 39],
\t\t\tblue: [34, 39],
\t\t\tmagenta: [35, 39],
\t\t\tcyan: [36, 39],
\t\t\twhite: [37, 39],
\t\t\tgray: [90, 39]
\t\t},
\t\tbgColors: {
\t\t\tbgBlack: [40, 49],
\t\t\tbgRed: [41, 49],
\t\t\tbgGreen: [42, 49],
\t\t\tbgYellow: [43, 49],
\t\t\tbgBlue: [44, 49],
\t\t\tbgMagenta: [45, 49],
\t\t\tbgCyan: [46, 49],
\t\t\tbgWhite: [47, 49]
\t\t}
\t};

\t// fix humans
\tstyles.colors.grey = styles.colors.gray;

\tObject.keys(styles).forEach(function (groupName) {
\t\tvar group = styles[groupName];

\t\tObject.keys(group).forEach(function (styleName) {
\t\t\tvar style = group[styleName];

\t\t\tstyles[styleName] = group[styleName] = {
\t\t\t\topen: '\\u001b[' + style[0] + 'm',
\t\t\t\tclose: '\\u001b[' + style[1] + 'm'
\t\t\t};
\t\t});

\t\tObject.defineProperty(styles, groupName, {
\t\t\tvalue: group,
\t\t\tenumerable: false
\t\t});
\t});

\treturn styles;
}

Object.defineProperty(module, 'exports', {
\tenumerable: true,
\tget: assembleStyles
});
", "node_modules/ansi-styles/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ansi-styles/index.js");
    }
}
