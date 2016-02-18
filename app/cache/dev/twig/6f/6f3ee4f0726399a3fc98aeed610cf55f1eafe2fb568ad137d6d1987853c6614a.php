<?php

/* WebProfilerBundle:Collector:form.html.twig */
class __TwigTemplate_8b7e5d31264fc4c0ec41c3ffee1a2a1d121ea46c70989a2f9b6e7df7721029dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:form.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_84b9077e8aeaa9e2ca8331c0252d4201acd61d675cd2fd3a218425f7789b7baa"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "nb_errors", array())) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "nb_errors", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "nb_errors", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array())), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "WebProfilerBundle:Collector:form.html.twig", 12)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array())), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                echo $context["__internal_84b9077e8aeaa9e2ca8331c0252d4201acd61d675cd2fd3a218425f7789b7baa"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                echo $context["__internal_84b9077e8aeaa9e2ca8331c0252d4201acd61d675cd2fd3a218425f7789b7baa"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms_by_hash", array()));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 420
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 421
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 423
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()))) {
                // line 424
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 426
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 428
            echo "            ";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()), "html", null, true);
                echo "</abbr>]";
            }
            // line 429
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array())) > 0))) {
                // line 430
                echo "            <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 432
            echo "        </div>

        ";
            // line 434
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()))) {
                // line 435
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-children\"";
                if ( !(isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 436
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 437
                    echo "                    ";
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => $context["childName"], 1 => $context["childData"], 2 => false), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "            </ul>
        ";
            }
            // line 441
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 444
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 445
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 447
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 448
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                // line 449
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 451
            echo "        </h2>

        ";
            // line 453
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array())) > 0))) {
                // line 454
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 456
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 462
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 468
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 469
                    echo "                <tr>
                    <td>";
                    // line 470
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 472
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 473
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 474
(isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 475
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 477
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash")), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 479
                    echo "                    </td>
                    <td>
                        ";
                    // line 481
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", array()));
                    $context['_iterated'] = false;
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 482
                        echo "                            ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 483
                            echo "                                <br/>Caused by:<br/><br/>
                            ";
                        }
                        // line 485
                        echo "                            ";
                        if ($this->getAttribute($context["trace"], "root", array(), "any", true, true)) {
                            // line 486
                            echo "                                <strong>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong><br/>
                                <pre>";
                            // line 488
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "root", array()), "html", null, true);
                            // line 489
                            if ( !twig_test_empty($this->getAttribute($context["trace"], "path", array()))) {
                                // line 490
                                if ((twig_first($this->env, $this->getAttribute($context["trace"], "path", array())) != "[")) {
                                    echo ".";
                                }
                                // line 491
                                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
                            }
                            // line 492
                            echo " = ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "value", array()), "html", null, true);
                            // line 493
                            echo "</pre>
                            ";
                        } elseif ($this->getAttribute(                        // line 494
$context["trace"], "message", array(), "any", true, true)) {
                            // line 495
                            echo "                                <strong>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong><br/>
                                <pre>";
                            // line 496
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "message", array()), "html", null, true);
                            echo "</pre>
                            ";
                        } else {
                            // line 498
                            echo "                                <pre>";
                            echo twig_escape_filter($this->env, $context["trace"], "html", null, true);
                            echo "</pre>
                            ";
                        }
                        // line 500
                        echo "                        ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 501
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 503
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 506
                echo "            </table>
        </div>
        ";
            }
            // line 509
            echo "
        ";
            // line 510
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 511
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 512
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 518
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 523
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 524
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data", array()), "model", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 526
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 528
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 532
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data", array()), "norm", array()), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 537
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 538
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data", array()), "view", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 540
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 542
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 547
            echo "
        ";
            // line 548
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 549
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 550
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 556
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 557
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 558
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 562
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 563
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data", array()), "view", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 565
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 567
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 571
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data", array()), "norm", array()), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 576
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 577
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data", array()), "model", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 579
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 581
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 585
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 587
                echo "        </div>
        ";
            }
            // line 589
            echo "
        ";
            // line 590
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 591
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 592
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 598
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 599
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options", array()))) {
                    // line 600
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 606
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 607
                        echo "                <tr>
                    <th>";
                        // line 608
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 609
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 611
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options", array()), $context["option"], array(), "array") === $context["value"])) {
                            // line 612
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 614
                            echo "                            <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options", array()), $context["option"], array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 616
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 619
                    echo "            </table>
            ";
                } else {
                    // line 621
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 623
                echo "        </div>
        ";
            }
            // line 625
            echo "
        ";
            // line 626
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 627
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 628
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 634
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 640
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 641
                    echo "                <tr>
                    <th>";
                    // line 642
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 643
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 646
                echo "            </table>
        </div>
        ";
            }
            // line 649
            echo "
        ";
            // line 650
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 651
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 652
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 658
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 664
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 665
                    echo "                <tr>
                    <th>";
                    // line 666
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 667
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "            </table>
        </div>
        ";
            }
            // line 673
            echo "    </div>

    ";
            // line 675
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 676
                echo "        ";
                echo $this->getAttribute($this, "form_tree_details", array(0 => $context["childName"], 1 => $context["childData"], 2 => (isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash"))), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1157 => 676,  1153 => 675,  1149 => 673,  1144 => 670,  1135 => 667,  1131 => 666,  1128 => 665,  1124 => 664,  1115 => 658,  1106 => 652,  1103 => 651,  1101 => 650,  1098 => 649,  1093 => 646,  1084 => 643,  1080 => 642,  1077 => 641,  1073 => 640,  1064 => 634,  1055 => 628,  1052 => 627,  1050 => 626,  1047 => 625,  1043 => 623,  1039 => 621,  1035 => 619,  1027 => 616,  1021 => 614,  1017 => 612,  1015 => 611,  1010 => 609,  1006 => 608,  1003 => 607,  999 => 606,  991 => 600,  989 => 599,  985 => 598,  976 => 592,  973 => 591,  971 => 590,  968 => 589,  964 => 587,  960 => 585,  954 => 581,  950 => 579,  944 => 577,  942 => 576,  934 => 571,  928 => 567,  924 => 565,  918 => 563,  916 => 562,  910 => 558,  908 => 557,  904 => 556,  895 => 550,  892 => 549,  890 => 548,  887 => 547,  880 => 542,  876 => 540,  870 => 538,  868 => 537,  860 => 532,  854 => 528,  850 => 526,  844 => 524,  842 => 523,  834 => 518,  825 => 512,  822 => 511,  820 => 510,  817 => 509,  812 => 506,  804 => 503,  797 => 501,  784 => 500,  778 => 498,  773 => 496,  768 => 495,  766 => 494,  763 => 493,  760 => 492,  757 => 491,  753 => 490,  751 => 489,  749 => 488,  744 => 486,  741 => 485,  737 => 483,  734 => 482,  716 => 481,  712 => 479,  706 => 477,  702 => 475,  700 => 474,  697 => 473,  695 => 472,  690 => 470,  687 => 469,  683 => 468,  674 => 462,  665 => 456,  661 => 454,  659 => 453,  655 => 451,  647 => 449,  645 => 448,  641 => 447,  631 => 445,  617 => 444,  605 => 441,  601 => 439,  592 => 437,  588 => 436,  579 => 435,  577 => 434,  573 => 432,  567 => 430,  564 => 429,  553 => 428,  549 => 426,  543 => 424,  541 => 423,  537 => 422,  534 => 421,  520 => 420,  298 => 200,  294 => 198,  290 => 196,  281 => 194,  277 => 193,  272 => 190,  263 => 188,  259 => 187,  252 => 182,  250 => 181,  94 => 27,  91 => 26,  86 => 23,  80 => 21,  78 => 20,  73 => 17,  70 => 16,  65 => 13,  63 => 12,  60 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% from _self import form_tree_entry, form_tree_details %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.data|length %}*/
/*         {% set icon %}*/
/*             <img width="20" height="28" alt="Forms" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC"/>*/
/*             <span class="sf-toolbar-status sf-toolbar-status-{% if collector.data.nb_errors %}red{% else %}green{% endif %}">{% if collector.data.nb_errors %}{{ collector.data.nb_errors }}{% else %}{{ collector.data.forms|length }}{% endif %}</span>*/
/*         {% endset %}*/
/* */
/*         {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon"><img src="data:image/png;base64,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" alt=""/></span>*/
/*         <strong>Forms</strong>*/
/*         {% if collector.data.forms|length %}*/
/*             <span class="count"><span>{{ collector.data.forms|length }}</span></span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <style type="text/css">*/
/*     .window {*/
/*         /*background: #F6F6F6;*//* */
/*         margin: -30px -40px -40px;*/
/*     }*/
/*     .toggle-icon {*/
/*         display: inline-block;*/
/*         background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC") no-repeat top left #5eb5e0;*/
/*     }*/
/*     .closed .toggle-icon, .closed.toggle-icon {*/
/*         background-position: bottom left;*/
/*     }*/
/*     .toggle-icon.empty {*/
/*         background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==");*/
/*     }*/
/*     .tree {*/
/*         width: 230px;*/
/*         padding: 10px;*/
/*         font-size: 12px;*/
/*         float: left;*/
/*     }*/
/*     #content .tree h2 {*/
/*         font-size: 13px;*/
/*         padding: 5px 7px;*/
/*         margin: 0;*/
/*     }*/
/*     .tree li {*/
/*         margin: 0;*/
/*         padding: 0;*/
/*         width: 100%;*/
/*     }*/
/*     .tree .tree-inner {*/
/*         width: 100%;*/
/*         padding: 5px 7px 5px 22px;*/
/*         border-radius: 6px;*/
/*         color: #313131;*/
/*         cursor: pointer;*/
/*         position: relative;*/
/* */
/*         -webkit-box-sizing: border-box;*/
/*         -moz-box-sizing: border-box;*/
/*         box-sizing: border-box;*/
/*     }*/
/*     .tree a {*/
/*         text-decoration: none;*/
/*     }*/
/*     .tree .toggle-button {*/
/*         /* provide a bigger clickable area than just 10x10px *//* */
/*         width: 16px;*/
/*         height: 16px;*/
/*         /* vertically center the button *//* */
/*         position: absolute;*/
/*         top: 50%;*/
/*         margin-top: -8px;*/
/*         margin-left: -18px;*/
/*     }*/
/*     .tree .toggle-icon {*/
/*         width: 10px;*/
/*         height: 10px;*/
/*         /* position the icon in the center of the clickable area *//* */
/*         margin-left: 3px;*/
/*         margin-top: 3px;*/
/*         background-size: 10px 20px;*/
/*         background-color: #ccc;*/
/*     }*/
/*     .tree .toggle-icon.empty {*/
/*         width: 10px;*/
/*         height: 10px;*/
/*         position: absolute;*/
/*         top: 50%;*/
/*         margin-top: -5px;*/
/*         margin-left: -15px;*/
/*         background-size: 10px 10px;*/
/*     }*/
/*     .tree ul ul .tree-inner {*/
/*         padding-left: 37px;*/
/*     }*/
/*     .tree ul ul ul .tree-inner {*/
/*         padding-left: 52px;*/
/*     }*/
/*     .tree ul ul ul ul .tree-inner {*/
/*         padding-left: 67px;*/
/*     }*/
/*     .tree ul ul ul ul ul .tree-inner {*/
/*         padding-left: 82px;*/
/*     }*/
/*     .tree .tree-inner:hover {*/
/*         background: #dfdfdf;*/
/*     }*/
/*     .tree .tree-inner.active, .tree .tree-inner.active:hover {*/
/*         background: #dfdfdf;*/
/*         font-weight: bold;*/
/*         color: #313131;*/
/*     }*/
/*     .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {*/
/*         background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC");*/
/*         background-color: #aaa;*/
/*     }*/
/*     .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {*/
/*         background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC");*/
/*     }*/
/*     .tree-details {*/
/*         border-left: 1px solid #dfdfdf;*/
/*         background: white;*/
/*         margin-left: 250px;*/
/*         padding: 30px 40px 40px;*/
/*     }*/
/*     .tree-details h3 {*/
/*         position: relative;*/
/*     }*/
/*     .tree-details .toggle-icon {*/
/*         width: 16px;*/
/*         height: 16px;*/
/*         /* vertically center the button *//* */
/*         position: absolute;*/
/*         top: 50%;*/
/*         margin-top: -9px;*/
/*         margin-left: 6px;*/
/*     }*/
/*     .form-type {*/
/*         color: #999999;*/
/*     }*/
/*     .hidden {*/
/*         display: none;*/
/*     }*/
/*     .badge-error {*/
/*         float: right;*/
/*         background: #a33;*/
/*         color: #fff;*/
/*         padding: 1px 4px;*/
/*         font-size: 10px;*/
/*         font-weight: bold;*/
/*         vertical-align: middle;*/
/*         border-radius: 6px;*/
/*     }*/
/*     .errors h3 {*/
/*         color: #800;*/
/*     }*/
/*     .errors th, .errors td {*/
/*         border-color: #800;*/
/*     }*/
/*     .errors th {*/
/*         background: #a33;*/
/*         color: #fff;*/
/*     }*/
/*     .errors .toggle-icon {*/
/*         background-color: #a33;*/
/*     }*/
/*     h3 a, h3 a:hover, h3 a:focus {*/
/*         color: inherit;*/
/*         text-decoration: inherit;*/
/*     }*/
/*     </style>*/
/* */
/*     {% if collector.data.forms|length %}*/
/*         <div class="window">*/
/*             <div class="tree">*/
/*                 <h2>Forms</h2>*/
/* */
/*                 <ul>*/
/*                 {% for formName, formData in collector.data.forms %}*/
/*                     {{ form_tree_entry(formName, formData, true) }}*/
/*                 {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             {% for formName, formData in collector.data.forms %}*/
/*                 {{ form_tree_details(formName, formData, collector.data.forms_by_hash) }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% else %}*/
/*         <p><em>No forms were submitted for this request.</em></p>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*     function Toggler(storage) {*/
/*         "use strict";*/
/* */
/*         var STORAGE_KEY = 'sf_toggle_data',*/
/* */
/*             states = {},*/
/* */
/*             isCollapsed = function (button) {*/
/*                 return Sfjs.hasClass(button, 'closed');*/
/*             },*/
/* */
/*             isExpanded = function (button) {*/
/*                 return !isCollapsed(button);*/
/*             },*/
/* */
/*             expand = function (button) {*/
/*                 var targetId = button.dataset.toggleTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Toggle target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (isCollapsed(button)) {*/
/*                     Sfjs.removeClass(button, 'closed');*/
/*                     Sfjs.removeClass(target, 'hidden');*/
/* */
/*                     states[targetId] = 1;*/
/*                     storage.setItem(STORAGE_KEY, states);*/
/*                 }*/
/*             },*/
/* */
/*             collapse = function (button) {*/
/*                 var targetId = button.dataset.toggleTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Toggle target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (isExpanded(button)) {*/
/*                     Sfjs.addClass(button, 'closed');*/
/*                     Sfjs.addClass(target, 'hidden');*/
/* */
/*                     states[targetId] = 0;*/
/*                     storage.setItem(STORAGE_KEY, states);*/
/*                 }*/
/*             },*/
/* */
/*             toggle = function (button) {*/
/*                 if (Sfjs.hasClass(button, 'closed')) {*/
/*                     expand(button);*/
/*                 } else {*/
/*                     collapse(button);*/
/*                 }*/
/*             },*/
/* */
/*             initButtons = function (buttons) {*/
/*                 states = storage.getItem(STORAGE_KEY, {});*/
/* */
/*                 // must be an object, not an array or anything else*/
/*                 // `typeof` returns "object" also for arrays, so the following*/
/*                 // check must be done*/
/*                 // see http://stackoverflow.com/questions/4775722/check-if-object-is-array*/
/*                 if ('[object Object]' !== Object.prototype.toString.call(states)) {*/
/*                     states = {};*/
/*                 }*/
/* */
/*                 for (var i = 0, l = buttons.length; i < l; ++i) {*/
/*                     var targetId = buttons[i].dataset.toggleTargetId,*/
/*                         target = document.getElementById(targetId);*/
/* */
/*                     if (!target) {*/
/*                         throw "Toggle target " + targetId + " does not exist";*/
/*                     }*/
/* */
/*                     // correct the initial state of the button*/
/*                     if (Sfjs.hasClass(target, 'hidden')) {*/
/*                         Sfjs.addClass(buttons[i], 'closed');*/
/*                     }*/
/* */
/*                     // attach listener for expanding/collapsing the target*/
/*                     clickHandler(buttons[i], toggle);*/
/* */
/*                     if (states.hasOwnProperty(targetId)) {*/
/*                         // open or collapse based on stored data*/
/*                         if (0 === states[targetId]) {*/
/*                             collapse(buttons[i]);*/
/*                         } else {*/
/*                             expand(buttons[i]);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             };*/
/* */
/*         return {*/
/*             initButtons: initButtons,*/
/* */
/*             toggle: toggle,*/
/* */
/*             isExpanded: isExpanded,*/
/* */
/*             isCollapsed: isCollapsed,*/
/* */
/*             expand: expand,*/
/* */
/*             collapse: collapse*/
/*         };*/
/*     }*/
/* */
/*     function JsonStorage(storage) {*/
/*         var setItem = function (key, data) {*/
/*                 storage.setItem(key, JSON.stringify(data));*/
/*             },*/
/* */
/*             getItem = function (key, defaultValue) {*/
/*                 var data = storage.getItem(key);*/
/* */
/*                 if (null !== data) {*/
/*                     try {*/
/*                         return JSON.parse(data);*/
/*                     } catch(e) {*/
/*                     }*/
/*                 }*/
/* */
/*                 return defaultValue;*/
/*             };*/
/* */
/*         return {*/
/*             setItem: setItem,*/
/* */
/*             getItem: getItem*/
/*         };*/
/*     }*/
/* */
/*     function TabView() {*/
/*         "use strict";*/
/* */
/*         var activeTab = null,*/
/* */
/*             activeTarget = null,*/
/* */
/*             select = function (tab) {*/
/*                 var targetId = tab.dataset.tabTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Tab target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (activeTab) {*/
/*                     Sfjs.removeClass(activeTab, 'active');*/
/*                 }*/
/* */
/*                 if (activeTarget) {*/
/*                     Sfjs.addClass(activeTarget, 'hidden');*/
/*                 }*/
/* */
/*                 Sfjs.addClass(tab, 'active');*/
/*                 Sfjs.removeClass(target, 'hidden');*/
/* */
/*                 activeTab = tab;*/
/*                 activeTarget = target;*/
/*             },*/
/* */
/*             initTabs = function (tabs) {*/
/*                 for (var i = 0, l = tabs.length; i < l; ++i) {*/
/*                     var targetId = tabs[i].dataset.tabTargetId,*/
/*                         target = document.getElementById(targetId);*/
/* */
/*                     if (!target) {*/
/*                         throw "Tab target " + targetId + " does not exist";*/
/*                     }*/
/* */
/*                     clickHandler(tabs[i], select);*/
/* */
/*                     Sfjs.addClass(target, 'hidden');*/
/*                 }*/
/* */
/*                 if (tabs.length > 0) {*/
/*                     select(tabs[0]);*/
/*                 }*/
/*             };*/
/* */
/*         return {*/
/*             initTabs: initTabs,*/
/* */
/*             select: select*/
/*         };*/
/*     }*/
/* */
/*     var tabTarget = new TabView(),*/
/*         toggler = new Toggler(new JsonStorage(sessionStorage)),*/
/*         clickHandler = function (element, callback) {*/
/*             Sfjs.addEventListener(element, 'click', function (e) {*/
/*                 if (!e) {*/
/*                     e = window.event;*/
/*                 }*/
/* */
/*                 callback(this);*/
/* */
/*                 if (e.preventDefault) {*/
/*                     e.preventDefault();*/
/*                 } else {*/
/*                     e.returnValue = false;*/
/*                 }*/
/* */
/*                 e.stopPropagation();*/
/* */
/*                 return false;*/
/*             });*/
/*         };*/
/* */
/*     tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));*/
/*     toggler.initButtons(document.querySelectorAll('a.toggle-button'));*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% macro form_tree_entry(name, data, expanded) %}*/
/*     <li>*/
/*         <div class="tree-inner" data-tab-target-id="{{ data.id }}-details">*/
/*             {% if data.children is not empty %}*/
/*                 <a class="toggle-button" data-toggle-target-id="{{ data.id }}-children" href="#"><span class="toggle-icon"></span></a>*/
/*             {% else %}*/
/*                 <div class="toggle-icon empty"></div>*/
/*             {% endif %}*/
/*             {{ name|default('(no name)') }} {% if data.type_class is defined and data.type is defined %}[<abbr title="{{ data.type_class }}">{{ data.type }}</abbr>]{% endif %}*/
/*             {% if data.errors is defined and data.errors|length > 0 %}*/
/*             <div class="badge-error">{{ data.errors|length }}</div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if data.children is not empty %}*/
/*             <ul id="{{ data.id }}-children"{% if not expanded %} class="hidden"{% endif %}>*/
/*                 {% for childName, childData in data.children %}*/
/*                     {{ _self.form_tree_entry(childName, childData, false) }}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* {% macro form_tree_details(name, data, forms_by_hash) %}*/
/*     <div class="tree-details" {% if data.id is defined %} id="{{ data.id }}-details"{% endif %}>*/
/*         <h2>*/
/*             {{ name|default('(no name)') }}*/
/*             {% if data.type_class is defined and data.type is defined %}*/
/*             <span class="form-type">[<abbr title="{{ data.type_class }}">{{ data.type }}</abbr>]</span>*/
/*             {% endif %}*/
/*         </h2>*/
/* */
/*         {% if data.errors is defined and data.errors|length > 0 %}*/
/*         <div class="errors">*/
/*             <h3>*/
/*                 <a class="toggle-button" data-toggle-target-id="{{ data.id }}-errors" href="#">*/
/*                     Errors*/
/*                     <span class="toggle-icon"></span>*/
/*                 </a>*/
/*             </h3>*/
/* */
/*             <table id="{{ data.id }}-errors">*/
/*                 <tr>*/
/*                     <th>Message</th>*/
/*                     <th>Origin</th>*/
/*                     <th>Cause</th>*/
/*                 </tr>*/
/*                 {% for error in data.errors %}*/
/*                 <tr>*/
/*                     <td>{{ error.message }}</td>*/
/*                     <td>*/
/*                         {% if error.origin is empty %}*/
/*                             <em>This form.</em>*/
/*                         {% elseif forms_by_hash[error.origin] is not defined %}*/
/*                             <em>Unknown.</em>*/
/*                         {% else %}*/
/*                             {{ forms_by_hash[error.origin].name }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% for trace in error.trace %}*/
/*                             {% if not loop.first %}*/
/*                                 <br/>Caused by:<br/><br/>*/
/*                             {% endif %}*/
/*                             {% if trace.root is defined %}*/
/*                                 <strong>{{ trace.class }}</strong><br/>*/
/*                                 <pre>*/
/*                                     {{- trace.root -}}*/
/*                                     {%- if trace.path is not empty -%}*/
/*                                         {%- if trace.path|first != '[' %}.{% endif -%}*/
/*                                         {{- trace.path -}}*/
/*                                     {%- endif %} = {{ trace.value -}}*/
/*                                 </pre>*/
/*                             {% elseif trace.message is defined %}*/
/*                                 <strong>{{ trace.class }}</strong><br/>*/
/*                                 <pre>{{ trace.message }}</pre>*/
/*                             {% else %}*/
/*                                 <pre>{{ trace }}</pre>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <em>Unknown.</em>*/
/*                         {% endfor %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.default_data is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-default_data" href="#">*/
/*                 Default Data*/
/*                 <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-default_data">*/
/*             <table>*/
/*                 <tr>*/
/*                     <th width="180">Model Format</th>*/
/*                     <td>*/
/*                         {% if data.default_data.model is defined %}*/
/*                             <pre>{{ data.default_data.model }}</pre>*/
/*                         {% else %}*/
/*                             <em>same as normalized format</em>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Normalized Format</th>*/
/*                     <td><pre>{{ data.default_data.norm }}</pre></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>View Format</th>*/
/*                     <td>*/
/*                         {% if data.default_data.view is defined %}*/
/*                             <pre>{{ data.default_data.view }}</pre>*/
/*                         {% else %}*/
/*                             <em>same as normalized format</em>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.submitted_data is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-submitted_data" href="#">*/
/*                 Submitted Data*/
/*                 <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-submitted_data">*/
/*         {% if data.submitted_data.norm is defined %}*/
/*             <table>*/
/*                 <tr>*/
/*                     <th width="180">View Format</th>*/
/*                     <td>*/
/*                         {% if data.submitted_data.view is defined %}*/
/*                             <pre>{{ data.submitted_data.view }}</pre>*/
/*                         {% else %}*/
/*                             <em>same as normalized format</em>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Normalized Format</th>*/
/*                     <td><pre>{{ data.submitted_data.norm }}</pre></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Model Format</th>*/
/*                     <td>*/
/*                         {% if data.submitted_data.model is defined %}*/
/*                             <pre>{{ data.submitted_data.model }}</pre>*/
/*                         {% else %}*/
/*                             <em>same as normalized format</em>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*         {% else %}*/
/*             <p><em>This form was not submitted.</em></p>*/
/*         {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.passed_options is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-passed_options" href="#">*/
/*                 Passed Options*/
/*                 <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-passed_options">*/
/*             {% if data.passed_options|length %}*/
/*             <table>*/
/*                 <tr>*/
/*                     <th width="180">Option</th>*/
/*                     <th>Passed Value</th>*/
/*                     <th>Resolved Value</th>*/
/*                 </tr>*/
/*                 {% for option, value in data.passed_options %}*/
/*                 <tr>*/
/*                     <th>{{ option }}</th>*/
/*                     <td><pre>{{ value }}</pre></td>*/
/*                     <td>*/
/*                         {% if data.resolved_options[option] is sameas(value) %}*/
/*                             <em>same as passed value</em>*/
/*                         {% else %}*/
/*                             <pre>{{ data.resolved_options[option] }}</pre>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*             {% else %}*/
/*             <p><em>No options where passed when constructing this form.</em></p>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.resolved_options is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-resolved_options" href="#">*/
/*                 Resolved Options*/
/*                 <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-resolved_options" class="hidden">*/
/*             <table>*/
/*                 <tr>*/
/*                     <th width="180">Option</th>*/
/*                     <th>Value</th>*/
/*                 </tr>*/
/*                 {% for option, value in data.resolved_options %}*/
/*                 <tr>*/
/*                     <th>{{ option }}</th>*/
/*                     <td><pre>{{ value }}</pre></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.view_vars is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-view_vars" href="#">*/
/*                 View Variables*/
/*                 <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-view_vars" class="hidden">*/
/*             <table>*/
/*                 <tr>*/
/*                     <th width="180">Variable</th>*/
/*                     <th>Value</th>*/
/*                 </tr>*/
/*                 {% for variable, value in data.view_vars %}*/
/*                 <tr>*/
/*                     <th>{{ variable }}</th>*/
/*                     <td><pre>{{ value }}</pre></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% for childName, childData in data.children %}*/
/*         {{ _self.form_tree_details(childName, childData, forms_by_hash) }}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
