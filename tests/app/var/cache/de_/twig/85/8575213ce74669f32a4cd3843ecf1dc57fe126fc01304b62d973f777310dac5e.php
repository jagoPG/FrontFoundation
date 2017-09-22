<?php

/* node_modules/lodash/_getWrapDetails.js */
class __TwigTemplate_b843d08e8b9dd7375dc335565d66df999c68522f0a7123cadbc6be5d04148418 extends Twig_Template
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
        $__internal_0cb044fa0102fa5702f8a4e796ee250109a63b0d9d4effac12d793313658879d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb044fa0102fa5702f8a4e796ee250109a63b0d9d4effac12d793313658879d->enter($__internal_0cb044fa0102fa5702f8a4e796ee250109a63b0d9d4effac12d793313658879d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getWrapDetails.js"));

        // line 1
        echo "/** Used to match wrap detail comments. */
var reWrapDetails = /\\{\\n\\/\\* \\[wrapped with (.+)\\] \\*/,
    reSplitDetails = /,? & /;

/**
 * Extracts wrapper details from the `source` body comment.
 *
 * @private
 * @param {string} source The source to inspect.
 * @returns {Array} Returns the wrapper details.
 */
function getWrapDetails(source) {
  var match = source.match(reWrapDetails);
  return match ? match[1].split(reSplitDetails) : [];
}

module.exports = getWrapDetails;
";
        
        $__internal_0cb044fa0102fa5702f8a4e796ee250109a63b0d9d4effac12d793313658879d->leave($__internal_0cb044fa0102fa5702f8a4e796ee250109a63b0d9d4effac12d793313658879d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getWrapDetails.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match wrap detail comments. */
var reWrapDetails = /\\{\\n\\/\\* \\[wrapped with (.+)\\] \\*/,
    reSplitDetails = /,? & /;

/**
 * Extracts wrapper details from the `source` body comment.
 *
 * @private
 * @param {string} source The source to inspect.
 * @returns {Array} Returns the wrapper details.
 */
function getWrapDetails(source) {
  var match = source.match(reWrapDetails);
  return match ? match[1].split(reSplitDetails) : [];
}

module.exports = getWrapDetails;
", "node_modules/lodash/_getWrapDetails.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getWrapDetails.js");
    }
}
