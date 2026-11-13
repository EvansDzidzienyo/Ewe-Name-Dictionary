<?php
declare(strict_types=1);

require_once __DIR__ . '/../name_lookup.php';

$cases = [
    'Enam' => 'He has given to me.',
    'enam' => 'He has given to me.',
    'Mawuli' => 'God is there.',
    'Dzigbordi' => 'Patience.',
];

foreach ($cases as $name => $expected) {
    $actual = lookupEweNameMeaning($name);
    if ($actual !== $expected) {
        fwrite(STDERR, "Failed lookup test for {$name}\n");
        exit(1);
    }
}

if (lookupEweNameMeaning('NotAName') !== null) {
    fwrite(STDERR, "Unknown names should return null\n");
    exit(1);
}

echo "All name lookup tests passed.\n";
