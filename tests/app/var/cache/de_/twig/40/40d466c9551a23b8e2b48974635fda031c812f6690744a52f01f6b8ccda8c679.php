<?php

/* node_modules/lodash/_hashDelete.js */
class __TwigTemplate_0b549510972133355fc9928097145bb7df4160ba627527549be6b2bec5a4f614 extends Twig_Template
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
        $__internal_47ea2f5dee740d63706d8c11ba38116210d5c89f4f1773f26a2720b576708b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ea2f5dee740d63706d8c11ba38116210d5c89f4f1773f26a2720b576708b51->enter($__internal_47ea2f5dee740d63706d8c11ba38116210d5c89f4f1773f26a2720b576708b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hashDelete.js"));

        // line 1
        echo "/**
 * Removes `key` and its value from the hash.
 *
 * @private
 * @name delete
 * @memberOf Hash
 * @param {Object} hash The hash to modify.
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function hashDelete(key) {
  var result = this.has(key) && delete this.__data__[key];
  this.size -= result ? 1 : 0;
  return result;
}

module.exports = hashDelete;
";
        
        $__internal_47ea2f5dee740d63706d8c11ba38116210d5c89f4f1773f26a2720b576708b51->leave($__internal_47ea2f5dee740d63706d8c11ba38116210d5c89f4f1773f26a2720b576708b51_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hashDelete.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Removes `key` and its value from the hash.
 *
 * @private
 * @name delete
 * @memberOf Hash
 * @param {Object} hash The hash to modify.
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function hashDelete(key) {
  var result = this.has(key) && delete this.__data__[key];
  this.size -= result ? 1 : 0;
  return result;
}

module.exports = hashDelete;
", "node_modules/lodash/_hashDelete.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hashDelete.js");
    }
}
