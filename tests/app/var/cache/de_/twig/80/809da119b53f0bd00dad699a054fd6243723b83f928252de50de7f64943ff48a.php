<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/print.less */
class __TwigTemplate_59ae2b09b0f5843635b28c5c44de3874f323a27d0ca16611826313510186e0f3 extends Twig_Template
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
        $__internal_a270cd6826c631cace6696cec5e112f720d6b1717cb41b836eeb46498c1a4fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a270cd6826c631cace6696cec5e112f720d6b1717cb41b836eeb46498c1a4fe8->enter($__internal_a270cd6826c631cace6696cec5e112f720d6b1717cb41b836eeb46498c1a4fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/print.less"));

        // line 1
        echo "//
// Basic print styles
// --------------------------------------------------
// Source: https://github.com/h5bp/html5-boilerplate/blob/master/css/main.css

@media print {

  * {
    text-shadow: none !important;
    color: #000 !important; // Black prints faster: h5bp.com/s
    background: transparent !important;
    box-shadow: none !important;
  }

  a,
  a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: \" (\" attr(href) \")\";
  }

  abbr[title]:after {
    content: \" (\" attr(title) \")\";
  }

  // Don't show links for images, or javascript/internal links
  a[href^=\"javascript:\"]:after,
  a[href^=\"#\"]:after {
    content: \"\";
  }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group; // h5bp.com/t
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }

  @page {
    margin: 2cm .5cm;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

  // Chrome (OSX) fix for https://github.com/twbs/bootstrap/issues/11245
  // Once fixed, we can just straight up remove this.
  select {
    background: #fff !important;
  }

  // Bootstrap components
  .navbar {
    display: none;
  }
  .table {
    td,
    th {
      background-color: #fff !important;
    }
  }
  .btn,
  .dropup > .btn {
    > .caret {
      border-top-color: #000 !important;
    }
  }
  .label {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }
  .table-bordered {
    th,
    td {
      border: 1px solid #ddd !important;
    }
  }

}
";
        
        $__internal_a270cd6826c631cace6696cec5e112f720d6b1717cb41b836eeb46498c1a4fe8->leave($__internal_a270cd6826c631cace6696cec5e112f720d6b1717cb41b836eeb46498c1a4fe8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/print.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Basic print styles
// --------------------------------------------------
// Source: https://github.com/h5bp/html5-boilerplate/blob/master/css/main.css

@media print {

  * {
    text-shadow: none !important;
    color: #000 !important; // Black prints faster: h5bp.com/s
    background: transparent !important;
    box-shadow: none !important;
  }

  a,
  a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: \" (\" attr(href) \")\";
  }

  abbr[title]:after {
    content: \" (\" attr(title) \")\";
  }

  // Don't show links for images, or javascript/internal links
  a[href^=\"javascript:\"]:after,
  a[href^=\"#\"]:after {
    content: \"\";
  }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group; // h5bp.com/t
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }

  @page {
    margin: 2cm .5cm;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

  // Chrome (OSX) fix for https://github.com/twbs/bootstrap/issues/11245
  // Once fixed, we can just straight up remove this.
  select {
    background: #fff !important;
  }

  // Bootstrap components
  .navbar {
    display: none;
  }
  .table {
    td,
    th {
      background-color: #fff !important;
    }
  }
  .btn,
  .dropup > .btn {
    > .caret {
      border-top-color: #000 !important;
    }
  }
  .label {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }
  .table-bordered {
    th,
    td {
      border: 1px solid #ddd !important;
    }
  }

}
", "node_modules/parsleyjs/bower_components/bootstrap/less/print.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/print.less");
    }
}
