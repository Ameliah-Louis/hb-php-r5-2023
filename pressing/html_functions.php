<?php

function getSelectOption(IListItem $option): string
{
  return '<option value="' . $option->getValue() . '">' . $option->getLabel() . '</option>';
}
