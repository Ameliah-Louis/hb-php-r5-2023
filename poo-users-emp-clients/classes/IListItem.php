<?php

/*
<select>
  <option value="">label</option>
</select>
*/

interface IListItem
{
  public function getValue(): string;
  public function getLabel(): string;
}
