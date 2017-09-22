<?php

/* node_modules/babel-traverse/lib/path/comments.js */
class __TwigTemplate_2e07f6b1e7d87c9bd237317e96b3d2e075d1c90aec24aa83d207c6e7267a8cc9 extends Twig_Template
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
        $__internal_01024b25190cd8127091f8a24d0f7d0bc928245a851c917cbc98c8d96c9af28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01024b25190cd8127091f8a24d0f7d0bc928245a851c917cbc98c8d96c9af28d->enter($__internal_01024b25190cd8127091f8a24d0f7d0bc928245a851c917cbc98c8d96c9af28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/lib/path/comments.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.shareCommentsWithSiblings = shareCommentsWithSiblings;
exports.addComment = addComment;
exports.addComments = addComments;
function shareCommentsWithSiblings() {
  if (typeof this.key === \"string\") return;

  var node = this.node;
  if (!node) return;

  var trailing = node.trailingComments;
  var leading = node.leadingComments;
  if (!trailing && !leading) return;

  var prev = this.getSibling(this.key - 1);
  var next = this.getSibling(this.key + 1);

  if (!prev.node) prev = next;
  if (!next.node) next = prev;

  prev.addComments(\"trailing\", leading);
  next.addComments(\"leading\", trailing);
}

function addComment(type, content, line) {
  this.addComments(type, [{
    type: line ? \"CommentLine\" : \"CommentBlock\",
    value: content
  }]);
}

function addComments(type, comments) {
  if (!comments) return;

  var node = this.node;
  if (!node) return;

  var key = type + \"Comments\";

  if (node[key]) {
    node[key] = node[key].concat(comments);
  } else {
    node[key] = comments;
  }
}";
        
        $__internal_01024b25190cd8127091f8a24d0f7d0bc928245a851c917cbc98c8d96c9af28d->leave($__internal_01024b25190cd8127091f8a24d0f7d0bc928245a851c917cbc98c8d96c9af28d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/lib/path/comments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.shareCommentsWithSiblings = shareCommentsWithSiblings;
exports.addComment = addComment;
exports.addComments = addComments;
function shareCommentsWithSiblings() {
  if (typeof this.key === \"string\") return;

  var node = this.node;
  if (!node) return;

  var trailing = node.trailingComments;
  var leading = node.leadingComments;
  if (!trailing && !leading) return;

  var prev = this.getSibling(this.key - 1);
  var next = this.getSibling(this.key + 1);

  if (!prev.node) prev = next;
  if (!next.node) next = prev;

  prev.addComments(\"trailing\", leading);
  next.addComments(\"leading\", trailing);
}

function addComment(type, content, line) {
  this.addComments(type, [{
    type: line ? \"CommentLine\" : \"CommentBlock\",
    value: content
  }]);
}

function addComments(type, comments) {
  if (!comments) return;

  var node = this.node;
  if (!node) return;

  var key = type + \"Comments\";

  if (node[key]) {
    node[key] = node[key].concat(comments);
  } else {
    node[key] = comments;
  }
}", "node_modules/babel-traverse/lib/path/comments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/lib/path/comments.js");
    }
}
