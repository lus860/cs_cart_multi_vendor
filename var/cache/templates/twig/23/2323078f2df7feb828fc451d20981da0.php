<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__2a091237b1d609523c89ab698cf08104 */
class __TwigTemplate_f5be99662d4c8923bcfc0ad4216284ab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "

  ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 5
        if ((((((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "D")) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "A"))) || ((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "D"))) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "P")))) {
            // line 6
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_changed", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 6), "[status]" => ($context["status"] ?? null)]);
            echo "
";
        } elseif (((        // line 7
($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "P"))) {
            // line 8
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_active_to_pending", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 8)]);
            echo "
";
        } elseif (((        // line 9
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "A"))) {
            // line 10
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 10)]);
            echo "
";
        } elseif (((        // line 11
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "D"))) {
            // line 12
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_disable", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 12)]);
            echo "
";
        } elseif (((        // line 13
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "P"))) {
            // line 14
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_pending", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 14)]);
            echo "
";
        } elseif (((        // line 15
($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "A"))) {
            // line 16
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_pending_to_active", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 16)]);
            echo "
";
        }
        // line 18
        echo "
<br /><br />

";
        // line 21
        if (($context["reason"] ?? null)) {
            // line 22
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo ($context["reason"] ?? null);
            echo "
<br /><br />
";
        }
        // line 25
        echo "
";
        // line 26
        if ((($context["e_account"] ?? null) == "updated")) {
            // line 27
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_updated", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null)]);
            echo "
";
        } elseif ((        // line 28
($context["e_account"] ?? null) == "new")) {
            // line 29
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_created", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null), "[password]" => ($context["e_password"] ?? null)]);
            echo "
";
        }
        // line 31
        echo "
";
        // line 32
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__2a091237b1d609523c89ab698cf08104";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 32,  123 => 31,  117 => 29,  115 => 28,  110 => 27,  108 => 26,  105 => 25,  97 => 22,  95 => 21,  90 => 18,  84 => 16,  82 => 15,  77 => 14,  75 => 13,  70 => 12,  68 => 11,  63 => 10,  61 => 9,  56 => 8,  54 => 7,  49 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\") }}

  {{ __(\"hello\") }},<br /><br />

{% if (status_from == \"A\" and status_to == \"D\") or (status_from == \"D\" and status_to == \"A\") or (status_from == \"P\" and status_to == \"D\") or (status_from == \"D\" and status_to == \"P\") %}
    {{ __(\"text_company_status_changed\", {\"[company]\": company.company_name, \"[status]\": status}) }}
{% elseif status_from == \"A\" and status_to == \"P\" %}
    {{ __(\"text_company_status_active_to_pending\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"N\" and status_to == \"A\" %}
    {{ __(\"text_company_status_new_to_active\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"N\" and status_to == \"D\" %}
    {{ __(\"text_company_status_new_to_disable\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"N\" and status_to == \"P\" %}
    {{ __(\"text_company_status_new_to_pending\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"P\" and status_to == \"A\" %}
    {{ __(\"text_company_status_pending_to_active\", {\"[company]\": company.company_name}) }}
{% endif %}

<br /><br />

{% if reason %}
{{ __(\"reason\") }}: {{ reason }}
<br /><br />
{% endif %}

{% if e_account == 'updated' %}
    {{ __(\"text_company_status_new_to_active_administrator_updated\", {\"[link]\": vendor_url, \"[link_text]\": vendor_url|puny_decode, \"[login]\": e_username}) }}
{% elseif e_account == 'new' %}
    {{ __(\"text_company_status_new_to_active_administrator_created\", {\"[link]\": vendor_url, \"[link_text]\": vendor_url|puny_decode, \"[login]\": e_username, \"[password]\": e_password}) }}
{% endif %}

{{ snippet(\"footer\") }}", "__string_template__2a091237b1d609523c89ab698cf08104", "");
    }
}
