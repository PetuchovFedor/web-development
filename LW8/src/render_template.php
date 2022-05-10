<?php

function renderTemplate(string $templateName, array $params): void
{
    include __DIR__ . '/templates/' . $templateName;
}

renderTemplate('data.php', ['name' => 'Gena']);