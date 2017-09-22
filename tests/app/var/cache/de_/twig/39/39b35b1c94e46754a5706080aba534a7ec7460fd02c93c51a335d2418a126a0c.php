<?php

/* node_modules/acorn-dynamic-import/src/inject.js */
class __TwigTemplate_395b4743f72acf86cc8d74c3f05f9654157b90b604ee6d1716b326c9dfa37a1e extends Twig_Template
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
        $__internal_0a3c196af8ce60e2330754406fd7d179522608093fe02b89836b5641d6fd3d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3c196af8ce60e2330754406fd7d179522608093fe02b89836b5641d6fd3d25->enter($__internal_0a3c196af8ce60e2330754406fd7d179522608093fe02b89836b5641d6fd3d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/src/inject.js"));

        // line 1
        echo "/* eslint-disable no-underscore-dangle */

export default function injectDynamicImport(acorn) {
  const tt = acorn.tokTypes;

  // NOTE: This allows `yield import()` to parse correctly.
  tt._import.startsExpr = true;

  function parseDynamicImport() {
    const node = this.startNode();
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
  acorn.plugins.dynamicImport = function dynamicImportPlugin(instance) {
    instance.extend('parseStatement', nextMethod => (
      function parseStatement(...args) {
        const node = this.startNode();
        if (this.type === tt._import) {
          const nextToken = peekNext.call(this);
          if (nextToken === tt.parenL.label) {
            const expr = this.parseExpression();
            return this.parseExpressionStatement(node, expr);
          }
        }

        return nextMethod.apply(this, args);
      }
    ));

    instance.extend('parseExprAtom', nextMethod => (
      function parseExprAtom(refDestructuringErrors) {
        if (this.type === tt._import) {
          return parseDynamicImport.call(this);
        }
        return nextMethod.call(this, refDestructuringErrors);
      }
    ));
  };

  return acorn;
}
";
        
        $__internal_0a3c196af8ce60e2330754406fd7d179522608093fe02b89836b5641d6fd3d25->leave($__internal_0a3c196af8ce60e2330754406fd7d179522608093fe02b89836b5641d6fd3d25_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/src/inject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint-disable no-underscore-dangle */

export default function injectDynamicImport(acorn) {
  const tt = acorn.tokTypes;

  // NOTE: This allows `yield import()` to parse correctly.
  tt._import.startsExpr = true;

  function parseDynamicImport() {
    const node = this.startNode();
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
  acorn.plugins.dynamicImport = function dynamicImportPlugin(instance) {
    instance.extend('parseStatement', nextMethod => (
      function parseStatement(...args) {
        const node = this.startNode();
        if (this.type === tt._import) {
          const nextToken = peekNext.call(this);
          if (nextToken === tt.parenL.label) {
            const expr = this.parseExpression();
            return this.parseExpressionStatement(node, expr);
          }
        }

        return nextMethod.apply(this, args);
      }
    ));

    instance.extend('parseExprAtom', nextMethod => (
      function parseExprAtom(refDestructuringErrors) {
        if (this.type === tt._import) {
          return parseDynamicImport.call(this);
        }
        return nextMethod.call(this, refDestructuringErrors);
      }
    ));
  };

  return acorn;
}
", "node_modules/acorn-dynamic-import/src/inject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/src/inject.js");
    }
}
