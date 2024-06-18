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

/* __string_template__abd6553bffe8a2b56fc6e4a191fcfaee */
class __TwigTemplate_0fe9c58f16faa72ee46c7575c84d6805 extends \Twig\Template
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
        if (((((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "D")) || ((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "D"))) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "P")))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_disabled_subj");
        } elseif (((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "P"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_pending_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "A"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "D"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_disable_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "P"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif ((((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "A")) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "A")))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_active_subj");
        }
    }

    public function getTemplateName()
    {
        return "__string_template__abd6553bffe8a2b56fc6e4a191fcfaee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if (status_from == \"A\" and status_to == \"D\") or (status_from == \"P\" and status_to == \"D\") or (status_from == \"D\" and status_to == \"P\") %}    {{ __(\"text_company_status_disabled_subj\") }}{% elseif status_from == \"A\" and status_to == \"P\" %}    {{ __(\"text_company_status_pending_subj\") }}{% elseif status_from == \"N\" and status_to == \"A\" %}    {{ __(\"text_company_status_new_to_active_subj\") }}{% elseif status_from == \"N\" and status_to == \"D\" %}    {{ __(\"text_company_status_new_to_disable_subj\") }}{% elseif status_from == \"N\" and status_to == \"P\" %}    {{ __(\"text_company_status_new_to_active_subj\") }}{% elseif (status_from == \"P\" and status_to == \"A\") or (status_from == \"D\" and status_to == \"A\") %}    {{ __(\"text_company_status_active_subj\") }}{% endif %}", "__string_template__abd6553bffe8a2b56fc6e4a191fcfaee", "");
    }
}
