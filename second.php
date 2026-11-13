<?php
declare(strict_types=1);

require_once __DIR__ . '/name_lookup.php';

$submittedName = '';
$meaning = null;
$notFound = false;
$invalidInput = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawName = $_POST['input'] ?? '';

    if (!is_string($rawName)) {
        $invalidInput = true;
    } else {
        $submittedName = trim($rawName);

        if ($submittedName === '' || !preg_match('/\A[A-Za-z]{3,20}\z/', $submittedName)) {
            $invalidInput = true;
        } else {
            $meaning = lookupEweNameMeaning($submittedName);
            $notFound = $meaning === null;
        }
    }
}

function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ewe Name Dictionary</title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="inputs.css">
</head>
<body>
<section id="wrapper">
    <header>
        <h1>Welcome to my Ewe Dictionary</h1>
        <h2>A small project celebrating Ewe names and their meanings</h2>
    </header>

    <main>
        <form action="second.php" method="post">
            <fieldset>
                <legend>Find the meaning of an Ewe name</legend>

                <label for="name-input">Name</label>
                <input
                    id="name-input"
                    type="text"
                    name="input"
                    maxlength="20"
                    minlength="3"
                    pattern="[A-Za-z]{3,20}"
                    title="Use 3 to 20 English letters only."
                    placeholder="Type an Ewe name"
                    value="<?= escapeHtml($submittedName) ?>"
                    required
                >
                <button type="submit">Search</button>

                <?php if ($invalidInput): ?>
                    <p class="message error" role="alert">Enter a name containing 3 to 20 letters only.</p>
                <?php elseif ($notFound): ?>
                    <p class="message" role="status">No meaning is currently listed for “<?= escapeHtml($submittedName) ?>”.</p>
                <?php elseif ($meaning !== null): ?>
                    <p class="message" role="status">
                        Meaning listed for <strong><?= escapeHtml($submittedName) ?></strong>:
                        <?= escapeHtml($meaning) ?>
                    </p>
                <?php endif; ?>
            </fieldset>
        </form>
    </main>

    <footer>Copyright &copy; 2026</footer>
</section>
</body>
</html>
