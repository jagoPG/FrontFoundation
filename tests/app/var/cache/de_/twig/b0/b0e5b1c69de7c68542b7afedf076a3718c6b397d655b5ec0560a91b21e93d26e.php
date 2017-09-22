<?php

/* node_modules/acorn-dynamic-import/lib/inject.js */
class __TwigTemplate_815ae6e056573650ee56a0c8fd6456f718c83edbf37b6a9a851290dd2d8a702a extends Twig_Template
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
        $__internal_0bcc051498a3d8e4be12bf65abaadf22284eef0ac4e7c5c57db872185f8af7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcc051498a3d8e4be12bf65abaadf22284eef0ac4e7c5c57db872185f8af7c1->enter($__internal_0bcc051498a3d8e4be12bf65abaadf22284eef0ac4e7c5c57db872185f8af7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/lib/inject.js"));

        // line 1
        echo "Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports['default'] = injectDynamicImport;
/* eslint-disable no-underscore-dangle */

function injectDynamicImport(acorn) {
  var tt = acorn.tokTypes;

  // NOTE: This allows `yield import()` to parse correctly.
  tt._import.startsExpr = true;

  function parseDynamicImport() {
    var node = this.startNode();
    this.next();
    if (this.type !== tt.parenL) {
      this.unexpected();
    }
    return this.finishNode(node, 'Import');
  }

  function peekNext() {
    return this.input[this.pos];
  }

  // eslint-disable-next-line no-param-reassign
  acorn.plugins.dynamicImport = function () {
    function dynamicImportPlugin(instance) {
      instance.extend('parseStatement', function (nextMethod) {
        return function () {
          function parseStatement() {
            var node = this.startNode();
            if (this.type === tt._import) {
              var nextToken = peekNext.call(this);
              if (nextToken === tt.parenL.label) {
                var expr = this.parseExpression();
                return this.parseExpressionStatement(node, expr);
              }
            }

            for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
              args[_key] = arguments[_key];
            }

            return nextMethod.apply(this, args);
          }

          return parseStatement;
        }();
      });

      instance.extend('parseExprAtom', function (nextMethod) {
        return function () {
          function parseExprAtom(refDestructuringErrors) {
            if (this.type === tt._import) {
              return parseDynamicImport.call(this);
            }
            return nextMethod.call(this, refDestructuringErrors);
          }

          return parseExprAtom;
        }();
      });
    }

    return dynamicImportPlugin;
  }();

  return acorn;
}";
        
        $__internal_0bcc051498a3d8e4be12bf65abaadf22284eef0ac4e7c5c57db872185f8af7c1->leave($__internal_0bcc051498a3d8e4be12bf65abaadf22284eef0ac4e7c5c57db872185f8af7c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/lib/inject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports['default'] = injectDynamicImport;
/* eslint-disable no-underscore-dangle */

function injectDynamicImport(acorn) {
  var tt = acorn.tokTypes;

  // NOTE: This allows `yield import()` to parse correctly.
  tt._import.startsExpr = true;

  function parseDynamicImport() {
    var node = this.startNode();
    this.next();
    if (this.type !== tt.parenL) {
      this.unexpected();
    }
    return this.finishNode(node, 'Import');
  }

  function peekNext() {
    return this.input[this.pos];
  }

  // eslint-disable-next-line no-param-reassign
  acorn.plugins.dynamicImport = function () {
    function dynamicImportPlugin(instance) {
      instance.extend('parseStatement', function (nextMethod) {
        return function () {
          function parseStatement() {
            var node = this.startNode();
            if (this.type === tt._import) {
              var nextToken = peekNext.call(this);
              if (nextToken === tt.parenL.label) {
                var expr = this.parseExpression();
                return this.parseExpressionStatement(node, expr);
              }
            }

            for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
              args[_key] = arguments[_key];
            }

            return nextMethod.apply(this, args);
          }

          return parseStatement;
        }();
      });

      instance.extend('parseExprAtom', function (nextMethod) {
        return function () {
          function parseExprAtom(refDestructuringErrors) {
            if (this.type === tt._import) {
              return parseDynamicImport.call(this);
            }
            return nextMethod.call(this, refDestructuringErrors);
          }

          return parseExprAtom;
        }();
      });
    }

    return dynamicImportPlugin;
  }();

  return acorn;
}", "node_modules/acorn-dynamic-import/lib/inject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/lib/inject.js");
    }
}
