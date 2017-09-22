<?php

/* node_modules/es5-ext/test/object/mixin-prototypes.js */
class __TwigTemplate_5edcd6a9d85bb635c612fea7147cb99868ff70ca81bc3a1027a9ffc1f6000c4f extends Twig_Template
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
        $__internal_e4bf2b903471a963f5e786e8e7d2ac46070efb99a6009f4b9a4620d674cbd26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bf2b903471a963f5e786e8e7d2ac46070efb99a6009f4b9a4620d674cbd26a->enter($__internal_e4bf2b903471a963f5e786e8e7d2ac46070efb99a6009f4b9a4620d674cbd26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/mixin-prototypes.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o, o1, o2, x, y = {}, z = {};
\to = { inherited: true, visible: 23 };
\to1 = Object.create(o);
\to1.visible = z;
\to1.nonremovable = \"raz\";
\tObject.defineProperty(o1, \"hidden\", { value: \"hidden\" });

\to2 = Object.defineProperties({}, { nonremovable: { value: y } });
\to2.other = \"other\";

\ttry {
 t(o2, o1);
} catch (ignore) {}

\ta(o2.visible, z, \"Enumerable\");
\ta(o1.hidden, \"hidden\", \"Not Enumerable\");
\ta(o2.propertyIsEnumerable(\"visible\"), true, \"Enumerable is enumerable\");
\ta(o2.propertyIsEnumerable(\"hidden\"), false,
\t\t\"Not enumerable is not enumerable\");

\ta(o2.inherited, true, \"Extend deep\");

\ta(o2.nonremovable, y, \"Do not overwrite non configurable\");
\ta(o2.other, \"other\", \"Own kept\");

\tx = {};
\tt(x, o2);
\ttry {
 t(x, o1);
} catch (ignore) {}

\ta(x.visible, z, \"Enumerable\");
\ta(x.hidden, \"hidden\", \"Not Enumerable\");
\ta(x.propertyIsEnumerable(\"visible\"), true, \"Enumerable is enumerable\");
\ta(x.propertyIsEnumerable(\"hidden\"), false,
\t\t\"Not enumerable is not enumerable\");

\ta(x.inherited, true, \"Extend deep\");

\ta(x.nonremovable, y, \"Ignored non configurable\");
\ta(x.other, \"other\", \"Other\");

\tx.visible = 3;
\ta(x.visible, 3, \"Writable is writable\");

\tx = {};
\tt(x, o1);
\ta.throws(function () {
\t\tx.hidden = 3;
\t}, \"Not writable is not writable\");

\tx = {};
\tt(x, o1);
\tdelete x.visible;
\ta.ok(!x.hasOwnProperty(\"visible\"), \"Configurable is configurable\");

\tx = {};
\tt(x, o1);
\ta.throws(function () {
\t\tdelete x.hidden;
\t}, \"Not configurable is not configurable\");

\tx = Object.defineProperty({}, \"foo\",
\t\t{ configurable: false, writable: true, enumerable: false, value: \"bar\" });

\ttry {
 t(x, { foo: \"lorem\" });
} catch (ignore) {}
\ta(x.foo, \"bar\", \"Writable, not enumerable\");
};
";
        
        $__internal_e4bf2b903471a963f5e786e8e7d2ac46070efb99a6009f4b9a4620d674cbd26a->leave($__internal_e4bf2b903471a963f5e786e8e7d2ac46070efb99a6009f4b9a4620d674cbd26a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/mixin-prototypes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o, o1, o2, x, y = {}, z = {};
\to = { inherited: true, visible: 23 };
\to1 = Object.create(o);
\to1.visible = z;
\to1.nonremovable = \"raz\";
\tObject.defineProperty(o1, \"hidden\", { value: \"hidden\" });

\to2 = Object.defineProperties({}, { nonremovable: { value: y } });
\to2.other = \"other\";

\ttry {
 t(o2, o1);
} catch (ignore) {}

\ta(o2.visible, z, \"Enumerable\");
\ta(o1.hidden, \"hidden\", \"Not Enumerable\");
\ta(o2.propertyIsEnumerable(\"visible\"), true, \"Enumerable is enumerable\");
\ta(o2.propertyIsEnumerable(\"hidden\"), false,
\t\t\"Not enumerable is not enumerable\");

\ta(o2.inherited, true, \"Extend deep\");

\ta(o2.nonremovable, y, \"Do not overwrite non configurable\");
\ta(o2.other, \"other\", \"Own kept\");

\tx = {};
\tt(x, o2);
\ttry {
 t(x, o1);
} catch (ignore) {}

\ta(x.visible, z, \"Enumerable\");
\ta(x.hidden, \"hidden\", \"Not Enumerable\");
\ta(x.propertyIsEnumerable(\"visible\"), true, \"Enumerable is enumerable\");
\ta(x.propertyIsEnumerable(\"hidden\"), false,
\t\t\"Not enumerable is not enumerable\");

\ta(x.inherited, true, \"Extend deep\");

\ta(x.nonremovable, y, \"Ignored non configurable\");
\ta(x.other, \"other\", \"Other\");

\tx.visible = 3;
\ta(x.visible, 3, \"Writable is writable\");

\tx = {};
\tt(x, o1);
\ta.throws(function () {
\t\tx.hidden = 3;
\t}, \"Not writable is not writable\");

\tx = {};
\tt(x, o1);
\tdelete x.visible;
\ta.ok(!x.hasOwnProperty(\"visible\"), \"Configurable is configurable\");

\tx = {};
\tt(x, o1);
\ta.throws(function () {
\t\tdelete x.hidden;
\t}, \"Not configurable is not configurable\");

\tx = Object.defineProperty({}, \"foo\",
\t\t{ configurable: false, writable: true, enumerable: false, value: \"bar\" });

\ttry {
 t(x, { foo: \"lorem\" });
} catch (ignore) {}
\ta(x.foo, \"bar\", \"Writable, not enumerable\");
};
", "node_modules/es5-ext/test/object/mixin-prototypes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/mixin-prototypes.js");
    }
}
