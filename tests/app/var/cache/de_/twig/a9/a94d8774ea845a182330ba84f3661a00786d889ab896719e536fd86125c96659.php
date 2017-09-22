<?php

/* node_modules/normalize-package-data/lib/extract_description.js */
class __TwigTemplate_a53bdd27eeef86357eaff7f787a4409d968e890b80b23b4ac73431cbf9ea8e00 extends Twig_Template
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
        $__internal_abaa94cd594b6e65639febbc5141d145e2af5430a179916942834e1eeb54df1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaa94cd594b6e65639febbc5141d145e2af5430a179916942834e1eeb54df1f->enter($__internal_abaa94cd594b6e65639febbc5141d145e2af5430a179916942834e1eeb54df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-package-data/lib/extract_description.js"));

        // line 1
        echo "module.exports = extractDescription

// Extracts description from contents of a readme file in markdown format
function extractDescription (d) {
  if (!d) return;
  if (d === \"ERROR: No README data found!\") return;
  // the first block of text before the first heading
  // that isn't the first line heading
  d = d.trim().split('\\n')
  for (var s = 0; d[s] && d[s].trim().match(/^(#|\$)/); s ++);
  var l = d.length
  for (var e = s + 1; e < l && d[e].trim(); e ++);
  return d.slice(s, e).join(' ').trim()
}
";
        
        $__internal_abaa94cd594b6e65639febbc5141d145e2af5430a179916942834e1eeb54df1f->leave($__internal_abaa94cd594b6e65639febbc5141d145e2af5430a179916942834e1eeb54df1f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-package-data/lib/extract_description.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = extractDescription

// Extracts description from contents of a readme file in markdown format
function extractDescription (d) {
  if (!d) return;
  if (d === \"ERROR: No README data found!\") return;
  // the first block of text before the first heading
  // that isn't the first line heading
  d = d.trim().split('\\n')
  for (var s = 0; d[s] && d[s].trim().match(/^(#|\$)/); s ++);
  var l = d.length
  for (var e = s + 1; e < l && d[e].trim(); e ++);
  return d.slice(s, e).join(' ').trim()
}
", "node_modules/normalize-package-data/lib/extract_description.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-package-data/lib/extract_description.js");
    }
}
