<?php

/* node_modules/lodash/_insertWrapDetails.js */
class __TwigTemplate_9382d5a1ad0450e2674dbe3a7e7c8e1ef627078143982835487fdcc4a430df07 extends Twig_Template
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
        $__internal_289b0862127a9466da3be6950f354c7d852fd17fe4433fb2e9188fb048a2e6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289b0862127a9466da3be6950f354c7d852fd17fe4433fb2e9188fb048a2e6d4->enter($__internal_289b0862127a9466da3be6950f354c7d852fd17fe4433fb2e9188fb048a2e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_insertWrapDetails.js"));

        // line 1
        echo "/** Used to match wrap detail comments. */
var reWrapComment = /\\{(?:\\n\\/\\* \\[wrapped with .+\\] \\*\\/)?\\n?/;

/**
 * Inserts wrapper `details` in a comment at the top of the `source` body.
 *
 * @private
 * @param {string} source The source to modify.
 * @returns {Array} details The details to insert.
 * @returns {string} Returns the modified source.
 */
function insertWrapDetails(source, details) {
  var length = details.length;
  if (!length) {
    return source;
  }
  var lastIndex = length - 1;
  details[lastIndex] = (length > 1 ? '& ' : '') + details[lastIndex];
  details = details.join(length > 2 ? ', ' : ' ');
  return source.replace(reWrapComment, '{\\n/* [wrapped with ' + details + '] */\\n');
}

module.exports = insertWrapDetails;
";
        
        $__internal_289b0862127a9466da3be6950f354c7d852fd17fe4433fb2e9188fb048a2e6d4->leave($__internal_289b0862127a9466da3be6950f354c7d852fd17fe4433fb2e9188fb048a2e6d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_insertWrapDetails.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match wrap detail comments. */
var reWrapComment = /\\{(?:\\n\\/\\* \\[wrapped with .+\\] \\*\\/)?\\n?/;

/**
 * Inserts wrapper `details` in a comment at the top of the `source` body.
 *
 * @private
 * @param {string} source The source to modify.
 * @returns {Array} details The details to insert.
 * @returns {string} Returns the modified source.
 */
function insertWrapDetails(source, details) {
  var length = details.length;
  if (!length) {
    return source;
  }
  var lastIndex = length - 1;
  details[lastIndex] = (length > 1 ? '& ' : '') + details[lastIndex];
  details = details.join(length > 2 ? ', ' : ' ');
  return source.replace(reWrapComment, '{\\n/* [wrapped with ' + details + '] */\\n');
}

module.exports = insertWrapDetails;
", "node_modules/lodash/_insertWrapDetails.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_insertWrapDetails.js");
    }
}
