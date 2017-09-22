<?php

/* node_modules/webpack/lib/ChunkRenderError.js */
class __TwigTemplate_7766568a2554ac37e9b472c73c133410f906ebef468cc308144cbfad7b056996 extends Twig_Template
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
        $__internal_ee1d8e351f7acbae059199604debda55cb69c7cd6fc785757755a70bbc812110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1d8e351f7acbae059199604debda55cb69c7cd6fc785757755a70bbc812110->enter($__internal_ee1d8e351f7acbae059199604debda55cb69c7cd6fc785757755a70bbc812110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/ChunkRenderError.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const WebpackError = require(\"./WebpackError\");

class ChunkRenderError extends WebpackError {
\tconstructor(chunk, file, error) {
\t\tsuper();

\t\tthis.name = \"ChunkRenderError\";
\t\tthis.error = error;
\t\tthis.message = error.message;
\t\tthis.details = error.stack;
\t\tthis.file = file;
\t\tthis.chunk = chunk;

\t\tError.captureStackTrace(this, this.constructor);
\t}
}

module.exports = ChunkRenderError;
";
        
        $__internal_ee1d8e351f7acbae059199604debda55cb69c7cd6fc785757755a70bbc812110->leave($__internal_ee1d8e351f7acbae059199604debda55cb69c7cd6fc785757755a70bbc812110_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/ChunkRenderError.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const WebpackError = require(\"./WebpackError\");

class ChunkRenderError extends WebpackError {
\tconstructor(chunk, file, error) {
\t\tsuper();

\t\tthis.name = \"ChunkRenderError\";
\t\tthis.error = error;
\t\tthis.message = error.message;
\t\tthis.details = error.stack;
\t\tthis.file = file;
\t\tthis.chunk = chunk;

\t\tError.captureStackTrace(this, this.constructor);
\t}
}

module.exports = ChunkRenderError;
", "node_modules/webpack/lib/ChunkRenderError.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/ChunkRenderError.js");
    }
}
