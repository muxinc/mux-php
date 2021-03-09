<?php
    function assert_failure($file, $line, $assertion, $description)
    {
        print("ASSERT FAIL: " . $assertion . " " . $description . " at " . $file . ":" . $line . "\n");
        exit(1);
    }
    assert_options(ASSERT_BAIL,     true);
    assert_options(ASSERT_CALLBACK, 'assert_failure');
?>