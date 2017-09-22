<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/location.js */
class __TwigTemplate_91ee18d019a7bf403278dbc4fab9058607c5af387c2a25b34cb180087dcb49e7 extends Twig_Template
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
        $__internal_d960794ca3b9f4edd721561604d191d47fa86c29a8b353d68deb12e46cdecd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d960794ca3b9f4edd721561604d191d47fa86c29a8b353d68deb12e46cdecd1e->enter($__internal_d960794ca3b9f4edd721561604d191d47fa86c29a8b353d68deb12e46cdecd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/location.js"));

        // line 1
        echo "import {Parser} from \"./state\"
import {Position, getLineInfo} from \"./locutil\"

const pp = Parser.prototype

// This function is used to raise exceptions on parse errors. It
// takes an offset integer (into the current `input`) to indicate
// the location of the error, attaches the position to the end
// of the error message, and then raises a `SyntaxError` with that
// message.

pp.raise = function(pos, message) {
  let loc = getLineInfo(this.input, pos)
  message += \" (\" + loc.line + \":\" + loc.column + \")\"
  let err = new SyntaxError(message)
  err.pos = pos; err.loc = loc; err.raisedAt = this.pos
  throw err
}

pp.raiseRecoverable = pp.raise

pp.curPosition = function() {
  if (this.options.locations) {
    return new Position(this.curLine, this.pos - this.lineStart)
  }
}
";
        
        $__internal_d960794ca3b9f4edd721561604d191d47fa86c29a8b353d68deb12e46cdecd1e->leave($__internal_d960794ca3b9f4edd721561604d191d47fa86c29a8b353d68deb12e46cdecd1e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/location.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import {Parser} from \"./state\"
import {Position, getLineInfo} from \"./locutil\"

const pp = Parser.prototype

// This function is used to raise exceptions on parse errors. It
// takes an offset integer (into the current `input`) to indicate
// the location of the error, attaches the position to the end
// of the error message, and then raises a `SyntaxError` with that
// message.

pp.raise = function(pos, message) {
  let loc = getLineInfo(this.input, pos)
  message += \" (\" + loc.line + \":\" + loc.column + \")\"
  let err = new SyntaxError(message)
  err.pos = pos; err.loc = loc; err.raisedAt = this.pos
  throw err
}

pp.raiseRecoverable = pp.raise

pp.curPosition = function() {
  if (this.options.locations) {
    return new Position(this.curLine, this.pos - this.lineStart)
  }
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/location.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/location.js");
    }
}
