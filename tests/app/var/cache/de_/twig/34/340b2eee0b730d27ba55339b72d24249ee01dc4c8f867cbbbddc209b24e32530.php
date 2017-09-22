<?php

/* node_modules/lodash/_getView.js */
class __TwigTemplate_cee2348e69ae3d1bf512d0a74ef9445481db526ec0685a866c70795bb707d91d extends Twig_Template
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
        $__internal_6ab16e6223eec24e0748c0cc5913e64529975ce62b127233b0e9128da43ccb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab16e6223eec24e0748c0cc5913e64529975ce62b127233b0e9128da43ccb43->enter($__internal_6ab16e6223eec24e0748c0cc5913e64529975ce62b127233b0e9128da43ccb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getView.js"));

        // line 1
        echo "/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * Gets the view, applying any `transforms` to the `start` and `end` positions.
 *
 * @private
 * @param {number} start The start of the view.
 * @param {number} end The end of the view.
 * @param {Array} transforms The transformations to apply to the view.
 * @returns {Object} Returns an object containing the `start` and `end`
 *  positions of the view.
 */
function getView(start, end, transforms) {
  var index = -1,
      length = transforms.length;

  while (++index < length) {
    var data = transforms[index],
        size = data.size;

    switch (data.type) {
      case 'drop':      start += size; break;
      case 'dropRight': end -= size; break;
      case 'take':      end = nativeMin(end, start + size); break;
      case 'takeRight': start = nativeMax(start, end - size); break;
    }
  }
  return { 'start': start, 'end': end };
}

module.exports = getView;
";
        
        $__internal_6ab16e6223eec24e0748c0cc5913e64529975ce62b127233b0e9128da43ccb43->leave($__internal_6ab16e6223eec24e0748c0cc5913e64529975ce62b127233b0e9128da43ccb43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getView.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * Gets the view, applying any `transforms` to the `start` and `end` positions.
 *
 * @private
 * @param {number} start The start of the view.
 * @param {number} end The end of the view.
 * @param {Array} transforms The transformations to apply to the view.
 * @returns {Object} Returns an object containing the `start` and `end`
 *  positions of the view.
 */
function getView(start, end, transforms) {
  var index = -1,
      length = transforms.length;

  while (++index < length) {
    var data = transforms[index],
        size = data.size;

    switch (data.type) {
      case 'drop':      start += size; break;
      case 'dropRight': end -= size; break;
      case 'take':      end = nativeMin(end, start + size); break;
      case 'takeRight': start = nativeMax(start, end - size); break;
    }
  }
  return { 'start': start, 'end': end };
}

module.exports = getView;
", "node_modules/lodash/_getView.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getView.js");
    }
}
