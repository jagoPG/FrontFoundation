<?php

/* node_modules/babel-types/lib/definitions/experimental.js */
class __TwigTemplate_f23d9866e9de0e348d92677d039a15e54fa3a1f4a8c71ed0c19cfce917f0a426 extends Twig_Template
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
        $__internal_6cba3e6cb80b122380cd99a4c6766129622f83b7502297d0f785d6ca66b3346f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cba3e6cb80b122380cd99a4c6766129622f83b7502297d0f785d6ca66b3346f->enter($__internal_6cba3e6cb80b122380cd99a4c6766129622f83b7502297d0f785d6ca66b3346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/definitions/experimental.js"));

        // line 1
        echo "\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"AwaitExpression\", {
  builder: [\"argument\"],
  visitor: [\"argument\"],
  aliases: [\"Expression\", \"Terminatorless\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"ForAwaitStatement\", {
  visitor: [\"left\", \"right\", \"body\"],
  aliases: [\"Scopable\", \"Statement\", \"For\", \"BlockParent\", \"Loop\", \"ForXStatement\"],
  fields: {
    left: {
      validate: (0, _index.assertNodeType)(\"VariableDeclaration\", \"LVal\")
    },
    right: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    },
    body: {
      validate: (0, _index.assertNodeType)(\"Statement\")
    }
  }
});

(0, _index2.default)(\"BindExpression\", {
  visitor: [\"object\", \"callee\"],
  aliases: [\"Expression\"],
  fields: {}
});

(0, _index2.default)(\"Import\", {
  aliases: [\"Expression\"]
});

(0, _index2.default)(\"Decorator\", {
  visitor: [\"expression\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"DoExpression\", {
  visitor: [\"body\"],
  aliases: [\"Expression\"],
  fields: {
    body: {
      validate: (0, _index.assertNodeType)(\"BlockStatement\")
    }
  }
});

(0, _index2.default)(\"ExportDefaultSpecifier\", {
  visitor: [\"exported\"],
  aliases: [\"ModuleSpecifier\"],
  fields: {
    exported: {
      validate: (0, _index.assertNodeType)(\"Identifier\")
    }
  }
});

(0, _index2.default)(\"ExportNamespaceSpecifier\", {
  visitor: [\"exported\"],
  aliases: [\"ModuleSpecifier\"],
  fields: {
    exported: {
      validate: (0, _index.assertNodeType)(\"Identifier\")
    }
  }
});

(0, _index2.default)(\"RestProperty\", {
  visitor: [\"argument\"],
  aliases: [\"UnaryLike\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"LVal\")
    }
  }
});

(0, _index2.default)(\"SpreadProperty\", {
  visitor: [\"argument\"],
  aliases: [\"UnaryLike\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});";
        
        $__internal_6cba3e6cb80b122380cd99a4c6766129622f83b7502297d0f785d6ca66b3346f->leave($__internal_6cba3e6cb80b122380cd99a4c6766129622f83b7502297d0f785d6ca66b3346f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/definitions/experimental.js";
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

(0, _index2.default)(\"AwaitExpression\", {
  builder: [\"argument\"],
  visitor: [\"argument\"],
  aliases: [\"Expression\", \"Terminatorless\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"ForAwaitStatement\", {
  visitor: [\"left\", \"right\", \"body\"],
  aliases: [\"Scopable\", \"Statement\", \"For\", \"BlockParent\", \"Loop\", \"ForXStatement\"],
  fields: {
    left: {
      validate: (0, _index.assertNodeType)(\"VariableDeclaration\", \"LVal\")
    },
    right: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    },
    body: {
      validate: (0, _index.assertNodeType)(\"Statement\")
    }
  }
});

(0, _index2.default)(\"BindExpression\", {
  visitor: [\"object\", \"callee\"],
  aliases: [\"Expression\"],
  fields: {}
});

(0, _index2.default)(\"Import\", {
  aliases: [\"Expression\"]
});

(0, _index2.default)(\"Decorator\", {
  visitor: [\"expression\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});

(0, _index2.default)(\"DoExpression\", {
  visitor: [\"body\"],
  aliases: [\"Expression\"],
  fields: {
    body: {
      validate: (0, _index.assertNodeType)(\"BlockStatement\")
    }
  }
});

(0, _index2.default)(\"ExportDefaultSpecifier\", {
  visitor: [\"exported\"],
  aliases: [\"ModuleSpecifier\"],
  fields: {
    exported: {
      validate: (0, _index.assertNodeType)(\"Identifier\")
    }
  }
});

(0, _index2.default)(\"ExportNamespaceSpecifier\", {
  visitor: [\"exported\"],
  aliases: [\"ModuleSpecifier\"],
  fields: {
    exported: {
      validate: (0, _index.assertNodeType)(\"Identifier\")
    }
  }
});

(0, _index2.default)(\"RestProperty\", {
  visitor: [\"argument\"],
  aliases: [\"UnaryLike\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"LVal\")
    }
  }
});

(0, _index2.default)(\"SpreadProperty\", {
  visitor: [\"argument\"],
  aliases: [\"UnaryLike\"],
  fields: {
    argument: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});", "node_modules/babel-types/lib/definitions/experimental.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/definitions/experimental.js");
    }
}
