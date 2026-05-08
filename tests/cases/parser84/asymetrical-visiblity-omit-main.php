<?php

/*
If a property is public, then the main visibility may be omitted. That is, public private(set) and private(set) will have the same result.
https://www.php.net/manual/en/language.oop5.visibility.php
*/

class Book
{
    public function __construct(
        private(set) string $title,
        protected(set) string $author,
        public string $bar,
    ) {}
}
