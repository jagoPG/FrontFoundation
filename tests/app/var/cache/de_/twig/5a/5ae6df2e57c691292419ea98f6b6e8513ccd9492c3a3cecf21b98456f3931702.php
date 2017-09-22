<?php

/* node_modules/babel-traverse/lib/path/lib/removal-hooks.js */
class __TwigTemplate_248191a6d24f9c764346491a60dab372e768d8415f7de24e5a6eced6047b37ae extends Twig_Template
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
        $__internal_0c5c4efbbf65ae4a214f7a0b7270cfe196d6de355af8269299cd7b1b2f376768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5c4efbbf65ae4a214f7a0b7270cfe196d6de355af8269299cd7b1b2f376768->enter($__internal_0c5c4efbbf65ae4a214f7a0b7270cfe196d6de355af8269299cd7b1b2f376768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/lib/path/lib/removal-hooks.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
var hooks = exports.hooks = [function (self, parent) {
  var removeParent = self.key === \"test\" && (parent.isWhile() || parent.isSwitchCase()) || self.key === \"declaration\" && parent.isExportDeclaration() || self.key === \"body\" && parent.isLabeledStatement() || self.listKey === \"declarations\" && parent.isVariableDeclaration() && parent.node.declarations.length === 1 || self.key === \"expression\" && parent.isExpressionStatement();

  if (removeParent) {
    parent.remove();
    return true;
  }
}, function (self, parent) {
  if (parent.isSequenceExpression() && parent.node.expressions.length === 1) {
    parent.replaceWith(parent.node.expressions[0]);
    return true;
  }
}, function (self, parent) {
  if (parent.isBinary()) {
    if (self.key === \"left\") {
      parent.replaceWith(parent.node.right);
    } else {
      parent.replaceWith(parent.node.left);
    }
    return true;
  }
}, function (self, parent) {
  if (parent.isIfStatement() && (self.key === \"consequent\" || self.key === \"alternate\") || self.key === \"body\" && (parent.isLoop() || parent.isArrowFunctionExpression())) {
    self.replaceWith({
      type: \"BlockStatement\",
      body: []
    });
    return true;
  }
}];";
        
        $__internal_0c5c4efbbf65ae4a214f7a0b7270cfe196d6de355af8269299cd7b1b2f376768->leave($__internal_0c5c4efbbf65ae4a214f7a0b7270cfe196d6de355af8269299cd7b1b2f376768_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/lib/path/lib/removal-hooks.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
var hooks = exports.hooks = [function (self, parent) {
  var removeParent = self.key === \"test\" && (parent.isWhile() || parent.isSwitchCase()) || self.key === \"declaration\" && parent.isExportDeclaration() || self.key === \"body\" && parent.isLabeledStatement() || self.listKey === \"declarations\" && parent.isVariableDeclaration() && parent.node.declarations.length === 1 || self.key === \"expression\" && parent.isExpressionStatement();

  if (removeParent) {
    parent.remove();
    return true;
  }
}, function (self, parent) {
  if (parent.isSequenceExpression() && parent.node.expressions.length === 1) {
    parent.replaceWith(parent.node.expressions[0]);
    return true;
  }
}, function (self, parent) {
  if (parent.isBinary()) {
    if (self.key === \"left\") {
      parent.replaceWith(parent.node.right);
    } else {
      parent.replaceWith(parent.node.left);
    }
    return true;
  }
}, function (self, parent) {
  if (parent.isIfStatement() && (self.key === \"consequent\" || self.key === \"alternate\") || self.key === \"body\" && (parent.isLoop() || parent.isArrowFunctionExpression())) {
    self.replaceWith({
      type: \"BlockStatement\",
      body: []
    });
    return true;
  }
}];", "node_modules/babel-traverse/lib/path/lib/removal-hooks.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/lib/path/lib/removal-hooks.js");
    }
}
