<?php
declare(strict_types=1);

/**
 * Return the meaning recorded in this project's small name list.
 *
 * These entries are preserved from the original project and have not
 * been independently verified as authoritative translations.
 */
function lookupEweNameMeaning(string $name): ?string
{
    $meanings = [
        'Enam' => 'He has given to me.',
        'Elorm' => 'He loves me.',
        'Makafui' => 'I will praise him.',
        'Selasie' => 'He has heard.',
        'Yayra' => 'Blessing.',
        'Mawuli' => 'God is there.',
        'Eli' => 'He is there.',
        'Dzifa' => 'He hears it.',
        'Edem' => 'He has redeemed me.',
        'Elinam' => 'He is there for me.',
        'Sena' => 'He has given.',
        'Essene' => 'He has heard me.',
        'Dzigbordi' => 'Patience.',
        'Esaaba' => 'Prosperity.',
    ];

    foreach ($meanings as $knownName => $meaning) {
        if (strcasecmp($name, $knownName) === 0) {
            return $meaning;
        }
    }

    return null;
}
