<?php

function echoWithBr(string $text): void
{
  echo $text . "<br />";
}

enum HtmlTag: string
{
  case Paragraph = "p";
  case Divider   = "div";
}

function surroundWithHtml(string $text, HtmlTag $tag = HtmlTag::Paragraph): string
{
  $htmlTag = $tag->value;
  return "<$htmlTag>$text</$htmlTag>";
}
