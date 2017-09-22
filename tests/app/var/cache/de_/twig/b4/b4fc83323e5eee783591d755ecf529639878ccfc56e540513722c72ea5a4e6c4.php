<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/whitespace.js */
class __TwigTemplate_46295f6bcfb1b8e2549859134db716890fb8ed3abd6ace964574aec589721826 extends Twig_Template
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
        $__internal_4a95d673109655703b3a0d7028e514991064a407d99e445c8f0ae3ccebfbbb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a95d673109655703b3a0d7028e514991064a407d99e445c8f0ae3ccebfbbb75->enter($__internal_4a95d673109655703b3a0d7028e514991064a407d99e445c8f0ae3ccebfbbb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/whitespace.js"));

        // line 1
        echo "// Matches a whole line break (where CRLF is considered a single
// line break). Used to count lines.

export const lineBreak = /\\r\\n?|\\n|\\u2028|\\u2029/
export const lineBreakG = new RegExp(lineBreak.source, \"g\")

export function isNewLine(code) {
  return code === 10 || code === 13 || code === 0x2028 || code === 0x2029
}

export const nonASCIIwhitespace = /[\\u1680\\u180e\\u2000-\\u200a\\u202f\\u205f\\u3000\\ufeff]/

export const skipWhiteSpace = /(?:\\s|\\/\\/.*|\\/\\*[^]*?\\*\\/)*/g
";
        
        $__internal_4a95d673109655703b3a0d7028e514991064a407d99e445c8f0ae3ccebfbbb75->leave($__internal_4a95d673109655703b3a0d7028e514991064a407d99e445c8f0ae3ccebfbbb75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/whitespace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Matches a whole line break (where CRLF is considered a single
// line break). Used to count lines.

export const lineBreak = /\\r\\n?|\\n|\\u2028|\\u2029/
export const lineBreakG = new RegExp(lineBreak.source, \"g\")

export function isNewLine(code) {
  return code === 10 || code === 13 || code === 0x2028 || code === 0x2029
}

export const nonASCIIwhitespace = /[\\u1680\\u180e\\u2000-\\u200a\\u202f\\u205f\\u3000\\ufeff]/

export const skipWhiteSpace = /(?:\\s|\\/\\/.*|\\/\\*[^]*?\\*\\/)*/g
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/whitespace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/whitespace.js");
    }
}
