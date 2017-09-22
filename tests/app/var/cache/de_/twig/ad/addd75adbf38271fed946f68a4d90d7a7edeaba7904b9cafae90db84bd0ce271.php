<?php

/* node_modules/babel-types/lib/definitions/jsx.js */
class __TwigTemplate_0d0147dc1b30d5dd14eeea13af13861f047b2d8965c9827c33bf9ec91bad8685 extends Twig_Template
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
        $__internal_4f7675902db53eca792dafcf9040996f21821b90b5bf7cac5da4d14bc95b6e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7675902db53eca792dafcf9040996f21821b90b5bf7cac5da4d14bc95b6e34->enter($__internal_4f7675902db53eca792dafcf9040996f21821b90b5bf7cac5da4d14bc95b6e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/definitions/jsx.js"));

        // line 1
        echo "\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"JSXAttribute\", {
  visitor: [\"name\", \"value\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\", \"JSXNamespacedName\")
    },
    value: {
      optional: true,
      validate: (0, _index.assertNodeType)(\"JSXElement\", \"StringLiteral\", \"JSXExpressionContainer\")
    }
  }
});

(0, _index2.default)(\"JSXClosingElement\", {
  visitor: [\"name\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\", \"JSXMemberExpression\")
    }
  }
});

(0, _index2.default)(\"JSXElement\", {
  builder: [\"openingElement\", \"closingElement\", \"children\", \"selfClosing\"],
  visitor: [\"openingElement\", \"children\", \"closingElement\"],
  aliases: [\"JSX\", \"Immutable\", \"Expression\"],
  fields: {
    openingElement: {
      validate: (0, _index.assertNodeType)(\"JSXOpeningElement\")
    },
    closingElement: {
      optional: true,
      validate: (0, _index.assertNodeType)(\"JSXClosingElement\")
    },
    children: {
      validate: (0, _index.chain)((0, _index.assertValueType)(\"array\"), (0, _index.assertEach)((0, _index.assertNodeType)(\"JSXText\", \"JSXExpressionContainer\", \"JSXSpreadChild\", \"JSXElement\")))
    }
  }
});

(0, _index2.default)(\"JSXEmptyExpression\", {
  aliases: [\"JSX\", \"Expression\"]
});

(0, _index2.default)(\"JSXExpressionContainer\", {
  visitor: [\"expression\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"JSXSpreadChild\", {
  visitor: [\"expression\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"JSXIdentifier\", {
  builder: [\"name\"],
  aliases: [\"JSX\", \"Expression\"],
  fields: {
    name: {
      validate: (0, _index.assertValueType)(\"string\")
    }
  }
});

(0, _index2.default)(\"JSXMemberExpression\", {
  visitor: [\"object\", \"property\"],
  aliases: [\"JSX\", \"Expression\"],
  fields: {
    object: {
      validate: (0, _index.assertNodeType)(\"JSXMemberExpression\", \"JSXIdentifier\")
    },
    property: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\")
    }
  }
});

(0, _index2.default)(\"JSXNamespacedName\", {
  visitor: [\"namespace\", \"name\"],
  aliases: [\"JSX\"],
  fields: {
    namespace: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\")
    },
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\")
    }
  }
});

(0, _index2.default)(\"JSXOpeningElement\", {
  builder: [\"name\", \"attributes\", \"selfClosing\"],
  visitor: [\"name\", \"attributes\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\", \"JSXMemberExpression\")
    },
    selfClosing: {
      default: false,
      validate: (0, _index.assertValueType)(\"boolean\")
    },
    attributes: {
      validate: (0, _index.chain)((0, _index.assertValueType)(\"array\"), (0, _index.assertEach)((0, _index.assertNodeType)(\"JSXAttribute\", \"JSXSpreadAttribute\")))
    }
  }
});

(0, _index2.default)(\"JSXSpreadAttribute\", {
  visitor: [\"argument\"],
  aliases: [\"JSX\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"JSXText\", {
  aliases: [\"JSX\", \"Immutable\"],
  builder: [\"value\"],
  fields: {
    value: {
      validate: (0, _index.assertValueType)(\"string\")
    }
  }
});";
        
        $__internal_4f7675902db53eca792dafcf9040996f21821b90b5bf7cac5da4d14bc95b6e34->leave($__internal_4f7675902db53eca792dafcf9040996f21821b90b5bf7cac5da4d14bc95b6e34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/definitions/jsx.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"JSXAttribute\", {
  visitor: [\"name\", \"value\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\", \"JSXNamespacedName\")
    },
    value: {
      optional: true,
      validate: (0, _index.assertNodeType)(\"JSXElement\", \"StringLiteral\", \"JSXExpressionContainer\")
    }
  }
});

(0, _index2.default)(\"JSXClosingElement\", {
  visitor: [\"name\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\", \"JSXMemberExpression\")
    }
  }
});

(0, _index2.default)(\"JSXElement\", {
  builder: [\"openingElement\", \"closingElement\", \"children\", \"selfClosing\"],
  visitor: [\"openingElement\", \"children\", \"closingElement\"],
  aliases: [\"JSX\", \"Immutable\", \"Expression\"],
  fields: {
    openingElement: {
      validate: (0, _index.assertNodeType)(\"JSXOpeningElement\")
    },
    closingElement: {
      optional: true,
      validate: (0, _index.assertNodeType)(\"JSXClosingElement\")
    },
    children: {
      validate: (0, _index.chain)((0, _index.assertValueType)(\"array\"), (0, _index.assertEach)((0, _index.assertNodeType)(\"JSXText\", \"JSXExpressionContainer\", \"JSXSpreadChild\", \"JSXElement\")))
    }
  }
});

(0, _index2.default)(\"JSXEmptyExpression\", {
  aliases: [\"JSX\", \"Expression\"]
});

(0, _index2.default)(\"JSXExpressionContainer\", {
  visitor: [\"expression\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"JSXSpreadChild\", {
  visitor: [\"expression\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"JSXIdentifier\", {
  builder: [\"name\"],
  aliases: [\"JSX\", \"Expression\"],
  fields: {
    name: {
      validate: (0, _index.assertValueType)(\"string\")
    }
  }
});

(0, _index2.default)(\"JSXMemberExpression\", {
  visitor: [\"object\", \"property\"],
  aliases: [\"JSX\", \"Expression\"],
  fields: {
    object: {
      validate: (0, _index.assertNodeType)(\"JSXMemberExpression\", \"JSXIdentifier\")
    },
    property: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\")
    }
  }
});

(0, _index2.default)(\"JSXNamespacedName\", {
  visitor: [\"namespace\", \"name\"],
  aliases: [\"JSX\"],
  fields: {
    namespace: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\")
    },
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\")
    }
  }
});

(0, _index2.default)(\"JSXOpeningElement\", {
  builder: [\"name\", \"attributes\", \"selfClosing\"],
  visitor: [\"name\", \"attributes\"],
  aliases: [\"JSX\", \"Immutable\"],
  fields: {
    name: {
      validate: (0, _index.assertNodeType)(\"JSXIdentifier\", \"JSXMemberExpression\")
    },
    selfClosing: {
      default: false,
      validate: (0, _index.assertValueType)(\"boolean\")
    },
    attributes: {
      validate: (0, _index.chain)((0, _index.assertValueType)(\"array\"), (0, _index.assertEach)((0, _index.assertNodeType)(\"JSXAttribute\", \"JSXSpreadAttribute\")))
    }
  }
});

(0, _index2.default)(\"JSXSpreadAttribute\", {
  visitor: [\"argument\"],
  aliases: [\"JSX\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"JSXText\", {
  aliases: [\"JSX\", \"Immutable\"],
  builder: [\"value\"],
  fields: {
    value: {
      validate: (0, _index.assertValueType)(\"string\")
    }
  }
});", "node_modules/babel-types/lib/definitions/jsx.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/definitions/jsx.js");
    }
}
