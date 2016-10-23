<?php

/**
 * This is a file with common functions for lecture.
 */

const STORAGE_FILENAME = 'comments.txt';

/**
 * Redirects users to a URL.
 *
 * @param string $url URL for redirect.
 *
 * @return void
 */
function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

/**
 * Prepares array of data for storage.
 *
 * @param array $data Data array.
 *
 * @return string|null
 */
function prepareDataForStorage(array $data)
{
    if (empty($data)) {
        return null;
    }

    return serialize($data);
}

/**
 * Saved incomming data into file.
 *
 * @param string $data Data to save.
 *
 * @return boolean
 */
function saveToFile($data)
{
    $handle = fopen(STORAGE_FILENAME, 'a');
    $result = fwrite($handle, $data . PHP_EOL);
    fclose($handle);
    return !empty($result);
}

/**
 * Checks if storage file can be used.
 *
 * @return boolean
 */
function isStorageExists()
{
    return file_exists(STORAGE_FILENAME)
    && is_readable(STORAGE_FILENAME);
}

/**
 * Returns a list of comments from storage.
 *
 * @return array
 */
function getComments()
{
    if (!isStorageExists()) {
        return [];
    }

    $comments = file(STORAGE_FILENAME);
    return array_map('unserialize', $comments);
}

/**
 * Prepares comment body for safe storing.
 *
 * @param string $body Body contents.
 *
 * @return string
 */
function processCommentBody($body)
{
    $body = htmlspecialchars($body);
    $body = nl2br($body);
    return str_replace(["\r", "\n"], '', $body);
}

/**
 * Removed bad words from the comment.
 *
 * @param string $comment Comment body.
 *
 * @return string
 */
function prepareOutput($comment)
{
    $badWords = loadBadWords();
    return str_ireplace($badWords, '*цензура*', $comment);
}

/**
 * Returns a set of bad words to replace.
 *
 * @return array
 */
function loadBadWords()
{
    $file = 'badwords.txt';
    $words = file($file);
    array_walk($words, function (&$item) {
        $item = trim($item, "\r\n");
    });
    return array_filter($words);
}

/**
 * Return string for render comments
 *
 * @return string
 */
function renderComments()
{
    $comments = getComments();
    if (!empty($comments)) {
        $result = '<ol>';
        foreach ($comments as &$entry) {
            $result .= "<li>";
            $result .= $entry['date'] . " / ";
            $result .= prepareOutput($entry['username']) . " / ";
            $result .= prepareOutput($entry['email']) . "<br>";
            $result .= prepareOutput($entry['body']);
            $result .= "<br></li><hr>";
        }
        unset($entry);
        $result .= '</ol>';
    } else {
        $result = "<h3>No comments have been added yet.</h3>";
    }
    return $result;
}


/**
 * Return string for render bad words
 *
 * @return string
 */
function renderBadWords()
{
    $linenum = 0;
    $bad_words = loadBadWords();
    $result = "<table class=\"table table-bordered\"><tr>";
    $result .= "<th>#</th>";
    $result .= "<th>Bad word</th>";
    $result .= "<th>Delete word</th>";
    $result .= "</tr>";

    foreach ($bad_words as $bad_word) {
        $linenum++;
        $result .= "<tr><td>$linenum</td></td>";
        $result .= "<td>{$bad_word}</td>";
        $result .= "<td><input type='checkbox' name='check[]' value={$linenum}></td>";
        $result .= "</tr>";
    }
    $result .= "</table>";
    return $result;
}

/**
 * Delete checked bad words
 *
 * @param array $checks Checked words
 * @return array
 */
function deleteBadWords(array $checks)
{
    if (empty($checks))
        exit;
    $bad_words = loadBadWords();
    foreach ($checks as $check) {
        echo $check;
        unset($bad_words[$check - 1]);
    }
    saveBadWords($bad_words, 'w');
}

/**
 * Save bad words to txt file badwords.txt
 *
 * @param array $data Words for storing
 * @param $modificator Adding or overwrite file
 */
function saveBadWords(array $data, $modificator)
{
    $data = implode("\n", $data);
    $file = 'badwords.txt';
    $handle = fopen($file, $modificator);
    fwrite($handle, $data . PHP_EOL);
    fclose($handle);
    redirect('antimat.php');
}