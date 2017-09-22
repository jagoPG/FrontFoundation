<?php

/* node_modules/enhanced-resolve/lib/getPaths.js */
class __TwigTemplate_edf3f17a13ba14ea49a39a78a1046eb3b0afb4cee87ec13f0200a2ebbf1b3003 extends Twig_Template
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
        $__internal_7031293a2fbd815813e5d778378403e0732bd2946be1f8d67bbb8ec88e7fd8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7031293a2fbd815813e5d778378403e0732bd2946be1f8d67bbb8ec88e7fd8ba->enter($__internal_7031293a2fbd815813e5d778378403e0732bd2946be1f8d67bbb8ec88e7fd8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/getPaths.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function getPaths(path) {
\tvar parts = path.split(/(.*?[\\\\\\/]+)/);
\tvar paths = [path];
\tvar seqments = [parts[parts.length - 1]];
\tvar part = parts[parts.length - 1];
\tpath = path.substr(0, path.length - part.length - 1);
\tpaths.push(path);
\tfor(var i = parts.length - 2; i > 2; i -= 2) {
\t\tpart = parts[i];
\t\tpath = path.substr(0, path.length - part.length) || \"/\";
\t\tpaths.push(path);
\t\tseqments.push(part.substr(0, part.length - 1));
\t}
\tpart = parts[1];
\tseqments.push(part.length > 1 ? part.substr(0, part.length - 1) : part);
\treturn {
\t\tpaths: paths,
\t\tseqments: seqments
\t};
};

module.exports.basename = function basename(path) {
\tvar i = path.lastIndexOf(\"/\"),
\t\tj = path.lastIndexOf(\"\\\\\");
\tvar p = i < 0 ? j : j < 0 ? i : i < j ? j : i;
\tif(p < 0) return null;
\tvar s = path.substr(p + 1);
\treturn s;
};
";
        
        $__internal_7031293a2fbd815813e5d778378403e0732bd2946be1f8d67bbb8ec88e7fd8ba->leave($__internal_7031293a2fbd815813e5d778378403e0732bd2946be1f8d67bbb8ec88e7fd8ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/getPaths.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function getPaths(path) {
\tvar parts = path.split(/(.*?[\\\\\\/]+)/);
\tvar paths = [path];
\tvar seqments = [parts[parts.length - 1]];
\tvar part = parts[parts.length - 1];
\tpath = path.substr(0, path.length - part.length - 1);
\tpaths.push(path);
\tfor(var i = parts.length - 2; i > 2; i -= 2) {
\t\tpart = parts[i];
\t\tpath = path.substr(0, path.length - part.length) || \"/\";
\t\tpaths.push(path);
\t\tseqments.push(part.substr(0, part.length - 1));
\t}
\tpart = parts[1];
\tseqments.push(part.length > 1 ? part.substr(0, part.length - 1) : part);
\treturn {
\t\tpaths: paths,
\t\tseqments: seqments
\t};
};

module.exports.basename = function basename(path) {
\tvar i = path.lastIndexOf(\"/\"),
\t\tj = path.lastIndexOf(\"\\\\\");
\tvar p = i < 0 ? j : j < 0 ? i : i < j ? j : i;
\tif(p < 0) return null;
\tvar s = path.substr(p + 1);
\treturn s;
};
", "node_modules/enhanced-resolve/lib/getPaths.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/getPaths.js");
    }
}
