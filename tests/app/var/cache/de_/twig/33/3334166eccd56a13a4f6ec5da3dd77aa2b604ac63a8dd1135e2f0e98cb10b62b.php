<?php

/* node_modules/parsleyjs/src/extra/validator/words.js */
class __TwigTemplate_287215f93f14f0d07b9f6ca3eed2f800a632569af24d6cdaf6ac56d914f6c03f extends Twig_Template
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
        $__internal_ea031d5ee0496a423592497d36e66dba5a220f7f81eeeb0364d6d9470d4264f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea031d5ee0496a423592497d36e66dba5a220f7f81eeeb0364d6d9470d4264f9->enter($__internal_ea031d5ee0496a423592497d36e66dba5a220f7f81eeeb0364d6d9470d4264f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/extra/validator/words.js"));

        // line 1
        echo "(function () {
// minwords, maxwords, words extra validators
var countWords = function (string) {
  return string
      .replace( /(^\\s*)|(\\s*\$)/gi, \"\" )
      .replace( /\\s+/gi, \" \" )
      .split(' ').length;
};

window.Parsley.addValidator(
  'minwords',
  function (value, nbWords) {
    return countWords(value) >= nbWords;
  }, 32)
  .addMessage('en', 'minwords', 'This value needs more words');

window.Parsley.addValidator(
  'maxwords',
  function (value, nbWords) {
    return countWords(value) <= nbWords;
  }, 32)
  .addMessage('en', 'maxwords', 'This value needs fewer words');

window.Parsley.addValidator(
  'words',
  function (value, arrayRange) {
    var length = countWords(value);
    return length >= arrayRange[0] && length <= arrayRange[1];
  }, 32)
  .addMessage('en', 'words', 'This value has the incorrect number of words');
})();
";
        
        $__internal_ea031d5ee0496a423592497d36e66dba5a220f7f81eeeb0364d6d9470d4264f9->leave($__internal_ea031d5ee0496a423592497d36e66dba5a220f7f81eeeb0364d6d9470d4264f9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/extra/validator/words.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function () {
// minwords, maxwords, words extra validators
var countWords = function (string) {
  return string
      .replace( /(^\\s*)|(\\s*\$)/gi, \"\" )
      .replace( /\\s+/gi, \" \" )
      .split(' ').length;
};

window.Parsley.addValidator(
  'minwords',
  function (value, nbWords) {
    return countWords(value) >= nbWords;
  }, 32)
  .addMessage('en', 'minwords', 'This value needs more words');

window.Parsley.addValidator(
  'maxwords',
  function (value, nbWords) {
    return countWords(value) <= nbWords;
  }, 32)
  .addMessage('en', 'maxwords', 'This value needs fewer words');

window.Parsley.addValidator(
  'words',
  function (value, arrayRange) {
    var length = countWords(value);
    return length >= arrayRange[0] && length <= arrayRange[1];
  }, 32)
  .addMessage('en', 'words', 'This value has the incorrect number of words');
})();
", "node_modules/parsleyjs/src/extra/validator/words.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/extra/validator/words.js");
    }
}
