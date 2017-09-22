<?php

/* node_modules/string.prototype.trim/test/tests.js */
class __TwigTemplate_728ff8cd0e9db7dad989242add4ff377f2c3ef53579a392f1598bc370ee58f55 extends Twig_Template
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
        $__internal_de1a37e0dacb28307c3ac4cc67358d58b12ba0cd05e26bab647c7a7fec511637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1a37e0dacb28307c3ac4cc67358d58b12ba0cd05e26bab647c7a7fec511637->enter($__internal_de1a37e0dacb28307c3ac4cc67358d58b12ba0cd05e26bab647c7a7fec511637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/test/tests.js"));

        // line 1
        echo "'use strict';

module.exports = function (trim, t) {
\tt.test('normal cases', function (st) {
\t\tst.equal(trim(' \\t\\na \\t\\n'), 'a', 'strips whitespace off left and right sides');
\t\tst.equal(trim('a'), 'a', 'noop when no whitespace');

\t\tvar allWhitespaceChars = '\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028\\u2029\\uFEFF';
\t\tst.equal(trim(allWhitespaceChars + 'a' + allWhitespaceChars), 'a', 'all expected whitespace chars are trimmed');

\t\tst.end();
\t});

\tt.test('zero-width spaces', function (st) {
\t\tvar zeroWidth = '\\u200b';
\t\tst.equal(trim(zeroWidth), zeroWidth, 'zero width space does not trim');
\t\tst.end();
\t});
};
";
        
        $__internal_de1a37e0dacb28307c3ac4cc67358d58b12ba0cd05e26bab647c7a7fec511637->leave($__internal_de1a37e0dacb28307c3ac4cc67358d58b12ba0cd05e26bab647c7a7fec511637_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/test/tests.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (trim, t) {
\tt.test('normal cases', function (st) {
\t\tst.equal(trim(' \\t\\na \\t\\n'), 'a', 'strips whitespace off left and right sides');
\t\tst.equal(trim('a'), 'a', 'noop when no whitespace');

\t\tvar allWhitespaceChars = '\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028\\u2029\\uFEFF';
\t\tst.equal(trim(allWhitespaceChars + 'a' + allWhitespaceChars), 'a', 'all expected whitespace chars are trimmed');

\t\tst.end();
\t});

\tt.test('zero-width spaces', function (st) {
\t\tvar zeroWidth = '\\u200b';
\t\tst.equal(trim(zeroWidth), zeroWidth, 'zero width space does not trim');
\t\tst.end();
\t});
};
", "node_modules/string.prototype.trim/test/tests.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/test/tests.js");
    }
}
