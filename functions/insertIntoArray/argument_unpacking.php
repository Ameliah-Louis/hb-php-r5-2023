<?php

function addToArray(array $tab, int ...$elements): array
{
  return [...$tab, ...$elements];
}
